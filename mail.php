<?php 

if(isset($_POST['submit'])){
	$location = $_POST['location'];
	$industry = $_POST['industry'];
	$kpi = $_POST['kpi'];
	$cname = $_POST['company_name'];
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$emailadress = $_POST['email_address'];
	$phone = $_POST['phone_number'];



	$message = "You Rucieved an eail address!";
	$message = "Company Name: " . $cname . "/n" ;
	$message .= "FirstName: " . $fname . "/n";
	$message .= "Last Name: " . $lname . "/n";
	$message .= "Email: " . $emailadress . "/n";
	$message .= "Phone: " . $phone . "/n";
	$message .= "Location: " . $location . "/n";
	$message .= "Industry: " . $industry . "/n";
	$message .= "KPI: " . $kpi . "/n";


	if(empty($cname) || empty($fname) || empty($lname) || empty($emailadress))
	{
		header('location:contact.php?error');
	}
	else
		$to = "umair.rehman305@gmail.com";

		if (mail($to, "VIDAN", $message))
		{
			header ("location:index.php?success");
		}
}
?>