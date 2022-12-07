
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annyeong Studio | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
        <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    
        <style>
      .body{
        font-family: 'Poppins', sans-serif;
      }
      .bg-home{
        background-image: url('img\home-studio.jpg');
        
      }
      .page-title{
        font-size: 40px;
        margin-top: 50px;
        text-align: justify;
        font-weight: bolder;
      }
      .carousel-inner{
          max-width: 40%;
          max-height: 40%;
          object-fit: fill;
      }
      .pastel-green{
          color:#99edba;
      }
      .pinkk{
          color: #FF8376;
      }
      .dark-gray{
        color: #3D3D3D;
      }
      .annyeongMap{
        float:right;
        width:500px;
        height:500px;
      }
      .accordion{
        font-family: 'Poppins', sans-serif;
      }
      .label-title{
        font-weight: 400;
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 34px;
      }
      .accordion-button{
        color: #FF8376;
      }
      .accordion-button .collapsed{
        background:#ff8376;
      }
      .accordion-collapse .collapsed .show{
        color:#ff8376;
      }
      .sched{
        font-size:20px;
      }
      .items{
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 48px;
      }
    </style>
</head>
<body style="background-color: #fffcf6;">
  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="col-12 col-md-8">
        <a class="navbar-brand" href="#">
          <img src="asset\annyeonglogo.png" class="img-fluid mx-3" style="width: 100px; height: 50px;" alt="Annyeong Studio">
        </a>
      </div>
      <div class="navbar-nav col-6 col-md-4 align-items-center">
        <a class="nav-item nav-link active pinkk" href="#"><h6 class="items pinkk">Home</h6> <span class="sr-only"></span></a>
        <a class="nav-item nav-link pinkk" href="#portfolio"><h6 class="items pinkk">Portfolio</h6></a>
        <a class="nav-item nav-link pinkk" href="#aboutus"><h6 class="items pinkk">About us</h6></a>
        <a class="nav-item nav-link pinkk" href="#faq"><h6 class="items pinkk">FAQ</h6></a>
      </div>
    </nav>
  </section>

  <section id="home" style="background-image: url('asset\home-crop-studio.jpg'); background-size: 100%;">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="row">
        <div class="col">
          <img src="asset\annyeonglogoblack.png" alt="annyeong logo black">
        </div>
        <div class="row">
          <div class="col qoute mt-4">
            <div>
              <h2 class="pinkk" style="font-style: italic;font-weight: 300;font-size: 23px; line-height: 34px;">the first <span class="pastel-green">self-photo studio </span>in Lipa City</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a href="booking.php">
              <button class="btn-lg " style="border: none; background-color:#99edba;">Book Now!</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio">
    <div class="container">
      <h1 class="mb-4 pinkk page-title">Portfolio</h1>
      <center>
        <div id="carouselSlide" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselSlide" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSlide" data-slide-to="1"></li>
            <li data-target="#carouselSlide" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="portfolio\pink\dog.jpg" alt="dog in pink background" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="portfolio\pink\fam.jpg" alt="fam in pink" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="portfolio\pink\solo.jpg" alt="solo pic" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="portfolio\blue\baby.jpg" alt="baby in blue bg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="portfolio\blue\couple.jpg" alt="couple in blue bg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="portfolio\blue\dog.jpg" alt="dog in blue bg" class="d-block w-100">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselSlide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselSlide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="qoute mt-md-5">
          <div>
            <h2 class="dark-gray">simply, it's <span class="pinkk">just you </span>and<span class="pastel-green"> the camera.</span></h2>
          </div>
        </div>
      </center>
    </div>
  </section>  

  <section id="aboutus">
    <div class="container mb-5">
      <h2 class="page-title mb-4 pinkk">About Us</h2>
      <img class="aboutpic img-fluid" src="asset\annyeongstudio.jpg">
      <h3 class="label-title pinkk">
        <br>2nd Floor, Astral Hub Fuel Station,<br>
        Ayala Highway, Mataas na Lupa,<br>
        Lipa City, Batangas
      </h3>
      <div class="row">
        <div class="col" style="position: absolute; width: 746px; height: 50px;">
          <h3 class="hours pinkk mb-3" style="font-weight: 600; font-size: 24px;">Business Hours</h3>
          <p class="sched pastel-green">Monday, Tuesday, & Thursday <br>
            <span class="sched pinkk">10AM-7PM</span><br>
            <span class="sched pastel-green">Friday, Saturday, & Sunday</span><br>
            <span class="sched pinkk">10AM-8PM</span><br>
            <span class="sched pastel-green">Wednesday</span><br>
            <span class="sched pinkk">Closed</span>
          </p>
        </div>
        <div class="col">
          <img class="annyeongMap img-fluid" src="asset\map.png">
        </div>
      </div>
    </div>
  </section>

  <section id="faq">
    <div class = "container mt-5 mb-5">
      <h2 class="page-title mb-4 pinkk">Frequently Asked Questions</h2>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header " id="headingOne">
            <button class="accordion-button pinkk" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <p class="label-title">Are fur babies allowed?</p>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>ABSOLUTELY YES!!</strong> As long as they will be wearing diapers, you can take them off during your photo sessions.<br> 
              <br> Note: Any damages (peeing,pooing,biting,damaging of equipments) your pet may do is your responsibility 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <p class="label-title">Do you accept walk-ins?</p>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              We accept walk-in but this will depends if we have available slots within the day. So we encourage you to reserve slots.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <p class="label-title">What will happen if I'm late in my appointment?</p>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              We can wait for maximum of 10 minutes but this will be deducted from your time schedule. If you arrive later than 10 minutes of the schedules time, you will not be accommodated. You may reschedule within the day, ONLY if there is still an available slot for the day.  
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <p class="label-title">How are we going to get our digital copies?</p>
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Via Airdrop or Google Drive
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <p class="label-title">Are there parking lots?</p>
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Yes! There's a plenty of of parking spaces available
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <p class="label-title">Do you have a photographer?</p>
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              We are a self-service photo studio, we dont have an in-house photographer but our studio is equipped with everything you need to capture good moments.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              <p class="label-title">What time should we arrive at the studio?</p>
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              It would be best to arrive at the studio 5-10 minutes before your reserved time slot.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              <p class="label-title">How to book an appointment</p>
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              1. Go to our booking site - www.annyeong.paperform.co<br>
              2. Choose your package, date and time. Enter your details.<br>
              3. We'll send an email confirmation once we have validated your payment.
            </div>
          </div>
        </div>
      </div>
    </div>           
  </section>

  <section class="footer">
    <div class="container">
      <div class="logo d-flex justify-content-center align-items-center">
        <img src="asset\annyeonglogoblack.png" class="img-fluid" style="width: 160px;height: 84px;" alt="annyeong logo black">
      </div>
      <div class="social-media">
        <div class="row justify-content-sm-center">
          <div class="col-md-auto">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          </div>
          <div class="col-md-auto">
            <h6>icon</h6>
          </div>
          <div class="col-md-auto">
            <h6>icon</h6>
          </div>
        </div>
        <div class="inquire text-center pinkk">
          <h5 style="font-style: normal; font-weight: 400; font-size: 24px; text-align: center;">For inquiries/collaborations, email us at:</h5>
          <a href="annyeongselfstudio@gmail.com">
            <h6 class="pinkk" style="font-style: normal; font-weight: 400; font-size: 18px; line-height: 36px; text-align: center;">annyeongselfstudio@gmail.com</h6>
          </a>
        </div>
      </div>
    </div>
  </section>
       
          <!-- JavaScript Bundle with Popper -->
          <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>    
</body>
</html>