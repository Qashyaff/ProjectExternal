<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    #login img{
  margin: 10px 0;
}
#login .center {
  text-align: center;
}

#login .login {
  max-width: 300px;
  margin: 35px auto;
}

#login .login-form{
  padding:0px 25px;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: black;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: Black;
}
</style>
</head>

<body>
    
</body>
<div id="login" class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="login well well-small">
        <div class="center">
          <img src="https://i0.wp.com/smashresume.com/wp-content/uploads/edd/2018/01/Creative-Cartoon-Resume.jpg?fit=1000%2C750&ssl=1" alt="logo"> 
        </div>
        <form action="/users/login" style="" class="login-form" id="UserLoginForm" method="post" accept-charset="utf-8">
          <div class="control-group">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-user"></i></span>
              <input name="data[User][username]" required="required" placeholder="Username" maxlength="255" type="text" id="UserUsername"> 
            </div>
          </div>
          <div class="control-group">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-lock"></i></span>
              <input name="data[User][password]" required="required" placeholder="Password" type="password" id="UserPassword"> 
              
            </div>
            <button class="btn"><i class="fa fa-facebook"></i></button>
<button class="btn"><i class="fa fa-twitter"></i></button>
<button class="btn"><i class="fa fa-instagram"></i></button>
<button class="btn"><i class="fa fa-google"></i></button>
<button class="btn"><i class="fa fa-github"></i></button>
          </div>
          <div class="control-group">
            <label id="remember-me">
              <input type="checkbox" name="data[User][remember_me]" value="1" id="UserRememberMe"> Remember Me?</label>
          </div>
          <div class="control-group">
            <input class="btn btn-light btn-large btn-block" type="submit" value="Sign in"> 
          </div>
        </form>
      </div><!--/.login-->
    </div><!--/.span12-->
  </div><!--/.row-fluid-->
</div><!--/.container-->