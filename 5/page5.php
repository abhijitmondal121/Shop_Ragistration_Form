<?php
 $no =$_GET["no"];

$con = mysqli_connect('localhost', 'root','', 'abhijit');
if(isset($_POST['exampleRadios'])){
    $pay=$_POST['exampleRadios'];
   // echo $pay;


   $sql = "UPDATE `admin-details` SET `payment_type`='$pay' WHERE `slno`= '$no'";
 
    
   $result = mysqli_query($con, $sql);

   if($result){
     header("Location:/ragistration/congratulation/ex.php");
   }
   else{
     header("Location:/ragistration/5/page5.php");
   }

}

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">

     <!--   <i id="icon" class="fa fa-arrow-circle-o-left"></i>  -->
        <h2 class="heading-top" style="margin-left:550px;">Select payment mode(4/4) </h2>
    </div>

    <div class="navbar">
        <p class="navbar-content" id="top-nav">Enter your payment details</p>



        <span  class="dot dot1"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        
        <span class="dot " id="icon2"></span>


    </div>


   <!-- <form class="login-box">
        <div class="text-box">
            <input type="text" placeholder="Enter Shop Name" name="" value="">
            
        </div>
        <div class="text-box">
            <input type="number" placeholder="Enter Shop Phone Number" name="" value="">
            
        </div>


        <div class="inner-section">
            <p class="top-section">2. Interior - 2</p>
            <p><i class="fa fa-plus icon3"></i></p>
            <p class="bottom-section">Take the photo in landscape mode</p>
        </div>

    </form>
    --> 
    <div>
        <div class="container">
          <form action="" method="post">
            <center>
                <label class="form-check-label" for="exampleRadios3">
                    SELECT METHODS FOR RECEIVING PAYMENTS
                  </label>    
            <div class="col">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="cash" checked>
                    <label class="form-check-label" for="exampleRadios1" style="font-size:30px;width:80px;padding: 5px; border-radius: 5px solid green;  ">
                     cash
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="card">
                    <label class="form-check-label" for="exampleRadios2" style="font-size:30px;width:80px;padding: 5px; border-radius: 5px solid green;  ">
                      card
                    </label>
                  </div>


            </div>
        
        </center>

            <div class="row">
              <input type="submit" value="Next">
            </div>
          </form>
        </div>
    </div>   





    
</body>
</html>
