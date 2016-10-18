<?php

include('inc/Services/Twilio.php');

function index(){
   $response = new Services_Twilio_Twiml();
   $response->sms("Enter your city");
   echo $response;
}
function newyork(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Clubs available : PHP Club , Java Club , Phython CLub , Dance , Violin "); 
    echo $response;
}
function cleveland(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Clubs available : english club , learning C , Arts , Painting"); 
    echo $response;
}
function virginia(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Clubs available : PHP Club , Java Club , Phython CLub , Dance , Violin, foot ball , table tennis"); 
    echo $response;
}
function boston(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Clubs Available : science  club , learning C++ , Arts , Painting , drawing"); 
    echo $response;
}
function newjersey(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Clubs available : sofware devolpment , guitar , sports , social sciences "); 
    echo $response;
}

$body = $_REQUEST['Body'];  

$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 

switch ($result) { 
    case 'newyork': 
        newyork(); 
        break; 
    case 'cleveland': 
        clevealand(); 
        break; 
    case 'newjersey': 
        newjersey(); 
        break; 
case 'virginia': 
        virginia(); 
        break; 
    case 'boston': 
        boston(); 
        break;
    default: 
        index();
}