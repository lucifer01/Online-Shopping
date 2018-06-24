<?php
include'logged.php';
include 'database.php';

  if(isset($_SESSION['login_user'])){
  
      $status = 1;
    }
  else{
    $status = 0;
  }  

?>



<!DOCTYPE html>
<head>
<title>Home</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css" />
   <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body id="page-top" class="index">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
<div class="container ">

<div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
            		 <span class="icon-bar"></span>
            		 <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">E-Cart</a>
</div>

 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 				<form class="navbar-form navbar-left form-inline" enctype="multipart/form-data" >
       <div class="form-group">             
         <input type="text" id="query" name="q" class="form-control form-in" placeholder="Search..."/>
         <a type="button" class="btn btn-search btn-out" id="search"><span class="glyphicon glyphicon-search"></span></a>   
       </div>
     </form>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    include'database.php';

                    if($status == '0'){
                    echo '
                    <li>
                        <a href="#login" data-toggle="modal" data-target="#login"> Login </a>
                        </li>
                    <li>
                      <a href="#sign-up" data-toggle="modal" data-target="#signup"> Sign-UP </a>
                    </li>';
                    }
                    
                    else{
                      echo '
                      <li>
                        <a href="#cart" data-toggle="modal" data-target="#cart"> 
                        <i class="fa fa-shopping-cart nav-icon" aria-hidden="true">
                        </i> Cart </a>
                        </li>
                        <li>
                        <a href="Sign-Out.php" > <i class="fa fa-sign-out nav-icon" aria-hidden="true"></i> Sign-Out </a>
                        </li>';
                    }
                    ?>
                </ul>

</div>
</div>
</nav>


<!-- Modal category -->
  <div align="center" class="modal fade" id="category" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-my">
        <div class="modal-header modal-head">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">category</h4>
        </div>

        <div class="modal-body">
             
        </div>

        <div class="modal-footer modal-foot">
          <button type="button" class="btn btn-danger" data-dismiss="modal">CANCLE</button>
        </div>
      </div>
      
    </div>
  </div>


<!-- Modal login -->
  <div align="center" class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-my">
        <div class="modal-header modal-head">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Login</h4>
        </div>

        <div class="modal-body">
            <form method="post" action="">
            <div class="form-group">
          <label for="usrnm" class="ui-hidden-accessible">Username</label>
          <input type="text" class="form-control form-input" name="uname" id="usrnm" placeholder="Username" required/>
          </div>
          <div class="form-group">
          <label for="pswd" class="ui-hidden-accessible">Password</label>
          <input type="password" class="form-control form-input" name="password" id="pswd" placeholder="Password" required/>
          <input type="hidden" name="pageno" value="item_desc">
          </div>
          <div class="form-group">
          <button type="submit" name="submit" class="btn button mar" align="center"><b><span> SIGN IN </span></b></button>
          </div>
            </form>  
        </div>

        <div class="modal-footer modal-foot">
          <button type="button" class="btn btn-danger" data-dismiss="modal">CANCLE</button>
        </div>
      </div>
      
    </div>
  </div>


