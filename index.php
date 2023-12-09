<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Mo-bile Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="index.css"/>
</head>
  <body>
  <nav>
      <div class="mobile">Online Mo-bile Store</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
      <li><a href="viewproduct.php">Our Products</a></li>
        <li><a href="dashboard.php">My Dashboard</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a class="active" href="signup.php">Sing Up</a></li>
      </ul>
    </nav>

  <div class="container">
      <div class="row">  
      <div class="col-md-1">
      
      </div>
      <div class="col-md-6">
      <img src="images/12.jpg" class="img-fluid" style ="width:100%"/>
      </div>
      <div class="col-md-1">
      
      </div>

        <div class="col-md-4">
       <!-- <form class="form-control form-rounded">-->
          <form action="action.php" method="post" >
            <div class="login"><h1><b>Sign In</b></h1></div>
            <div class="form-group"><label></label><b><input type="text" name="us" class="form-control  form-rounded" placeholder="Username" /></b></div>
            <div class="form-group"><label></label><b><input type="password" name="pw"  class="form-control  form-rounded" placeholder="Password" /></b></div>
</br>
            <button type="submit" class="btn btn-success btn-block" name="login1" >SIGN IN</button>
</form >
            <div class="d-flex justify-content-center links">
            <b>Don't have an account?</b> <a class="color" href="signup.php" ><b>SIGN UP NOW</b></a>
            </div>
  
        </div>
      </div>
  </div>          
</body>
</html>