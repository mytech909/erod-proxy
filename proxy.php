<?php
if (!isset($_GET['player'])) {
    http_response_code(400);
    exit("Missing player parameter.");
}

$player = urlencode($_GET['player']);
$url = "https://erodsmp.wuaze.com/addvote.php?player=$player";

// Use cURL to forward reliably
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

if ($response === false) {
    http_response_code(500);
    exit("Failed to contact erodsmp.wuaze.com");
}

header("Content-Type: text/plain");
echo "Vote forwarded successfully!\n";
echo $response;
?>
