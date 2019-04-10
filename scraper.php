<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASIN</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <form method="get">
    <label>ASIN:<input name="asin"></label>
</form>
<?php
$asin = filter_input(INPUT_GET, 'asin');
if(!empty($asin)){
    echo "<hr>";

    $baseURL = 'https://www.amazon.com/Apple-iPhone-Plus-Unlocked-64GB/dp/B0775FLHPN/ref=br_asw_pdt-3?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=&pf_rd_r=ZX4S1B30DP84G3H5SAV3&pf_rd_t=36701&pf_rd_p=74c2af8b-5acb-4bf8-b252-8b1584c94b14&pf_rd_i=desktop';
    $html = file_get_contents($baseURL . $asin);
    $isMatched = preg_match('!"priceblock_ourprice".*\$(.*)<!', $html, $match);
   
                    $price = 0;
                    if(isMatched && isset($match[1])){
                         $price = $match[1];              
                    }
                    $isMatched = preg_match_all('!"(https://images-na.ssl-images-amazon.com/images/I/[^"]+\.jpg)"!', $html, $matches);
                    if(isMatched && isset($matches[1])){
                        foreach($matches[1] as $img){
                            echo "<img src='$img' width='300'><br/>\n";
                        }

                        $price = $match[1];
                    }
                    echo "<pre>",
                    print_r($matches);
                    echo "/pre>";
                }
    echo "<h1>{$price}</h1>";
?>
    

    
</body>
</html>