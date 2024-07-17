<?php
//FUNCIONES SIN PARAMETROS, no revuelven nada, solo se ejecutan, en este caso el HTML

//usamos requiere para que no traiga todos los errores como en el include que trae todo y con errores, si es algo sencillo, por ejemplo un menu, puede ser include, pero si es algo más complejo como un funcionamiento de la pagina si es mejor requiere

function headboard($title, $descripcion, $autor, $styles){
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $descripcion; ?>">
  <meta name="author" content="<?php echo $autor; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $styles; ?>">
  <title><?php echo $title; ?></title>
  </head>
  <?php
}

function head($front){
  ?>
  <header>

    <div class="logo-container">
      <img src="<?php echo $front ?>" alt="img">
    </div>
  
    <div class="nav-container">
      <nav class="navigation">
        <a href="insert.php" class="active">INSERT</a>
        <a href="show.php">SHOW</a>
        <a href="search.php">SEARCH</a>
      </nav>
    </div>

  </header>
  <?php
}

function sum($n1, $n2, $c1, $c2){

  if($c1 == $c2){
    return $n1+$n2;
  }else{
    return "Captcha doesn't match";
  }

  
}

function body(){
  ?>
  <body>

    <form method="post" action="">

      Number 1 <input type="number" name="n1">
      <br>

      Number 2 <input type="number" name="n2">
      <br>

      <input type="text" value="<?php echo $saveNumber=rand(10000, 99999); ?>" readonly>
      <br>

      Enter the code you see: 
      <br>
      
      <input type="text" name="cap">

      <input type="hidden" name="cod" value="<?php echo $saveNumber; ?> ">
      <br>

      <input type="submit" value="sum">

    </form>
    <?php
  
}

function footer(){
  ?>
  </body>
  </html>
  <?php
  //echo "</html>";
}
?>