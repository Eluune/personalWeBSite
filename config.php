<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e)
  {
    echo('Problème de connexion à la Base de données');
    exit();
  }
?>
