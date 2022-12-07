<?php

    $con = mysqli_connect("localhost","root","","booking");

    //check connection
    if(mysqli_connect_errno()){
        echo "Failed to connect to the database ".mysqli_connect_error();
    }
    else{
        echo "db conn ";
    }
    
    if(isset($_POST['scheduleAppointment'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $datetime = $_POST['datetime'];
      $package = $_POST['package'];
      $backdrop = $_POST['backdrop'];
      $addOns = $_POST['addOns'];
      $coupon = $_POST['coupon'];

        $p = implode(",", $package); 
        $b = implode(",", $backdrop);
        $a = implode(",", $addOns);
        $query = mysqli_query($con,"INSERT INTO tblappointment (cname,email,phone,pdatetime,package,backdrop,add_on,coupon)
        VALUES ('".$name."','".$email."','".$phone."','".$datetime."','".$p."','".$b."','".$a."','".$coupon."')") or die("error in query");

        $query_run = mysqli_query($con, $query);
            if($query_run){
                $_SESSION['message'] = "Failed to insert data.";
                header("Location: booking.php");
            }else{
                $_SESSION['message'] = "You'll receive a confirmation email for the appointment.";
                echo "<script>alert('A confirmation email wil be sent to your email.'); window.open('index.php','_self'); </script>";

            }
    }
?>