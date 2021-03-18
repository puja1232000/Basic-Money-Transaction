<?php
$from_acc=$_GET["from"];
$transfer=$_GET["bal"];
$to_acc=intval(substr($_GET["to"],0,15));

$con= mysqli_connect ('localhost' ,'root',"",'bank');

$selectquery1 ="select * from customer where accno=$to_acc";
$query1=mysqli_query($con,$selectquery1);
$res1=mysqli_fetch_array($query1);

$selectquery2 ="select * from customer where accno=$from_acc";
$query2=mysqli_query($con,$selectquery2);
$res2=mysqli_fetch_array($query2);

$acc_from_balance=$res2["balance"]-$transfer;
$acc_to_balance=$res1["balance"]+$transfer;

$updatequery1="UPDATE customer SET balance = $acc_from_balance WHERE accno=$from_acc";
$upquery1=mysqli_query($con,$updatequery1);

$updatequery2="UPDATE customer SET balance = $acc_to_balance WHERE accno=$to_acc";
$upquery2=mysqli_query($con,$updatequery2);

if($upquery1){
    if($upquery2){
        ?>
        <script>
            var abc=alert("Transaction Successful");
            if(abc){
                window.location.href=<?php header('location:transaction.php'); ?>;
            }
            </script>
            <?php
    }
}
$name1=$res2["name"];
$name2=$res1["name"];
$insertquery="INSERT INTO transaction (sender, receiver, amount) VALUES ('$name1','$name2',$transfer)";
$inquery1=mysqli_query($con,$insertquery);             
?>
