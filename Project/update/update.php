<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "renew_bim";

$conn = mysqli_connect($servername, $username, $password, $dbname);


?>
<?php
$request = escapeshellcmd("python C:/xampp/htdocs/Project/data_scraper.py");
$result = exec($request);


//$output = shell_exec($result);
//$result = system("data_scraper.py",$reval);

//echo $reval;
//var_dump($output);


//$out = shell_exec($result);
//var_dump($out);
//$output = json_decode($out);
//var_dump($output);
//foreach($output as $o)
//{
 // echo $o ."<br>";//}

?>
