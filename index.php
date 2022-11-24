<?php
   include("conexao.php");

   if(!isset($_SESSION)){
        session_start();
    }
    
    if(isset($_POST['bt_nome'])){
        $nome = $_POST['bt_nome'];
        $mysqli->query("INSERT INTO nomes (nome) VALUES ('$nome')") or die ($mysqli->error);

        $_SESSION['msg'] = "<div class='alert alert-success'> Nome cadastrado. </div>";
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Exemplo - Cadastrar em PHP - MySQL</title>
    </head>
    <body>
        <div class="container">
            <h1>Exemplo - Cadastrar em PHP - MySQL</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nome_bt" class="form-label">Cadastre o seu nome:</label>
                    <input type="text" class="form-control" name="bt_nome" id="nome_bt" required>                
                </div>                           
                <button class="btn btn-primary" type="submit">Cadastrar</button>
                <button class="btn btn-danger" type="reset">Limpar</button>
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];                        
                        
                        unset($_SESSION['msg']);                   
                    }
                ?>                    
            </form>
        </div>        
    </body>
</html>