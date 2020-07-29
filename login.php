<!DOCTYPE html>  
 <html lang="en">  
 <head>  
   <meta charset="UTF-8">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <title>Login_page</title>  
 </head>  
 <style>
 
 body {
    background-color: #7d4f4f45;
 
 }
 div#main_div {
    max-width: 55%;
    border: 3px solid #dadadc;
    margin-left: 20%;
    margin-top: 70px;
    height: 380px;
    border-radius: 23px;
    /* border-style: inset; */
    background-color: white;
	background-image: url(Image/login.png);
	background-size: 101% 113px;
    background-repeat: no-repeat;
    box-shadow: 0 0 15px 0 #494b4e;
		
}

div#second_div {
    max-width: 915px;
    max-height: 70%;
    margin-top: 113px;
   background-color: white;
    border-radius: 20px;
}
h2 {
    text-align: center;
}

form {
    text-align: center;
    padding-top: 1px;
    font-size: 15px;
}

h2 {
    text-align: center;
    margin-top: 13px;
	font-family: cursive;
    font-size: 25px;
	
}

input#sub_p {
    font-size: 19px;
    font-family: monospace;
    margin-left: -85px;
    border-radius: 12px;
    width: 105px;
    margin-top: -13px;
	background-color: #96ea99;
	
}
a {
    margin-left: 38%;
}
 </style>
 <body> 
<div id="main_div">
 
<div id="second_div">
 <h2>Login</h2>  
   <form action=""method="post">  
  <p id="first_p">Username: <input type="text" name="un"><br><br> </p> 
  <p id="Second_p">Password: <input type="password" name="pw"><br><br>  </p>
  <p id="sign_p"><a href="signup.php">Sign up</a></p>
  <input id="sub_p" type="submit" name="b1" Value="Submit">
   </form>  
 </div>
</div> 
 </body>  
 </html>  
 <?php  
session_start();
 include 'connection.php';  
 if(isset($_POST['b1']))  
 {  
 $uname= $_POST['un'];  
 $pwd= $_POST['pw'];  
 $query = "select * from registration where username='$uname' && password='$pwd'";  
 $data = mysqli_query($conn, $query);  
 $totRec = mysqli_num_rows($data);

 if($totRec==1){
    
  $result = mysqli_fetch_assoc($data);

  $Timage = $result[image];
  $Tname = $result[name];
  $TEmail = $result[email];
  $Time = date("h:i:sa");
 }
 if($totRec==1)  
 {  
   
   echo "Login Ok";  
   $_SESSION['user_name'] = $uname;
   
   
   $_SESSION['Time'] = date("h:i:sa");
   
   $insertquery= " insert into timestamp(image,name, email,time) values('$Timage','$Tname','$TEmail','$Time')";
   $iquery =mysqli_query($conn,$insertquery);
   header('location:userpannal.php');  
 }else  
 {  
  ?>
      <script>
          alert("Detail Worng")
      </script>
  <?php
  header('location:unathutication.html'); 
 }  
 }  
 ?>
