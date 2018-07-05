<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenController extends Controller
{
    public function process(Request $request){
        $action=$request->input("pelicula");
		$url="http://www.omdbapi.com/?apikey=16771658&t=".$action;
		$options = array(
	    CURLOPT_HEADER => false,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_TIMEOUT => 20,
	    CURLOPT_URL => $url,
	    CURLOPT_FAILONERROR => true,
	    CURLOPT_CUSTOMREQUEST => "GET",);
		$handle = curl_init();
		curl_setopt_array($handle,($options));
		$response = curl_exec($handle); 
		$film=json_decode($response,true);

		

		echo " <table>";
		echo "<tr>  
		<td>  <h1> $film[Title] </h1> <p>$film[Year]</p> <h3> $film[Actors] </h3>
			<td> <img src='$film[Poster]' /> </td>

		</td> 


		</tr>";
		echo " </table>";

		
		$contador=0;
		foreach ($film as $item => $peli) {
		if ('Actors'==$item) {
				echo "<br>";
				
				echo "<br>";
				$contador=$contador+4;
				echo "Total de Actores: ".$contador;
		}
		

		}	



	 public function connect(){
		$url="http://www.omdbapi.com/?apikey=16771658&t=Shrek";
		$options = array(
	    CURLOPT_HEADER => false,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_TIMEOUT => 20,
	    CURLOPT_URL => $url,
	    CURLOPT_FAILONERROR => true,
	    CURLOPT_CUSTOMREQUEST => "GET",);
		$handle = curl_init();
		curl_setopt_array($handle,($options));
		$response = curl_exec($handle); 
		$film=json_decode($response,true);
		return "$film[Title]";
   }
   public function actors(){
		$url="http://www.omdbapi.com/?apikey=16771658&t=Shrek";
		$options = array(
	    CURLOPT_HEADER => false,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_TIMEOUT => 20,
	    CURLOPT_URL => $url,
	    CURLOPT_FAILONERROR => true,
	    CURLOPT_CUSTOMREQUEST => "GET",);
		$handle = curl_init();
		curl_setopt_array($handle,($options));
		$response = curl_exec($handle); 
		$film=json_decode($response,true);
		return count("$film[Actors]");
   }
   


}
}

