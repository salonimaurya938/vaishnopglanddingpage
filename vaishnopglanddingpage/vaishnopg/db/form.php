<?php
include 'conn.php';

if(isset($_POST['submit'])){

 $name = $_POST['name'];
 $email = $_POST['email'];
 $mob = $_POST['mob'];
 $desc = $_POST['desc'];

 $sql="INSERT INTO `enquiry_data`(`id`, `name`, `email`, `mob`, `desc`, `created_at`) VALUES ('','$name','$email','$mob','$desc',now())";
 if(mysqli_query($conn,$sql))
{
      $from = $email;
      $to = 'msaloni401@gmail.com'; 
      $subject = 'My College Kart';
      $msg = "Contact Us \nName- ".$name."\nEmail- ".$email."\nMobile No-".$mob."\nMessage- ".$desc;
      $success=mail($to, $subject, $msg, $from);
      if($success)
      {
      echo "<script>alert('Thank you for Contact with us!');window.location.href='https://mycollagekart.com/'</script>";
      }
      }else{
            echo "<script>alert('Oops Try Again...!!!');window.location.href='https://mycollagekart.com/'</script>";
      }
      }

?>