<html>
    <head>
    <script src-"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" type="text/css" rel="stylesheet">
            <script src-"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body{
   
   background-size: cover;  
   background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1));
}
table ,th,td{
    border:1px solid black;
}
table{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    border-collapse: collapse;
    width:800px;
    border:1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
    letter-spacing: 1px;
    padding:10px 0 ;
    font-size:20px;
    table-layout:fixed;
}
table{
    width:70%;
    border-collapse: collapse;
}

th{
    text-align: center;
    background-color:  #44293b;
    color: white;
}
td{
    text-align: center;
    height:70%;
    width:40%;
    color: black;
}
th, td {
  padding: 15px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}
.content{
   
    min-height:10vh;
    margin-top:500px;
    margin-left:600px;
    text-decoration-color: #ddd;
    width:80px;height:10px;background-color:aqua;
}
nav{
        width:100%;
        height:15vh;background:rgba(0,0,0,0.2);color:white; display:flex;text-transform: uppercase;
        justify-content: space-between;align-items: center;
    }   
    nav .logo{
        width:35%;text-align: center;
    }
    nav .menu{
        width:50%;justify-content: space-between;display:flex;
    }
    nav .menu a{
        width:25%;text-decoration: none;
        color:white;font-weight: bold;
    }
</style></head>
<body>
<nav>
            <div class="logo">
                <h1 class="animated infinite heartBeat"></h1>
            </div>
            <div class="menu">
             <a href="index.php">Home</a>
             <a href="cust.php">Customers</a>
             <a href="transaction.php">transaction details</a>
             
             
            </div>
        </nav>
<div>

<table>
<th>Sender</th><th>Receiver</th><th>Amount</th>
<th>Date_Time</th>




<?php 
        
        $con= mysqli_connect ('localhost' ,'root',"",'bank');
 
                    
                   $selectquery ="select * from transaction ";
                   $query=mysqli_query($con,$selectquery);
   
                   $nums=mysqli_num_rows($query);
                   while($res=mysqli_fetch_array($query)){
                ?>    
                      <tr>
                            <td><?php echo $res['sender']; ?></td>
                            <td><?php echo $res['receiver']; ?></td>
                            <td><?php echo $res['amount']; ?></td>
                            <td><?php echo $res['date_time']; ?></td>

                            
                            
                           
                      </tr>
                <?php
                   }
?>
</table>
</div>
<div style="margin-top:50%">
<?php include("footer.php"); ?>
</div>
</body>
</html>   