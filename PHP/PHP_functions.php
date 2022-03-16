<!--Raza Khan (1933191) 2021/02/19 // Created php file-->
<!--Raza Khan (1933191) 2021/02/20 // crated navigation options and created few classes related to homepage-->
<!--Raza Khan (1933191) 2021/02/21 // adjusted pictures and created array -->
<!--Raza Khan (1933191) 2021/02/22 // border put in place mustang picture bigger-->



<?php

// css link
define ("FOLDER_CSS","CSS/");
define("FILE_CSS", FOLDER_CSS . "cssstyling.css");

//all images
define("FOLDER_IMAGES", "IMAGES/");
//logo
define("FILE_GURU", FOLDER_IMAGES . "guru.png");
//homepage pic
define("FILE_DEALER", FOLDER_IMAGES . "cars.svg");

//call cars
define("FILE_HELLCAT", FOLDER_IMAGES . "hellcat.jpg");
define("FILE_370Z", FOLDER_IMAGES . "370z.jpg");
define("FILE_AMG", FOLDER_IMAGES . "amg.jpg");
define("FILE_MUSTANG", FOLDER_IMAGES . "mustang.jpg");
define("FILE_TYPER", FOLDER_IMAGES . "typer.jpg");



// navigation header for my page
function createPageHeader($title)
{
    ?><!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' type="text/css" href="<?php echo FILE_CSS?>">
        <meta charset="UTF-8">
        <title><?php echo $title ?> </title>
    </head>
    <body class='websitebackground'>
      
        <div  class='navigationsection'>
            <div class='naviwriting'>
           <p class='logowriting'>GURU KNOWS</p>
            <p class='navimotto'>Trusted Car Dealer</p>
            </div>
            <div class='nav'>
                
                    <a href="index.php">HomePage</a>
                    <a href="index.php">BuyingPage</a>
                    <a href="index.php">OrderPage</a>
                
            </div>
        </div>

        
        
        
       
    
    <?php
}


// the information regarding dealer
function createHomePageBody()
{
    ?>
    
        <div class='whoWeAre'>
            <p class='titleOfHomepage'>Who we are?</p>
            <p class='explanationOfHomepage'>We are a group of individuals who want to make buying cars<br> 
                easier for anyone who does not have knowledge of cars.<p>
   
        </div>

    <?php
}

function createHomePageAds()
{
    ?>
     <div class='carAds'
          <p> The biggest Inventory of Cars in NORTH AMERICA! </p>
     </div>
    
    
    <?php
}



// the footer copy right with my name
function createPageFooter()
{
    ?>
        
        </body>
        <footer><br><br> Copyright© Raza khan <?php echo date("Y"); ?></footer>
        </html>
    <?php
}

  
 //function for logo on navigation       
 function websiteLogo()
{
    ?>
        <img class='guruImage' style='position:absolute;top:30px;'src= "<?php echo FILE_GURU; ?>" alt="broken"/>
    <?php
}

// dealer ship homepage picture center
 function navigationBackground()
{
    ?>
        <img class='dealerImage'src= "<?php echo FILE_DEALER; ?>" alt="broken"/>
    <?php
}

function advertiseFiveCars()
{
        
    ?><p class='adTitle'> OUR HOTTTESSTTT CARS OF THE YEAR!!!!</p><?php
        $advertise = array(FILE_HELLCAT,FILE_370Z,FILE_AMG,FILE_TYPER, FILE_MUSTANG);
        shuffle($advertise);
        
        
        
        if ($advertise[0] == FILE_MUSTANG)
        {
             ?>
        <a href="https://www.caranddriver.com/news/"><img src="<?php echo $advertise[0] ?>" class="mustang" /></a>
             
            <?php
           
      
        }
        else
        {
            ?> <a href="https://www.google.com/"><img src="<?php echo $advertise[0] ?>" class="img-size"/></a>
            <?php
        }
            
       
        
        
        
       

        
        
        
        
        
    
}



