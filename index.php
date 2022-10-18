<?php include('server.php');
if(empty($_SESSION['username'])){
header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<title>Transmogrify Guide</title>
<!-- google fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<script src="https://kit.fontawesome.com/e5c73e334e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
    @keyframes slideInRight {
      from {
        transform: translate3d(100%, 0, 0);
        visibility: visible;
      }
    
      to {
        transform: translate3d(0, 0, 0);
      }
    }
    
    button.chatLauncher {
      animation-duration: 0.5s;
      transition-duration: 0.5s;
      position: fixed;
      bottom: 32px;
      right: 32px;
      z-index: 9999;
      border: 4px solid #075cc2;
      padding: 1em;
      border-radius: 8px;
      margin: 0;
      text-decoration: none;
      background-color: #ffffff;
      color: #454545;
      font-family: sans-serif;
      font-size: 1rem;
      cursor: pointer;
      text-align: left;
      -webkit-appearance: none;
      -moz-appearance: none;
      width: 264px;
      opacity: 0;
    }
    button.chatLauncher.open {
      animation-name: slideInRight;
      opacity: 1;
    }
    button.chatLauncher:hover,
    button.chatLauncher:focus {
      background-color: rgb(225, 225, 254);
      border: 4px solid #0053ba;
    }
    button.chatLauncher:focus {
      outline: 1px solid #0053ba;
      outline-offset: -4px;
    }
</style>
<section id="title">
    <div class="container-fluid">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">Transmogrify Guide <i class="fas fa-fire-alt"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-         controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#features">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pricing">Our Plans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cta">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#diet">Diet Recipes</a>
            </li>
        </ul>
     </div>
    </nav>
    <!-- Title -->
    <div class="row">
      <div class="col-lg-6">
      <h1 class="typing">All progess takes outside the comfort zone.</h1>
      <button type="button" class="dn btn btn-dark btn-lg download-button"><i class="fab fa-google-play"></i>Download</button>
      <button type="button" class="dn btn btn-light btn-lg download-button"><i class="fab fa-apple"></i>Download</button>
    </div>
    <div class="col-lg-6">
    </div>
  </div>
  </div>
  </section>
  <!-- Features -->
  <section id="features">
    <div class="row">
      <div class="col-lg-4">
        <i class="icon fas fa-check fa-4x"></i>
            <h3>Organic Diet</h3>
            <p class="fea">So easy to prepare, even your a busy person.</p>
    </div>
    <div class="col-lg-4">
      <i class="icon fas fa-heart fa-4x"></i>
          <h3>Safe Workouts</h3>
          <p class="fea">We have all the equipments and the greatest coaches.</p>
    </div>
    <div class="col-lg-4">
    <i class="icon fas fa-bullseye fa-4x"></i>
    <h3>Guaranteed Results</h3>
    <p class="fea">Find your new self or your money back.</p>
    </div>
   </div>
  </section>
  <!-- Testimonials -->
  <section id="testimonials">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>I no longer have to be worried about my food intake, because Transmogrify Guide has made my life simpler           providing a guide and good recipes.</h2>
          <img class="test-pic" src="img\3.jpg" alt="dog-profile">
          <em>Pebbles, New York</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">As am a working woman, it was difficult for me to prepare a meal everyday, but with           Transmogrify Guide, I've found the secret to a healthy life. It provides me a perfect advice and easy to go           foods.</h2>
           <img class="testimonial-image" src="img\4.jpg" alt="lady-profile">
           <em>Beverly, Illinois</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">There was a time when I used to eat so much of junk and when I realised I needed a           lifestyle change, Transmogrify Guide has helped me a lot.</h2>
           <img class="testimonial-image" src="img\6.jpg" alt="lady-profile">
           <em>Hyderabad, India</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Transmogrify Guide has helped me change my food habits and I would like to highly           recommend this to everyone</h2>
           <img class="testimonial-image" src="img\5.jpg" alt="lady-profile">
           <em>Posco, LA</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- Press -->
  <section id="press">
    <img class="press-pic" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-pic" src="images/tnw.png" alt="tnw-logo">
    <img class="press-pic" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-pic" src="images/mashable.png" alt="mashable-logo">
  </section>
  <!-- Pricing -->
  <section id="pricing">
    <h2>A Plan for every soul in need</h2>
    <p>Simple and affordable price plans for you.</p>
  <div class="row">
  <div class="pricing-col col-lg-4 col-md-6">
  <div class="card">
    <div class="card-header">
    <h3>Muscle up, Butter cup</h3>
    </div>
    <div class="card-body">
      <h2>Free</h2>
      <p>Basic Workouts</p>
      <p>Diet suggestions</p>
      <p>Regular guidance</p>
      <button class="dn btn btn-lg btn-block btn-outline-dark" type="button">Sign Up</button>
    </div>
  </div>
</div>
<div class="pricing-col col-lg-4 col-md-6">
  <div class="card">
    <div class="card-header">
      <h3>Premium</h3>
    </div>
    <div class="card-body">
      <h2>$ 49 / mo</h2>
      <p>HIIT Workouts</p>
      <p>Meet a Nutrionist</p>
      <p>Grocery List</p>
      <p>1-1 Interaction</p>
      <button class="dn btn btn-lg btn-block btn-dark" type="button">Sign Up</button>
    </div>
  </div>
</div>
<div class="pricing-col col-lg-4">
  <div class="card">
    <div class="card-header">
    <h3>Platinum</h3>
    </div>
    <div class="card-body">
          <h2>$99 / mo</h2>
          <p>Protien based Meal</p>
          <p>Dietician</p>
          <p>First 2 months free</p>
          <p>HIIT Workouts</p>
          <button class="dn btn btn-lg btn-block btn-dark" type="button">Sign Up</button>
    </div>
    </div>
  </div>
</div>
  </section>
  <section id="diet">
  <h2>Diet Recipes</h2>
  <div class="container">
      <div class="box">
          <div class="imgBx">
              <img src="img\8.jpg" alt="" width="450px" height="300px">
          </div>
          <div class="contentBx">
              <h2>BBQ Protein Bowl</h2>
              <p>595 kcal kcal <br>14g
  Protein <br>
  35g
  Carbs <br>
  17g
  Fats <br>
  17g
  Fibre</p>
  <p>Ingredients:<br> Fajita Veggies, Barbeque Proteins,Millets, Lettuce, Spicy Broccoli, Spicy and Tangy Barbeque sauce   </p>
          </div>
      </div>
      <div class="box">
          <div class="imgBx">
              <img src="img\7.jpg" alt="" width="450px" height="300px">
          </div>
          <div class="contentBx">
              <h2>Shroomy Tzatziki</h2>
              <p>432 kcal <br>14g
  Protein <br>
  8g
  Carbs <br>
  8g
  Fats <br>
  8g
  Fibre</p>
  <p>Ingredients:<br> Fajita Veggies, Organic Brown Rice, Mushrooms, Lettuce, Spicy Broccoli, chickpeas spiced, Tzatziki   sauce </p>
          </div>
      </div>


      <div class="box">
          <div class="imgBx">
              <img src="img\9.webp" alt="" width="450px" height="300px">
          </div>
          <div class="contentBx">
              <h2>Chimichurri Zoodles</h2>
              <p>
  524 kcal <br>17g
  Protein <br>
  15g
  Carbs <br>
  15g
  Fats <br>
  15g
  Fibre</p>
  <p>Ingredients:<br> Fajita Veggies, Arugula, Candy Tomatoes, Caramel Onions, Chimichurri Sauce, Feta cheese,   Zoodles,spiced chickpeas. </p>
          </div>
      </div>
  </div>
  </section>
  <!-- Call to Action -->
  <section id="cta">

    <h3>Start your healthy hustle today</h3>
    <button type="button" class="dn cta-button btn btn-dark btn-lg download-button"><i class="fab fa-google-play"></i>Download</button>
    <button type="button" class="dn cta-button btn btn-light btn-lg download-button"><i class="fab fa-apple"></i>Download</button><br>
    <a href="mailto:vaishnavi.chennu@gmail.com" class="icons"><i class="fa fa-envelope" aria-hidden="true"></i></a>
    <a href="mailto:vaishnavi.chennu@gmail.com" class="icons"><i class="fa fa-instagram" aria-hidden="true"></i>
</a>
    <a href="mailto:vaishnavi.chennu@gmail.com" class="icons"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    <a href="tel:8501072588" class="icons"><i class="fa fa-phone" aria-hidden="true"></i></a>
    <a href="mailto:vaishnavi.chennu@gmail.com" class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></a>
  </section>
  <!-- Footer -->
  <footer id="footer">
    <p class="copyright-text">©️ Copyright 2021 Transmogrify Guide</p>
  </footer>
  <script type="text/javascript" src="app.js"></script>
  <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".box"), {
          max: 25,
          speed: 400
      });

  </script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  cursor: pointer;
  opacity: 0.7;

}
/* The popup chat - hidden by default */
.chat-popup {
  display: none;
}
/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}
/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}
/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>
<style>
  #title {
    background-image: url('img/2.jpg');
    background-repeat: no-repeat;
    opacity:1;
    background-size: cover;
  }
