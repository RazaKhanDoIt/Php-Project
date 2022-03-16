<!-- Raza Khan (1933191) 2021/02/19 // Worked on homepage, starting from scratch -->
<!-- Raza Khan (1933191) 2021/02/20 // linked php file and created few functions for homepage -->


<?php






        #declare constants
        define("FOLDER_PHP_FUNCTIONS","PHP/");
        define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."PHP_functions.php");
        
        
        #import the PHP commin function file
        require_once(FILE_PHP_FUNCTIONS);
        
        
        
      createPageHeader("Homepage");
      
      websiteLogo();
      navigationBackground();
      createHomePageBody();
      
      advertiseFiveCars();
       
       
     createPageFooter();
       
       
       
 
  