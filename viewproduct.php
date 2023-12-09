<?php 
require("database.php");
?>
<!DOCTYPE>
<html>
<head>
<title>Online Mo-bile Store</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link type="text/css" rel="stylesheet" href="dashboard.css" />
</head>
<body>
<nav>
      <div class="logo">Our Products</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i> 
      </label>
      <ul>
        <li><a href="index.php">Home</a></li>
		<li><a href="about.php">About Us</a></li>
      </ul>
    </nav>

<!--this is my head or tital-->
<div class='container'>
   <div class='row'>
		<div class='col-md-12'>
		<h1 class='align-center'><b>Mo-bile Managment System</b></h1>
</div>
</div>
</div>

<!--another next row-->
	<div class='container'>
	<div class='row'>
	<?php
$qp = "select * from product";
$result = $conn->query($qp);
while($data= $result->fetch_assoc()){ ?>
		<div class='col-md-3'>

		<p><img src='upload/<?php echo $data['image'];?>' class='img-fluid'/></p>
		<div><h3><b></b> <?php echo $data['mobile']; ?></h3></div>
		<p><b>Storage:</b> <?php echo $data['storage'] ?></p>
		<p><b>OS:</b><?php echo $data['os'] ?></p>
		<p><b>Features:</b><?php echo $data['features'] ?></p>
		<p name="register"><b>Price:</b><?php echo $data['price'] ?></p>
		</div>	
		<div class='col-md-1'></div>
<?php } ?>	
	</div>
   </div>
</body>
</html>