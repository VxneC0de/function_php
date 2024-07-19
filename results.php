<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/styles_1.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <title>Results</title>
</head>
<body>

  <?php
  extract($_POST);

  //variable del archivo para sus próximas empleaciones
  $file = "results.txt";

  //abrimos el archivo como lectura
  $fp = fopen("$file","a+");

  //grabamos el contenido con el // para poder separarlos (// es el separador)
  $w = fputs($fp,"$vote//");

  //volvemos a abrir el archivo
  $fp = fopen("$file","r");

  //leemos el contenido del archivo
  $results = fread($fp, filesize ($file));

  //separamos el contenido por el simbolo //
  $div = explode("//",$results);

  //contamos el total de votos
  $total = count($div)-1;

  $op1 = 0;
  $op2 = 0;
  $op3 = 0;
  $op4 = 0;

  //for, para sumar ++voto
  for($i=0; $i<$total; $i++){

    if($div[$i]=="op1"){
      $op1++;
    }

    if($div[$i]=="op2"){
      $op2++;
    }

    if($div[$i]=="op3"){
      $op3++;
    }

    if($div[$i] == "op4"){
      $op4++;
    }
  }
  //valores, para redondear
  $res1 = $op1*100/$total;
  $res2 = $op2*100/$total;
  $res3 = $op3*100/$total;
  $res4 = $op4*100/$total;

  //redondeando para que no salgan decimales
  $res1 = round($res1);
  $res2 = round($res2);
  $res3 = round($res3);
  $res4 = round($res4);

  // $op es la cantidad de votos que hay
  // $respuesta es el redondeo de las opciones *100 / $total

  ?>

  <table border="1">
    <tr>
      <th>Option</th>
      <th>Percentage</th>
    </tr>
    <tr>
      <td>Chocolate</td>
      <td><?php echo $res1;?>%</td>
    </tr>
    <tr>
      <td>Candies</td>
      <td><?php echo $res2;?>%</td>
    </tr>
    <tr>
      <td>Cookies</td>
      <td><?php echo $res3;?>%</td>
    </tr>
    <tr>
      <td>Others</td>
      <td><?php echo $res4;?>%</td>
    </tr>
  </table>

  <script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Options', 'Votes'],
        ['Chocolate',     <?php echo $op1 ?>],
        ['Candies',      <?php echo $op2 ?>],
        ['Cookies',  <?php echo $op3 ?>],
        ['Others', <?php echo $op4 ?>]
      ]);

      var options = {
        title: 'Sweets Survey'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }

  </script>

  <div id="piechart" style="width: 900px; height: 500px;"></div>

</body>
</html>