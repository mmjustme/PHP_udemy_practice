<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <!-- &bull так позначається спец крапка між словами -->
    <title>Culinary Cove &bull; <?php echo $pageTitle ?></title>
  </head>
  <body>
    <header
      class="header-with-background"
      style="background-image: url('<?php echo $headerImg ?>')"
    >
      <h1>Culinary Cove</h1>
      <p>Your sanctuary for exceptional flavors</p>
      <nav>
        <a href="/index.php">Our mission</a>
        <a href="/ingridients.php">Ingridients</a>        
      </nav>
    </header>

    <main>