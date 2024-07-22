<?php

  require "functions.php";
  headboard("hello", "Pagina", "Vanessa", "./CSS/styles_1.css");
  head("https://www.tailorbrands.com/wp-content/uploads/2020/09/Group-11.jpg");
  body();
  echo "Result = ".sum(@$_POST['n1'], @$_POST['n2'], @$_POST['cap'], @$_POST['cod']);
  footer();

?>