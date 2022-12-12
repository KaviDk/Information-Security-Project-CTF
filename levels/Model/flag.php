<?php

const HOST = 'localhost';

const USERNAME = 'id19050723_dakshina_uname';

const PASSWORD = 'W<PvGR4P=nw9^I{g';

const DATABASENAME = 'id19050723_dakshina';

// Create connection
$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASENAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    if (isset($_POST["flag-btn"])) {
        $flag_id = $_POST['flagid'];
        $flag_point = $_POST['flagpoint'];
        $level_id = $_POST['levelid'];
    }

    // level 5 flag is here
    // if(! empty($level_id)){
    //     if($level_id == 4){
    //         echo '<script> document.cookie = "flag=Y0ug0Tth3C0ok!e; path=/levels/level5.php; " </script>';
    //     }
    // }

    //get level flag from the db
    $sql = "SELECT flag FROM tbl_flag where id = '$flag_id'";
    $result = $conn-> query($sql);
    $arrFlag = $result-> fetch_assoc();
    $hashedFlag = $arrFlag["flag"];

    //get current lvl points
    $lvlPoint = 0;
    $name = mysqli_real_escape_string($conn, $_SESSION["username"]);
    $lvlsql = "SELECT lvl$level_id FROM tbl_member where username ='".$name."' ";
    $lvlresult = $conn-> query($lvlsql);
    $lvlPoint = $lvlresult-> fetch_assoc();
    $levelPoint = $lvlPoint["lvl$level_id"];
    /***************************** */

    //get user entered flag from the lvlphp
    if (isset($_POST["flag"])) {
        $flag = $_POST["flag"];
    }

    $flagh = md5($flag);

    if(! empty($hashedFlag)){
        if(! empty($flagh)){
                        
            if($flagh == $hashedFlag){
                $loginFlag = 1;
            }
            else{
                $loginFlag = 0;
            }
        }
    }

    if($loginFlag == 1){

        if($levelPoint == 0){
        
            //add points to the user
            $name = mysqli_real_escape_string($conn, $_SESSION["username"]);
            $query = "UPDATE tbl_member SET lvl$level_id = lvl$level_id + '$flag_point' WHERE username ='".$name."' ";
            mysqli_query($conn,$query);

            $flagStatus = array(
            //     "message" => "<script> alert('Correct Flag, Good Job')</script>"
            //     "message" => "<script>window.location.href = 'level1.php';</script>"
            );

            echo '<script>alert("Correct Flag, Good Job")</script>';
            //    echo '<script>window.location.href = "level1.php";</script>';

            if($level_id == 0){
                echo '<script>window.location.href = "level1.php";</script>';
            }else if($level_id == 1){
                echo '<script>window.location.href = "level2.php";</script>';
            }else if($level_id == 2){
                echo '<script>window.location.href = "level3.php";</script>';
            }else if($level_id == 3){
                echo '<script>window.location.href = "level4.php";</script>';
            }else if($level_id == 4){
                echo '<script>window.location.href = "level5.php";</script>';
            }else if($level_id == 5){
                echo '<script>window.location.href = "level6.php";</script>';
            }else if($level_id == 6){
                echo '<script>window.location.href = "level7.php";</script>';
            }else if($level_id == 7){
                echo '<script>window.location.href = "level8.php";</script>';
            }else if($level_id == 8){
                echo '<script>window.location.href = "level9.php";</script>';
            }else if($level_id == 9){
                echo '<script>window.location.href = "level10.php";</script>';
            }
        }
        else{
            echo '<script>alert("You have allready done this level")</script>';
        //    echo '<script>window.location.href = "level1.php";</script>';

            if($level_id == 0){
                echo '<script>window.location.href = "level1.php";</script>';
            }else if($level_id == 1){
                echo '<script>window.location.href = "level2.php";</script>';
            }else if($level_id == 2){
                echo '<script>window.location.href = "level3.php";</script>';
            }else if($level_id == 3){
                echo '<script>window.location.href = "level4.php";</script>';
            }else if($level_id == 4){
                echo '<script>window.location.href = "level5.php";</script>';
            }else if($level_id == 5){
                echo '<script>window.location.href = "level6.php";</script>';
            }else if($level_id == 6){
                echo '<script>window.location.href = "level7.php";</script>';
            }else if($level_id == 7){
                echo '<script>window.location.href = "level8.php";</script>';
            }else if($level_id == 8){
                echo '<script>window.location.href = "level9.php";</script>';
            }else if($level_id == 9){
                echo '<script>window.location.href = "level10.php";</script>';
            }
        }

    }
    else if($loginFlag == 0){
        $flagStatus = array(
            "message" => "Wrong Flag"
        );
    } 
?>
