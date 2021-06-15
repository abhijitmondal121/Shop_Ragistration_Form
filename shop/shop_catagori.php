<!--
//include('/include/connection.php');
//$con = mysqli_connect('localhost', 'root','', 'abhijit');
///if(isset($_POST['sub'])){
 //   $product=$_POST['exampleRadio'];
  ///  echo $product;

   /*if($pay=="cash"){
     echo "you chose cash";
   }
   else{
     echo "you chose card";
   }*/

   /*
   $sql ="INSERT INTO `admin-details` (  `Product-Type`) VALUES ( 'vagetables');";
    
   $result = mysqli_query($con, $sql);

   if($result){
   // header("Location:/ragistration/1/page1.php");
    echo "success";
    
   }
   else{
    //header("Location:/ragistration/shop/shop_catagori.php");
    echo " exit";
   }  */

//}

   -->

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

        <i id="icon" class="fa fa-arrow-circle-o-left"></i>
        <h2 class="heading-top">Shop catagory </h2>
    </div>

    <div class="navbar">
        <p class="navbar-content" id="top-nav">Select your store type</p>
          <center>
        <label class="form-check-label" for="exampleRadios3">
          chose any 1 and we will build your inventory
        </label>
      </center>
    </div> 
    <div>
        <div class="container">
          <form action="" method="post">
            <center>
 
            <div class="row">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios1" value="cash" checked>
                    <label class="form-check-label" for="exampleRadios1" style="font-size:20px;   ">
                    Brand Speciality Store
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2" value="card">
                    <label class="form-check-label" for="exampleRadios2" style="font-size:20px;   ">
                     Chemists & Medical
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="card">
                    <label class="form-check-label" for="exampleRadios2" style="font-size:20px;   ">
                    Daily Essentials
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="card">
                    <label class="form-check-label" for="exampleRadios2" style="font-size:20px;   ">
                     Daily Store
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios5" value="card">
                    <label class="form-check-label" for="exampleRadios2" style="font-size:20px;   ">
                     Fruits & Vegetables
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios6" value="card">
                    <label class="form-check-label" for="exampleRadios2" style="font-size:20px;   ">
                     Grocery & general Store
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios7" value="card">
                    <label class="form-check-label" for="exampleRadios2" style="font-size:20px;   ">
                     Meat,Egg & Fish
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios8" value="card">
                    <label class="form-check-label" for="exampleRadios2" style="font-size:20px;   ">
                    Mobile Accessories and Electronics
                    </label>
                  </div>


            </div>
        
        </center>

            <div class="row">
              <input type="submit" name="sub" value="Next">
            </div>
          </form>
        </div>
    </div>   





    
</body>
</html>