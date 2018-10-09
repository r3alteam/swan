<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/typed.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body class = "bg-blue">
    <?php include ("includes/menu.php")?>
    <div class="container">
        <div class="box">
            <div class="col-lg-12" style="display:flex;height:100%; align-items: center;justify-items: center;align-content: center;">
                <div class="col-lg-6 login">
                    <div class="col-lg-12">
                    <center><h3>Faça o login</h3></center>
                    </div>
                    <form action="" method="post">
                        <div class="form-group col-lg-12">
                            <label for="con_cidade">Login</label>
                            <input type="email" class="form-control" id="con_cidade" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="con_cidade">Senha</label>
                            <input type="password" class="form-control" id="con_cidade" placeholder="Digite sua senha" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="bttn ">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10"><center><h3>Cadastre-se</h3></center>
                    <a href="cadastro-agencia.php"><button  class="bttn ">Empresa</button></a>
                    <br>
                    <br>
                    <a href="cadastro-pessoa.php"><button  class="bttn ">Pessoa</button></a></div>
                    <div class="col-lg-"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include ("includes/footer.php")?>
</body>
</html>