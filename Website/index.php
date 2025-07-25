<?php 
$sn="localhost:3307";
$us="root";
$pa="";
$db="contact_db";

$conn = mysqli_connect($sn, $us, $pa, $db) or die('connection failed');

if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    


    $check=mysqli_query($conn, "SELECT email from contact_form where email='$email'") Or die ('query failed');

    if(mysqli_num_rows($check)>0)
    {
        $message="Entry already exist.";
    }

    else
    {
        $sql=mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');

        if($sql)
        {                
            $message = 'message sent successfully!';
         }
        else
        {
            $message= 'Error sending message'.mysqli_error($conn);
        }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="Frontend/Code-Assets/Style.css">
    <!-- Font Awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
</head>
<body>

<?php

if (!empty($message)) {
    echo '
    <div class="message"23;">
        <span>' . htmlspecialchars($message) . '</span>
        <i class="fa fa-times" onclick="this.parentElement.remove();" style="margin-left: 10px; cursor: pointer;"></i>
    </div>';
}
?>

    <!-- HEader Section -->
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="follow">
            <a href="#" class='fab fa-facebook-f'></a>
            <a href="#" class='fab fa-twitter'></a>
            <a href="#" class='fab fa-instagram'></a>
            <a href="#" class='fab fa-linkedin'></a>
            <a href="#" class='fab fa-github'></a>
        </div>

    </header>
    
    <!-- Home Section -->
    <section class="home" id="home">
        <div class="image">
            <img src="Frontend/Assets/1st-image.avif" alt="">
        </div>
        <div class="content">
            <h3>Hi, I am Ryon Symon</h3>
            <span>Web designer & developer</span>
            <p>Lorem ipsum dolor sit elit.  blanditiis. Et .</p>
            <a href="#about" class="btn">About Me</a>
        </div>
    </section>

    <!-- About Section  -->
    <section class="about" id="about">
        <h1 class="heading"> <span>Biography</span></h1>
        <div class="biography">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero tempora rem maiores iure dolor reiciendis assumenda error ipsum, accusantium voluptas vitae ducimus esse cumque, nostrum voluptatem quo ullam, fugit neque.</p>
            <div class="bio">
                <h3><span>name : </span> Ryon Symon </h3>
                <h3><span>email : </span> RyonSymon@gmail.com </h3>
                <h3><span>address : </span> Texas,US </h3>
                <h3><span>phone : </span> 985624035 </h3>
                <h3><span>age : </span> 24 years</h3>
                <h3><span>experience : </span> 2+ years</h3>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
        <div class="skills">
            <h2 class="heading"> <span>my skills</span> </h2>

            <div class="progress">
                <div class="bar"> <h3><span>HTML</span> <span>95%</span></h3></div>
                <div class="bar"> <h3><span>CSS</span> <span>80%</span></h3></div>
                <div class="bar"> <h3><span>JavaScript</span> <span>75%</span></h3></div>
                <div class="bar"> <h3><span>PHP</span> <span>70%</span></h3></div>
            </div>
    </div>
    <div class="edu-exp">
        <h1 class="heading"><span>education & experience</span></h1>
        <div class="row">
            <div class="box-container">
                <h3 class="title">education</h3>
                <div class="box">
                    <span>(2019 - 2020)</span>
                    <h3>web designer</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
                <div class="box">
                    <span>(2020 - 2021)</span>
                    <h3>web developer</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
                <div class="box">
                    <span>(2021 - 2022)</span>
                    <h3>graphic designer</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
            </div>
            <div class="box-container">
                <h3 class="title">experience</h3>
                <div class="box">
                    <span>(2019 - 2020)</span>
                    <h3>front-end developer</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
                <div class="box">
                    <span>(2020 - 2021)</span>
                    <h3>back-end developer</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
                <div class="box">
                    <span>(2021 - 2022)</span>
                    <h3>full-stack eveloper</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Services Section  -->

    <section class="services" id="services">
        <h1 class="heading"><span>services</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-code"></i>
                <h3>Web development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequuntur, est eaque, repudiandae in atque laborum iste perferendis earum nulla asperiores vitae a doloribus dolorem aspernatur ullam itaque repellat incidunt.</p>  
            </div>
            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <h3>graphic design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequuntur, est eaque, repudiandae in atque laborum iste perferendis earum nulla asperiores vitae a doloribus dolorem aspernatur ullam itaque repellat incidunt.</p>  
            </div>
            <div class="box">
                <i class="fab fa-bootstrap"></i>
                <h3>bootstrap</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequuntur, est eaque, repudiandae in atque laborum iste perferendis earum nulla asperiores vitae a doloribus dolorem aspernatur ullam itaque repellat incidunt.</p>  
            </div>
            <div class="box">
                <i class="fas fa-chart-line"></i>
                <h3>seo marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequuntur, est eaque, repudiandae in atque laborum iste perferendis earum nulla asperiores vitae a doloribus dolorem aspernatur ullam itaque repellat incidunt.</p>  
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>digital marketting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequuntur, est eaque, repudiandae in atque laborum iste perferendis earum nulla asperiores vitae a doloribus dolorem aspernatur ullam itaque repellat incidunt.</p>  
            </div>
            <div class="box">
                <i class="fab fa-wordpress"></i>
                <h3>Wordpress</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequuntur, est eaque, repudiandae in atque laborum iste perferendis earum nulla asperiores vitae a doloribus dolorem aspernatur ullam itaque repellat incidunt.</p>  
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <h1 class="heading"><span>portfolio</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="Frontend/Assets/image-toadd.webp" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>
            <div class="box">
                <img src="Frontend/Assets/image-toadd.webp" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>
            <div class="box">
                <img src="Frontend/Assets/image-toadd.webp" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>
            <div class="box">
                <img src="Frontend/Assets/image-toadd.webp" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>
            <div class="box">
                <img src="Frontend/Assets/image-toadd.webp" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>
            <div class="box">
                <img src="Frontend/Assets/image-toadd.webp" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>Contact me</span></h1>
        <form action="" method="post">
            <div class="flex">
                <input type="text" name="name" placeholder="enter your name" class="box" required>
                <input type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input type="text" name="number" placeholder="enter your number" class="box" required>
            <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
        </form>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+123-456-7890</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>contact@me.com</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Birgunj-14,Parsa</p>
            </div>
        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>CodeX</span></div>
    </section>
    <script src="Frontend/Code-Assets/Script.js"></script>
</body>
</html>