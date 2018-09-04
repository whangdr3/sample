<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="dist/css/style.css">
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap4.min.css">
  <script src="dist/js/jquery-3.3.1.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="index.php">WHANGDRE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="crud.php">Crud<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.php">Post</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container pt-5 mt-5">
    <div class="pt-5 mt-5">
        <div class="border border-light shadow-sm p-3 mb-5 bg-white rounded">
            <h1>EDIT POST</h1>
            <p>Edit Post Function</p> 


            <form action="" method="post">
              <div class="form-group">
                <label>Province :</label>
                  <input type="text" name="province" id="province" required="required" class="form-control" placeholder="Province"/>
              </div>

              <div class="form-group">
                <label>Municipality :</label>
                  <input type="text" name="municipality" id="municipality" required="required" class="form-control" placeholder="Municipality"/>
              </div>

              <div class="form-group">
                <label>Barangay :</label>
                  <input type="text" name="barangay" id="barangay" required="required" class="form-control" placeholder="Barangay"/>
              </div>

              <div class="form-group">
                <label>SP id :</label>
                  <input type="text" name="sp_id" id="sp_id" required="required" class="form-control" placeholder="SP id"/>
              </div>

              <div class="form-group">
                <label>SP title :</label>
                  <input type="text" name="sp_title" id="sp_title" required="required" class="form-control" placeholder="SP title"/>
              </div>

              <div class="form-group">
                <label>Actual :</label>
                  <input type="text" name="actual" id="actual" required="required" class="form-control" placeholder=""/>
              </div>
            <input class="btn btn-primary" type="submit" value=" Submit " name="submit"/>
            </form>

        </div>      
    </div> 
</div>

      <?php

         if(isset($_POST["submit"])){

          include_once('conn/conf.php');

          $province = $_POST['province'];
          $municipality = $_POST['municipality'];
          $barangay = $_POST['barangay'];
          $sp_id = $_POST['sp_id'];
          $sp_title = $_POST['sp_title'];
          $actual = $_POST['actual'];

          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          // echo "Connected successfully";

            $sql = "UPDATE INTO cycle_three_b2_tbl (province,municipality,barangay,sp_id,sp_title,actual) VALUES ('$province','$municipality','$barangay','$sp_id','$sp_title','$actual')";

            if ($conn = mysqli_query($conn, $sql)) {
            echo "<p class='text-center align-text-top'>New record created successfully</p>";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
         }

      ?>

</body>
</html>
