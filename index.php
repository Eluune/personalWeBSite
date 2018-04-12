<!DOCTYPE html>
<html>
  <head>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">

    <!-- Meta Data / Document -->
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio">
    <meta name="keywords" content="">
    <meta name="author" content="Alois Petit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Aloïs Petit</title>

    <!-- Css -->
    <link media="screen and (min-width: 1280px)" rel="stylesheet" href="index.css">
    <link media="screen and (max-width: 1280px)" rel="stylesheet" href="handheld_index.css">

    <link media="screen and (min-width: 1280px)" rel="stylesheet" href="0_nav/nav.css">
    <link media="screen and (max-width: 1280px)" rel="stylesheet" href="0_nav/handheld_nav.css">

    <link media="screen and (min-width: 1280px)" rel="stylesheet" href="1_home/home.css">
    <link media="screen and (max-width: 1280px)" rel="stylesheet" href="1_home/handheld_home.css">

    <link media="screen and (min-width: 1280px)" rel="stylesheet" href="2_presentation/presentation.css">
    <link media="screen and (max-width: 1280px)" rel="stylesheet" href="2_presentation/handheld_presentation.css">

    <link media="screen and (min-width: 1280px)" rel="stylesheet" href="3_competence/competence.css">
    <link media="screen and (max-width: 1280px)" rel="stylesheet" href="3_competence/handheld_competence.css">

    <link media="screen and (min-width: 1280px)" rel="stylesheet" href="4_portfolio/portfolio.css">
    <link media="screen and (max-width: 1280px)" rel="stylesheet" href="4_portfolio/handheld_portfolio.css">

  </head>

  <body>
    <?php include("0_nav/nav.php"); ?>
    <?php include("1_home/home.php"); ?>
    <?php include("2_presentation/presentation.php"); ?>
    <?php include("3_competence/competence.php"); ?>
    <?php include("4_portfolio/portfolio.php"); ?>

    <!-- Javascipt -->
    <script src="0_nav/nav.js" type="text/javascript"></script>
    <script src="0_nav/handheld_nav.js" type="text/javascript"></script>
    <script src="1_home/home.js" type="text/javascript"></script>
    <script src="3_competence/competence.js" type="text/javascript"></script>
    <script src="3_competence/handheld_competence.js" type="text/javascript"></script>
    <script src="3_competence/circle-progress.js" type="text/javascript"></script>
  </body>
</html>
