<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About</title>

  <!-- Bootstrap core CSS -->
  <?php include_once('includes/css.php'); ?>


</head>

<body>

  <!-- Navigation -->
  <?php include_once('includes/header.php'); ?> 

  <!-- Page Content -->
  <div class="container">

    <h2>Fill the form below to contact us</h2>

    <!-- Page Features -->
    <div class="row">

<!-- basic contac form -->
      <div class="col-sm-5 jumbotron">
        <h3>Contact Us Here</h3>

        <?php if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        } ?>

        <form id="form1" action="sendMsg.php" method="POST" autocomplete="off">

            <label for="name"><b>Fullname <span style="color: red;">*</span></b></label>
            <input type="text" id="name" class="form-control" placeholder="Enter your fullname" required="required" name="guest_name"> 
            
            <br>
            <label for="email"><b>Email <span style="color: red;">*</span></b></label>
            <input type="email" id="email" class="form-control" placeholder="Enter your personal email"  required="required" name="guest_email">
            
            <br>
            <label for="message"><b>Message <span style="color: red;">*</span></b></label>
            <textarea id="message" class="form-control" placeholder="Write something here..." rows="5" maxlength="200"  required="required" name="guest_mesg"></textarea>
            
            <br>
            <input type="submit" value="Send Message" class="btn btn-primary form-control" id="submit" name="submit">
        </form>

      </div>

<!-- Google Map To show our location -->
      <div class="col-sm-7 jumbotron">
          <img width="600" src="images/map.png" class="thumbnail" alt="Google Map">
      </div>




    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include_once('includes/footer.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <?php include_once('includes/js.php'); ?>

</body>

<!-- <script>

  document.getElementById('submit').addEventListener('click', senData);
  document.getElementById('form1').addEventListener('submit', senData);

  function senData (e) {
    e.preventDefault();
    
    var btnsend = document.getElementById('submit');

    btnsend.value="Processing...";
    btnsend.disabled='disabled';
  }

</script> -->

</html>
