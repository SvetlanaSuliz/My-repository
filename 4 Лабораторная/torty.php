<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Tasty help Catalog Cakes</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


   
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
    
	  <h3 class="p-2 "  >Cakes</h3>
    
  </div>
  
  </section>
  
  <table class="table table-striped">
  <thead>
    <tr >
	 <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Сode</th>
	   <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>

<?php	

$mysqli = mysqli_connect("localhost", "root", "","pastry_shop");

// Добавление данных в таблицу
if (isset($_POST['Date'])&& isset($_POST['Name']) && isset($_POST['Price'])&& isset($_POST['Сode'])&& isset($_POST['Quantity'])){

    // Переменные с формы
	$date=$_POST['Date'];
    $name = $mysqli->real_escape_string($_POST['Name']);
    $price = $_POST['Price'];
    $code = $_POST['Сode'];
    $quantity = $_POST['Quantity'];
     
    $sql = 'INSERT INTO cakes (Date, name, price, code, quantity) VALUES ("'.$date.'","'.$name.'","'.$price.'",'.$code.','.$quantity.')';
    $result = mysqli_query($mysqli,$sql);  
    	
}
 
// Вывод таблицы
$sql = "SELECT id,Date,name,price,code,quantity FROM cakes";
$res = mysqli_query($mysqli,$sql);
$i=1;
while($row = mysqli_fetch_array($res)){
	
	echo '<tr>
		        <th scope="row">'.$i.'</th>
		          <td>'.$row['Date'].'</td>
				  <td>'.$row['name'].'</td>
				  <td>'.$row['price'].' rub.</td>
				  <td>'.$row['code'].'</td>
				  <td>'.$row['quantity'].'</td>
		     </tr>';
	$i++;
}

mysqli_free_result($res);
mysqli_close($mysqli);

?> 
</tbody>
</table>






  <div  style="margin-top: 30px; margin-bottom: 30px;" class="text-center">
	<h3  >Add Cake</h3>   
  </div>
 
 <div class="album py-5 bg-primary">
    <div class="container">
        <form class='formWithValidation' method="POST" class="form-signin" novalidate>
            <div class="row">
			    <div class="col-md-2 mb-3">
			     <label  class="text-white" for="Date">Date</label>
                 <input type="date" class="form-control field" id="Date" name="Date" required>
				 
				</div>
                <div class="col-md-3 mb-3">
			    <label class="text-white" for="Name">Name</label>
                <input type="text" class="form-control field" id="Name" name="Name" required>
				
				</div>
				<div class="col-md-2 mb-3">
			    <label class="text-white" for="Price">Price</label>
                <input type="text" class="form-control field" id="Price" name="Price"  required>
				
				</div>
				<div class="col-md-2 mb-3">
			    <label class="text-white" for="Сode">Сode</label>
                <input type="text" class="form-control field" id="Сode" name="Сode"  required>
				
				</div>
				<div class="col-md-2 mb-3">
			    <label class="text-white" for="Quantity">Quantity</label>
                <input type="text" class="form-control field" id="Quantity" name="Quantity"  required>
				
				</div>
		    </div>
			
			    <div class=" text-right">
				
               <button class="btn btn-warning btn-lg validateBtn" type="submit" name="do_login">Add</button>
                </div>
			
        </form>
		
		
    </div>
 </div>
 
</main>
<script>
//Валидация формы
var form = document.querySelector('.formWithValidation');

var Date = document.getElementById('Date');
var Name = document.getElementById('Name');
var Price = document.getElementById('Price');
var Сode = document.getElementById('Сode');
var Quantity = document.getElementById('Quantity');
var fields = document.querySelectorAll('.field');

var generateError = function (text) {
  var error = document.createElement('div');
  error.className = 'error';
  error.innerHTML = text;
  return error;
}

form.addEventListener('submit', function (event) {
  
  
  var numbErrors = 0;
   //Удаляем ошибки
  var errors = form.querySelectorAll('.error');
  
  for (var i = 0; i < errors.length; i++) {
    errors[i].remove();
  }
  //Заполнены ли все поля
  for (var i = 0; i < fields.length; i++) {
    if (/^\s*$/.test(fields[i].value)) {
		numbErrors++;
     // console.log('field is blank', fields[i]);
	  var error = generateError('Cant be blank');
    form[i].parentElement.insertBefore(error, fields[i]);
    }
  }
  
  
   //Значение Date 1900-2099 года
  if (/^(19|20)\d\d-((0[1-9]|1[012])-(0[1-9]|[12]\d)|(0[13-9]|1[012])-30|(0[13578]|1[02])-31)$/.test(Date.value) ) {
  } else {
	  numbErrors++;
	  var error = generateError('Not correct date');
	  Date.parentElement.insertBefore(error, Date);
  }
  
  //Значение Name от 3 до 30 знаков
   if ( Name.value.length<3 || Name.value.length>30 ) {
	  numbErrors++;
	  var error = generateError('Name length 3 to 30 characters');
	   Name.parentElement.insertBefore(error, Name);
  }


  //Значение Price число от 1 до 10000
  if (/^[0-9]+$/.test(Price.value) ) {
    if( (Price.value<1) || (Price.value>10000) ){
	     numbErrors++;
	     var error = generateError('from 1 to 10000');
		 Price.parentElement.insertBefore(error, Price);
	     }
  } else {
	  numbErrors++;
	  var error = generateError('Enter a number from 1 to 10000');
	   Price.parentElement.insertBefore(error, Price);
  }
  
  //Значение Сode ровно 6 цифр 
  if (/^[0-9][0-9][0-9][0-9][0-9][0-9]$/.test(Сode.value) ) {
  } else {
	  numbErrors++;
	  var error = generateError('The code is exactly 6 digits');
	  Сode.parentElement.insertBefore(error, Сode);
  }
  
  //Значение Quantity число от 1 до 100
  if (/^[0-9]+$/.test(Quantity.value) ) {
    if( (Quantity.value<1) || (Quantity.value>100) ){
	     numbErrors++;
	     var error = generateError('from 1 to 100');
		  Quantity.parentElement.insertBefore(error, Quantity);
	     }
  } else {
	  numbErrors++;
	  var error = generateError('Enter a number from 1 to 100');
	   Quantity.parentElement.insertBefore(error, Quantity);
  }

   
  
  if (numbErrors==0) {return true;}
  else {event.preventDefault();
  }
})

</script>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Up</a>
    </p>
   <p> <b> 8 800 ***-36-25 </b></p> 
    <p>&copy; 2010 - 2019 Tasty help-delicious gifts for everyone! &middot; </p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</html>
 