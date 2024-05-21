 <?php session_start();
error_reporting(E_ERROR | E_PARSE);
if($_SESSION["username"]!=""){
    $_SESSION["username"];
}
else{
    $_SESSION['username']="";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>  <meta charset="utf-8" />
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W restaurant.ps</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
 
  </head>
<body>
<div class="header">
    <div class="navbar">
        <div class="container">
<div class="logo"><i class="fa-solid fa-utensils"></i>
    W restaurant.ps 
</div>

<div class="nav">

    <ul class="list">
        <li class="list_item">
            <p style="padding-right: 100px; color: var(--seccolor);">
            <?php if($_SESSION["username"]!=""){  echo" Welcome";
            }
            else{
                "";
            } ?>
                <?php echo $_SESSION['username']?>
            </p>
        </li>
        <li class="list_item">
            <a href="#Service" class="link_nav">Services</a> </li>
            <li class="list_item">
                <a href="#about" class="link_nav">About</a> </li>
<li class="list_item">
            <li class="list_item">
        \
        <li class="list_item">
            <a href="#portfolio" class="link_nav">Dishes</a> </li>
           
    <a href="#menu" class="link_nav">Menu</a> </li>

        <a href="#order" class="link_nav">Cart</a> </li>
        <li class="list_item">
            <a href="#YourOrder" class="link_nav">Your Orders</a> </li>
   <li class="list_item">
     <a href="contact.html" target="_blank" class=link_nav>Contact</a> </li>
      <?php if($_SESSION['username']!=""){ echo" <a href='login.html'  class=link_nav>Logout</a> </li> ";}
      else{
        echo"  <a href='login.html'  class=link_nav>Login</a> </li>";
      }?>

    </ul>

</div>

</div>
    </div>

<div class ="header_content">
    <div class="overlay">
<div class="header_content_item">
    <h1 class="main-title"> Start your beautiful day at W ...</h1>
    <span class="line"></span>
    <p class="para">Dear Visitor You Are Welcome ... Our family strives to provide you with comfort and happiness</p>
    <a href="#Communication" class="as">find out more</a>
</div>
</div>
</div>
</div>

<!-- end the header section-->

<!-- start white -->
<div class ="white"></div>
<!-- end white -->

<!-- start  Services section -->

<div class="Service" id="Service">
<h2 >At Your Services</h2>
<span class="line"></span>
<div class="servises_items">
    <div class="container"> 

    <div class="servises_item">
        <i class="fa-solid fa-globe"></i>
<h3>Ready For All</h3>
         </div>
         <div class="servises_item">
            <i class="fa-solid fa-heart"></i>
            <h3>Made With Love</h3>
             
        </div>
        
<div class="servises_item"> 
    <i class="fa-solid fa-taxi"></i>
    <h3>Delivery Service</h3>
   
</div>
<div class="servises_item"> 
    <i class="fa-solid fa-clock"></i>
    <h3>24 hours service</h3>
   
</div>
</div>

</div>

</div>
<!-- end services -->
<!-- start white -->
<div class ="white"></div>
<!-- end white -->
<!-- start the About section -->
<div class="about" id="about">
    <h2>We've got what you need!</h2>
    <span class="line"></span>
    <p class="para2">We have what you need!
        Our new website has all the services you need and is up and running in no time! Choose one of the themes you like, free, and easy to use! no strings attached</p>
    <a href="#">GET STARTED!</a>
   
</div>
<!-- end about section -->

<!-- start portfolio -->
  
<div class="portfolio" id="portfolio">
    <i class="fa-solid fa-utensils"></i>
    <h3 class="sub-heading"> Our Dishes </h3>
    <h1 class="heading"> Popular Dishes </h1>
  
<span class="line"></span>
    <div class="item">
        <div class="portfolio_items">
            <img src="assets/img/دجاج.jfif" />
            <div class="overlay"> 
                <h2>Grilled Chicken  </h2>
                      </div>
        </div>
        <div class="portfolio_items">
            <img src="assets/img/بيتزا.jfif" />
            <div class="overlay"> 
                <h2>Italian Pizza  </h2>
                      </div>
        </div>
          
    <div class="portfolio_items">
        <img src="assets/img/جمبري.jfif" />
        <div class="overlay"> 
            <h2>Seafood  </h2>
                  </div>
    </div>

    <div class="portfolio_items">
        <img src="assets/img/ب.jfif" />
        <div class="overlay"> 
            <h2>Burger</h2>
          
        </div>
    </div>
    <div class="portfolio_items">
        <img src="assets/img/حلويات7.jfif" />
        <div class="overlay"> 
            <h2>Western Sweets</h2>
           
        </div>
    </div>
    <div class="portfolio_items">
        <img src="assets/img/مشروب.jfif" />
        <div class="overlay"> 
            <h2>Cold Drinks</h2>
          
        </div>
    </div>
    <div class="portfolio_items">
        <img src="assets/img/حلويات.jfif" />
        <div class="overlay"> 
            <h2>Eastern Sweets</h2>
          
        </div>
    </div>
    <div class="portfolio_items">
        <img src="assets/img/اكل صحي.jpg" />
        <div class="overlay"> 
            <h2>Healthy Food</h2>
         
        </div>
    </div>
    <div class="clear"></div>
</div>
</div>

<!-- start white -->
<div class ="white">

</div>
<!-- end white -->
<!-- start menu -->

<!-- menu section starts  -->
<div class="container2"> 
<section class="menu" id="menu">
   
    <h1 class="sub-heading"> our menu </h1>
    <span class="line"></span>

    <div class="box-container">
        <?php
        $servername="localhost";
        $username="root";
        $password="123456789";
        $dbname="w_resturant";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error){
            die("Connection Failed".$conn->connect_error);
        }

        $sql="SELECT * FROM meals";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0) {
            while($row=mysqli_fetch_assoc($result)){

            echo "         
        <div class='box'>
            <div class='image'>";
                echo"<img src='images/{$row['img_name']}' alt=''>";
                echo"
                <a href='#' class='fas fa-heart'></a>
            </div>
            <div class='content'>";
echo"            <div class='stars'>";
             $length = floor($row['rating']);
               for($i=0;$i<$length;$i++){
                   echo"<span class='fa fa-star checked'></span>";
                }
               echo"
                </div>";
                    echo"
                <h3>{$row['name']}</h3>";
                echo"
                               <a href='add_to_cart.php?name={$row["name"]} & price={$row["price"]} & user={$_SESSION["username"]}' class='btn'>add to cart</a>
                <span class='price'>{$row['price']} $</span>
            </div>
        </div>";
            }
        }

      ?>

    </div>

