<?php
$servername = "localhost";
$username = "mrro_root";
$password = "root";
$dbname = "mrro_site";

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

    <link href="assets/css/scoreboardstyle.css" type="text/css" rel="stylesheet">
</head>
<body>

	    <section class="banner">      
        
		<video src="assets/video/bg.mp4"muted loop autoplay></video>
	
		<div class="overlay"></div>

    <div class="scoreboard">
        <table>
            <tr>
                <th>Username</th>
                <th>Points</th>
            </tr>
            <?php
                $sql = "SELECT username, lvl0+lvl1+lvl2+lvl3+lvl4+lvl5+lvl6+lvl7+lvl8+lvl9+lvl10 AS Points FROM tbl_member ORDER BY points DESC";
                $result = $conn-> query($sql);
                
                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["username"] ."</td><td>". $row["Points"] ."</td></tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                $conn-> close();
                ?>
        </table>
            <br>
                <center><a href="home.php">Back to Home</a></center>
                

    </div>
        <div class="footer">
            <p>Mr.Robot™</p>
            <p>Nadeesh | Sandun</p>
        </div>

	 </section>


</body>
</html>
