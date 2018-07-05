<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  	<meta name="author" content="George Caloian">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Around the world | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
            $(document).ready(function(){

                var mouseIn= 0;

                $(".container").on('mouseenter mouseleave', function(event){
                	var time = new Date();

                	if(event.type === 'mouseenter')
                  {
                		mouseIn = time.getTime();
                	}
                	else
                  {
                		var mouseOn = time.getTime() - mouseIn;
	                	if(mouseOn > 3000){
	                		console.log("Userul a stat cel putin 3 secunde pe zona de la coodronatele X: " + event.pageX + ", Y: " + event.pageY );
	                	}
	                }
                });
            });
	</script>
  </head>
  <body>
    <header>
      <div class="container">
        <div id="brand">
          <h1><span class="highlight" >Around the world</span> travel agency</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="destinations.html">Destinations</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>


    <section id="dropmenu">
      <div class="dropdown">
        <button class="dropbtn">Destinations</button>
        <div class="dropdown-content">
          <a href="#">City-Break</a>
          <a href="#">Summer 2018</a>
          <a href="#">Ski 2018-2019</a>
          <?php
          if(isset($_SESSION['username']) && $_SESSION['username'] == 'George')
          {
            ?>
            <a href="#">Admin panel</a>
            <?php
			    }
			    ?>
        </div>
      </div>
    </section>

    <section id="showcase">
      <div class="container">
        <h2>Connecting people and places</h2>
        <p>Best prices and a huge variety of destinations</p>
      </div>
    </section>



    <section id="newsletter">
      <div class="container">
        <h2>Subscribe to our newsletter</h2>
        <form>
          <input type="email" placeholder="enter your email">
          <button type="submit" class="b1">Subscribe</button>
        </form>
      </div>
    </section>

    <section id="video-left">
      <div class="containter">
          <iframe width="854" height="480" src="https://www.youtube.com/embed/wCcUEkEDlEQ"  allowfullscreen></iframe>
      </div>
    </section>
    <section id="video-right">
      <div class="containter">
          <iframe width="854" height="480" src="https://www.youtube.com/embed/Eb1rlr9Lu5E" allowfullscreen></iframe>
      </div>
    </section>

    <section id="boxes">

      <div class="container">
        <div class="box">
          <img src="./img/ski.jpg" alt="alt" style="width:100%;">
          <h3>SKI Resorts Offer - Winter 2018</h3>
          <p>The best ski holiday bargains for this winter – why now's the time to book</p>
        </div>
        <div class="box">
          <img src="./img/beach.png" alt="alt" style="width:100%;">
          <h3>Seaside Resorts Offer - Summer 2018</h3>
          <p>Awaken To A Different World.</p>
        </div>
      </div>
    </section>

    <section id="upload">

      <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>
    </section>

    <footer>
      <p>Around the world travel agency, Copyright &copy; 2018</p>
    </footer>

  </body>
</html>
