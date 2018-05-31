<?php>
$url = "http://127.0.0.1/service2/".$_POST['id'];
$data=array(
		'name' =>$_POST['name'],
		'price' => $_POST['price'],
		'size' => $_POST['size'],
		'description' =>$_POST['description']
);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);
header('Location: http://127.0.0.1/client.php');