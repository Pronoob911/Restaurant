<?php


require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_nBSyHQYSsiiTcTLZi3ECrGUE00wMs2aSjk');

//sanitize post array

$POST=filter_var_array($_POST, FILTER_SANITIZE_STRING);

$firstName=$POST['firstName'];
$lastName=$POST['lastName'];
$email=$POST['email'];
$token=$POST['stripeToken'];

//create customer in stripe

$customer= \Stripe\Customer::create(array(
	"email"=> $email,
	"source"=> $token

));

//charge customer

$charge=\Stripe\Charge::create(array(
	"amount"=> 5000,
	"currency"=>"usd",
	"description"=> "Sushi",
	"customer"=> $customer->id

	));

header('Location: success.php?tid='.$charge->id);


?>