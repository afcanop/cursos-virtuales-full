<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="img/favicon.ico" type="image/ico" sizes="16x16">
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="estilos.css"/>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css"/>
 <!-- Optional theme -->
 <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
</head>
  <title>INGRESAR</title>
</head>
<body>
<DIV class="container">
<!--titulo-->
    <div class="jumbotron">
      <div class="container">
        <header> 
          <h1><i><b>CURSOS VIRTUALES INGRESAR</b></i></h1>
        </header>  
      </div>
    </div>
  <div class="row"> 
  <div class="col-md-12">
    <!--formulario de registro-->  
    <form class="form-inline"  action="index.php" method="post" id="ingresar">
      <div class="form-group">
     <span class="input-group-addon">  <i class="glyphicon glyphicon-list-alt"></i> 
        INGRESAR
    <br><br>
        <input type="text" class="form-control" placeholder="NUEVO EMAIL" id="txtEmail"  name="txtEmailf">
        <br><br>
        <input type="PASSWORD" class="form-control" placeholder="NUEVA CONTRASEÑA" id="password" name="password">
        <br><br>
        <button type="submit" class="btn btn-primary" >REGISTRAR</button>
      </span>
    </div>
    </form>
  </div>
</DIV>
    <!-- <script src="js/login.js"></script>   -->
    <script src="js/jquery-1.11.2.min.js"></script>  
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>