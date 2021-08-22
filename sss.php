<?php
set_time_limit(1000);
function getHTTPResponseStatusCode($url)
{
    $status = null;

    $headers = @get_headers($url, 1);
    if (is_array($headers)) {
        $status = substr($headers[0], 9);
    }

    return $status;
}
$sayac = 0;
for($i = 0; $i < 1000; $i++){
    @$json = file_get_contents("https://api.themoviedb.org/3/movie/". $i ."?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR");

    $url = "https://api.themoviedb.org/3/movie/". $i ."?api_key=f121c3aff0efc3d4fd2b9d3edc8e221a&language=tr-TR";
    $statusCode = getHTTPResponseStatusCode($url);

    $data = json_decode($json);
    if ($statusCode != "404 Not Found"){
        echo $sayac . "---" .  $data->title . " --- " . $data->release_date . " --- " . $data->poster_path . "<br>";
        $sayac++;
    }

}

?>