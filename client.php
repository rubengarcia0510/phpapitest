<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
<?php>
$url = 'http://127.0.0.1/service2';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);
//var_dump($response);

 
// Loop through colors array
echo "<div class='container'>";
echo "<h1>PHP API Test</h1>";
echo "<div class='jumbotron'>";
echo "<div class='row'>";
echo "<div class='col'>Product</div>";
echo "<div class='col'>Description</div>";
echo "<div class='col'>Size</div>";
echo "<div class='col'>Price</div>";
echo "<div class='col'></div>";
echo "<div class='col'></div>";
echo "</div>";

foreach($response as $array){
    echo "<form name='".$array['id']."' method='post' action='http://127.0.0.1/update.php'>";
	echo "<div class='row'>";
	
			//echo "<div class='col'>".$array['id'] . "</div>";
			echo "<input type='hidden' name='id' value='".$array['id']."'></input>";
			echo "<div class='col'><input type='text' class='form-control' name='name' value='".$array['name']."'></input></div>";
			echo "<div class='col'><input type='text' class='form-control' name='description' value='".$array['description']."'></input></div>";
			echo "<div class='col'><input type='text' class='form-control' name='size' value='".$array['size']."'></input></div>";
			echo "<div class='col'><input type='text' class='form-control' name='price' value='".$array['price']."'></input></div>";
			echo "<div class='col'><button type='submit' class='btn btn-primary'>update</button></div>";
			
			echo "</form>";
			echo "<div class='col'><form name='del_".$array['id']."' action='http://127.0.0.1/delete.php' method='post'>";
			echo "<input type='hidden' name='id' value='".$array['id']."'>";
			echo "<button type='submit' class='btn btn-primary'>delete</button>";
			echo "</div>";
	
	echo "</div>";
	echo "</form>";
}
	echo "<form name='new' method='post' action='http://127.0.0.1/add.php'>";
	echo "<div class='row'>";
	
			echo "<div class='col'><input type='text' class='form-control' name='name' ></input></div>";
			echo "<div class='col'><input type='text' class='form-control' name='description' ></input></div>";
			echo "<div class='col'><input type='text' class='form-control' name='size' ></input></div>";
			echo "<div class='col'><input type='text' class='form-control' name='price' ></input></div>";
			echo "<div class='col'><button type='submit' class='btn btn-primary'>new</button></div>";
			echo "<div class='col'></div>";
	
	echo "</div>";
	echo "</form>";
echo "</div>";
echo "</div>";
?>
</body>
</html>