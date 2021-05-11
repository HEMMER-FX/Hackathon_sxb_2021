<?php
// initialise une session curl
// wgSaDJcL4rWD4KKLfQOpNVrFelrp3nZMpGJCEZR8

$curl =curl_init('https://api.nasa.gov/planetary/apod?api_key=5b92xVdtVAVaWwmeiOI2qfnvR5UCeqD1H4txcilh&count=10');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($curl);

if(curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200 ) {
    $data = json_decode($data,true);
    //$resultat = ($data);
    $tableau=($data[0]['url']);
    return $tableau;
} else {
    echo "erreur 404";
}
curl_close($curl);
