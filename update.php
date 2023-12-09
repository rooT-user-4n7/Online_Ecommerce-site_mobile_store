<?php 
session_start();

 if(!$_SESSION['authorization']){
 	header("location:index.php");	
 }
require("database.php");
?>
<!DOCTYPE>
<html>
<head>
<title>Online Mo-bile Store</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link type="text/css" rel="stylesheet" href="update.css" />
</head>
<body>
<nav>
      <div class="logo">UPDATE YOUR PRODUCT</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i> 
      </label>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="addproduct.php">Add Products</a></li>
        <li><a href="dashboard.php">My Dashboard</a></li>
        <li><a class="active"  href="logout.php">LogOut</a></li>
      </ul>
    </nav>
    <div class='container'>
   <div class='row'>
   <div class='col-md-3'></div>
		<div class='col-md-6'>
		<form action='action.php' method='post'>
		<h2><b>Update Your Product</b></h2>

        <?php
        $p_id = $_GET['Product_ID'];
        $p1 = "select * from product where id ='$p_id'";
        $result = $conn->query($p1);
        $data =$result->fetch_assoc();
        ?>
        <div class='form-group'><label><b></b></label><input type="hidden" class='form-control' name='id' value="<?php echo $data['id']; ?>"/></div>
		<div class='form-group'><label><b>Device Name</b></label><input type="text" class='form-control' name='m' value="<?php echo $data['mobile']; ?>"/></div>
		<div class='form-group'><label><b>Storage</b></label><input type="text" class='form-control' name='n' value="<?php echo $data['storage']; ?>" /></div>
        <div class='form-group'><label><b>OS</b></label><input type="text" class='form-control' name="o"  value="<?php echo $data['os']; ?>"/></div>
		<div class='form-group'><label><b>Features</b></label><input type="text" class='form-control' name='key' value="<?php echo $data['features']; ?>" /></div>
        <div class='form-group'><label><b>Price</b></label><input type="text" class='form-control' name='p' value="<?php echo $data['price']; ?>" /></div>      
</br>
        <button type="submit" class="btn btn-success btn-block" name="update">Update</button>
		</form>
		</div>
        <div class='col-md-3'></div>
</div> 
</div>
</body>
</html>