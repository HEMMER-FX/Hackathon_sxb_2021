<?php
$curl1 =curl_init('https://api.nasa.gov/techport/api/projects/17792?api_key=W6ErCm3HOZZh643ozMrtrcF6PimNW6HQnCedCRqd');
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
$data1 = curl_exec($curl1);
if(curl_getinfo($curl1, CURLINFO_HTTP_CODE) === 200 ) {
    $data1 = json_decode($data1,true);
    $resultat=($data1['project']['title']);
    $resultat=$resultat . ($data1['project']['benefits']);
    $resultat=$resultat . ($data1['project']['description']);


    return $resultat;
}else {
    echo "erreur404";
}
curl_close($curl1);