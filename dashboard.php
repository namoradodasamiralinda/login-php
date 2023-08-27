<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

 <style>

    /*fontes css*/
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400;500;600;700&display=swap');
    /* reset meu css*/
    *{
        font-family: 'Open Sans', Kanit;
    }

    body{
        height: 100vh;
        background-image: url("/dashboard/wfundo.jpeg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        
    }

    .relogio{
        /* alinhamento do meu box principal*/
        display: flex;
        align-items: center;
        justify-content: space-around;
        

        height: 200px;
        width: 550px;

        background: transparent;
        border-radius: 8px;
        box-shadow: 0px 8px 10px rgba(0, 0, 0, 5);
    }

    .relogio div{
        height: 170px;
        width: 150px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #fff;
        background: rgba(5, 5, 5, 9);
        box-shadow: 0px 8px 10px rgba(0,0,0, .5);
        border-radius: 8px;
        letter-spacing: 3px;
    }

    .relogio span{
        font-weight: bolder;
        font-size: 50px;
    }

    .relogio span.tempo{
        font-size: 16px;
    }

    .navbar{
        
        position: absolute;
        bottom: 0;
        color: white;
    }


    a.btn.btn-danger{
        background-color: white;
        border-color: white;
        color: black;
     
        
        
        
    }

    a.navbar-brand{
        color: white;
    }

    {
        
    }
 </style>

<nav class="navbar">
       <div class="container-fluid">
        <a class="navbar-brand">Olympuss</a>
        <?php
           print "Olá, " .$_SESSION["nome"];
           print "<a href='logout.php' class='btn btn-danger'> Entrar</a>"; 
        ?>

       </div>
    </nav>  
    
    
    <!--link css-->
    <link rel="stylesheet" href="">
    <!-- link img icone -->
    

    <div class="relogio">
        <!--box com horas-->
        <div>
            <span id="horas">00</span>
            <span class="tempo">horas</span>
        </div>

        <!--box com minutos-->
        <div>
            <span id="minutos">00</span>
            <span class="tempo">minutos</span>
        </div>

        <!--box com segundos-->
        <div>
            <span id="segundos">00</span>
            <span class="tempo">segundos</span>
        </div>

        <!--icone repo-->
        <section class="social-icon">

        </section>
    </div>

    <!-- chamando js -->

    
   

</body>
</html>
