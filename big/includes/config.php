<?php
/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Vu Nguyen's IT162 BIG Project";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox";
        $logo = 'fa-cube'; 
        $PageID = 'Flexbox';
    break;  
        
    case 'galleries.php':
        $title = "Galleries";
        $logo = 'fa-camera-retro';
        $PageID = 'Galleries';
    break;
         
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-calendar';
        $PageID = 'Google Calendar';
    break;
        
     case 'map.php':
        $title = "Google Map";
        $logo = 'fa-map-o';
        $PageID = 'Google Map';
    break;
        
     case 'youtube.php':
        $title = "Youtube";
        $logo = 'fa-youtube';
        $PageID = 'Youtube';
    break;          

    case 'siteapp.php':
        $title = "Responsive v.s. Mobile";
        $logo = 'fa-mobile';
        $PageID = 'Responsive v.s. Mobile';
    break;
    
    case 'webcam.php':
        $title = "Webcam";
        $logo = 'fa-eye';
        $PageID = 'Webcam';
    break;  
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Home';
}

















?>
