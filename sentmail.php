<?php
if (isset($_POST['submit'])){
if(!empty($_POST['email'])){ 
$name = $_POST['name'];
$address = $_POST['address'];
$mail = $_POST['email'];
$number = $_POST['number'];
$location = $_POST['location'];
$training = $_POST['training'];
$date = $_POST['date'];
$details = htmlspecialchars($_POST['details']);
$to = "register@securitytrainings.co.uk";
$subject = "New Inquery from Security training website";
$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
$body = "Here are the details"."<br>"."Name: ".$name."<br>"."Address: ".$address."<br>"."Email: ".$mail."<br>"."Phone Number: ".$number."<br>"."Location: ".$location."<br>"."Training: ".$training."<br>"."Date: ".$date."<br>"."Details: ".$details."<br>"."<br>"."Please Contact him Shortly";
mail ($to,$subject,$body, $headers);
echo "<h1 style='margin-top:100px;text-align:center'>Thank You. Your Information has been sent. <br><a href='index.html'>Go Back Home</h1>";}
}
?>