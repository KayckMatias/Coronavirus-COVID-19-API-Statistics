<?php

if(isset($_POST['c'])){
$country = $_POST['c'];

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats?country=" . $country,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: covid-19-coronavirus-statistics.p.rapidapi.com",
		"x-rapidapi-key: 8b8ac0ea88msha290a4d501cedf8p16d436jsnf380c8548071"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $translated = json_decode($response, true);
	$message = $translated['message'];
	$lastUpdate = $translated['data']['covid19Stats'][0]['lastUpdate'];	
	if($translated['data']['covid19Stats'][0]['province'] = " "){
		$province = "Todos os Estados";
	}else{
		$province = $translated['data']['covid19Stats'][0]['province'];
	}
	$country = $translated['data']['covid19Stats'][0]['country'];
	$confirmed = $translated['data']['covid19Stats'][0]['confirmed'];
	$deaths = $translated['data']['covid19Stats'][0]['deaths'];
	$recovered = $translated['data']['covid19Stats'][0]['recovered'];

	$data = array("message"=>$message, "lastUpdate"=>$lastUpdate, "province"=>$province, "country"=>$country, "confirmed"=>$confirmed, "deaths"=>$deaths, "recovered"=>$recovered);

	echo json_encode($data);
	
}

}else{
	echo "Não é permitido acesso direto.";
}