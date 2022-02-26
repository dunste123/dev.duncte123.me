<?php //throw new Exception("Error Processing Request", 1); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="hoi, dit is een website." />
    <meta name="author" content="Duncan Sterken" />
    <title><?php echo !empty($title) ? htmlentities($title)." | ROC website stuff" : "ROC website stuff"; ?></title>
    <link rel="stylesheet" type="text/css" href="./style/main.css" />
    <style>
      .center{
        text-align: center;
      }
      a{
        color: rgb(0, 76, 177);
        text-decoration: none;
      }
      a:hover{
        color: rgb(1, 44, 228);
        text-decoration: underline;;
      }
      /*body{
        background: rgb(2, 79, 181);
      }*/
    </style>
  </head>
  <body>
