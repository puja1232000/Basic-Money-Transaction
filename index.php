<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="" href="searchbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<style>
    *{margin:0; padding:0; box-sizing:border-box;
        font-family: 'Josefin Sans', sans-serif;}
    header{
        width:100%;
        height:100vh;
        background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)), url(https://financialcounsellors.org/wp-content/uploads/2020/03/bank-2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
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
    nav .menu a:first-child:hover{
        color:#00b894;
    }
    nav .menu a:first-child(2):hover{
        color:#00b894;
    }
main{
    width:100%;
    height:85vh;display:flex;justify-content: center;
    align-items: center;text-align: center;color:#fff
}
section h1{
    font-size:35px;font-weight: 200;letter-spacing: 3px;
    text-shadow: 1px 1px 2px black;
}
section h3{
    margin:30px 0 20px 0;
    font-size:55px;font-weight:300;
    text-shadow:2px 1px 5px black;
    text-transform:uppercase;
}
section a{
    padding:12px 30px;
    border-radius: 4px;
    outline:none;
    font-size:13px;
    font-weight:500;text-decoration: none;
    letter-spacing: 1px;transition: all 0.5s ease;
}
section .btnone{
      background:#fff;color:#000;
}
.btnone:hover{
    background:#b9520d;color:#000;
}
section .btntwo{
      background:#dd754c;color:#000;
}
.btntwo:hover{
    background:#fff;color:#000;
}

.change_content:after{
     content:'';
     animation:changetext 5s infinite linear;color:#d6ce9f;
}
@keyframes changetext{
    0%{content:"WE ASSURE YOUR MONEY SECURITY";}
}

</style>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1 class="animated infinite heartBeat"></h1>
            </div>
            <div class="menu">
             <a href="index.php">Home</a>
             <a href="cust.php">Customers</a>
             <a href="transaction.php">Transfer History</a>
             
             
            </div>
        </nav>
        <main>
            <section>
                <h1></h1>
            <h3><i class="fa fa-university" aria-hidden="true"></i>WELCOME  <span class="change_content"></span></h3>
            <a href="cust.php" class="btnone">MONEY TRANSFER<i class="fa fa-money" aria-hidden="true"></i></a>
            <a href="transaction.php" class="btntwo">TRANSACTION DETAILS</a>
            </section>
       </main>   
       
        
    </header> 
<?php include("footer.php"); ?>

</body>
</html>