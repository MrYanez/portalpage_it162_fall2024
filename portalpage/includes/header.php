<?php include 'portal-config.php';?> <!--Here the portal-config.php
is communication to header.php-->

<!--This is my portalpage index.html-->
<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Nahum Yanez</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
     <header>
     <h1><i class="logo fa <?=$logo?>"></i>Nahum Yanez</h1>
        <nav class="topnav" id="myTopnav">
            <a href="https://nahyan.dreamhosters.com/portalpage/index.php" class="active">Home</a>
            <a href="#" target="active">About</a>
            <a href="" target="_blank">it162</a>
            <a href="" target="_blank">Services</a>
            <a href="" target="_blank">IT skills</a>
            <a href="" target="_blank">GitHub</a>
            <a href="" target="_blank">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>
     
   <main class="wrapper">
    <!--header ends here, applied by nahum-->
    <!--<h2 class="subheader"></h2>-->
     <h2 class="subheader"><?=$PageID?></h2><!--Here ?=$title?>-->