<?php
$server= 'localhost';
$user ='root';
$password= "";
$db ="navigus";

$conn =mysqli_connect($server,$user,$password,$db);

if($conn){
    /*   conection sucess */
}else{
    ?>
        <script>
            alert("Login Fail")
        </script>
    <?php
}