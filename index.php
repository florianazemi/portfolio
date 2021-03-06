<? $servername = "localhost";
   $username = "root";
   $password = "";
    
   $conn = mysqli_connect($servername,
                  $username, $password);
    
   
   if (!$conn) {
     die("Connection failed: "
         . mysqli_connect_error());
   }
   echo "Connected successfully";
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="styles.css">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Florian's Portfolio</title>
   </head>
   <body>
      <div class="header1">
         <h5>Florian Azemi</h5>
         <div class="container1">
            <nav>
               <a href="#">Home</a>
               <a href="#about">About</a>
               <a href="#skills">Skills</a>
               <a href="#">Projects</a>
               <a href="#" class="buttoni">Contact</a>
            </nav>
         </div>
      </div>
      <div class="container">
         <div class="container-child">
            <p class="sm-p">Hello, my name is <b>Florian</b><br>
               I'm a Website Developer and Designer based in Kosovo.
            </p>
         </div>
         <div class="container-child2">
            <img src="imgprofile.jpg" alt="" style="
               width: 400px;">
         </div>
         <div id="about" class="container-child4">
            <p class="bg-p">About Me</p>
         </div>
         <div class="container-child3">
            <p class="sm-p">My background in Web-Design and eye for design perfectly compliments my passion for software development with a focus in efficient and componentized UI development.</p>
         </div>
         <div id="skills" class="container-child6">
            <p class="bg-p">My Skills</p>
         </div>
         <div class="container-child5">
            <?php 
               $dir = "skills/*.png";
               $images = glob( $dir );
               foreach( $images as $image ):
                   echo "
                   <div class='card'>
                   <div class='card-image'>
                       <img src='" . $image . "' alt='" . $image . "'>
                   </div>
               </div>";
               endforeach;
               ?>
         </div>
         <div id="projects" class="container-child6">
            <p class="bg-p">Projects</p>
         </div>
         <div class="container-child5">

         <?php
               include_once 'config.php';
               $row = mysqli_query($conn,"SELECT * FROM projects;");
               ?>
               
               <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
                
            ?>
            <div class='project-card'>
                <div class='project-card-image'>
                <img src="<?php echo $rows['image']; ?>" alt="">
               </div>
               <div class='project-card-title'>
                <p><?php echo $rows['title']; ?></p>
               </div>
               
               <div class='project-card-language'>
                <p>Made with - <b> <?php echo $rows['p_language']; ?></b></p>
               </div>
               <div class='project-card-date'>
                <p><?php echo $rows['year']; ?></p>
               </div>
            </div>
        
                
              
            <?php } ?>

            
            
            
         </div>
         <div id="Contact" class="container-child6">
            <p class="bg-p">Contact</p>
         </div>

         <div class="container-child5">
         <div class='card'>
                   <div class='card-image'>
                    <a href="https://instagram.com/flhorian"><img  src='icons/instagram.png' alt=''></a>
                    
                       
                   </div>
                   
               </div>
               <div class='card'>
                   <div class='card-image'>
                    <a href="https://www.facebook.com/florian.azemi.0"><img src='icons/facebook.png' alt=''></a>
                       
                   </div>
                   
               </div>
               <div class='card'>
                   <div class='card-image'>
                    <a href="https://www.linkedin.com/in/florian-azemi-82860b161/"><img src='icons/linkedin.png' alt=''></a>
                       
                   </div>
                   
               </div>
                
         </div>
      </div>
      <div  class="container-child7">
            <p class="bg-p">Copyright &copy; 2022 Florian Azemi</p>
      </div>
      
   </body>
</html>