<!DOCTYPE HTML>

<?php
    
?>

<html>
	<head>
		<title>RenewBim - Energy Efficiency Calculator</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
        
        <?php
            session_start();    
        
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "renew_bim";

            $conn = mysqli_connect("localhost", "root", $password, "renew_bim");

            if ($conn->connect_error) {
                die ("Connection failed:" . $conn->connect_error);
            }
            


            $model = $_POST["mnumber"];
        ?>

		<!-- Header Wrapper -->
			<div class="wrapper style1">
			
			<!-- Header -->
				<div id="header">
					<div class="container">
							
						<!-- Logo -->
							<h1><a href="#" id="logo">RenewBim</a></h1>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="#energy">Energy Calculator</a></li>
									<li><a href="#goto">About Us</a></li>
								</ul>
							</nav>
	
					</div>
				</div>
				
			<!-- Banner -->
				<div id="banner">
					<section class="container">
						<h2>RenewBim</h2>
						<span >Energy Efficiency Calculator</span>
					</section>
				</div>

			</div>
		
		<!-- Section One -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
					   <h2 align="center">Instructions</h2>
                        <span class="byline">Here you will find information needed to use the energy efficiency calculator.</span>
                    </header>
				</section>
			</div>

		<!-- Section Two -->
			<div class="wrapper style3">
				<section class="container">
					<header class="major">
                        <span id="energy">&nbsp;</span>
                        
						<h2 id="energy">Energy Efficiency Calculator</h2>
					</header>
                    <span id="a">Your <br/> Appliance</span>
                    <span id="b">Your Appliance with Renewable Energy</span>
                    <span id="c">Energy Efficient Appliance with Renewable Energy</span>
                    <br/><br/><br/>
                    
                    <!-- Table 1 -->
                    
                    <table>
                        <tr><th></th><th></th></tr>
                        <tr>
                            <td>Model Number</td>
                            <td>
                                <?php
                                    $modelNum = "SELECT ModelNum FROM appliances WHERE ModelNum = '$model'";
                                
                                $result = $conn->query($modelNum);
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo $row[0];
                                }
                                ?>
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Type</td>
                            <td>
                                <?php
                                $varType = "";
                                
                                    $type = "SELECT ItemType FROM appliances WHERE ModelNum = '$model'";
                                
                                $result1 = $conn->query($type);
                                
                                while($row = mysqli_fetch_array($result1)){
                                    echo $row[0];
                                    $varType = $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Brand Name</td>
                            <td>
                               <?php
                                    $brand = "SELECT Brand FROM appliances WHERE ModelNum = '$model'";
                                
                                $result2 = $conn->query($brand);
                                
                                while($row = mysqli_fetch_array($result2)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Wattage (kWh)</td>
                            <td>
                                <?php
                                    $varWatts = 0.00;
                                    $watts = "SELECT Watts FROM appliances WHERE ModelNum = '$model'";
                                
                                $result3 = $conn->query($watts);
                                
                                while($row = mysqli_fetch_array($result3)){
                                    echo $row[0];
                                    $varWatts = $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Monthly Cost</td>
                            <td>
                                <?php
                                    $varUse = 0.00;
                                    $varCost = 0.00;
                                    $use = "SELECT DailyUse FROM appliances where ModelNum = '$model'";
                                
                                    $result4 = $conn->query($use);
                                
                                    while($row = mysqli_fetch_array($result4)){
                                    $varUse = $row[0]; 
                                    $varCost = $varWatts * $varUse * 0.176 * 30;   
                                    echo "$".number_format((float)$varCost, 2, '.', '');
                                }
                                    
                                 
                                ?>
                            </td>    
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    </table>
                    
                    
                    <!-- Table 2 -->
                
                    <table>
                        <tr><th></th><th></th></tr>
                        <tr>
                            <td>Installation & Purchase Cost</td>
                            <td>                     <!-- Query need to change-->
                                <?php
                                    $cost = "SELECT cost FROM solarpanel WHERE id = 'solarpanel2' ";
                                
                                $result = $conn->query($cost);
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo "$".number_format((float)$row[0], 2, '.', '');
                                    
                                }
                                ?>
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Number of Solar Panels</td>
                            <td> <!-- set num to be an if statement based on above-->
                               <?php 
                                    /*$num = "SELECT Brand FROM appliances WHERE ModelNum = '$model'";
                                
                                $result2 = $conn->query($brand);
                                
                                while($row = mysqli_fetch_array($result2)){
                                    echo $row[0];
                                } */
                                
                                echo 2;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Brand Name</td>
                            <td>
                               <?php
                                    $brand = "SELECT Brand FROM appliances WHERE ModelNum = '$model'";
                                
                                $result2 = $conn->query($brand);
                                
                                while($row = mysqli_fetch_array($result2)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Wattage Generated</td>
                            <td>
                               <?php
                                    $varValue = 0.00;
                                    $sWatts = "SELECT kWh FROM solarpanel WHERE id = 'solarpanel1'";
                                
                                $result2 = $conn->query($sWatts);
                                while($row = mysqli_fetch_array($result2)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                        <td>Appliance Wattage with Renewable(kWh)</td> 
                            <td> <!-- Query need to change to suit-->
                                <?php
                                    $varSWatts = 0.00;
                                    $watts = "SELECT kWh FROM solarpanel WHERE id = 'solarpanel1'";
                                
                                $result3 = $conn->query($watts);
                                
                                while($row = mysqli_fetch_array($result3)){
                                    $varSWatts = $row[0];
                                    $varSWatts = $varWatts - $varSWatts;
                                    echo $varSWatts;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Monthly Savings</td>
                            <td>
                                <?php
                                    $varSavings = 0.00;
                                    $use = "SELECT DailyUse FROM appliances where ModelNum = '$model'";
                                    
                                    $result3 = $conn->query($use);
                                    while($row = mysqli_fetch_array($result3)){
                                    $varUse = $row[0];
                                        
                                    if($varSWatts < 0){
                                        $varSavings = $varCost;
                                        echo "$".number_format((float)$varSavings, 2, '.', '');
                                    }else{
                                        $varSavings = $varSWatts * $varUse * 0.176 * 30;
                                        
                                        $varSavings = $varCost - $varSavings;
                                        echo "$".number_format((float)$varSavings, 2, '.', '');
                                    }
                                }
                                
                                 
                                ?>
                            </td>    
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    </table>
                    
                    
                    <!-- Table 3 -->
                   
                    <table>
                        <tr><th></th><th></th></tr>
                        <tr>
                            <td>Type</td>
                            <td>
                                <?php
                                    $typeE = "SELECT Type FROM efficient WHERE Type = '$varType'";
                                
                                $result1 = $conn->query($typeE);
                                
                                while($row = mysqli_fetch_array($result1)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Brand Name</td>
                            <td>
                               <?php
                                    $brand = "SELECT Brand FROM efficient WHERE Type = '$varType'";
                                
                                $result2 = $conn->query($brand);
                                
                                while($row = mysqli_fetch_array($result2)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Total Cost</td>
                            <td>
                                <?php
                                $varCostS = 0.00;
                                $varCostE = 0.00;
                                $varCost = 0.00;
                                
                                    $costS = "SELECT cost FROM solarpanel WHERE id = 'solarpanel1'";
                                
                                $result = $conn->query($costS);
                                
                                while($row = mysqli_fetch_array($result)){
                                    $varCostS = $row[0];
                                }
                                $costE = "SELECT Cost FROM efficient WHERE Type = '$varType'";
                                
                                $result = $conn->query($costE);
                                
                                while($row = mysqli_fetch_array($result)){
                                    $varCostE = $row[0];
                                    $varCost = $varCostE + $varCostS;
                                    echo "$".number_format((float)$varCost, 2, '.', '');
                                }
                                
                                ?>
                            
                            </td>
                        </tr> 
                        <tr>
                            <td>Cost Difference</td>
                            <td>
                                <?php
                                $varDiff = 0.00;    
                                    $costDev = "SELECT Cost FROM appliances WHERE ModelNum = '$model'";
                                
                                $result = $conn->query($costDev);
                                
                                while($row = mysqli_fetch_array($result)){
                                    $varDiff = $varCost - $row[0];
                                    
                                    echo "$".number_format((float)$varDiff, 2, '.', '');
                                }
                                ?>
                            
                            </td>
                        </tr>
                        
                        <tr>
                        <td>Wattage of Device(kWh)</td> 
                            <td>
                                <?php
                                    $wattS = 0.00;
                                    $watts = "SELECT Watts FROM efficient WHERE Type = '$varType'";
                                
                                $result3 = $conn->query($watts);
                                
                                while($row = mysqli_fetch_array($result3)){
                                    echo $row[0];
                                    $wattS = $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Monthly Savings</td> <!-- To change to monthly-->
                            <td>
                                <?php
                                    $use = "SELECT DailyUse FROM appliances where ModelNum = '$model'";
                                    $result3 = $conn->query($use);
                                    while($row = mysqli_fetch_array($result3)){
                                        $amtSaved = $wattS * $row[0] * 0.176 * 30;
                                        echo "$".number_format((float)$amtSaved, 2, '.', '');
                                }
                                
                                 
                                ?>
                            </td>    
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    </table>
                   
                    <br/><br/><br/><br/><br/><br/>
					<form action="calc.php" method="post">
                    Enter another appliance model number if you wish to search more:     <br/><br/>
                    <input name="mnumber" type="text" placeholdder="Model Number...">  
                        <br/>
                        <input value="Find Appliance" type="submit"> &nbsp;&nbsp;&nbsp;&nbsp;
                        <input value="Reset" type="reset">
                    </form>
                    <br/>
				</section>
			</div>

		
		
		<!-- Team -->
			<div class="wrapper style5">
				<section id="team" class="container">
					<header class="major">
                        <span id="goto">&nbsp;</span>
                        
						<h2>The RenewBim Project Team </h2>
						<span class="byline">Meet the team behind the RenewBim project (pending info)</span>
					</header>
					<div class="row">
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Machel Maynard</h3>
							<p>Project Manager</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Terrell Davis</h3>
							<p>Designer</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Delano Frederick</h3>
							<p>Designer</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Khalid Clarke</h3>
							<p>Programmer</p>
						</div> <br/>
                        <div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Cherese Sealy</h3>
							<p>Programmer</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Akeem Greenidge</h3>
							<p>Business Analyst</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Che Roach</h3>
							<p>Business Analyst</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Kevin Yarde</h3>
							<p>QA Tester</p>
						</div>
					</div>
				</section>
			</div>

	<!-- Footer -->
		<div id="footer">			
			<!-- Copyright -->
				<div id="copyright">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>			
		</div>

	</body>
</html>