</style>
<button class="open-button" onclick="openForm()">COMMENT SECTION</button>
<div class="chat-popup" id="myForm">
  <form action="mailto:srimomitha@gmail.com" method="post" enctype="text/plain" class="form-container">
    <h4>Comment here</h4>
    <label for="comment">Message</label>
    <textarea placeholder="Type message.." name="comment" required></textarea>
    <button type="submit" name="send" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<button type="button" class="chatLauncher" style="display:none;">
  <div>
    <strong>Have questions?</strong> Chat with our Virtual Assistant.
  </div>
</button>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "9170a879-cff2-43ea-8d0d-8515933bedd8", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "417a5af3-0839-42f8-a29c-a1291d5ce3f0", // The ID of your service instance.
      
    showLauncher: false,
    onLoad: function(instance) {
      // Select the button element from the page.
      const button = document.querySelector('.chatLauncher');
  
      // Add the event listener to open your web chat.
      button.addEventListener('click', function clickListener() {
        instance.openWindow();
      });
  
      // Render the web chat. Nothing appears on the page, because the launcher is
      // hidden and the web chat window is closed by default.
      instance.render().then(function() {
        // Now that web chat has been rendered (but is still closed), we make the
        // custom launcher button visible.
        button.style.display = 'block';
        button.classList.add('open');
      });
    }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
<?php if (isset($_SESSION["username"])): ?>
<center><p>Thank you <strong><?php echo $_SESSION['username']; ?></strong> for visiting. Do visit again.</p></center>
<center><p><a href="index.php?logout='1'" style="color: red;">Logout</a></p></center>
<?php endif ?>
</body>
</html>