<?php
$servername = "localhost";
$username = "mrro_sql";
$password = "root";
$dbname = "mrro_sql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="../assets/css/sqlstyle.css" type="text/css" rel="stylesheet">
</head>
<body>

	    <section class="banner">      
        
		<img src="../assets/images/cover.jpg"></img>
	
		<div class="overlay"></div>
<center>
    <div class="search-container">
        <form action="" method="GET">
            <input type="text" id="search" name="search" placeholder="Type here">
            <input type="submit" id="s-btn" name="s-btn" value="Search">
        </form>
    </div>
</center>

    <div class="scoreboard">
        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
            </tr>
            
            <?php
                if (! empty($_GET["s-btn"])) {
                    if(isset($_GET["s-btn"])){
                        $uname = $_GET['search'];
                    }
                        $sql = "SELECT name, email FROM tbl_user WHERE name = '".$uname."'" ;
                        $result = $conn-> query($sql);
                        
        

                        if ($result-> num_rows > 0){
                            while ($row = $result-> fetch_assoc()){
                                echo "<tr><td>". $row["name"] ."</td><td>". $row["email"] ."</td></tr>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "0 result";
                        }
                        
                        $conn-> close();
                    
                }
            ?>

        </table>
        
                

    </div>
        <div class="footer">
            
        </div>

	 </section>


</body>
</html>
