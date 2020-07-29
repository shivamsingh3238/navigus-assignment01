<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script>  

</script>  
<style>
body {
  font-family: Arial;
  
 
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}

.split.left {
    left: 0;
    background-color: #111;
    width: 30%;
	background-image: url(blue-bg.jpg);
	background-size: 125%;
    opacity: 0.9;
    height : 100%;
}

div#div_3 {
    width: 600px;
    margin-left: 35%;
    position: fixed;
    height: 100%;
    margin-top: 33px;
    overflow-y: scroll;
}
.centeredx1 {
    position: absolute;
    top: 30%;
    left: 41%;
    transform: translate(-50%, -50%);
    text-align: center;
	
}

input#button_1 {
    width: 86px;
    height: 30px;
    border-radius: 12px;
}

div#div_3 {
    width: 50%;
    margin-left: 35%;
    position: fixed;
   
    margin-top: 33px;
}

p#second_div_p {
    color: black;
    font-style: oblique;
    font-weight: 800;
    border-bottom: 1px solid;
    position: static;
    height: 31px;
}

div.img_div {
    border: 1px solid #e4d1d1; 
    width: 114px;
    height: 100px;
    border-radius: 9px;
}


div#log_button {
    border: 1px solid;
    margin-top: 65px;
    border-radius: 9px;
    height: 28px;
    text-align: center;
	    background-color: #ada3a3;
}

ul {
  display: inline;
  margin: 0;
  padding: 0;
}
ul li {display: inline-block;}
ul li:hover {background: #555;}
ul li:hover ul {display: block;}
ul li ul {
  position: absolute;
  width: 170px;
  height: 300px;
  display: none;
  font-size: 13px;
}
ul li ul li { 
  background: white; 
  border: 1px solid;
  display: block; 
}
ul li ul li a {display:block !important;} 
ul li ul li:hover {background: #666;}

p#py {
    color: white;
    font-family: none;
    font-size: 21px;
}
  
</style>

<body>
  <?php
            session_start();
            include 'connection.php';
	    if(!isset($_SESSION['user_name']))
	    {
              header('location:index.php');
              exit();
            }
            $username = $_SESSION['user_name']; 
            
            $currtime = $_SESSION['Time'];
            $query ="select * from registration where username='$username '";  
            $data = mysqli_query($conn, $query);  
            $result = mysqli_fetch_assoc($data);
    ?>       


            <div clas="main_div">

            <div class="split left">
            <div class="centeredx1">
			
                <div class="img_div"> 
                <ul>
                <li>				
                  <?php echo "<img src='$result[image]' width='100'>"; ?>
				<ul>
				<li class="img_description_1"><?php echo "$result[name]"; ?></li>
				<li><?php echo "$result[email]"; ?></li>
				</ul>
				<li>
				</ul>
               </div> 
               <p id="px">Welcome<p> <p id="py"><?php echo "$result[name]"."<br>"; ?></p>
               <div id="log_button"><a href="logout.php">Logout</a></div>
			
            </div>
            </div>

        <div id="div_3">
            <p id="second_div_p"></p>
            <?php include 'tableconect.php'; ?>
            </div>
        </div>    
</body>
</html> 
