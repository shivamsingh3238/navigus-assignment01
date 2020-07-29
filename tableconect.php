<?php
include 'connection.php';
$selectquery = "select * from timestamp ";
$query= mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);
$res= mysqli_fetch_array($query);


?>

<!DOCTYPE html>  
 <html lang="en">  
 <head>  
   <meta charset="UTF-8">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <title>DocumentLast login User</title> 
 </head> 
 <style>
  
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#Scrollowing{
  overflow: auto;
  overflow-y: hidden;
  overflow-x: auto;

}    

#sc_td{
overflow : scroll;  
}
</style> 
 <body>
         <div id="scr_div">  
             <h1> List of the last login candidates</h1>

             <div>
                <table>
                        <thead>
                            <tr>
                                <th>Avtar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Time</th> 
                            </tr>
                        </thead>
                        <div>
                        <tbody>
                            <?php
                                include 'connection.php';
                                $selectquery = "select * from timestamp ";
                                $query= mysqli_query($conn,$selectquery);
                                $nums = mysqli_num_rows($query);
                                while($res= mysqli_fetch_array($query)){
                            ?>
                                    <tr id="sc_td">
                                        <td><?php echo "<img src='$res[image]' width='100'>"; ?></td>
                                        <td><?php echo $res['name']; ?> </td>
                                        <td><?php echo $res['email']; ?> </td>
                                        <td><?php echo $res['time']; ?> </td>
                                    </tr>           
                            <?php    

                                }
                            ?>
                            
                        </tbody>
                      </div>
                </table>
            
            </div>
        </div>




</body>
</html>