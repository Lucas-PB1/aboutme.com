<!DOCTYPE html>
<html lang="pt-bt">

<head>
  <!-- Import do style -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/css/aboutme.css">
  <!-- Bootstrap e jquery-->
  <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <!-- Include php -->
  <?php include "tasks/database/php_func/on.php" ?>

</head>

<body>
  <div id="header">
    <a href="?pg=home&key=<?= log_on() ?>"><img id="logo" src="images/logo.png"></a>
    <h1>Aboutme</h1>
    <nav id="pages">
      <ul>
        <li><a href="?pg=home&key=<?= log_on() ?>">Home</a></li>
        <li><a href="?pg=parts\user_pages\about&key=<?= log_on() ?>">Sobre mim!</a></li>
        <li><a href="?pg=parts\user_pages\perguntas&key=<?= log_on() ?>">Faça sua pergunta!</a></li>
        <li><a href="?pg=parts\user_pages\contato&key=<?= log_on() ?>">Entre em contato!</a></li>
      </ul>
    </nav>
    <nav id="enter">
      <?php usuario(); ?>
    </nav>
  </div>