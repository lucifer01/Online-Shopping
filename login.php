<html>
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

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="background-color: black;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>

        <div class="modal-body">
             <label name="email">Email</label>
             <input type="email" value="example@example.com" />
             <label name="password">Password</label>
             <input type="password" />
             <input type="submit" value="Login" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>




<div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <label name="email">Email</label>
             <input type="email" value="example@example.com" />
             <label name="password">Password</label>
             <input type="password" />
             <input type="submit" value="Login" />
           </fieldset>
        </div>
      </div>
    </div>

    </body>
</html>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>

  <div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left">Show Popup Form</a>

    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
      <form method="post" action="demoform.asp">
        <div>
          <h3>Login information</h3>
          <label for="usrnm" class="ui-hidden-accessible">Username:</label>
          <input type="text" name="user" id="usrnm" placeholder="Username">
          <label for="pswd" class="ui-hidden-accessible">Password:</label>
          <input type="password" name="passw" id="pswd" placeholder="Password">
          <label for="log">Keep me logged in</label>
          <input type="checkbox" name="login" id="log" value="1" data-mini="true">
          <input type="submit" data-inline="true" value="Log in">
        </div>
      </form>
    </div>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div>

</body>
</html>

