<!DOCTYPE html>
<html>
<head>
  
    <title>RugbyScores.cl</title>
    <link rel="stylesheet" href="Stylesheet.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
           $("#activities").click(function(){
               $("#body").load("activities.html");
           });
      });
  </script>
  </head>

  <!--logo principal y resultados-->
<body class="container bg">
<div id="header" class="navbar">
   <div class="navbar-header" >
     <img id="Mainlogo" src="images/Rugbyscore.png"> <img src="images/resultados.png" width="85%">

    </div>
</div>

<!--Menu-->
<style>
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }
    
    .dropdown {
        position: relative;
        display: inline-block;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    
    .dropdown-content a:hover {background-color: #ddd}
    
    .dropdown:hover .dropdown-content {
        display: block;
    }
    
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
    </style>
    </head>
    <body>
    <div id="body" class="dropdown">
      <button class="dropbtn"> <a href="Rugbyscore.php"><strong>Home</strong></a></button>
      </div>
      <div class="dropdown">
        <div class="dropdown">
            <button class="dropbtn"> <a href="Torneos.php"><strong>Torneos</strong></a></button>
            </div>
      </div>
      <div class="dropdown">
          <button class="dropbtn"> <a href="Eljuego.php"><strong>El juego</strong></a></button>
          </div>
      <div class="dropdown">
          <button class="dropbtn"> <a href="Ranking.php"><strong>Ranking</strong></a></button>
      </div>
      <div class="dropdown">
        <button class="dropbtn"> <a href="#"><strong>Cuenta</strong></a></button>
    </div>
    <div class="dropdown">
        <button class="dropbtn"> <a href="login-system/index.php"><strong>Log in</strong></a></button>
    </div>
    </body>

    </div>
</div>
