<!DOCTYPE html><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>AMOR AU PET</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-carrinho.css">
</head>

<body>
    <!-- Cabeçalho -->
    <div class="container-fluid">
            <div class="row py-3 px-lg-5">
                <div class="col-lg-4">
                    <a href="" class="navbar-brand d-none d-lg-block">
                        <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Amor</span> Au Pet</h1>
                    </a>
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <div class="d-inline-flex flex-column text-center pr-3 border-right">
                            <h6>Horario de Funcionamento:</h6>
                            <p class="m-0">Das 8hs ás 22hs</p>
                        </div>
    
                        <div class="d-inline-flex flex-column text-center pl-3">
                            <h6>Contato:</h6>
                            <p class="m-0">(61)9999-9999</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <!-- Home -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Principal</a>                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cachorro</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="cachorro-prod-grade.php" class="dropdown-item">Grade</a>
                            <a href="cachorro-prod-racao.php" class="dropdown-item">Ração</a>
                            <a href="cachorro-prod-brinquedo.php" class="dropdown-item">Brinquedo</a>
                            <a href="cachorro-prod-caminha.php" class="dropdown-item">Caminha</a>
                        </div>
                    </div>                      
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Gato</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="gato-prod-grade.php" class="dropdown-item">Grade</a>
                            <a href="gato-prod-racao.php" class="dropdown-item">Ração</a>
                            <a href="gato-prod-brinquedo.php" class="dropdown-item">Brinquedo</a>
                            <a href="gato-prod-caminha.php" class="dropdown-item">Caminha</a>
                        </div>
                    </div>      
                    <a href="promocao.php" class="nav-item nav-link">Promoção</a>                  
                    <a href="novidades.php" class="nav-item nav-link">Novidades</a>
                    <a href="entrar.php" class="nav-item nav-link">Entrar</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- carrinho-->
    <section class="portfolio_section layout_padding">
      <div class="container">
        <h2>
          CARRINHO DE COMPRA
        </h2>
      </div>
      <h4>
        <a href="saquinho.html"> Ver Carrinho de compras </a>
      </h4>	
      <div align="center">
        <br>RAÇÃO P/CACHORRO 1<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd1">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('DOCE DE LEITE', document.getElementById('qtd1').value, '49.90', 1)"> COMPRAR</button>
      </div>
      
      <div align="center">
        <br>RAÇÃO P/CACHORRO 2<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd2">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/CACHORRO 2', document.getElementById('qtd2').value, '49.90', 2)"> Comprar  </button>
      </div>
      
      <div align="center">
        <br>RAÇÃO P/CACHORRO 3<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/CACHORRO 3', document.getElementById('qtd3').value, '49.90', 3)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/CACHORRO 4<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/CACHORRO 4', document.getElementById('qtd4').value, '49.90', 4)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/CACHORRO 5<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/CACHORRO 5', document.getElementById('qtd5').value, '49.90', 5)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/CACHORRO 6<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/CACHORRO 6', document.getElementById('qtd6').value, '49.90', 6)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/CACHORRO 7<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/CACHORRO 7', document.getElementById('qtd7').value, '49.90', 7)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/CACHORRO 8<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/CACHORRO 8', document.getElementById('qtd8').value, '49.90', 8)"> Comprar </button>
      </div>
      </div>
      
      <h6>
        GATO
      </h6>
      
      <div align="center">
        <br>CAMINHA P/GATO 1<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CAMINHA P/GATO1', document.getElementById('qtd1').value, '79.90', 1)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 2<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd2">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CAMINHA P/GATO 2', document.getElementById('qtd2').value, '79.90', 2)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 3<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CAMINHA P/GATO 3', document.getElementById('qtd3').value, '79.90', 3)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 4<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto4" onclick="AddCarrinho('CAMINHA P/GATO 4', document.getElementById('qtd4').value, '79.90', 4)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 5<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd5">
        <button type="button" id="adicionar1" id="produto5" onclick="AddCarrinho('CAMINHA P/GATO 5', document.getElementById('qtd5').value, '79.90', 5)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 6<strong>R$79,90</strong><br>
        qtd: <input type="number"value="" min="1" max="10" id="qtd6">
        <button type="button" id="adicionar1" id="produto6" onclick="AddCarrinho('CAMINHA P/GATO 6', document.getElementById('qtd6').value, '79.90', 1)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 7<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd7">
        <button type="button" id="adicionar1" id="produto7" onclick="AddCarrinho('CAMINHA P/GATO 7', document.getElementById('qtd7').value, '79.90', 7)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 8<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto8" onclick="AddCarrinho('CAMINHA P/GATO 8', document.getElementById('qtd8').value, '79.90', 8)"> Comprar </button>
      </div>

      <br>

      <div align="center">
        <br>RAÇÃO P/GATO 1<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd1">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/GATO 1', document.getElementById('qtd1').value, '49.90', 1)"> COMPRAR</button>
      </div>
      
      <div align="center">
        <br>RAÇÃO P/GATO 2<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd2">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/GATO 2', document.getElementById('qtd2').value, '49.90', 2)"> Comprar </button>
      </div>
      
      <div align="center">
        <br>RAÇÃO P/GATO 3<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/GATO 3', document.getElementById('qtd3').value, '49.90', 3)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/GATO 4<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/GATO 4', document.getElementById('qtd4').value, '49.90', 4)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/GATO 5<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/GATO 5', document.getElementById('qtd5').value, '49.90', 5)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/GATO 6<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/GATO 6', document.getElementById('qtd6').value, '49.90', 6)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/GATO 7<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/GATO 7', document.getElementById('qtd7').value, '49.90', 7)"> Comprar </button>
      </div>

      <div align="center">
        <br>RAÇÃO P/GATO 8<strong>R$49,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('RAÇÃO P/GATO 8', document.getElementById('qtd8').value, '49.90', 8)"> Comprar </button>
      </div>
      </div>
      

      
      <div align="center">
        <br>CAMINHA P/GATO 1<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CAMINHA P/GATO1', document.getElementById('qtd1').value, '79.90', 1)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 2<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd2">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CAMINHA P/GATO 2', document.getElementById('qtd2').value, '79.90', 2)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 3<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CAMINHA P/GATO 3', document.getElementById('qtd3').value, '79.90', 3)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 4<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto4" onclick="AddCarrinho('CAMINHA P/GATO 4', document.getElementById('qtd4').value, '79.90', 4)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 5<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd5">
        <button type="button" id="adicionar1" id="produto5" onclick="AddCarrinho('CAMINHA P/GATO 5', document.getElementById('qtd5').value, '79.90', 5)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 6<strong>R$79,90</strong><br>
        qtd: <input type="number"value="" min="1" max="10" id="qtd6">
        <button type="button" id="adicionar1" id="produto6" onclick="AddCarrinho('CAMINHA P/GATO 6', document.getElementById('qtd6').value, '79.90', 1)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 7<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd7">
        <button type="button" id="adicionar1" id="produto7" onclick="AddCarrinho('CAMINHA P/GATO 7', document.getElementById('qtd7').value, '79.90', 7)"> Comprar </button>
      </div>

      <div align="center">
        <br>CAMINHA P/GATO 8<strong>R$79,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto8" onclick="AddCarrinho('CAMINHA P/GATO 8', document.getElementById('qtd8').value, '79.90', 8)"> Comprar </button>
      </div>

      <h6>
        AMBOS
      </h6>

      <div align="center">
        <br>GRADE 1<strong>R$89,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto8" onclick="AddCarrinho('GRADE 1', document.getElementById('qtd8').value, '79.90', 8)"> Comprar </button>
      </div>

      <div align="center">
        <br>GRADE 2<strong>R$89,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd2">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('GRADE 2', document.getElementById('qtd2').value, '89.90', 2)"> Comprar </button>
      </div>

      <div align="center">
        <br>GRADE 3<strong>R$89,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('GRADE 3', document.getElementById('qtd3').value, '89.90', 3)"> Comprar </button>
      </div>

      <div align="center">
        <br>GRADE 4<strong>R$89,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto4" onclick="AddCarrinho('GRADE 4', document.getElementById('qtd4').value, '89.90', 4)"> Comprar </button>
      </div>

      <div align="center">
        <br>GRADE 5<strong>R$89,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd5">
        <button type="button" id="adicionar1" id="produto5" onclick="AddCarrinho('GRADE 5', document.getElementById('qtd5').value, '89.90', 5)"> Comprar </button>
      </div>

      <div align="center">
        <br>GRADE 6<strong>R$89,90</strong><br>
        qtd: <input type="number"value="" min="1" max="10" id="qtd6">
        <button type="button" id="adicionar1" id="produto6" onclick="AddCarrinho('GRADE 6', document.getElementById('qtd6').value, '89.90', 1)"> Comprar </button>
      </div>

      <div align="center">
        <br>GRADE 7<strong>R$89,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd7">
        <button type="button" id="adicionar1" id="produto7" onclick="AddCarrinho('GRADE 7', document.getElementById('qtd7').value, '89.90', 7)"> Comprar </button>
      </div>

      <div align="center">
        <br>GRADE 8<strong>R$89,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto8" onclick="AddCarrinho('GRADE 8', document.getElementById('qtd8').value, '89.90', 8)"> GRADE 8 </button>
      </div>

      <div align="center">
        <br>BRINQUEDO 1<strong>R$29,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto8" onclick="AddCarrinho('BRINQUEDO 1', document.getElementById('qtd8').value, '29.90', 8)"> Comprar </button>
      </div>

      <div align="center">
        <br>BRINQUEDO 2<strong>R$29,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd2">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('BRINQUEDO 2', document.getElementById('qtd2').value, '29.90', 2)"> Comprar </button>
      </div>

      <div align="center">
        <br>BRINQUEDO 3<strong>R$29,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('BRINQUEDO 3', document.getElementById('qtd3').value, '29.90', 3)"> Comprar </button>
      </div>

      <div align="center">
        <br>BRINQUEDO 4<strong>R$29,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto4" onclick="AddCarrinho('BRINQUEDO 4', document.getElementById('qtd4').value, '29.90', 4)"> Comprar </button>
      </div>

      <div align="center">
        <br>BRINQUEDO 5<strong>R$29,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd5">
        <button type="button" id="adicionar1" id="produto5" onclick="AddCarrinho('BRINQUEDO 5', document.getElementById('qtd5').value, '29.90', 5)"> Comprar </button>
      </div>

      <div align="center">
        <br>BRINQUEDO 6<strong>R$29,90</strong><br>
        qtd: <input type="number"value="" min="1" max="10" id="qtd6">
        <button type="button" id="adicionar1" id="produto6" onclick="AddCarrinho('BRINQUEDO 6', document.getElementById('qtd6').value, '29.90', 1)"> Comprar </button>
      </div>

      <div align="center">
        <br>BRINQUEDO 7<strong>R$29,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd7">
        <button type="button" id="adicionar1" id="produto7" onclick="AddCarrinho('BRINQUEDO 7', document.getElementById('qtd7').value, '29.90', 7)"> Comprar </button>
      </div>

      <div align="center">
        <br>BRINQUEDO 8<strong>R$29,90</strong><br>
        qtd: <input type="number" value="" min="1" max="10" id="qtd3">
        <button type="button" id="adicionar1" id="produto8" onclick="AddCarrinho('BRINQUEDO 8', document.getElementById('qtd8').value, '29.90', 8)"> GRADE 8 </button>
      </div>
    </section>   

      
    <h4>
        <a href="saquinho.html"> Ver Carrinho de compras </a>
      </h4>		
          
      <script>
        function AddCarrinho(produto, qtd, valor, posicao)
        {
          localStorage.setItem("produto" + posicao, produto);
          localStorage.setItem("qtd" + posicao, qtd);
          valor = valor * qtd;
          localStorage.setItem("valor" + posicao, valor);
          alert("Produto adicionado ao carrinho!");
        }
      </script>
    </section>

    <!-- Rodapé -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Amor</span>Au pet</h1>
                <p class="m-0">Fundada em 2022 em Brasilia, com objetivo de trazer mais amor e felicidade para os nossos pets, com grande diversidades de produtos e carinhos. Hoje, O amor au pet, está com uma ação de ir até você para cuidar do nossos filhotes.
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Contatos</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Universidade Católica de Brasília</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>(61)9999-9999</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Principal</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Cachorro</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Gato</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pássaro</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Novidades</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Promoção</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Entrar</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold"></a>Direitos Reservados a programadora Izabelle.
                </p>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/main.js"></script>
</body>

</html>