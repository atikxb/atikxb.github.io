<?php
if (isset($_POST['submit'])){
if(!empty($_POST['email'])){ 
$surname = $_POST['surname'];
$forname = $_POST['forname'];
$mail = $_POST['email'];
$number = $_POST['number'];
$dob = $_POST['dob'];
$nino = $_POST['nino'];
$title = $_POST['title'];
$postcode = $_POST['postcode'];
$ethnicity = $_POST['ethnicity'];
$employment = $_POST['employment'];
$ability = $_POST['ability'];
$delivery = $_POST['delivery'];
$nationality = $_POST['nationality'];
$details = htmlspecialchars($_POST['details']);
$id1 = $_POST['id1'];
$validfrom1 = $_POST['validfrom1'];
$validto1 = $_POST['validto1'];
$id2 = $_POST['id2'];
$validfrom2 = $_POST['validfrom2'];
$validto2 = $_POST['validto2'];
$optradio = $_POST['optradio'];
$passport_name = $_FILES['passport']['name'];
$passport_temp_name = $_FILES['passport']['tmp_name'];
move_uploaded_file($passport_temp_name,'images/'.$passport_name);
$photo_name = $_FILES['photo']['name'];
$photo_temp_name = $_FILES['photo']['tmp_name'];
move_uploaded_file($photo_temp_name,'images/'.$photo_name);
$driving_name = $_FILES['driving']['name'];
$driving_temp_name = $_FILES['driving']['tmp_name'];
move_uploaded_file($driving_temp_name,'images/'.$driving_name);
$bank_name = $_FILES['bank']['name'];
$bank_temp_name = $_FILES['bank']['tmp_name'];
move_uploaded_file($bank_temp_name,'images/'.$bank_name);
$language_name = $_FILES['language']['name'];
$language_temp_name = $_FILES['language']['tmp_name'];
move_uploaded_file($language_temp_name,'images/'.$language_name);
$qualification_name = $_FILES['qualification']['name'];
$qualification_temp_name = $_FILES['qualification']['tmp_name'];
move_uploaded_file($qualification_temp_name,'images/'.$qualification_name);
$optradio2 = $_POST['optradio2'];
$optradio3 = $_POST['optradio3'];
$to = "register@securitytrainings.co.uk";
$subject = "New Door Supervisor Training Form";
$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
$body = "<h1 style='font-size: 35px;text-align: center;'>New Person Just filled up Door Supervisor Training Form</h1>"."<table style='width:60%;margin: auto;border-collapse: collapse;text-align: center;font-size: 16px;' border='1'>"."<tr><th style='padding:10px;font-weight: bold;' colspan='2'>Personal Details</th>"."</tr>"."<tr><th style='padding:10px;'>Surname</th>"."<td>".$surname."</td>"."</tr>"."<tr><th style='padding:10px;'>forname</th>"."<td>".$forname."</td>"."</tr>"."<tr><th style='padding:10px;'>Email</th>"."<td>".$mail."</td>"."</tr>"."<tr><th style='padding:10px;'>Phone Number</th>"."<td>".$number."</td>"."</tr>"."<tr><th style='padding:10px;'>Date of Birth</th>"."<td>".$dob."</td>"."</tr>"."<tr><th style='padding:10px;'>NINO</th>"."<td>".$nino."</td>"."</tr>"."<tr><th style='padding:10px;'>Title</th>"."<td>".$title."</td>"."</tr>"."<tr><th style='padding:10px;'>postcode</th>"."<td>".$postcode."</td>"."</tr>"."<tr><th style='padding:10px;'>Ethnicity</th>"."<td>".$ethnicity."</td>"."</tr>"."<tr><th style='padding:10px;'>Employment</th>"."<td>".$employment."</td>"."</tr>"."<tr><th style='padding:10px;'>Ability</th>"."<td>".$ability."</td>"."</tr>"."<tr><th style='padding:10px;'>Delivery Method</th>"."<td>".$delivery."</td>"."</tr>"."<tr><th style='padding:10px;'>Nationality</th>"."<td>".$nationality."</td>"."</tr>"."<tr><th style='padding:10px;'>Details</th>"."<td>".$details."</td>"."</tr>"."<tr><th style='padding:10px;font-weight: bold;' colspan='2'>Identification Documents</th>"."</tr>"."<tr><th style='padding:10px;'>ID 1</th>"."<td>".$id1."</td>"."</tr>"."<tr><th style='padding:10px;'>valid from</th>"."<td>".$validfrom1."</td>"."</tr>"."<tr><th style='padding:10px;'>valid to</th>"."<td>".$validto1."</td>"."</tr>"."<tr><th style='padding:10px;'>ID 2</th>"."<td>".$id2."</td>"."</tr>"."<tr><th style='padding:10px;'>valid from</th>"."<td>".$validfrom2."</td>"."</tr>"."<tr><th style='padding:10px;'>valid to</th>"."<td>".$validto2."</td>"."</tr>"."<tr><th style='padding:10px;'>Initial Assessment for English Language</th>"."<td>".$optradio."</td>"."</tr>"."<tr><th style='padding:10px;'>Passport</th>"."<td>"."<img src='http://securitytrainings.co.uk/images/$passport_name' width=70px height=auto/>"."<br>"."Download Link: "."<a href='http://securitytrainings.co.uk/images/$passport_name'>Click Here</a>"."</td>"."</tr>"."<tr><th style='padding:10px;'>Recent Photo</th>"."<td>"."<img src='http://securitytrainings.co.uk/images/$photo_name' width=70px height=auto/>"."<br>"."Download Link: "."<a href='http://securitytrainings.co.uk/images/$photo_name'>Click Here</a>"."</td>"."</tr>"."<tr><th style='padding:10px;'>Driving License</th>"."<td>"."<img src='http://securitytrainings.co.uk/images/$driving_name' width=70px height=auto/>"."<br>"."Download Link: "."<a href='http://securitytrainings.co.uk/images/$driving_name'>Click Here</a>"."</td>"."</tr>"."<tr><th style='padding:10px;'>Bank statement or bill</th>"."<td>"."<img src='http://securitytrainings.co.uk/images/$bank_name' width=70px height=auto/>"."<br>"."Download Link: "."<a href='http://securitytrainings.co.uk/images/$bank_name'>Click Here</a>"."</td>"."</tr>"."<tr><th style='padding:10px;'>Language Proficiency Certificate</th>"."<td>"."<img src='http://securitytrainings.co.uk/images/$language_name' width=70px height=auto/>"."<br>"."Download Link: "."<a href='http://securitytrainings.co.uk/images/$language_name'>Click Here</a>"."</td>"."</tr>"."<tr><th style='padding:10px;'>Qualification Copies</th>"."<td>"."<img src='http://securitytrainings.co.uk/images/$qualification_name' width=70px height=auto/>"."<br>"."Download Link: "."<a href='http://securitytrainings.co.uk/images/$qualification_name'>Click Here</a>"."</td>"."</tr>"."</tr>"."<tr><th style='padding:10px;font-weight: bold;' colspan='2'>Eligibility Check for SIA badge</th>"."</tr>"."</tr>"."<tr><th style='padding:10px;'>Do you have any unspent criminal convictions?</th>"."<td>".$optradio2."</td>"."</tr>"."<tr><th style='padding:10px;'>Have you spent last five years legally in the UK ?</th>"."<td>".$optradio3."</td>"."</tr>"."</table>"."<h2 style='text-align: center;font-size: 25px;'>Please Download & Print the document as well as attachment</h2>";
mail ($to,$subject,$body, $headers);
echo "<h1 style='margin-top:100px;text-align:center'>Thank You. Your Form  has been Successfully Submitted. <br><a href='index.html'>Go Back Home</h1>";}
}
?>