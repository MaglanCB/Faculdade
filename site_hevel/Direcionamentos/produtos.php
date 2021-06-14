<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hevel - Produtos</title>

    <!-- Bootstrap core CSS -->
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
    <!-- Custom styles for this template -->
    <link href="../style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/logoPreta.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/logoPreta.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logoPreta.jpg">
    <link rel="manifest" href="../img/logoPreta.jpg">
</head>
<body>
    <?php include "../includes/inc_heads.php" ?>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class='card-deck'>
                <?php
                    require "../admin/conecta.php";
                    $sql = mysqli_query($con, 
                       "select id, tamanho, comprimento, descricao, largura, altura, pesoBruto, pesoLiquido,
                               imgInterna, imgExt
                          from produto") or
                       die(mysqli_error($con));   
                    ;
                    while ($row = mysqli_fetch_array($sql)) {
                        $template =  "
                        <div class='card text-white bg-dark mb-3'>
                            <div cass='carousel' data-ride='carousel' data-interval='false'>
                                <div class='carousel-inner'>
                                    <div class='carousel-item  active'>
                                        <img class='carousel-img' size='200x200' src='../admin/{$row['imgInterna']}' alt= 'Primeiro Slide'>
                                    </div>
                                    <div class='carousel-item'>
                                        <img class='carousel-img' size='200x200' src='../admin/{$row['imgExt']}' alt='Segundo Slide'>
                                    </div>
                                </div>
                                <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
                                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                    <span class='sr-only'>Anterior</span>
                                </a>
                                <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>
                                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                    <span class='sr-only'>Próximo</span>
                                </a>
                            </div>
                            <div class='card-body'>
                                <h5 class='card-title'>{$row['descricao']}</h5>                                    
                                <a href='#' class='btn btn-primary'>Comprar</a>                                    
                            </div>
                            <div class='card-footer'>                                       
                                <p class='card-text'>
                                Especificações do produto:<br>
                                Tamanho: {$row['tamanho']}<br>
                                Dimensões: {$row['comprimento']}x{$row['largura']}x{$row['altura']}<br>
                                Peso liquido:{$row['pesoLiquido']} Peso bruto:{$row['pesoBruto']}</p>
                            </div>
                        </div>";
                        echo $template;    
                    }
                ?>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
    <br>

    <footer class="bg-dark container-fluid" style="position: absolute;"> 
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
                    89868-000 - Saudades - SC<br>
                </div>
                <div class="col-sm">
                    <h5 class="card-title">CONTATO</h5>
                    +55 (49) 98895 4994 -
                    <a href="https://api.whatsapp.com/message/H63XOI6LEMC7N1">Whatsapp</a>
                    <br>
                    hevel.loja@gmail.com
                </div>
            </div>
            <br>
        </div>
    </footer>
</body>
<html>