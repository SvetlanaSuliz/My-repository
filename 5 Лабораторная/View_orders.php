<!doctype html>
<meta http-equiv="Cache-Control" content="no-cache"> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Tasty help Catalog Cakes</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">


   
    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
	
	
  </head>
  <body>
    <header>
	
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item ">
          <a class="nav-link" href="Main.html">Main</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Catalog<span class="sr-only">(current)</span></a>
        </li>
		
		 <li class="nav-item">
          <a class="nav-link" href="kontakty.html">Contacts</a>
        </li>
      </ul>
	 
        <img src="img/img.png" alt="" width="70px" height="50px">
	    <a class="navbar-brand" href="#">Tasty help</a>
    </div>
	
  </nav>
  
  
	
</header>

<main role="main">


  
  <section class="jumbotron text-center">
    
     <div class=" py-1 mb-2">
    
	  <h3 class="p-2 "  >Orders</h3>
    
  </div>
  
  </section>
 
 
 
  <table class="table table-striped">
  <thead>
    <tr >
	 <th scope="col">#</th>
	 <th scope="col">Сlient</th>
      <th scope="col">Email</th>
      <th scope="col">City</th>
      <th scope="col">Address</th>
      <th scope="col">Zip</th>
	  <th scope="col">Quantity</th> 
    </tr>
  </thead>
  <tbody>

<?php	
session_start();
$mysqli = mysqli_connect("localhost", "root", "","pastry_shop");
$id = $_SESSION['ID'];

// Вывод таблицы
$sql = "SELECT 	Email,Name,Surname,City,Zip,Address,Quantity FROM clients WHERE idCakes=".$id."";
$res = mysqli_query($mysqli,$sql);

$i=1;
while($row = mysqli_fetch_array($res)){
	
	echo '<tr>
		        <th scope="row">'.$i.'</th>
				  <td>'.$row['Name'].' '.$row['Surname'].' </td>
		          <td>'.$row['Email'].'</td>
				  <td>'.$row['City'].'</td>
				  <td>'.$row['Address'].' rub.</td>
				  <td>'.$row['Zip'].'</td>
				  <td>'.$row['Quantity'].'</td>
		 </tr>';
	$i++;
}
if($i==1){echo '<tr>
				   <td></td>
				   <td></td>
				   <td></td>
				   <th scope="row" class="text-center">There were no orders</th>
				   <td></td>
				   <td></td>
				   <td></td>
                </tr>'; }
mysqli_free_result($res);
mysqli_close($mysqli);

?> 
</tbody>
</table>

  <div  style="margin-top: 30px; margin-bottom: 30px;" class="text-center">
	
               <a class="btn btn-warning" role="button" href="Cakes.php"><h3>Return</h3></a>
			  

  </div>
 
 
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Up</a>
    </p>
   <p> <b> 8 800 ***-36-25 </b></p> 
    <p>&copy; 2010 - 2019 Tasty help-delicious gifts for everyone! &middot; </p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	  <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js" ></script>
</body>


</html>
 