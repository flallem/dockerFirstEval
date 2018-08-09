<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Docker Lab - First Evaluation</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />

</head>
<body> 

 
<div id="content-outer">
<!-- start content -->
<center>
<div id="content">
	<table border="0" width="50%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">

<?php
# Get geo information 
$response = file_get_contents('http://geoip.loc:8080/json');                   
$response = json_decode($response);

# Print the data
?>
			<center>
				<h1>Information collected from an other container</h1>
				<br/>
				<div id=info-description">freegeoip is a a third tier web service returning informations in a json format about your connexion.
					<b>if the public ip adress information is not displayed, please fix it before going further</b>
				</div>
				<br/>
				<img src="images/world.jpg" width="600"/>
				<br/>
				<br/>
				<h1>Your public Address</h1><h2><?php echo $response->ip; ?></h2>
				<h1>Your Country</h1><h2><?php echo $response->country_name; ?></h2>
				<h1>Your City</h1><h2><?php echo $response->city; ?> <?php echo $response->region_name; ?></h2>
				<h1>Your Time Zone</h1><h2><?php echo $response->time_zone; ?></h2>
				<h1>Your Lattitude / Longitude</h1><h2><?php echo $response->latitude; ?> / <?php echo $response->longitude; ?></h2>
				<p>This information has been retrieved from a local container </p>
		
			</center>
			</div>
			<!--  end table-content  -->
	
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
</center>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
 
</body>
</html>
