<?php
  $con=mysqli_connect("localhost","root","","test.1");

  if(mysqli_connect_error())
  {
    echo "Falha na conexão do Banco de Dados!".mysqli_connect_error();
  }

  $sql="INSERT INTO cadast(campo_nom,campo_end,campo_CEP,campo_bar,campo_cid,campo_est) VALUES('$_POST[campo_nom]','$_POST[campo_end]','$_POST[campo_CEP]','$_POST[campo_bar]','$_POST[campo_cid]','$_POST[campo_est]')";

  if(!mysqli_query($con,$sql))
  {
    die('Error:'.mysqli_error($con));
  }else {
    echo "Cadastro efetuado com sucesso!";
    mysqli_close($con);
  }
?>