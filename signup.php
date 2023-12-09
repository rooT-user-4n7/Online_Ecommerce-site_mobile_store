<!DOCTYPE html>
<!-- this is my login page  -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Mo-bile Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="signup.css">
  </head>

  <body>
    
    <nav>
      <div class="logo">Online Mo-bile Store</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label> 
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a class="active"  href="index.php">Sign In</a></li>
      </ul>
    </nav>

    <div class="container">
    <div class="row">
    <div class="col-md-1">
        </div>
    <div class="col-md-6">
      <img src="images/12.jpg" class="img-fluid" style ="width:100%" /> 
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
        <form action="action.php" method="post">
        <div class="text"><h1>Create a new Account</h1></div>
        </br>
        <form> 
        <label></label><input type ="text" name="fn" class="form-control form-rounded" placeholder="Fullname"/>
        <label></label><input type ="text" name="us" class="form-control form-rounded" placeholder="Username"/></br>
        <div class="form-group">
                <label class="sr-only" for="Password"></label>
                <div ><input type="password"  name = "pw" class="form-control form-rounded" placeholder="Password" aria-describedby="inputGroupPrepend" required></div>
        </div> 
        <label></label><input type ="email" name ="em" class="form-control form-rounded " placeholder="Email" />
        <label></label><input type ="phone" name ="pn" class="form-control form-rounded" placeholder="Mobile number" />
        <label></label><input type ="address" name ="add" class="form-control form-rounded" placeholder=" Address" />
</br>
        <button type="submit" class="btn btn-success btn-block" name="register">SIGN UP</button>
        </form>
        <form >
            <div class="d-flex justify-content-center links">
           <b>Have an account?</b> <a class="colorr" href="index.php"><b> SIGN IN NOW</b></a>
            </div>
            </form> 
      </form>
        </div>
      </div>
</div>    

  </body>
</html>
