<?php
  $con = mysqli_connect('localhost', 'root','', 'abhijit');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['firstname'];
      $name2 = $_POST['lastname'];
      $subject = $_POST['subject'];
      $address = $_POST['address'];

            
        if($name== '' && $name2== '' && $subject== '' && $address== ''){
          echo"<script>alert('we cannot verify your name')</script>";
          }

        else {
          
        
            $sql = "INSERT INTO `admin-details` ( `Shop-Name`, `Phone-Number`, `Product-Type`,`Address`) VALUES ('$name', '$name2', '$subject','$address')";
            $result = mysqli_query($con, $sql);
     
            if($result){
              $sql = "SELECT slno  FROM `admin-details`";
                $result = mysqli_query($con, $sql);
                     while($row = mysqli_fetch_assoc($result)){

                      header("Location:/ragistration/2/page2.php?no=".$row['slno']);            
                     }
              }
            else{
              header("Location:/ragistration/1/page1.php");
            }
    
          }
    
        }

  



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web-page1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">

    
        <h2 class="heading-top" style="margin-left:570px;">Add shop photos (1/4) </h2>
    </div>

    <div class="navbar">
        <p class="navbar-content" id="top-nav">Enter your shop details</p>



        <span id="icon2" class="dot dot1"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        


    </div>
    <div>
        <div class="container">
          <form action="/ragistration/1/page1.php" method="post">
            <div class="row">
              <div class="col-25">
                <label for="fname">Enter Shop Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Enter Shop Name" require>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname"> Enter Shop Phone Number</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Enter Shop Phone Number" require>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="subject">Address</label>
              </div>
              <div class="col-75">
                <textarea id="subject" name="address" placeholder="Write something about products.." style="height:200px" require></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="subject">Tell your customers what products do you sell</label>
              </div>
              <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Write something about products.." style="height:200px" require></textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <input type="submit" value="Next">
            </div>
            <br>
          </form>
        </div>


        



    </div>   





    
</body>
</html>
