<?php

$crl = curl_init();

curl_setopt_array($crl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => "https://opendata.aemet.es/opendata/api/valores/climatologicos/inventarioestaciones/todasestaciones/?api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJqa3NkZ2hrc2RnQHlvcG1haWwuY29tIiwianRpIjoiNTQxOTllMTEtNTI3MS00YTM4LWIxYWYtYzQ2YjVjZGU0YjBmIiwiaXNzIjoiQUVNRVQiLCJpYXQiOjE1ODAzODUyNzEsInVzZXJJZCI6IjU0MTk5ZTExLTUyNzEtNGEzOC1iMWFmLWM0NmI1Y2RlNGIwZiIsInJvbGUiOiIifQ.irqKJI2rpUmfVLzB9ymjLIWojjdWaMrsHrYGKA-n2Vs",
    CURLOPT_ENCODING =>"",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    )
));

curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($crl);
$err = curl_error($crl);

if($err){
    echo 'cURL Error #:'.$err;
}else{
    var_dump($response);
    $obj = json_decode($response);
    
    curl_setopt_array($crl, array(
        CURLOPT_URL => $obj->datos,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING =>"",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    )
));
    
    $response = curl_exec($crl);
    $err = curl_error($crl);
    
    if(!$err){
        $datos = json_decode(utf8_encode($response),true);
        foreach ($datos as $dato) {
            print_r($dato);
            print "<br />";
            
        }
    }
    curl_close($crl);
}
?>