<?php

  extract($_POST);
  $text = "He writes: $name
          My email: $email
          Message: $comment";

  if(mail("vanerubio2020@gmail.com","Message from the web", $text, "from: visitor")){
    echo "Email sent successfully";
  }else{
    echo "Failure to send email";
  }

  //mail recibe cuatro parametros
  /*
    1- El correo a donde quiere que llegue el mensaje.
    2- El titulo del correo.
    3- El cuerpo del correo, que es la variable que trae todo.
    4- Quien lo envia.
  */

?>