<?php

         if(isset($_POST["delete"])){

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
          echo "Connected successfully";

            $sql = "DELETE * FROM cycle_three_b2_tbl WHERE id=$id";

            if ($conn = mysqli_query($conn, $sql)) {
            echo "<p class='text-center align-text-top'>Deleted successfully</p>";
            header("Refresh:0; url=crud.php");
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Refresh:0; url=index.php");
            }
         }

      ?>