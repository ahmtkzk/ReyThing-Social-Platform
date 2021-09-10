<?php
include("settings/db.php");
set_time_limit(10000);
function getHTTPResponseStatusCode($url)
{
    $status = null;
    $headers = @get_headers($url, 1);
    if (is_array($headers)) {
        $status = substr($headers[0], 9);
    }
    return $status;
}

function file_get_contents_curl($url)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    return $response;
}

$sayac = 0;

for ($i = 0; $i <= 10000; $i++) {
    @$JSON = file_get_contents_curl('https://api.themoviedb.org/3/movie/' . $i . '?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR');

    $URL = "https://api.themoviedb.org/3/movie/" . $i . "?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR";
    $Kod = getHTTPResponseStatusCode($URL);

    $Item = json_decode($JSON);

    $Item3 = json_decode($JSON, true);
    if ($Kod != "404 Not Found") {
        $Baslik = $Item->title;
        $OrjBaslik = $Item->original_title;
        $Tarih = $Item->release_date;
        $Ozet = $Item->overview;
        $PosterGiris = $Item->poster_path;
        if ($PosterGiris == "") {
            $Poster = "img/bosafisson.jpg";
        } else {
            $Poster = "https://image.tmdb.org/t/p/w500" . $Item->poster_path;
        }
        $Dil = $Item->original_language;

        @$JSON2 = file_get_contents_curl('https://api.themoviedb.org/3/movie/' . $i . '/credits?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR');

        $URL2 = "https://api.themoviedb.org/3/movie/" . $i . "/credits?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR";
        $Kod2 = getHTTPResponseStatusCode($URL);

        $Item2 = json_decode($JSON2, true);

        $Oyuncular = "";

        for ($j = 0; $j <= 15; $j++) {
            $Oyuncular = $Oyuncular . $Item2['cast'][$j]['name'] . ", ";
            if ($j == 15) {
                $Oyuncular = rtrim($Oyuncular, ", ");
            }
        }

        for ($k = 0; $k < count($Item2['crew']); $k++) {


            if ($Item2['crew'][$k]['job'] == "Director") {
                $Yonetmen = $Item2['crew'][$k]['name'];;
            }

            $Turler = "";

            for ($t = 0; $t < count($Item3['genres']); $t++) {
                $Turler = $Turler . $Item3['genres'][$t]['name'] . ", ";
                if ($t == (count($Item3['genres']) - 1)) {
                    $Turler = rtrim($Turler, ", ");
                }
            }

        }


        @$JSONtags = file_get_contents_curl('https://api.themoviedb.org/3/movie/' . $i . '/keywords?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a');

        $URLtags = 'https://api.themoviedb.org/3/movie/' . $i . '/keywords?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a';
        $KodTags = getHTTPResponseStatusCode($URLtags);
        $Itemtags = json_decode($JSONtags, true);

        $Etiketler = "";

        for ($tagsay = 0; $tagsay < count($Itemtags['keywords']); $tagsay++) {

            $Etiketler = $Etiketler . $Itemtags['keywords'][$tagsay]['name'] . ", ";
            if ($tagsay == (count($Itemtags['keywords']) - 1)) {
                $Etiketler = rtrim($Etiketler, ", ");
            }


        }


        @$JSONEN = file_get_contents_curl('https://api.themoviedb.org/3/movie/' . $i . '?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=en-EN');

        $URLEN = "https://api.themoviedb.org/3/movie/" . $i . "?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=en-EN";
        $KodEN = getHTTPResponseStatusCode($URLEN);
        $ItemEN = json_decode($JSONEN);
        $KisaYazi = $ItemEN->tagline;

        $KontrolSorgu = $Baglanti->prepare("select * from filmler where filmadi = ?");
        $KontrolSorgu->execute([$Baslik]);
        if ($KontrolSorgu->rowCount() == 0) {
            $InsertFilm = $Baglanti->prepare("insert into filmler(filmadi, yonetmen, yil, oyuncular, orjinaladi, ozet, poster, dil, turler, tagline, puan, etiketler)
            values (?,?,?,?,?,?,?,?,?,?,?,?)");
            $InsertFilm->execute([$Baslik, $Yonetmen, $Tarih, $Oyuncular, $OrjBaslik, $Ozet, $Poster, $Dil, $Turler, $KisaYazi, 0, $Etiketler]);
            $sayac++;
        }


    }

    echo $sayac . " kadar film eklendi.";

}
?>