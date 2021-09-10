<?php
include("settings/db.php");
set_time_limit(100000);
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
    @$JSON = file_get_contents_curl('https://api.themoviedb.org/3/tv/' . $i . '?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR');

    $URL = 'https://api.themoviedb.org/3/tv/' . $i . '?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR';
    $Kod = getHTTPResponseStatusCode($URL);

    $Item = json_decode($JSON);

    $Item3 = json_decode($JSON, true);
    if ($Kod != "404 Not Found") {
        $Baslik = $Item->name;
        $OrjBaslik = $Item->original_name;
        $Tarih = $Item->first_air_date;
        $Ozet = $Item->overview;
        $SezonSayisi = $Item->last_episode_to_air->season_number;
        $PosterGiris = $Item->poster_path;
        $Dil = $Item->original_language;
        if ($PosterGiris == "") {
            $Poster = "img/bosafisson.jpg";
        } else {
            $Poster = "https://image.tmdb.org/t/p/w500" . $Item->poster_path;
        }
        @$JSON2 = file_get_contents_curl('https://api.themoviedb.org/3/tv/' . $i . '/credits?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR');

        $URL2 = "https://api.themoviedb.org/3/tv/" . $i . "/credits?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR";
        $Kod2 = getHTTPResponseStatusCode($URL);

        $Item2 = json_decode($JSON2, true);

        $Oyuncular = "";

        for ($j = 0; $j <= 15; $j++) {
            @$Oyuncular = $Oyuncular . $Item2['cast'][$j]['name'] . ", ";
            if ($j == 15) {
                $Oyuncular = rtrim($Oyuncular, ", ");
            }
        }

        $Turler = "";

        for ($t = 0; $t < count($Item3['genres']); $t++) {
            $Turler = $Turler . $Item3['genres'][$t]['name'] . ", ";
            if ($t == (count($Item3['genres']) - 1)) {
                $Turler = rtrim($Turler, ", ");
            }
        }

    }

    $KontrolSorgu = $Baglanti->prepare("select * from diziler where diziadi = ?");
    $KontrolSorgu->execute([$Baslik]);
    if ($KontrolSorgu->rowCount() == 0) {
        $InsertFilm = $Baglanti->prepare("insert into diziler(diziadi, yil, oyuncular, orjinaladi, ozet, poster, dil, turler, sezon)
            values (?,?,?,?,?,?,?,?,?)");
        $InsertFilm->execute([$Baslik, $Tarih, $Oyuncular, $OrjBaslik, $Ozet, $Poster, $Dil, $Turler, $SezonSayisi]);
        $sayac++;
    }


}

echo $sayac;

?>