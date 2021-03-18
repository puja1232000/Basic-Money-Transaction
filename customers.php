<html>
<head>
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
    font-size:23px;
   
}
table{
    width:50%;
     border-collapse: collapse;border-radius: 4px; 
}

th{
    text-align: center;
    background-color: #44293b;
    color: white;font-family:initial;
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
    margin-left:700px;
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
<?php
$accno=$_GET['acc_no'];
?>
<div>
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
<table>
<th>ACC_NO.</th><th>NAME</th><th>ADDRESS</th><th>PHONE</th>
    <th>EMAIL</th>
    <th>AADHAR_NO</th><th>ACC_TYPE</th><th>STATUS</th><th>BALANCE</th><th>More Info</th>




<?php 
        
        $con= mysqli_connect ('localhost' ,'root',"",'bank');
 
                    
                   $selectquery ="select * from customer where accno=$accno";
                   $query=mysqli_query($con,$selectquery);
   
                   $nums=mysqli_num_rows($query);
                   while($res=mysqli_fetch_array($query)){
            
                ?>    
                      <tr>
                            <td><?php echo $res['accno']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['address']; ?></td>
                            <td><?php echo $res['phone']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['aadhar_no']; ?></td>
                            <td><?php echo $res['acc_type']; ?></td>
                            <td><?php echo $res['status']; ?></td>
                            <td><?php echo $res['balance']; ?></td>
                            <td><a href="money.php?acc_no=<?php echo $res['accno']; ?>"><button>TRANSACT</button></a></td>
                            
                            
                           
                      </tr>
                <?php
                   }
?>
</table>
</div>
</body>
</html>   
