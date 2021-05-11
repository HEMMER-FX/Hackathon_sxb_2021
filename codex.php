<?php
// initialise une session curl
// wgSaDJcL4rWD4KKLfQOpNVrFelrp3nZMpGJCEZR8

$curl =curl_init('https://api.nasa.gov/techport/api/projects/17792?api_key=wgSaDJcL4rWD4KKLfQOpNVrFelrp3nZMpGJCEZR8&feedtype=json&ver=1.0');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($curl);

if(curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200 ) {
    $data = json_decode($data,true);
    $resultat = ($data['project']['benefits']);
    return $resultat;
} else {
    echo "erreur 404";
}
curl_close($curl);
