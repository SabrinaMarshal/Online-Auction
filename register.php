<html>
<head>
<title>User registration</title>
<style>
   @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(bg.jpg) no-repeat;
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4682B4;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4682B4;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4682b4;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
a:link, a:visited {
  
  color: white;

  text-align: center;
 
}

a:hover {
  color: darkblue;
}
    
    </style>
</head>
<body>
<form action="registration.php" method="post" enctype="multipart/form-data" align="center">
<div class="login-box">
  <h1>Register</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="user" class="form-control" placeholder="Username" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" class="form-control"  placeholder="Password"required>
  </div>

  <div class="textbox">
  <i class="fas fa-user-circle"></i>
    <input type="text" name="name" class="form-control" placeholder="Full name"required>
  </div>

  <div class="textbox">
  <i class="fas fa-at"></i>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>

  <div class="textbox">
  <i class="fas fa-phone"></i>
    <input type="tel" name="mobile" pattern="[0-9]{10}" class="form-control" placeholder="Phone number" required>
    
  </div>

  <input type="submit" class="btn" value="Register">
  <hr>
  
<br><br><a  href="login.php" >Already have account? Login here</a>
  
  

</div>
</form>

</body>
</html>