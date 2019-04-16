<!DOCTYPE HTML>

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
                    <br/><br/><br/>
                    
                    <!-- Table 1 -->
                    <span>
                    <table class="align_left">
                        <tr>
                            <th></th>
                            <th>Your Appliance</th>
                        </tr>
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
                                    $type = "SELECT ItemType FROM appliances WHERE ModelNum = '$model'";
                                
                                $result1 = $conn->query($type);
                                
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
                                    $watts = "SELECT Watts FROM appliances WHERE ModelNum = '$model'";
                                
                                $result3 = $conn->query($watts);
                                
                                while($row = mysqli_fetch_array($result3)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Cost per day(24hrs)</td>
                            <td>
                                <?php
                                    $day = 24.00;
                                    while($row = mysqli_fetch_array($result3)){
                                    $num = $row[0];
                                        
                                        echo $num * $day;
                                }
                                
                                 
                                ?>
                            </td>    
                        </tr>
                    </table>
                    </span>
                    
                    <!-- Table 2 -->
                    <span>
                    <table>
                        <tr>
                            <th></th>
                            <th>Your Appliance With Renewable Energy</th>
                        </tr>
                        <tr>
                            <td>Installation & Purchase Cost</td>
                            <td>                     <!-- Query need to change-->
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
                            <td>Return on Investment</td> <!-- pending approval -->
                            <td>
                                <?php
                                    $type = "SELECT ItemType FROM appliances WHERE ModelNum = '$model'";
                                
                                $result1 = $conn->query($type);
                                
                                while($row = mysqli_fetch_array($result1)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <!-- Query need to change-->
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
                            <td> <!-- Query need to change-->
                                <?php
                                    $watts = "SELECT Watts FROM appliances WHERE ModelNum = '$model'";
                                
                                $result3 = $conn->query($watts);
                                
                                while($row = mysqli_fetch_array($result3)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Cost per day(24hrs)</td>
                            <td>
                                <?php
                                    $day = 24.00;
                                    while($row = mysqli_fetch_array($result3)){
                                    $num = $row[0];
                                        
                                        echo $num * $day;
                                }
                                
                                 
                                ?>
                            </td>    
                        </tr>
                    </table>
                    </span>
                    
                    <!-- Table 3 -->
                    <span>
                    <table>
                        <tr>
                            <th></th>
                            <th>Your Appliance</th>
                        </tr>
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
                                    $type = "SELECT ItemType FROM appliances WHERE ModelNum = '$model'";
                                
                                $result1 = $conn->query($type);
                                
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
                                    $watts = "SELECT Watts FROM appliances WHERE ModelNum = '$model'";
                                
                                $result3 = $conn->query($watts);
                                
                                while($row = mysqli_fetch_array($result3)){
                                    echo $row[0];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Cost per day(24hrs)</td>
                            <td>
                                <?php
                                    $day = 24.00;
                                    while($row = mysqli_fetch_array($result3)){
                                    $num = $row[0];
                                        
                                        echo $num * $day;
                                }
                                
                                 
                                ?>
                            </td>    
                        </tr>
                    </table>
                    </span>
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
							<h3>Khalid Clarke</h3>
							<p>In posuere eleifend odio quisque semper augue wisi ligula.</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Delano Frederick</h3>
							<p>In posuere eleifend odio quisque semper augue wisi ligula.</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Akeem Greenidge</h3>
							<p>In posuere eleifend odio quisque semper augue wisi ligula.</p>
						</div> <br/>
                        <div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Che Roach</h3>
							<p>In posuere eleifend odio quisque semper augue wisi ligula.</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Henry Dorsett Case</h3>
							<p>In posuere eleifend odio quisque semper augue wisi ligula.</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Willis Corto</h3>
							<p>In posuere eleifend odio quisque semper augue wisi ligula.</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Linda Lee</h3>
							<p>In posuere eleifend odio quisque semper augue wisi ligula.</p>
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