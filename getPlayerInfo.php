<?php 
$name=$_GET["name"];
switch ($name){
	case "Lebron James":
		$url="http://espn.go.com/nba/player/_/id/1966/lebron-james";
		break;
	case "Kobe Bryant":
		$url="http://espn.go.com/nba/player/_/id/110/kobe-bryant";
		break;
	case "Steve Nash":
		$url="http://espn.go.com/nba/player/stats/_/id/592/steve-nash";
		break;
	case "Dirk Nowitzky":
		$url="http://espn.go.com/nba/player/_/id/609/dirk-nowitzki";
		break;
	default:
		echo "Something is broken, name: " . $name;
		$url="";
}
$ch = curl_init();
$timeout=10;
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
$imgPattern= "'<img src\=\"http\://a.espncdn.com/combiner/i\?img\=/i/headshots/nba/players(.*?)>'";
$statsPattern= "'<thead><th>PPG</th>(.*?)</tr>'";
preg_match ($imgPattern, $file_contents, $img);
preg_match ($statsPattern, $file_contents, $stats);
echo $img[0] . "<table>" . $stats[0] . "</table>"; 
?>			
