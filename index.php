<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <title>Hello, world!</title>
    <?php
 include 'datos/datos.php';
 conmysql();
  
 ?>
</head>
<body>
<div id="content">
    <img src="https://www.altonivel.com.mx/wp-content/uploads/2018/06/mejores-celulares-2018.jpg" class="ribbon"/>
    <div>some text...</div>
 </div>
    <center>
    <h1>Inventario cellphone</h1>
    </center>
    <div class ="padre">


    <form action="index.php" method="POST" class="formulario"> 
  <div class="form-group">
    <label for="exampleFormControlInput1">Marca del telefono</label>
    <input name="marca" class="form-control" id="exampleFormControlInput1" placeholder="Motorola,samsung,lg etc.">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Memoria ram</label>
    <select class="lista1" memoria="exampleFormControlSelect1" name="memoria">
      <option value="null">Null</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="8">8</option>

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Precio</label>
    <select class="lista1" name="precio">
    <option value="null">Null</option> 
   <option value="1">100.000-500.000</option> 
   <option value="2">500.000-1.000.000</option> 
   <option value="3">1.000.000-2.000.000</option>
   <option value="4">2.000.000-3.0000.000</option> 
   <option value="5">3.000.000-4.000.000</option> 
   <option value="6">4.000.000-5.000.000</option> 
   <option value="7">5.000.000-6.000.000</option> 
</select>
  </div>

  <label><input type="checkbox" name="todas"id="cbox1" value="first_checkbox"> Todas las marcas</label><br>
  <center><button type="submit">Buscar</button></center>
</form>
</div>
<?php


  $marca = $_POST['marca'];
  $memoria = $_POST['memoria'];
  echo 'Marca'. $marca;
  
  echo 'memoria' . $memoria;
  $todas= $_POST['todas'];
  if( (isset($_POST['memoria']) &&($_POST['memoria']!="null")&&!empty($_POST['memoria']))){
        
    consulta10($marca,$memoria);
   
   }
   else{
    consulta($marca);
   }

   $precio= ($_POST['precio']);
   if( (isset($_POST['precio']) &&($_POST['precio']!="null")&&!empty($_POST['precio']))){
        
    switch($precio){
   
      case "1":
      Consultaprecio(100000 , 500000,$marca);
      break;
      
   
   case "2":
   Consultaprecio(500000 , 1000000,$marca);
   break;
   
   
   case "3":
   Consultaprecio(1000000 , 2000000,$marca);
   break;
   
   
   
   case "4":
   Consultaprecio(2000000 , 3000000,$marca);
   break;
   
   
   
   case "5":
   Consultaprecio(3000000 , 4000000,$marca);
   break;
   
   
   
   case "6":
   Consultaprecio(4000000 , 5000000,$marca);
   break;
   
   
   
   case "7":
   Consultaprecio(5000000 , 6000000,$marca);
   break;
      }
   
   }
   

  
    ?>
  

  <form action="index.php" method="POST" class="formulario"> 
  <div class="form-group">
    <P>ingresa nuevo inventario </P>
    <label >Marca del telefono</label>
    <input name="marcai"  id="exampleFormControlInput1" placeholder="Motorola,samsung,lg etc.">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Memoria ram</label>
    <select class="memoriai" memoria="exampleFormControlSelect1" name="memoria">
      <option value="null">Null</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="8">8</option>

  </select>
  <label >Ingresa el valor</label>
    <input name="valori" class="form-control" id="exampleFormControlInput1" placeholder"valor.">
    <label >Cantidad</label>
    <input name="cantidai" class="form-control" id="exampleFormControlInput1" placeholder"cantidad">
    <center><button type="submit">Agregar</button></center>
  </form>


  <?php
  
  $marcai=isset($_POST['marcai']);
  $memoriai=isset($_POST['memoriai']);
  $valori=isset($_POST['valori']);
  $cantidadi=isset($_POST['cantidadi']);

$memoriai=(int)$memoriai;
$valori=(int)$valori;
$cantidadi=(int)$cantidadi;

  
    GLOBAL $connection;

$idd="1000" . $id;
    $marcai=(string)rand(1 , 8989);
   
   $sql ="INSERT INTO   motorola (nombre_dispositivo, memoria_ram, precio , cantidad_pr) VALUES ( $marcai ,  '3' , 10 ,10  )";

    if (mysqli_query($connection, $sql)) {
        echo "datos agregados";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  
}


  
  ?>
</body>

</html>