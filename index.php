<?php 

    // call database connection
    include_once('config/dbconnect.php'); 


    // sql query to fetch data from my database
    $get_info = $conn->query("SELECT * FROM system_information LIMIT 1"); //SELECT

    if ($get_info->num_rows >0 ) {
      
      $fetch_data = $get_info->fetch_array();

      $system_name = $fetch_data['system_name'];
      $tag_name = $fetch_data['system_tag_name'];
      $tag_info = $fetch_data['tag_description'];

    }else{
      $response = "There is no data to display!";
    }
    

  

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Course_0</title>

  <!-- Bootstrap core CSS -->
  <?php include_once('includes/css.php'); ?>


</head>

<body>

  <!-- Navigation -->
  <?php include_once('includes/header.php'); ?> 

  <!-- Page Content -->
  <div class="container">

    <?php echo isset($response)?"<p class='alert alert-danger'>".$response."</p>":""; ?>

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3"><?php echo isset($tag_name)?$tag_name:""; ?></h1>
      <p class="lead"><?php echo isset($tag_info)?$tag_info:""; ?></p>
      <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>

    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
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

</html>
