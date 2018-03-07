<?php
    include_once "header.php";
?>
<!--Jumbotron partidos destacados-->
<div class="jumbotron col-md-20">
    <h3><strong>Partidos destacados</strong></h3>
    <table class="table">
            <tr>
              <th width="20%"></th>
              <th width=>Local</th>
              <th align="center" width="10%">VS</th>
              <th align="" width=>Visita</th>
            </tr>
            <tr>
              <td width="5%"></td>
              <td width=20%><img src="images/Brumbies.png" height ="70%"> Brumbies</td>
              <td><strong></strong></td>
            <td align="left" width=><img src="images/Crusaders.png" height="80%"> Crusaders</td>    
            </tr>
            <tr>
                    <td width="5%"></td>
                    <td width=20%><img src="images/Brumbies.png" height ="70%"> Brumbies</td>
                    <td><strong></strong></td>
                  <td align="left" width=><img src="images/Crusaders.png" height="80%"> Crusaders</td>    
            </tr>
            <tr>
                    <td width="5%"></td>
                    <td width=20%><img src="images/Brumbies.png" height ="70%"> Brumbies</td>
                    <td><strong></strong></td>
                  <td align="left" width=><img src="images/Crusaders.png" height="80%"> Crusaders</td>    
            </tr>
            <tr>
                    <td width="5%"></td>
                    <td width=20%><img src="images/Brumbies.png" height ="70%"> Brumbies</td>
                    <td><strong></strong></td>
                  <td align="left" width=><img src="images/Crusaders.png" height="80%"> Crusaders</td>    
            </tr>
    </table>
          
  
  
</div>

<!--jumbotron ranking y tabla de posiciones-->
<div class="row">
  <div class="container1">
      <div class="jumbotron text-center col-md-8">
          <h1>Ranking</h1>
          <p>Here you will learn how to become awesome.</p>
          <a class="btn btn-danger pull-right" href="{% url 'awesome_info' %}">More Info</a>
       </div>
   
      <div class="jumbotron text-center col-md-8">
          <h1>Tabla de posiciones</h1>
          <p>Tubular dude.</p>
          <a class="btn btn-success" href="{% url 'rad_info' %}" role="button">More Info</a>
      </div>
  </div>
</div>


<?php
    include_once "footer.php";
?>