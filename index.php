<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <link href="estilo.css" type="text/css" rel="stylesheet">

</head>

<body>





    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6">

                <img src="image/bj.png">

                <div class="welcome">
                    <h1>Bem vindo ao Pollinate!</h1>
                    <h2>Uma nova forma de se <br />conectar com o Mundo </h2>
                </div>

            </div>
            <div class="col-lg-6 col-md-6">


                <div id="entrada">

                    <form name="login" method="post" action="login.php">

                        <input name="email" type="text" placeholder="Email" onfocus="if(this.value=='Nome de Usuario')this.value=''"  />
                        <br /> <br />

                        <input name="senha" type="text" placeholder="Senha" onfocus="if(this.value!='')this.value=''; this.type='password';" />
                        <br /> 
                        <a href="cadastro.php">Esqueceu a senha?</a>
                        <br />

                        
                        
                        <div id="sign">

                            <input class="btn_submit" type="submit" value="Entrar" id="btn_entrar">

                        </div>


                    </form>

                </div>


                <div id="cadastro">
                    
                    <a href="cadastro.php"><input class="btn_submit" type="cadastrar" value="Começe Agora" id="btn_cadastrar"></a>
                    
                </div>

            </div>
        </div>
    </div>
</body>

</html>