</section>
</div>
<!-- menu section ends -->
<!-- end menu -->
<!-- start white -->
<div class ="white"></div>
<!-- end white -->

<!-- order section starts  -->

<div class="order" id="order">

    <h2 class="sub-heading"> Order Now </h2>

<span class="line"></span>
<div class="container">
    <div class='Header'>
        <h3 class='Heading'>Shopping Cart</h3>
        <?php
     echo" <h5 class='Action'><a href='delete_all_items.php?user={$_SESSION['username']}'>Remove all </a></h5>";
        ?>
    </div>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="w_resturant";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }

    $sql="SELECT * FROM cart";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0) {
    while($row=mysqli_fetch_assoc($result)) {
    echo"
     <div class='CartContainer'>
        
        <div class='Cart-Items pad'>

            <div class='about1'>
                <h1 class='title'>{$row['meal_name']}</h1>
            </div>
            <div class='counter'>
                <a href='increment_quant.php?name={$row['meal_name']} & user={$_SESSION['username']} & quant={$row['meal_qunatity']}' class='btn1'>+</a>
                <div class='count'>{$row['meal_qunatity']}</div>
                <a  href='deincrement_quant.php?name={$row['meal_name']} & user={$_SESSION['username']} & quant={$row['meal_qunatity']}' class='btn1'>-</a>
            </div>
            <div class='prices'>
                <div class='amount'>{$row['meal_price']} $</div>
                <div class='remove'><a href='delete_item.php?name={$row['meal_name']} & user={$_SESSION['username']} '>Remove</a></div>
            </div>
        </div>
        <hr>
       
    </div>";
    } }
    ?>
    <div style="margin-left: 50px">
        <a class="btn" href="order_now.php">
            Order Now
        </a>
    </div>
</div>
</div>
<div class="order" id="YourOrder">
    <h2 class="sub-heading"> Your Orders </h2>

    <span class="line"></span>
    <div class="container" style="margin-left: 30%">



<?php
$servername="localhost";
$username="root";
$password="";
$dbname="w_resturant";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
$sql1="SELECT * FROM orders WHERE  user={$_SESSION["username"]}";
$datenow=date("Y/m/d");
$date = new DateTime($datenow);

$date->modify('+1 day');
$datee=$date->format('Y-m-d');


$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0) {
while($row1=mysqli_fetch_assoc($result1)) {
    if ($datee>=$row1['date']){

        $sql3 = "DELETE FROM orders WHERE number={$row1['number']} ";
        if(mysqli_query($conn,$sql3));

    }

        }
}

