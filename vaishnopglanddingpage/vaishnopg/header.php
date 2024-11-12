<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="google-site-verification" content="DryGPmndFpWJBrX-MZb_-bt7ABmsHU0pH9tzqHBrdPQ" />

  <title>VAISHNOPG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 

  <!-- Favicons -->
  <link href="assets/img/vashno PG logoo.png" rel="icon">
  <!-- <link href="assets/img/vashno PG logoo.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- <--start modal---> 
<div class="container" data-toggle="modal" data-target="#exampleModal">
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mobile_dialog">
      <div class="modal-content p-0" style="background-image: url(assets/img/back2.jpg);">
        <div class="modal-header">
            <img src="assets/img/applynow.png" height="70" alt="" id="modal_enquiry_gif" style="position:absolute; top:-11px; left:0px;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-left:88%; background:none; border:none; color:#fff; font-wight:bold; font-size:25px;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form class="row g-3" method="POST" action="db/form.php">
            <div class="col-sm-12">
           <h3 class="modal-title text-center text-light" id="exampleModalLabel">VAISHNOPG</h3>
            </div>
            <div class="col-12" id="contact_us_form">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name" required>
                <label for="floatingName">Name</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
               <input type="email" class="form-control" id="floatingName" name="email" placeholder="Your Email" required>
                <label for="floatingName">Email</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
               <input type="number" class="form-control" id="floatingName" name="mob" placeholder="Your Mobile" required>
                <label for="floatingName">Mobile No</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
               <!-- <input type="number" class="form-control" id="floatingName" name="phone" placeholder="Your Address" required> -->
                <label for="floatingName">Description</label>
                <textarea class="form-control"  name="desc" style="height: 90px;"></textarea>
              </div>
            </div>
            <hr>
             <div class="col-12 text-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="submit">Apply Now</button>
            </div>
          </form><!-- Contact us -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <--end modal--->

<script>
    window.onload = () => {
  document.querySelector('[data-target="#exampleModal"]').click();
}
 function modalData(){

  // document.getElementById('exampleModal').modal('show');
  document.querySelector('[data-target="#exampleModal"]').click();
    
 }
</script>