<!-- Modal signup -->
  <div align="center" class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-my">
        <div class="modal-header modal-head">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Register</h4>
        </div>

        <div class="modal-body">
            <form method="post" action="Register.php">
          <div class="form-group">
          <label for="usrnm" class="ui-hidden-accessible">Username</label>
          <input type="text" class="form-control form-input" name="uname" id="usrnm" placeholder="Username" maxlength="15" required/>
          </div>
          <div class="form-group">
          <label for="emails" class="ui-hidden-accessible">E-Mail</label>
          <input type="email" class="form-control form-input" name="email" id="emails" placeholder="E-Mail" maxlength="40" required/>
          </div>
          <div class="form-group">
          <label for="pswd" class="ui-hidden-accessible">Password</label>
          <input type="password" class="form-control form-input" name="password" id="pswd" placeholder="Password (At Least 6 Characters)" maxlength="15"  minlength="6" required/>
          </div>
          <div class="form-group">
          <label for="masg" class="ui-hidden-accessible">Address</label>
          <textarea class="form-control form-input" rows="4" name="address" id="adrs" placeholder="Address" maxlength="490" required/></textarea>
          </div>
          <div class="form-group">
          <button type="submit" class="btn button mar" align="center"><b><span> REGISTER </span></b></button>
          </div>
            </form>  
        </div>

        <div class="modal-footer modal-foot">
          <button type="button" class="btn btn-danger" data-dismiss="modal">CANCLE</button>
        </div>
      </div>
      
    </div>
  </div> 


  <!-- Modal contact -->
  <div align="center" class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-my">
        <div class="modal-header modal-head">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Contact</h4>
        </div>

        <div class="modal-body">
            <form method="post" action="contact.php">
          <div class="form-group">
          <label for="nm" class="ui-hidden-accessible">Name</label>
          <input type="text" class="form-control form-input" name="name" id="nm" placeholder="Name" maxlength="15" required/>
          </div>
          <div class="form-group">
          <label for="emails" class="ui-hidden-accessible">E-Mail</label>
          <input type="text" class="form-control form-input" name="email" id="emails" placeholder="E-Mail" maxlength="40" required/>
          </div>
          <div class="form-group">
          <label for="masg" class="ui-hidden-accessible">Massage</label>
          <textarea class="form-control form-input" rows="4" name="massage" id="masg" placeholder="Massage" maxlength="490" required/></textarea>
          </div>
          <div class="form-group">
          <button type="submit" class="btn button mar" align="center"><b><span> SEND </span></b></button>
          </div>
            </form>  
        </div>

        <div class="modal-footer modal-foot">
          <button type="button" class="btn btn-danger" data-dismiss="modal">CANCLE</button>
        </div>
      </div>
      
    </div>
  </div> 



<!-- Modal cart -->
  <div align="center" class="modal fade" id="cart" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-my">
        <div class="modal-header modal-head">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Cart</h4>
        </div>

        <div class="modal-body">


<?php 
include 'database.php';

  if(isset($_SESSION['login_user'])){
    $id = $_SESSION['uid']; 
  }

  $user_id=$id;
  $i_id = $_GET['item_id'];
  $i_id2 = $i_id;
  $tprice = 0;

  $sql = ("SELECT name,brand,price,image,img_name,quantity,item_id FROM cart WHERE user_id='$user_id'");
  
  $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result)){
      $name = $row['name'];
      $brand = $row['brand'];
      $price1 = $row['price'];
      $number = $row['quantity'];
      $image = $row['image'];
      $item_id=$row['item_id'];
      $img_name = $row['img_name'];

      $price = $price1 * $number;

      $tprice = $price + $tprice;

      echo"<div class='row'>
          <div class='item_cart'>
          <img align='left' class='img-responsive img-itm_cart' src='$image$img_name' alt=''>
          <p class='citem'>$name</p>
          <p class='h5b'><b>Quantity - $number</b></p>
          <p class='h5c'><b>Rs. $price1</b></p>
          <p style=\"float: right;\" class='h5c'>
          <a href=\"remove_cart.php?item_id={$row['item_id']}&i_id2=$i_id\" align='right' type='button' class='btn btn-danger btn-xs'>Remove</a>
          </p><hr />
          </div>
          </div>";
    }

  mysqli_close($conn);
?>
             <p class='buy'>Total </p>
             <p class="buy"><b>Rs. <?php echo $tprice; ?> </b></p>    
             <?php
              if($tprice == '0'){
                  echo "<p class='h5c'> No Items In cart</p> ";
              }
              else{
                echo'<button href="#checkout1" data-toggle="modal" data-target="#checkout1" data-dismiss="modal" type="button" 
              class="btn button mar" ><b>
              <span> CONTINUE </span></b></button> ';
              }
             ?> 
              
          </div>
        <div class="modal-footer modal-foot">
          <button type="button" class="btn btn-danger" data-dismiss="modal">CANCLE</button>
        </div>
      
    </div>
  </div> 
    </div> 