$sql="SELECT * FROM orders";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0) {
    echo"
    <table>
        <tr>
            <th>Number</th>
            <th>Date</th>
            <th>Address</th>
            <th> Total Price</th>
        </tr>";
    while($row=mysqli_fetch_assoc($result)) {
      echo"  <tr>
            <td>{$row["number"]}</td>
            <td>{$row["date"]}</td>
            <td>{$row["address"]}</td>
            <td>{$row["price"]} $</td>

        </tr>";

    }
}

?>

    </table>
    </div>
</div>
<!-- order section ends -->
<!-- start contact -->
<!-- start white -->
<div class ="white"></div>
<!-- end white -->

<div class="base">
    
        <div class="b1"><h2>W Family</h2></div>
       
    
    <div class="b2">
       
       
        <div class="b2item">
            <img src="assets/img/Chef Enas.jpg" />
            <div class="overlay"> 
                <h2>  Chef Enas</h2>
                      </div>
        </div>
        <div class="b2item">
            <img src="assets/img/wf2.jpg" />
            <div class="overlay"> 
                <h2>Waiter Osama </h2>
                      </div>
        </div>
        <div class="b2item">
            <img src="assets/img/wFamily2.jpg" />
            <div class="overlay"> 
                <h2>Chef Omar  </h2>
                      </div>
        </div>
        <div class="b2item">
            <img src="assets/img/w33.jpg" />
            <div class="overlay"> 
                <h2>Chef Tariq and his work </h2>
                      </div>
        </div>
        <div class="b2item">
            <img src="assets/img/M.jpg" />
            <div class="overlay"> 
                <h2>Accountant Doa'a </h2>
                      </div>
        </div>
       
        <div class="b2item">
            <img src="assets/img/wf.jpg" />
            <div class="overlay"> 
                <h2>Chef Tammer</h2>
                      </div>
        </div>
       
     <div class="clear"></div>
  
</div>
</div>
<!-- start about2 test -->
<!-- About-->
<section class="page-section" >
    <div class="container">
        <div class="text-center">
   
            <h3 class="section-subheading text-muted">when did we start.</h3>
        </div>
        <ul class="timeline">
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        The story  
                        <br />
                        starts
                        <br />
                        here!
                    </h4>
                </div>
            </li>
            <li>
              
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2019-2020</h4>
                        <h5 class="subheading">Our Humble Beginnings</h5>
                    </div>
                  
                </div>
            </li>
            
            <li>
                
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2021</h4>
                        <h5 class="subheading">Transition to Full Service</h5>
                    </div>
                   
                </div>
            </li>
            <li class="timeline-inverted">
               
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2022</h4>
                        <h5 class="subheading">Phase Two Expansion</h5>
                    </div>
         
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- end about2 test -->
<!-- start Communication -->

  
        <div class="Communication" id="Communication">
        
            <div class="container">

            <h2 >Let's Get In Touch!</h2>
<span class="line"></span>
<div class="para3">Are you ready to start a great experience with us? Call us or send us an email or contact us on our Facebook and WhatsApp account and we will get back to you as soon as possible!</div>
<div class="contact_items">
<!-- f -->
   <div class="contact_item">
    <a href="https://www.facebook.com/wrestaurantpal "class="link_nav" > <i class="fa-brands fa-facebook"></i></a>
    <span class="contact_info">W restaurant.ps</span>
   </div>
<!-- emai -->
   <div class="contact_item">
    <a href="mailto:wrestaurant@wrestaurant.ps" class="link_nav"><i class="fa-solid fa-envelope"></i></a>
    <span class="contact_info">wrestaurant@wrestaurant.ps</span>
   </div>
<!--mobile  -->
   <div class="contact_item">
    <a href="tel:09 236 7788" class="link_nav"><i class="fa-solid fa-phone"></i></i></a>
    <span class="contact_info">09 236 7788</span>
   </div>
<!-- whatsapp -->
   <div class="contact_item">
    <a href="https://api.whatsapp.com/send?phone=972597367788&app=facebook&entry_point=page_cta&fbclid=IwAR0Z5nWR-9Rt8vQNqerpFZcZ271iCoaflEVQLe0Tm6c2ooHeNrVp7AP9-AA" class=link_nav><i class="fa-brands fa-whatsapp"></i></a>
    <span class="contact_info">+972 59-736-7788</span>
</div>

</div>
</div>
        </div>



        <!-- end Communication -->
<!-- start white -->
<div class ="white"></div>
<!-- end white -->

</body>

</html>