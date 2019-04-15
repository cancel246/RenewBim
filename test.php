<?php

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "renew_bim";

            $conn = mysqli_connect("localhost", "root", $password, "renew_bim");

            if ($conn->connect_error) {
                die ("Connection failed:" . $conn->connect_error);
            }
            


            $model = $_POST["mnumber"];

            $sql = "SELECT * FROM appliances WHERE ModelNum = '$model'";
        echo $sql;

            $result = $conn->query($sql);
        
            
                while($row = mysqli_fetch_array($result)){
                    echo $row[1]." <br/>" 
                        . $row[2]. " <br/>"
                        . $row[3]. " <br/>"
                        . $row[4];
                }

?>