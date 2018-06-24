<html>
<head>
<title>Admin_Home</title>
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
                <a class="navbar-brand" href="#page-top">E-Cart</a>
</div>

 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="Sign-Out.php">Sign-Out</a>
                    </li>
                </ul>

</div>
</div>
</nav>


  <div id="headerwrap1">
      <div class="container">
      <div class="row">
       
        <div class="col-lg-8 col-lg-offset-2 himg">
        <form method="post" action="add_sub_cate.php" enctype="multipart/form-data">
          <div align='center' class="form-group"> 
      <h4>Add Category</h4>
      </div>

          <div class="form-group">
          <label for="names" class="ui-hidden-accessible">Title</label>
          <input type="text" class="form-control" name="title"  id="names" placeholder="Title" maxlength="40" 
          required/>
          </div>
          <div class="form-group">
          <label for="names" class="ui-hidden-accessible">Category_ID</label>
          <input type="text" class="form-control" name="sub_category"  id="names" placeholder="Sub_Category" maxlength="40" 
          required/>
          </div>
          <div class="form-group">
          <label for="names" class="ui-hidden-accessible">Image</label>
          <input type="file" class="form-control" name="image" required/>
          </div>
          <div class="form-group">
          <button type="submit" class="btn button mar" align="center"><b><span> Add It </span></b></button>
          </div>
          </form>  
        </div>
  
      </div>  
      </div><!-- /row -->
      </div> <!-- /container -->
  </div>
     

    <footer class="text-center" id="contact">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       Developed By <br> Hiren Sosa 
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>