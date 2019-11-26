
<!doctype html>

<html lang="ru">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tasty help">

    <title>Tasty help  Edit the Order</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">



   

  </head>
<?php	
session_start();
 $mysqli = mysqli_connect("localhost", "root", "","pastry_shop");
 
// Вывод данных
 $id = $_SESSION['ID'];
$sql = "SELECT 	Email,Name,Surname,City,Zip,Address,Quantity FROM clients WHERE idCakes=".$id."";
 $res=mysqli_query($mysqli,$sql);
 $row= mysqli_fetch_array($res);


// Изменение данных в таблице
if (isset($_POST['SaveChanges'])){
if (isset($_POST['Name'])&& isset($_POST['Surname'])&& isset($_POST['Email'])&& isset($_POST['Address'])&& isset($_POST['City'])&& isset($_POST['Quantity'])&& isset($_POST['Zip']) ){

    // Переменные с формы
	$Name = $mysqli->real_escape_string($_POST['Name']);
	$Surname = $mysqli->real_escape_string($_POST['Surname']);
    $Email =$mysqli ->real_escape_string($_POST['Email']);
	$Address =$mysqli ->real_escape_string($_POST['Address']);
    $City =$_POST['City'];
    $Quantity = $_POST['Quantity'];
    $Zip=$_POST['Zip'];
	
    $sql = 'UPDATE clients SET Name="'.$Name.'",Surname="'.$Surname.'", Email="'.$Email.'", City="'.$City.'", Address="'.$Address.'", Quantity='.$Quantity.', Zip='.$Zip.'   WHERE id='.$id.'';
   $result = mysqli_query($mysqli,$sql);  
   

    mysqli_close($mysqli);
	unset($_SESSION);
	header("Location:  View_orders.php"); exit();
}}


?> 


  <body class="bg-light">




    <div class="container">
  <div class="py-5 text-center">
    
    <h1> <img class="" src="img/img.png" width="72" height="72" alt="bootstrap"> Edit the оrder</h1>
    </div>

 
    <div class="order-md-1 ">
       <form class='formWithValidation' method="POST" class="form-signin" novalidate>
	   
			   <div class="row">
         
          <div class="col-md-3 mb-3">
             <label class="text" for="Name">Name</label>
                <input type="text" class="form-control field" id="Name" name="Name" <?php echo 'value="'.$row['Name'].'"'; ?>  required>
				
          </div>

           <div class="col-md-3 mb-3">
             <label  class="text" for="Surname">Surname</label>
                 <input type="text" class="form-control field" id="Surname" name="Surname" <?php echo 'value="'.$row['Surname'].'"'; ?> required>
				 
          </div> 
		   <div class="col-md-4 mb-3">
             <label class="text" for="Email">Email</label>
                <input type="email" class="form-control field" id="Email" name="Email" <?php echo 'value="'.$row['Email'].'"'; ?> required>
			 </div>	
           </div>
   <div class="row">
        <div class="col-md-2 mb-3">
	 <div class="form-group">
              <label  for="City">City</label>
              <select class="form-control field" id="City" name="City" >
			   <option></option>
                 <option <?php if($row['City']=="Volgograd"){ echo 'selected';} ?>  value="Volgograd">Volgograd</option>
                 <option <?php if($row['City']=="Saratov"){ echo 'selected';}?>  value="Saratov">Saratov</option>
                 <option <?php if($row['City']=="Voronezh"){ echo 'selected';} ?>  value="Voronezh">Voronezh</option>
                 <option <?php if($row['City']=="Sochi"){ echo 'selected';} ?>  value="Sochi">Sochi</option>
                 <option <?php if($row['City']=="Penza"){ echo 'selected';} ?>  value="Penza">Penza</option>
             </select>
           </div>  
        </div>
		
		 <div class="col-md-4 mb-3">
          <label class="text" for="Address">Address</label>
                <input type="text" class="form-control field" id="Address" name="Address" <?php echo 'value="'.$row['Address'].'"'; ?> required>
				
        </div>
		<div class="col-md-2 mb-3">
          <label class="text" for="Zip">Zip</label>
                <input type="text" class="form-control field" id="Zip" name="Zip" <?php echo 'value="'.$row['Zip'].'"'; ?> required>
				
        </div>
		
		  <div class="col-md-2 mb-3">
          <label class="text" for="Quantity">Quantity</label>
                <input type="text" class="form-control field" id="Quantity" name="Quantity" <?php echo 'value="'.$row['Quantity'].'"'; ?> required>
				
        </div>
        </div>
        <div class=" text-center">
    <button class="btn btn-warning btn-lg validateBtn" type="submit" name="SaveChanges" >Save changes</button>
    </div>
       
      </form>
    </div>
  

  <footer class="my-5 pt-5 text-muted  text-small">
    <div class="container">
      8 800 ***-36-25 </b></p> 
    <p>&copy; 2010 - 2019 Tasty help-delicious gifts for everyone! &middot; </p>
  </div>
  </footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
 <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js" ></script>
</body>
<script>
//Валидация формы
var form = document.querySelector('.formWithValidation');

var Name = document.getElementById('Name');
var Surname = document.getElementById('Surname');
var Address = document.getElementById('Address');
var Email = document.getElementById('Email');
var Zip = document.getElementById('Zip');
var Quantity = document.getElementById('Quantity');
var fields = document.querySelectorAll('.field');


var generateError = function (text) {
  var error = document.createElement('div');
  error.className = 'error';
   error.style.color = 'red';
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
	  var error = generateError('Cant be blank');
    form[i].parentElement.insertBefore(error, fields[i]);
    }
  }

  
  
  //Значение Name от 3 до 30 знаков
   if ( Name.value.length<3 || Name.value.length>30 ) {
	  numbErrors++;
	  var error = generateError('length 3 to 30 characters');
	   Name.parentElement.insertBefore(error, Name);
  }

//Значение Surname от 3 до 30 знаков
   if ( Surname.value.length<3 || Surname.value.length>30 ) {
	  numbErrors++;
	  var error = generateError(' length 3 to 30 characters');
	  Surname.parentElement.insertBefore(error, Surname);
  }
  //Значение Address от 3 до 30 знаков
   if ( Address.value.length<3 || Address.value.length>30 ) {
	  numbErrors++;
	  var error = generateError(' length 3 to 30 characters');
	  Address.parentElement.insertBefore(error, Address);
  }

//Значение Email корректно
if (/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/.test(Email.value) ) {
  } else {
	  numbErrors++;
	  var error = generateError('Not a valid email');
	  Email.parentElement.insertBefore(error, Email);
  }
  
  //Значение Zip ровно 6 цифр 
  if (/^[0-9][0-9][0-9][0-9][0-9][0-9]$/.test(Zip.value) ) {
  } else {
	  numbErrors++;
	  var error = generateError('The Zip is exactly 6 digits');
	  Zip.parentElement.insertBefore(error, Zip);
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
</html>