<?php include_once('conn/conf.php'); ?>
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
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="index.php">WHANGDRE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="crud.php">Crud</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post.php">Post</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron text-center" id="crud">
  <h1>CRUD</h1>
  <p>Simple Crud Function</p> 
  
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PROVINCE</th>
      <th scope="col">MUNICIPALITY</th>
      <th scope="col">BARANGAY</th>
      <th scope="col">SP ID</th>
      <th scope="col">SP TITLE</th>
      <th scope="col">ACTUAL</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>

  <?php
    
    $query = "SELECT * FROM cycle_three_b2_tbl ";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td  class="text-left" ><?php echo $row['province']; ?></td>
      <td  class="text-left" ><?php echo $row['municipality']; ?></td>
      <td  class="text-left" ><?php echo $row['barangay']; ?></td>
      <td  class="text-center" ><?php echo $row['sp_id']; ?></td>
      <td  class="text-left" ><?php echo $row['sp_title']; ?></td>
      <td  class="text-center" ><?php echo $row['actual']; ?></td>
      <td class="text-center">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <a href='edit.php' type="edit" name="edit" id="edit" class="btn btn-primary mr-md-3" >Edit</a>
              <a href='delete.php' type="delete" name="delete" id="delete" class="btn btn-danger mr-md-3" >Delete</a>
            </div>
          </div>
        </div>
      </td>
    </tr>
  </tbody>
  <?php
    }
  ?>
</table>
<?php ?>

</body>
</html>