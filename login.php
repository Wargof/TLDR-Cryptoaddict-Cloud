<?php

$dbuser = 'vjit7440_tldr';
$dbpass = "kNJ1taSE4a4h";

$db = new mysqli('localhost', 'vjit7440_tldr', 'kNJ1taSE4a4h', 'vjit7440_tldr');


$mail = $_POST['email'];

try{
    $db->query("INSERT INTO `users`(`id`, `mail`) VALUES (' ','$mail')");
} catch(Exception $e){
    //print_r($e);
}


try{
    $db->close();
} catch(Exception $e){
    //print_r($e);
}


?>

<script type="text/javascript">window.location.href("https://tldr.tech")</script>