<!-- Modal checkout -->
  <div align="center" class="modal fade" id="checkout" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-my">
        <div class="modal-header modal-head">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Buy Now</h4>
        </div>

        <div class="modal-body">
         
<?php 
include 'database.php';

  if(isset($_SESSION['login_user'])){
    $id = $_SESSION['uid']; 
    $user_id=$id;
  }

  
  $i_id = $_GET['item_id'];


  $sql = ("SELECT price FROM t_shirts WHERE item_id='$i_id'");
  
  $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);
      $price = $row['price'];

  mysqli_close($conn);
?>
    

    <form method="post" action="buy_now.php">
          <div class="form-group"> 
      <h4>Select a Payment Method</h4>

  <div class="radio">
      <label><input type="radio" name="optradio" value="COD">COD (Cash On Delivery)</label>
  </div>
  <div class="radio">
      <label><input type="radio" name="optradio" value="Debit Card">Debit Card</label>
  </div>
  <div class="radio">
      <label><input type="radio" name="optradio" value="Net Banking">Net Banking</label>
  </div>
  </div>
          <div class="form-group">
          <label for="names" class="ui-hidden-accessible">Name</label>
          <input type="text" class="form-control form-input" name="name"  id="names" placeholder="Name" maxlength="40" required/>
          </div>
          <div class="form-group">
          <label for="emails" class="ui-hidden-accessible">E-Mail</label>
        <input type="text" class="form-control form-input" name="email"  id="emails" placeholder="E-Mail" maxlength="40" 
        required/>
          </div>
          <div class="form-group">
          <label for="addr" class="ui-hidden-accessible">Delivery Address</label>
          <textarea class="form-control form-input" rows="4" name="address" id="address" placeholder="Address" maxlength="490" required/></textarea>
          </div>
          <div class="form-group">
          <label for="total" class="ui-hidden-accessible">Total Amount</label>
          <p class="buy"><b>Rs. <?php echo $price; ?> </b></p>
          </div>

          <input type="hidden" name="price" value="<?php echo $price; ?>" />
          <input type="hidden" name="i_id" value="<?php echo $i_id; ?>" />

          <div class="form-group">
          <button type="submit" class="btn button mar" align="center"><b><span> PLACE ORDER </span></b></button>
          </div>
          </form>  
        </div>
  
        <div class="modal-footer modal-foot">
          <button type="button" class="btn btn-danger" data-dismiss="modal">CANCLE</button>
        </div>
      </div>
      
    </div>
  </div> 


<!-- Modal checkout1 -->
  <div align="center" class="modal fade" id="checkout1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-my">
        <div class="modal-header modal-head">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Check Out</h4>
        </div>

        <div class="modal-body">
         
<?php 
include 'database.php';

  if(isset($_SESSION['login_user'])){
    $id = $_SESSION['uid']; 
  }

  $user_id=$id;
  $i_id = $_GET['item_id'];


  $sql = ("SELECT price FROM t_shirts WHERE item_id='$i_id'");
  
  $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);
      $price = $row['price'];

  mysqli_close($conn);
?>
    

    <form method="post" action="buy_now.php">
          <div class="form-group"> 
      <h4>Select a Payment Method</h4>

  <div class="radio">
      <label class=""><input type="radio" name="optradio" value="COD">COD (Cash On Delivery)</label>
  </div>
  <div class="radio">
      <label><input type="radio" name="optradio" value="Debit Card">Debit Card</label>
  </div>
  <div class="radio">
      <label><input type="radio" name="optradio" value="Net Banking">Net Banking</label>
  </div>
  </div>
          <div class="form-group">
          <label for="names" class="ui-hidden-accessible">Name</label>
          <input type="text" class="form-control form-input" name="name"  id="names" placeholder="Name" maxlength="40" required/>
          </div>
          <div class="form-group">
          <label for="emails" class="ui-hidden-accessible">E-Mail</label>
        <input type="text" class="form-control form-input" name="email"  id="emails" placeholder="E-Mail" maxlength="40" 
        required/>
          </div>
          <div class="form-group">
          <label for="addr" class="ui-hidden-accessible">Delivery Address</label>
          <textarea class="form-control form-input" rows="4" name="address" id="address" placeholder="Address" maxlength="490" required/></textarea>
          </div>
          <div class="form-group">
          <label for="total" class="ui-hidden-accessible">Total Amount</label>
          <p class="buy"><b>Rs. <?php echo $tprice; ?> </b></p>
          </div>

          <input type="hidden" name="price" value="<?php echo $tprice; ?>" />
          <input type="hidden" name="i_id" value="<?php echo $i_id; ?>" />

          <div class="form-group">
          <button type="submit" class="btn button mar" align="center"><b><span> PLACE ORDER </span></b></button>
          </div>
          </form>  
        </div>
  
      </div>
      
    </div>
  </div> 



