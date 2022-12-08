<?php
    require 'vendor\autoload.php';
    // Import the PHPMailer class
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $con = mysqli_connect("localhost","root","","booking");

    //check connection
    if(mysqli_connect_errno()){
        echo "Failed to connect to the database ".mysqli_connect_error();
    }
    else{
        echo " ";
    }

    

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // Specify the SMTP server and credentials
    $mail->isSMTP();
    $mail->Host = 'smtp.smtp2go.com';
    $mail->Port = 2525;
    $mail->SMTPAuth = true;
    $mail->Username = 'annyeongstudio';
    $mail->Password = 'annyeongstudio';
    
    if(isset($_POST['scheduleAppointment'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $datetime = $_POST['datetime'];
      $package = $_POST['package'];
      $backdrop = $_POST['backdrop'];
      $addOns = $_POST['addOns'];
      $coupon = $_POST['coupon'];
      $receipt = $_POST['receipt'];

        $p = implode(",", $package); 
        $b = implode(",", $backdrop);
        $a = implode(",", $addOns);

        //$filename = $_FILES["receipt"]["name"];
        //$tempname = $_FILES["receipt"]["tmp_name"];
        //$folder = ".../uploads/" . $filename;

        $query = mysqli_query($con,"INSERT INTO tblappointment (cname,email,phone,pdatetime,package,backdrop,add_on,coupon,receipt)
        VALUES ('".$name."','".$email."','".$phone."','".$datetime."','".$p."','".$b."','".$a."','".$coupon."','".$receipt."')") or die(mysqli_error($con));
        
        // Set the sender and recipient addresses
        $mail->setFrom('jhannprose@gmail.com', 'Annyeong Studio');
        $mail->addAddress($email, $name);

        // Set the subject and body of the email
        $mail->Subject = 'Booking Appointment Confirmation';
        $mail->msgHTML(file_get_contents('mailScript.php'), __DIR__);

        // Send the email
        if ($mail->send()) {
            echo 'Email sent successfully!';
        } else {
            echo 'Error: '.$mail->ErrorInfo;
        }

        

        $query_run = mysqli_query($con, $query);
            if(!$query_run){
                $_SESSION['message'] = "You'll receive a confirmation email for the appointment.";
                echo "<script>alert('A confirmation wil be sent to your email.'); window.open('index.php','_self'); </script>";
                
            }else{
                $_SESSION['message'] = "Failed to insert data.";
                header("Location: booking.php");
            }
    }
?>