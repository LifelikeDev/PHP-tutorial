<?php

$url = "https://jsonplaceholder.typicode.com/users";

### get data from an api
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);

### get http status code
$info = curl_getinfo($resource, CURLINFO_HTTP_CODE);

### output the result
$result = curl_exec($resource);

### close the data-fetching execution
curl_close($resource);

echo "<pre>";
print_r($info) . "<br>";
print_r($result);
echo "</pre>";


### posting data to an API
$resource = curl_init();
$user = [
    "user" => "John Doe",
    "username" => "jo.doe",
    "email" => "johndoe@email.com"
];

curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ["content-type: application/json"],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
curl_close($resource);

echo "<pre>";
print_r($result);
echo "</pre>";