<br/>
    

  <div class="container">

  <?php   
  include 'database.php';

  if(isset($_SESSION['login_user'])){
    $id = $_SESSION['uid']; 
    $uid = $id;
  }


  $i_id = $_GET['item_id'];


    $sql = ("SELECT * FROM t_shirts WHERE item_id='$i_id'");
    
    $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($result)){
            $name = $row['name'];
            $brand = $row['brand'];
            $price = $row['price'];
            $size = $row['size'];
            $image = $row['image'];
            $item_id = $row['item_id'];
            $img_name = $row['img_name'];

            if(isset($_SESSION['login_user'])){
            echo "<div  class='item_des'>
                    <img align='left' class='img-responsive img-itm_de' src=\"$image$img_name\" alt=''>
                    <p class='item'>$name</p>
                      <br/>
                    <p class='h5n'>Brand - $brand</p>
                    <p class='h5n'>Size - $size</p>
                    <br/>
                    <p class='h5p1'><b>Rs. $price</b></p>

                    <form method='get' action='cart_proc.php'>
                    <input type='hidden' value = '$item_id' name='item_id'/>
                    <div class='form-group'> 
                    <input type='number' class='form-control form-input1' name='quan' placeholder='Quantity' required/>
                    </div>
                    <div class='btn-group-horizontal btn-group-lg'>
                    <button type='submit' class='btn btn-default btn-buy1'><b>Add to Cart</b></button>
                    </form>

                    <button href='#check-out' data-toggle='modal' data-target='#checkout' type='button' 
                    class='btn btn-default btn-buy1'><b><span class='glyphicon glyphicon-flash'></span> Buy Now</b></button>
                    </div>
                    
                    </div>";
            }
            else{
              echo "<div  class='item_des'>
                    <img align='left' class='img-responsive img-itm_de' src=\"$image$img_name\" alt=''>
                    <p class='item'>$name</p>
                      <br/>
                    <p class='h5n'>Brand - $brand</p>
                    <p class='h5n'>Size - $size</p>
                    <br/>
                    <p class='h5p1'><b>Rs. $price</b></p>
                    
                    <div class='btn-group-horizontal btn-group-lg '>
                    
                    <a href=\"cart_proc.php?item_id={$row['item_id']}\" type='button' 
                    class='btn btn-default btn-buy disabled'><b>Add to Cart</b></a>
                    
                    <button href='#check-out' data-toggle='modal' data-target='#checkout' type='button' 
                    class='btn btn-default btn-buy'><b><span class='glyphicon glyphicon-flash'></span> Buy Now</b></button>
                    </div>
                    </div>";

            }
    }
    mysqli_close($conn);
?>           
   
</div>




<br/>
<br/>
<br/>


    <footer class="text-center" id="contact">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3 style="color: #00b3fe">Location</h3>
                        <p>	Swami Vivekananda Bhavan,
                            <br>A-213, Surat (395007)</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3 style="color: #00b3fe">About</h3>
                        <p>E-Cart is a E-Commercial <br> Web-Site<a href="#contact" data-toggle="modal" data-target="#contact"> Contact Us </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       <p class="small">Developed By </p><h4 style="color: #00b3fe">The Team</h4> 
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>