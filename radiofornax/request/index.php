<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RadioFornax Mobile</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Set a shorter title for iOS6 devices when saved to home screen -->
    <meta name="apple-mobile-web-app-title" content="Ratchet">

    <!-- Include the compiled Ratchet CSS -->
    <link rel="stylesheet" href="../css/ratchet.min.css">

    <!-- Intro paragraph styles. Delete once you start using this page -->
    <style>
        .welcome {
          line-height: 1.5;
          color: #555;
        }
    </style>

  </head>
  <body>
  <header class="bar bar-nav">
  <a class="icon icon-left-nav pull-left" href="../"></a>
  
  <h1 class="title">Make a Request</h1>
</header>
<div class="content">

<?php 
// Define to make this all one document 
$page = $_GET['page']; 

// Defining the "request" class 
class request {

function request($url) {

$ci = curl_init();
curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ci, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($ci, CURLOPT_URL, 'http://213.73.138.240:8080/Servlet/api.jsp?getvideoid=' + $url);

$datai = curl_exec($ci);
curl_close($ci);
$obji = json_decode($datai);
$videoId = print_r($obji->{'videoid'}."\n", true);

$ci = curl_init();
curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ci, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($ci, CURLOPT_URL, 'http://213.73.138.240:8080/Servlet/api.jsp?requestsong=' + $videoId);

$datai = curl_exec($ci);
curl_close($ci);
$obji = json_decode($datai);
$success = print_r($obji->{'success'}."\n", true);

if ($success == "true") {
echo 'Your song <a href="', $url, '">', $videoId, '</a> has been requested';
}
else {
echo 'Request failed. Try again later';
}
}
}
?>
<div class="card">
        <ul class="table-view">
          <li class="table-view-cell">
<form name="request" action="?page=request" method="POST">
  <input id="url" type="text" placeholder="YouTube URL"/>
  <input type="submit" class="btn btn-positive btn-block" value="Request"/>
</form>
</li></ul></div>

<?php 
error_reporting(E_ERROR | E_PARSE);
if($page == "request"){ 

function request($url) {

$ci = curl_init();
curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ci, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($ci, CURLOPT_URL, "http://213.73.138.240:8080/Servlet/api.jsp?getvideoid=", $url);

$datai = curl_exec($ci);
curl_close($ci);
$obji = json_decode($datai);
$videoId = print_r($obji->{'videoid'}."\n", true);

if ($videoId = ""){
echo "You have requested an invalid video!";
exit;
}

$ci = curl_init();
curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ci, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($ci, CURLOPT_URL, "http://213.73.138.240:8080/Servlet/api.jsp?requestsong=", $videoId);

$datai = curl_exec($ci);
curl_close($ci);
$obji = json_decode($datai);
$success = print_r($obji->{'success'}."\n", true);

if ($success = "true") {
echo "Your song <a href='", $url, "'>", $videoId, "</a> has been requested";
}
else {
echo 'Request failed. Try again later';
}
}

$url = $_POST['url'];  
    if(!url){ 
	echo $tophtml;
          echo("<strong>Error:</strong> You must enter a URL!");
		  exit; 
     }
	request($url);
}
?>

</div>	 
<script src="js/ratchet.min.js"></script>
  </body>
</html>
