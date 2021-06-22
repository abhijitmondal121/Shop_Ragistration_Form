
<?php
$connect = mysqli_connect('localhost', 'root','', 'abhijit');
$no =$_GET["no"];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 
  $image=$_FILES['photo']['name'];
  $tmp_name=$_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp_name,"uploads/$image");
    if($image==''){
      echo"<script>alert('we cannot verify your photo')</script>";
    }
    else {
    $query="UPDATE `admin-details` SET `photo`='$image' WHERE `slno`= '$no'";
    $insert=mysqli_query($connect,$query);
    }
    if($insert){
      $sql = "SELECT slno  FROM `admin-details`";
      $result = mysqli_query($connect, $sql);
           while($row = mysqli_fetch_assoc($result)){

            header("Location:/ragistration/3/page3.php?no=".$row['slno']);            
           }
       
    }
    else      
    header("Location:/ragistration/2/page2.php?no=".$row['slno']);
    
  
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web page2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
     
      <!--  <i id="icon" class="fa fa-arrow-circle-o-left"></i>  -->
        <h2 class="heading-top"style="margin-left:570px;">Add shop photos (2/4) </h2>
    </div>

    <div class="navbar">
        <p class="navbar-content" id="top-nav">Shop photo builds credibiliity and attracts more</p>
        <p class="navbar-content">customers</p>
    
        <span class="dot dot1"></span>
        <span id="icon2"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        
      
        
    </div>

    <form action="" method="post" enctype="multipart/form-data">
    <section class="section-1">
        <div class="inner-section">
            <p class="top-section">1. Interior - 1</p>
            <p><input type="file"  name="photo" class="fa "></p>
           
   
             <p class="bottom-section">Take the photo in landscape mode</p>
        </div>

        
        
    </section>
    <!--<div class="btn1">
        <button class="btn btn-success" name="submit">Next</button>
    </div>-->
    <center>
    <input type="submit" value="Next" style="background-color:#4CAF50;padding:5px 20px; border-radius: 12%;border-color: #3da35b;border: #4CAF50 4px solid;" >  
    </center>
            </form>
</body>

</html>
