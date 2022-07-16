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
        I'm a Website Developer and Designer based in Kosovo.</p>
        
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
        
    </div>    
    <div class="footer1">
        <div class="container">Copyright &copy; 2022 Florian Azemi</div>        
    </div>
    
</body>
</html>