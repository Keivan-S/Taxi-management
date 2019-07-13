<?php


phpinfo();
function sendPattern($to,$from,$pattern,$data)
{
/*
    $data = [
        'op'=>'pattern',
        'user' => "keivans",
        'pass' => "s9835171",
        'patternCode'=>$pattern,
        'toNum' => $to,
        'fromNum' => $from,
        'inputData' => $data,
        'time' => '',
    ];

    return execute($data);
*/

}





 function execute( $data = null)
{

    $fields_string = "";

    if (!is_null($data)) {

        $fields_string = http_build_query($data);

    }

    $url = "http://37.130.202.188/api/select";



    $handle = curl_init();

    curl_setopt($handle, CURLOPT_URL, $url);

    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);

    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($handle, CURLOPT_POST, true);

    curl_setopt($handle, CURLOPT_POSTFIELDS, $fields_string);


    $response     = curl_exec($handle);

    $code         = curl_getinfo($handle, CURLINFO_HTTP_CODE);

    $curl_errno   = curl_errno($handle);

    $curl_error   = curl_error($handle);


    if ($curl_errno) {

        throw new \Exception($curl_error);

    }

    return $response;


}


$to = "09185222202";
$from = '+985000125475';
$password = "1234";
$pattern=1750;
$data=['password'=>$password,'sign'=>'سازمان مدیریت حمل و نقل شهرداری بیجار'];
$response = sendPattern($to,$from,$pattern,$data);
var_dump($response);
