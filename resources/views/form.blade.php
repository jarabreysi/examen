<?php 


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> </title>
 </head>
 <body>
 	<form method="post" action="">
		<h1>ConsultorPeli</h1>
		<label>
			<input type="text" placeholder="Nombre de la pelicula" name="pelicula" required>
			<?php 
$pe=$_POST['pelicula'];

$url="http://www.omdbapi.com/?apikey=16771658&t=".$pe;
$options=array(
	CURLOPT_HEADER=>false,
	CURLOPT_RETURNTRANSFER=>true,
	CURLOPT_TIMEOUT=>20,
	CURLOPT_URL=>$url,

	//CURLOPT_FAILONERROR=>true;
	CURLOPT_CUSTOMREQUEST=>"GET",
);

	$handle=curl_init();
	curl_setopt_array($handle, ($options));
	$response=curl_exec($handle);
	echo $response;
	$film=json_decode($response,true);
	/*echo "<table>";
	echo "<tr><td><img src='$film[poster]/></td>
	<td><h3>$film[title]</h3> <p>$film[plot]</p></td>
	</tr>"

	//echo "</table>"
	*/

?>
			<input type="submit" value="Pelicula">
		</label>
	</form>
 </body>
 </html>


