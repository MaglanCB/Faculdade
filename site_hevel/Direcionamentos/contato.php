<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hevel - Contato</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../img/logoPreta.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/logoPreta.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logoPreta.jpg">
    <link rel="manifest" href="../img/logoPreta.jpg">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <link href="../style.css" rel="stylesheet">
</head>

<body>
<?php
include "../includes/inc_heads.php"
?>
  
    <div class="container">
        <form style="border:none;">
            <div class="container">
                <br>
                <br>
                <h2>Informe seus dados</h2>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">Primeiro nome</label>
                        <input type="text" class="form-control" id="validationDefault01" placeholder="Nome" value=""
                            required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">Sobrenome</label>
                        <input type="text" class="form-control" id="validationDefault02" placeholder="Sobrenome"
                            value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefaultUsername">Usuário</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Usuário"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Cidade</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="Cidade" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault04">Estado</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="Estado" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault05">CEP</label>
                        <input type="text" class="form-control" id="validationDefault05" placeholder="CEP" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Concordo com os termos e condições
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
    </div>

 <?php 
//include "../includes/inc_footer.php"
 ?>

<footer class="bg-dark container-fluid fixed-bottom " style="position: absolute;">

        <div class="bg-dark">
            <p class="float-right"><a href="#">Volte ao topo</a></p>
            <div class="row">
                <div class="col-sm">
                    <h5 class="card-title">REDES SOCIAIS</h5>
                    <a href="https://www.instagram.com/hevel.store/">Instagram</a>
                    <br>
                    <a href="https://vm.tiktok.com/ZMemfAQSP/">TikTok</a>
                    <p>

                </div>
                <div class="col-sm">
                    <h5 class="card-title">ENDEREÇO</h5>
                    Rua São Francisco, 199, Boa Vista<br>
                    89868-000 - Saudades - SC <br>
                </div>
                <div class="col-sm">
                    <h5 class="card-title">CONTATO</h5>
                    +55 (49) 98895 4994 - <a href="https://api.whatsapp.com/message/H63XOI6LEMC7N1">Whatsapp</a>
                    <br>
                    hevel.loja@gmail.com
                </div>
            </div>
            <br>
        </div>
    </footer>

</body>

</html>