<?php 
// Common settings 
define('CURRENCY', 'USD'); 
define('CURRENCY_SYMBOL', ' $'); 
//////////////////////////////////////////////////////////////////////////////////////
//Stripe Credentials Configuration
define("STRIPE_SECRET_API_KEY", "sk_test_51MGua6D1uvXwpVUDAuM8jCCnEgulWOPdNMiixTCVVqoNGd0EOUIwUcsiaO9Wox74j5fz70J610cPqi4qVdAZfIq300WkY4jelG");
define("STRIPE_PUBLISHABLE_KEY", "pk_test_51MGua6D1uvXwpVUDsiJUKswkvJLsbuadtllTKG7ewl5VavRy7qNjT2BBxmzn1K1v9RmJE1wi5LW2GIdUGFDedKam00f4wiGamv");

//Sample Product Details
define('AMOUNT', '234');
define('DESCRIPTION', 'Rozait Product'); 
///////////////////////////////////////////////////////////////////////////////////////
/*
 * This is - PayPal and database configuration -  
*/   
// PayPal configuration 
// define('PAYPAL_EMAIL', 'almgromalmgroma@gmail.com'); 
// define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
// define('PAYPAL_RETURN_URL', 'http://localhost:3000/paypal_success.php'); 
// define('PAYPAL_CANCEL_URL', 'http://localhost:3000/paypal_cancel.php'); 
// define('PAYPAL_NOTIFY_URL', 'http://localhost:3000/paypal_ipn.php'); 
// define('PAYPAL_CURRENCY', 'USD'); 

// PayPal Configuration
define('PAYPAL_EMAIL', 'almgromalmgroma@gmail.com'); 
define('PAYPAL_RETURN_URL', 'http://localhost:3000/Paypal/paypal-in-php/return.php'); 
define('PAYPAL_CANCEL_URL', 'http://localhost:3000/Paypal/paypal-in-php/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://localhost:3000/Paypal/paypal-in-php/notify.php'); //https://rozayt.com/Rozayt/Paypal/paypal-in-php/notify.php
    define('PAYPAL_CURRENCY', 'USD'); 

    define('PAYPAL_SANDBOX', TRUE); // TRUE or FALSE 
define('LOCAL_CERTIFICATE', FALSE); // TRUE or FALSE

// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'users_messages'); 

// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX === true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");

// [ b_boy@gmail.com ]
////////////////////////////////////////////////////////////////////////////////////////