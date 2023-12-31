<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body{
            background-color: #F2F2F2;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .login{
            width: 100%; 
            height: 100vh;
            align-items: center;
            justify-content: space-around;
            display: flex;
        }

        button.btn.btn-primary{
            background-color: black;
            border-color: black;
        }
    </style>

</head>
<body style="background-color: #F2F2F2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                   <div class="card-body">
                    <h3>Acesso Administrador</h3>
                   </div>
                   <div class="card-body">
                   <form action="login.php" method="POST">
                    <div>
                        <div class="mb-3">
                            <label>Usuario</label>
                            <input type="text" 
                            name="usuario" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                        <label>Senha</label>
                            <input type="password" 
                            name="senha" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"
                            >Enviar</button>
                        </div>
                    </div>
                </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
