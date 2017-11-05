<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title ?></title>
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <?php include 'navigation.php' ?>
    <main>
      <section id="<?php echo $header_id ?>" class="header-bg">
        <div class="container">
          <div class="sm-width-block">
            <h1><?php echo $header_title ?></h1>
            <p><?php echo $header_description ?></p>
          </div>
        </div>
      </section>
