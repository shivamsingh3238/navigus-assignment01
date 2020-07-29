<!DOCTYPE HTML>
<html>
<head>
<title>Signup_page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<style>
body {
 background-color: #7d4f4f45;
 }

div#main {
    max-width: 55%;
    border: 3px solid #dadadc;
    margin-left: 20%;
    margin-top: 69px;
    height: 530px;
    border-radius: 23px;
    /* border-style: inset; */
    background-color: white;
    background-image: url(login.png);
    background-size: 101% 115px;
    background-repeat: no-repeat;
	box-shadow: 0 0 15px 0 #494b4e;
}

div#second {
    max-width: 915px;
    height: 70%;
    margin-top: 116px;
    background-color: white;
    border-radius: 20px;
	text-align: center;
	    font-family: serif;
}

p#first_P {
    padding-top: 16px;
}
input#f_2 {
    margin-left: 31px;
}
p#second {
    margin-top: -9px;
}
input#f_3 {
    margin-left: 6px;
}
input#f_4 {
    margin-left: 9px;
}
p#third {
    margin-top: -9px;
}
p#fort {
    margin-top: -9px;
}

p#five {
    margin-left: -46px;
    margin-top: -9px;
}

h2 {
    font-family: inherit;
    margin-top: 1px;
    margin-left: -32%;
	font-size: larger;
}
input#fileSelect {
    margin-left: 12px;
}

input[type="submit"] {
    margin-top: 28px;
    width: 99px;
    height: 31px;
    border-radius: 13px;
    background-color: #96ea99;
}

.upload {
    margin-top: -8px;
}

a {
    margin-left: 317px;
}

p#sign_p {
    margin-top: -1px;
}
</style>
<body>
    
<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $Fullname= mysqli_real_escape_string($conn,$_POST['Fname']);
    $Email= mysqli_real_escape_string($conn,$_POST['Email']);
    $username= mysqli_real_escape_string($conn,$_POST['urname']);
    $password= mysqli_real_escape_string($conn,$_POST['password']);
    $Cpassword= mysqli_real_escape_string($conn,$_POST['cpassword']);
    $file = $_FILES['uploadfile'];  
    $filename = $_FILES['uploadfile']['name'];  
    $filetmp = $_FILES['uploadfile']['tmp_name'];  
    $upload = "upload/".$filename;  
    move_uploaded_file($filetmp,$upload); 
    $emailquery= "select * from registration where email= '$Email' ";
    $query = mysqli_query($conn,$emailquery);
    
    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        ?>
            <script>
                alert("Email alraedy exists");
            </script>
        <?php
    }else{
        if($password === $Cpassword){

            $insertquery= " insert into registration(name, username, email, password,image) values('$Fullname','$username','$Email','$password','$upload')";
            $iquery =mysqli_query($conn,$insertquery);
            
            if($iquery){
                ?>
                    <script>
                        alert("Registation Sucessfull");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("Registation Fail");
                    </script>
                <?php
            }

        }else{
            echo 'password are not matching';
        }
    }

}


?>


<div id="main">
<div id="second">
<form action=""method="post" enctype="multipart/form-data">
    
   <p id="first_P">Full Name: <input id="f_1" type="text" name="Fname"required><br><br></p>
   <p id="second">Email: <input id="f_2" type="text" name="Email"required><br><br> </p>
   <p id="third">Username: <input id="f_3" type="text" name="urname"required><br><br> </p> 
   <p id="fort">Password: <input id="f_4" type="password" name="password"required><br><br> </p>
   <p id="five">Conform Password: <input id="f_5" type="password" name="cpassword"required><br><br> </p>
   
   <div class='upload'>
       <h2>Upload Profile Picture</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="uploadfile" id="fileSelect">
        
    </div>
   <input type="submit" name="submit" Value="Submit"> 
  
   </form>
   <p id="sign_p"><a href="login.php">Login</a></p>
</div>   
 </div>
</body>
</html>