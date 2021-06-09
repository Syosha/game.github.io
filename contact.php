

<?php

if($_POST["submit"]) {
    $recipient="julesnov@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Games </title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

<style>
body{
	color:#343434; 
	margin:0; 
	padding:0; 
	font-family: 'Montserrat', sans-serif;
font-size:15px;
line-height:1.5;
}

header > section{
	background:#FAA307;
	padding:2px


}
h1{
	font-family: 'Caveat', cursive;
	font-size:100px;
	font-weight:400;
	line-height:1;
	margin:0;

}
h2{
	font-family: 'Caveat', cursive;
	margin:0;
	font-size:45px;
	font-weight:400;
}
* {box-sizing: border-box;}


.outer-container{
width:100%;
}


.container{
border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px; 
	width:900px; 
	margin:0 auto;

}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
</head>
<body>
<header>


<section>
<ul style = "list-style:none; word-spacing:40px;"> 
<li style = "display:inline-block;"> <a href = "index.html" target = "_blank;"style = "background-color:#370617; color:white; text-decoration:none; padding:8px; border-radius:4px;font-weight:bold;"> Home </a> </li>
<li style = "display:inline-block;"> <a href = "hobby.html" target = "_blank;"style = "background-color:#370617; color:white; text-decoration:none; padding:8px; border-radius:4px;font-weight:bold;"> Hobby </a></li>
<li style = "display:inline-block;"> <a href = "contact.html" target = "_blank;"style = "background-color:#370617; color:white; text-decoration:none; padding:8px; border-radius:4px;font-weight:bold;"> Contact </a> </li>
</ul>
</section>

<section style = "background-color:#370617; text-align:center;padding:10px; color:white;">
<h2>Have any Game Ideas?</h2>
			
        	
</section>


</header>


<main class="outer-container">
<?=$thankYou ?>

<div class="container">


<center><h2>Contact Us</h2></center>
<center><h3>We'd love to hear from you.</h3></center>

  <form action="contact.php" method="post">
    <label for="fname"> Name:</label>
    <input type="text" id="fname" name="sender" placeholder="Your name..">

    <label for="lname">Email Address:</label>
    <input type="email" id="lname" name="senderemail" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="india">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Message:</label>
    <textarea id="subject" name="message" placeholder="Write something.." required style="height:200px"></textarea>
</label>
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</div>
</main>


<footer style="background:#264653; color:#E9C46A; text-align: center; margin:0;">
		<section style=" margin:0 auto; padding:2px;">
			<h2 style = "text-align:center;font-family: 'Caveat', cursive;font-size:45;">Let's Keep in Touch!</h2>

        <!-- Social media and contact links. -->
        		<ul  style ="list-style:none; text-align:center; word-spacing:10px;">
          			<li style="display:inline-block;"><a href="mailto:yourname@gmail.com" style="color:white;">yourname@gmail.com</a></li>
                 		<li style="display:inline-block;"><a href="#" target="_blank" style="color:white;">Instagram</a></li>
          			
          			<li style="display:inline-block;"><a href="#" target="_blank" style="color:white;">Facebook</a></li>
        		</ul>
		
	</footer>


</body>
</html>
