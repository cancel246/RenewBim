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

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "renew_bim";

            $conn = mysqli_connect("localhost", "root", "", "renew_bim");

            if (!$conn) {
                die ("Connection failed:" . mysqli_connect_error());
                exit;
            }
            


            $model = $_POST["modelNo"];

            $sql = "SELECT Cost FROM appliances WHERE ModelNum ='" .$model "'";
        
            $results=mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($results)>0) {
                while($row=mysqli_fetch_assoc($results)){
                    echo $row[1]." " . $row[2]. " ". $row[3]. " ". $row[4]. " ". $row[5];
                    echo <br/>;
                }
            }
            
           /* if($sql = $mysqli->query("SELECT Cost FROM applicances where ModelNum = '$model'"))
            {
                print($sql->num_rows);
                    $sql->close();
            }
*/

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
                    <table>
                        <tr>
                            <th></th>
                            <th>Your Appliance</th>
                            <th>Your Appliance with renewable energy</th>
                            <th>Energy Efficent Appliance with renewable energy</th>
                        </tr>
                        <tr>
                            <td>Model Number</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Brand Name</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                        <td>Watts of Appliance</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Approximate Cost per Hour</td>
                            <td></td>
                            <td></td>
                            <td></td>    
                        </tr>
                            
                        
                    </table>
                    <br/><br/><br/><br/><br/><br/>
					<form action="" method="post">
                    Enter another appliance model number if you wish to search more:    <br/><br/>
                    <input name="modelNo" type="text" placeholdder="Model Number...">  
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