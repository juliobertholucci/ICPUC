<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Formulário</title>

    <script type="text/javascript">
    <?php include 'jscadinicial.js'; ?>
    </script>

    <style>
    <?php include 'csscadinicial.css';
    ?>
    </style>


</head>

<body>


    <div class="principal">


        <div class="texttop font">

            <h1 style="text-align:center; margin-top:10px;">Cadastre-se para começar a utilizar nossa aplicação!</h1>

        </div>
        <hr>

        <br>
        <div class="titulobox text-center text-white">Criar Novo Cadastro</div>

        <div class="box mt-2">
            <br>
            <h5 class=" font">Informe o CPF e CNPJ para Iniciar o Cadastro</h5>

            <div class="p-2 mb-3 mt-3">
                <form method="POST" action="../formulario">

                    <input type="text" class="form-control text-center ipt" onkeydown="javascript: fMasc( this, mCPF );"
                        name="cpf" placeholder="Insira o CPF" required id="inptCPF" onblur="ValidCPF()" maxlength="14">
                    <p id="pcpf"></p>

                    <hr>
                    <input type="text" class="form-control text-center ipt"
                        onkeydown="javascript: fMasc( this, mCNPJ );" name="cnpj" placeholder="Insira o CNPJ"
                        id="inptCNPJ" onblur="ValidCNPJ()" maxlength="18">
                    <p id="pcnpj"></p>
                    <p style="color:#444444; margin-top:10px;">(Campo Opcional)</p>

                    <button type="submit" name="botao1" id="btnIndex"  class="font btn btn-outline-success">Continuar</button>
                       
                    <br>

                </form>


                <form action="logar">
                    <br>
                    <button class=" btn btn-outline-success font " type="submit">Realizar Login</button>
                </form>
                <br>
            </div>


        </div>


    </div>

</body>

</html>