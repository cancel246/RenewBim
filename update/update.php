<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "renew_bim";

$conn = mysqli_connect($servername, $username, $password, $dbname);


?>
<?php
$request = escapeshellcmd("python D:/xampp/htdocs/update/data_scraper.py");

system($request);
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
