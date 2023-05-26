<!DOCTYPE html>
<html>
<head>
  <title>AWS Load Balancer</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body >
	<div> 
             <nav class="zone green sticky">
               
                 <h1 class="zone">AWS Application Load Balancer<h1/> 

             </nav>



              <?php

  echo "<table>";

  #The URL root is the AWS meta data service URL where metadata
  # requests regarding the running instance can be made
  $urlRoot="http://169.254.169.254/latest/meta-data/";

  # Get the instance ID from meta-data and print to the screen
  echo "<tr><td>InstanceId</td><td><i>" . file_get_contents($urlRoot . 'instance-id') . "</i></td><tr>";



  # Availability Zone
  echo "<tr><td>Availability Zone</td><td><i>" . file_get_contents($urlRoot . 'placement/availability-zone') . "</i></td><tr>";

  echo "</table>";

?>


              
             <div class="container zone">
              
              <img class="cover" src="./img/Asg.png">
             </div>         

     </div>
</body>
</html>

