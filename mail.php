<?php

	if(isset(post['submit'])){

$to = "curiousxe@gmail.com";
$subject = "My subject Testing";
$txt = "Hello world! sss";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



	}
?>