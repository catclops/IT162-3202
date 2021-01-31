<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Vu Nguyen's IT162 Portal";
        $logo = 'fa-home';
        $PageID = 'Home';
    break;
        
    case 'aia.php':
        $title = "Vu Nguyen's IT162 Portal";
        $logo = 'fa-camera-retro';
        $PageID = 'AIA';
    break;  
        
    case 'big.php':
        $title = "Vu Nguyen's IT162 Portal";
        $logo = 'fa-space-shuttle';
        $PageID = 'BIG';
    break;
         
    case 'fp.php':
        $title = "Vu Nguyen's IT162 Portal";
        $logo = 'fa-trophy';
        $PageID = 'Final Project';
    break;    
        
    case 'flowchart.php':
        $title = "Vu Nguyen's IT162 Portal";
        $logo = 'fa-tint';
        $PageID = 'Flowchart';
    break;        

    case 'contactme.php':
        $title = "Vu Nguyen's IT162 Portal";
        $logo = 'fa-pencil-square-o';
        $PageID = '';
    break;    
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Home';
}


$nav1['index.php'] = "Home";
$nav1['aia.php'] = "AIA";
$nav1['big.php'] = "BIG";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Vu";

/*
here we're creating a function to generate
links and keep the highlight on the current page

<li><a href="index.php" class="selected">Home</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Vu</a>
</li>

*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";  
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";  
        }
    }
    return $myReturn;
}










?>
