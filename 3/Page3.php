
<?php
$connect = mysqli_connect('localhost', 'root','', 'abhijit');
$no =$_GET["no"];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $start_time=$_POST['start_time'];
    $end_time=$_POST['end_time'];
    $person1=$_POST['person1'];
    $area1=$_POST['area1'];
    if($start_time==''&& $end_time==''&& $person1=='' && $area1==''){
        echo"<script>alert('we cannot verify your details')</script>";
      }

    else {

    $query="UPDATE `admin-details` SET `h_start`='$start_time',`h_end`='$end_time',`person`='$person1',`area`='$area1' WHERE `slno`= '$no'";
    $insert=mysqli_query($connect,$query);
    }
    if($insert){
      $sql = "SELECT slno  FROM `admin-details`";
      $result = mysqli_query($connect, $sql);
           while($row = mysqli_fetch_assoc($result)){

            header("Location:/ragistration/5/page5.php?no=".$row['slno']);            
           }
       
    }
    else      
    header("Location:/ragistration/3/page3.php?no=".$row['slno']);
  
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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
      @media screen and (min-device-width: 250px) and (max-device-width: 449px){



.main-container{
    width:95%;
    margin:auto;
    border:2px solid grey;
    box-shadow: grey 2px 2px;;
}
}
</style>
<body>
    <div class="main-container">
        <div class="header">

    
            <h2 class="heading-top">Add shop photos (3/4) </h2>
        </div>

        <div class="navbar">
            <p class="navbar-content" id="top-nav">Enter your shop details</p>
            <span class="dot dot1"></span>
            <span class="dot"></span>
            <span id="icon2" class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="content">
            <div class="col">
                <p>Set working days and working hours for the shop</p>
                <form action="" method="post">
                <div class="inputtime"> 
                <input type="text"  name="start_time" style="width: 150px;" placeholder="Start" require><span>To</span> 
                <input type="text"  name="end_time" style="width: 150px;" placeholder="End" require>
                </div>
                <div class="main">
                    <ul class="day">
                        <li><button>Su</button></li>
                        <li><button>M</button></li>
                        <li><button>Tu</button></li>
                        <li><button>W</button></li>
                        <li><button>TH</button></li>
                        <li><button>F</button></li>
                        <li><button>S</button></li>
                    </ul>
                </div>
                <p>Delivery Details</p>
                <div class="delivery">
                    <div class="person">
                        <label>Delivery Person</label><br>
                        <input type="text"  name="person1" style="width: 150px;" placeholder="Enter Here" require>
                        <!-- <button class="btnplus" onclick="decrement()">-</button>
                        <input id=demoInput1 type=number min=0>
                        <button class="btnplus" onclick="increment()">+</button>

                        <script>
                            function increment() {
                                document.getElementById('demoInput1').stepUp();
                            }
                            function decrement() {
                                document.getElementById('demoInput1').stepDown();
                            }
                        </script> -->
                    </div>
                    <div class="area">
                        <label style="font-weight: bold;">Delivery Area</label><br>
                         <input type="text"  name="area1" style="width: 150px;" placeholder="Enter Here" require>
                        <!-- <button class="btnplus" onclick="decrementarea()">-</button>
                        <input id=demoInput type="number" min="1"><span class="km">km</span></input>
                        <button class="btnplus" onclick="incrementarea()">+</button><br> -->


                        <!-- <script>
                            function incrementarea() {
                                document.getElementById('demoInput').stepUp();
                            }
                            function decrementarea() {
                                document.getElementById('demoInput').stepDown();
                            }
                        </script>
                        <script>
                            function changefloating() {
                                var el = document.getElementById("btnf");
                                if (el.style.float === 'right') {
                                    el.style.float = left;
                                }
                                else {
                                    el.style.float = right;
                                }
                            }


                        </script> -->
                    </div><br>

                    
                </div>
                            
              <input type="submit" class="btnNext" value="Next">
            </div>

            
           

            </form>

        </div>
    </div>
</body>

</html>
