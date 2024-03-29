<?php 
  include("dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annyeong Studio | Booking Appointment</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
      .body{
        font-family: 'Poppins', sans-serif;
        background-color: #fffcf6;
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
      .header{
        font-family: 'Poppins', sans-serif;
      }
      .card-title{
        font-family: 'Poppins', sans-serif;
      }
      .card-subtitle{
        font-family: 'Poppins', sans-serif;
      }
      .card1.selected {
        background-color: #eee;
        box-shadow: 0 0 0 2px #333;
      }
    </style>
</head>
<body style="background-color: #fffcf6;">
  <section id="booking ml-5">
    <div class="container">
      <img src="asset\annyeonglogo.png" style="width: 180px; height: 100px; margin-top: 10px;">
    </div>
  </section>
  <form method="POST" action="dbcon.php">
  <section class="form">
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <?php
            session_start();
            if(isset($_SESSION['message'])){
              ?>
              <script>
                alert("<?php echo $_SESSION['message']; ?>");
              </script>
              <?php 
              unset($_SESSION['message']);
            }
          ?>
          <div class="signUp">
            <h2 class="book" style="color: #ff8376;text-align:left;font-weight: 600; margin-top: 10px;font-family: 'Poppins', sans-serif;">Booking Appointment</h2>
              
                <div class="form-group w-50">
                  <label for="Input1" class="form-label" style="margin-top: 2px;">Name</label>
                  <input type="text" class="form-control input-normal" id="InputName" placeholder="Name" name="name" style="border: none; border-bottom: 1px solid; width: 30rem;">
                </div>
                <div class="form-group w-50">
                  <label for="Input2" class="form-label" style="margin-top: 2px;">Email</label>
                  <input type="text" class="form-control input-normal" id="InputEmail" aria-describedby="emailHelp" placeholder="Email" name="email" style="border: none; border-bottom: 1px solid; width: 30rem;">
                </div>
                <div class="form-group w-50">
                  <label for="Input3" class="form-label" style="margin-top: 2px;">Phone Number</label>
                  <input type="text" class="form-control input-normal" id="InputPhone" placeholder="Phone Number" name="phone" style="border: none; border-bottom: 1px solid; width: 30rem;">
                </div>
              
          </div>
        </div>
        <div class="col">
          <input type="text" name="datetime" id="datetime" placeholder="Select date and time..."/>
          <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
          <script>
            flatpickr("#datetime", {
                inline:true,
                theme:"airbnb",
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
          </script>
        </div>
      </div>
    </div>
  </section>

  <section class="options ml-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <section id="packages">
            <div class="row">
              <div class="col-12 mt-3 mb-1">
                <h4 class="header">Choose your Package</h4>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card card1">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <input type="radio" class="radio" id="radio1" name="package[]" value="Jeju Package" id="jejupackage"> 
                          <div class="card-body">
                            <h6 class="card-title pinkk" style="font-size: 16px;"><b>jeju package</b></h6>
                            <h6 class="card-subtitle mb-2 pinkk" style="font-family: 'Poppins', sans-serif;">(basic)</h6>
                            <ul style="font-size: 10px;">
                              <li>1-2 pax</li>
                              <li>20 mins photoshoot</li>
                              <li>10 mins photo selection</li>
                              <li>1 backdrop</li>
                              <li>1pc. 4R print</li>
                              <li>2pcs. photo strip print</li>
                              <li>digital copies of printed photos (enhanced)</li>  
                            </ul>
                          </div>
                        <div class="media-body text-right">
                          <h3 class="card-subtitle pastel-green">P750</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col"> 
              <div class="card card1">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                    <input type="radio" class="radio" id="radio2" name="package[]" value="Seoul Package" id="seoulpackage">
                      <div class="card-body">
                        <h6 class="card-title pinkk" style="font-size: 16px;"><b>seoul package</b></h6>
                        <h6 class="card-subtitle mb-2 pinkk" style="font-family: 'Poppins', sans-serif;">(premium)</h6>
                        <ul style="font-size: 10px;">
                          <li>1-5 pax</li>
                          <li>30 mins photoshoot</li>
                          <li>20 mins photo selection</li>
                          <li>3 backdrops (unlimited change)</li>
                          <li>2pcs. 4R print</li>
                          <li>4pcs. photo strip print</li>
                          <li>digital copies of printed photos (enhanced)</li>
                          <li><b>ALL RAW digital photos</b></li> 
                        </ul>
                      </div>
                      <div class="media-body text-right">
                        <h3 class="card-subtitle pastel-green">P1350</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>    
          </section>
        </div>
        <div class="col">
          <section class="backDrops" style="position:relative;left: 20px;">
            <div class="container-fluid">
              <div class="row">
                <div class="mt-3 mb-1">
                  <h4 class="header">Choose the color of your backdrop</h4>
                </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <div class="card" style="height: 250px; width: 250px;">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                            <div class="card-body">
                              <input type="checkbox" id="checkb" name="backdrop[]" value="Pickle Green" >
                              <h6 class="card-title" style="color: #3d3d3d;"><b>pickle green</b></h6>
                              <img src="asset\pickleGreen.png" class="card-img-top" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="height: 250px; width: 250px;">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                            <div class="card-body">
                              <input type="checkbox" id="checkb" name="backdrop[]" value="Passion Red"> 
                              <h6 class="card-title" style="color: #3d3d3d;"><b>passion red</b></h6>
                              <img src="asset\passionRed.jpg" class="card-img-top">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <div class="card" style="height: 250px; width: 250px;">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                            <div class="card-body">
                              <input type="checkbox" id="checkb" name="backdrop[]" value="Cocoa Brown"> 
                              <h6 class="card-title" style="color: #3d3d3d;"><b>cocoa brown</b></h6>
                              <img src="asset\cocoaBrown.jpg" class="card-img-top" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col"> 
                  <div class="card" style="height: 250px; width: 250px;">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                            <div class="card-body">
                              <input type="checkbox" id="checkb" name="backdrop[]" value="Denim Blue"> 
                              <h6 class="card-title" style="color: #3d3d3d;"><b>denim blue</b></h6>
                              <img src="asset\denimBlue.jpg" class="card-img-top">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </section>
        </div>
      </div>
      <section class="AddOns" style="position:relative;top: 10px;left: 10px;">
        <div class="container">
          <section id="minimal">
          <div class="row">
            <div class="col">
              <h4 class="header">Add Ons</h4>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card" style="width: 300px;">
                <div class="mt-1">
                  <input type="checkbox" name="addOns[]" value="Additional Pax" style="position:relative;left:250px;"> 
                </div>
                <div class="card-body">
                  <p class="card-text">Additional pax(below 3 y/o is free) <br> ₱250.00 </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 300px;">
                <div class="mt-1">
                  <input type="checkbox" name="addOns[]" value="Soft Copy(Raw Digital Files)" style="position:relative;left:250px;"> 
                </div>
                <div class="card-body">
                  <p class="card-text">Soft Copy(Raw Digital Files)<br> ₱300.00</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 300px;">
                <div class="mt-1">
                  <input type="checkbox" name="addOns[]" value="Additional Prints" style="position:relative;left:250px;"> 
                </div>
                <div class="card-body">
                  <p class="card-text">Additional Prints <br> ₱70.00</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card" style="width: 300px;">
                <div class="mt-1">
                  <input type="checkbox" name="addOns[]" value="Additional Backdrop" style="position:relative;left:250px;"> 
                </div>
                <div class="card-body" >
                  <p class="card-text">Additional Backdrop<br> ₱100.00</p>
                </div>
              </div>
            </div>
            <div class="col"></div>
            <div class="col">
              <div class="card" style="width: 300px;">
                <div class="mt-1">
                  <input type="checkbox" name="addOns[]" value="Extra Pet" style="position:relative;left:250px;"> 
                </div>
                <div class="card-body">
                  <p class="card-text">Extra Pet (first is free)<br> ₱100.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
  <section class="payment ml-5">
    <div class="container-fluid">
      <section id="acc">
        <div class="row">
          <div class="col mt-3 mb-1">
            <h4 class="header">Please choose Preffered mode of payment</h4>
            <div class="row">
              <div class="col mt-1">
                <img src="asset\gcash no-bg.png" style="height: 300px; width:auto;">
                <div class="mt-1">
                  <h6 style="font-size: 12px; font-family: 'Poppins', sans-serif;">Name: <b>Angelica Mae Villareal</b></h6>
                  <h6 style="font-size: 12px; font-family: 'Poppins', sans-serif;">Number: <b>09759195926</b></h6>
                </div>
              </div>
              <div class="col mt-1">
                <img src="asset\bdo.png" alt="" style="height:70px; width: auto;" >
                <div class="mt-2">
                  <h6 style="font-size: 12px; font-family: 'Poppins', sans-serif;">Account Name: <b>Luigi Christian Publico</b></h6>
                  <h6 style="font-size: 12px; font-family: 'Poppins', sans-serif;">Account Number: <b>000840776705</b></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="row">
              <div class="col mt-3 mb-1">
                <h4 class="header">Please upload the receipt/proof of transaction here</h4>
                  <div class="form-group">
                    <div class="input-group mb-3 w-50">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image-input" name="receipt">
                        <label class="custom-file-label">Upload receipt</label>

                        <?php 
                        if (isset($_POST['scheduleAppointment'])) {
                          $filename = $_FILES["receipt"]["name"];
                          $tempname = $_FILES["receipt"]["tmp_name"];
                          $folder = ".../uploads/" . $filename;

                          if (move_uploaded_file($tempname, $folder)) {
                            echo 'Image uploaded successfully!';
                        } else {
                            echo 'Failed to upload image!';
                        }
                        }
                        
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col mt-3 mb-1">
                <h4 class="header">Coupon</h4>
                  <div class="row">
                    <div class="col-7">
                      <input  type="text" class="form-control input-normal" name="coupon" placeholder="Enter coupon" style="border: none; border-bottom: 1px solid; width: 400px;">
                    </div>
                    <div class="col">
                      <button type="button" class="btn ml-4" name="apply" style="border-radius: 10px; font-weight: bold; width: 100px;background-color: #FF8376 !important;">Apply</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
    </div>
  </section>
  
  <section class="appButt mt-5 mb-3" style="text-align: center;">
    <div>
      <button type="submit" class="btn btn-lg btn-primary" name="scheduleAppointment" style="border-radius: 30px; border-color: #fff; font-weight: bold; width: 550px; background-color: #99edba !important; color: #3D3D3D;">Schedule Appointment</button>

    </div>
    <div class="mt-1">
      <p style="font-style:italic; font-size: 20px; font-weight: 275;">As part of our sanitation policy against Covid, we recommend arriving at our studio 5 minutes before <br>your appointment to avoid overcrowding.</p>
    </div>
  </section>
</form>

  <section id="policy">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="row mb-1">
            <h4 class="header">Reschedule and Cancellation Policy</h4>
          </div>
          <div class="row" style="width: 500px;">
            <ul style="font-size: 18px; font-weight: 275;">
              <li>
                Rescheduling is free of charge but can only be made no later than 3 days before your reserved timeslot.
              </li>
              <li>
                No refunds and rebooking within the lock-in period of 3 days before your reserved timeslot.
              </li>
              <li>
                Cancellation can only be made not later than 3 days before the reserved timeslot with a fee of Php 200.
              </li>
              <li>
                Clients that do not show up during their reserved time slot are not eligible for refunds.
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="row mb-1">
            <h4 class="header">Late Policy</h4>
          </div>
          <div class="row" style="width: 500px;">
            <ul style="font-size: 18px; font-weight: 275;">
              <li>
                We can wait for a maximum of 10 minutes but it will be deducted from your time schedule.
              </li>
              <li>
                If you arrive and the timer has already started, you may still use the remaining time allocation of your package.
              </li>
              <li>
                Clients who arrive later than 10 minutes of the scheduled time will not be accommodated. They may reschedule within the day, ONLY IF there is still an available slot for the day.
              </li>
              <li>
                Printed and digital copies can be claimed the next day.
              </li>
              <li>
                <strong>
                  To avoid these, arrive at our studio 5 minutes before your time schedule.
                </strong>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="mt-2 mb-2">
        <div style="text-align: center;">
          <p style="font-style:italic; font-size: 20px; font-weight: 275; text-align: center;">The policies mentioned above will ensure quality service to all clients scheduled for that day, as a delay in one client may <br> affect our service to the succeeding ones. Let's respect everyone's time slot.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section>
  <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Booking Appointment Information</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>You'll receive a confirmation email for the appointment.</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </section>


  <script>
    var bckdrp = document.querySelectorAll('#checkb');
    var jeju = document.querySelector('#radio1');
    var seoul = document.querySelector('#radio2');

    seoul.addEventListener('change', function(e) {
      // Count the number of selected checkboxes
      var count = 0;
      for (var i = 0; i < bckdrp.length; i++) {
        if (bckdrp[i].checked) {
          count++;
        }
      }

      // If the number of selected checkboxes is not within the limit for radio1,
      // prevent the radio button from being checked
      if (count > 3 || count < 1) {
        e.preventDefault();
      }
    });

    jeju.addEventListener('change', function(e) {
      // Count the number of selected checkboxes
      var count = 0;
      for (var i = 0; i < bckdrp.length; i++) {
        if (bckdrp[i].checked) {
          count++;
        }
      }

      // If the number of selected checkboxes is not within the limit for radio2,
      // prevent the radio button from being checked
      if (count != 1) {
        e.preventDefault();
      }
    });
  </script>
  
    
          <!-- JavaScript Bundle with Popper -->
          <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>       

</script>";
</body>
</html>