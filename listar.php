  <?php
  // include "./back-php/conect.php";

  // Inicia a sessão
  // session_start();

  // Verifica se existe os dados da sessão de login
  // if (!isset($_SESSION["nome"]) || !isset($_SESSION["id"])) {
  // Usuário não logado! Redireciona para a página de login
  //   header("location: ./login/sign-in.php");
  //   die();
  // }
  ?>


  <!doctype html>
  <html lang="pt-br">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      LGPD-WEB - Entrevista
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fontes e ícones -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- Arquivos CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="./assets/demo/demo.css" rel="stylesheet" />

    <!-- Inclua a biblioteca jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
      img {
        width: 100%;
        height: auto;
        max-width: 300px;
        max-height: 49px;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .alert {
        padding: 20px;
        background-color: #4CAF50;
        color: white;
        opacity: 1;
        transition: opacity 0.6s;
        margin-bottom: 15px;
        display: none;
      }

      .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
      }

      .closebtn:hover {
        color: black;
      }

      .cortext {
        color: #000000;
      }

      .navbar-toggler {
        background-color: #6c757d;
        border-color: #6c757d;
      }

      .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255,255,255,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .cortext {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #6c757d;
        border: none;
      }

      .cortext span {
        background-color: white;
        height: 2px;
        width: 20px;
        display: block;
        margin-bottom: 5px;
        transition: transform 0.2s ease-out;
      }

      .cortext span:nth-child(2) {
        width: 15px;
      }

      .cortext span:nth-child(3) {
        width: 10px;
      }

      .cortext.collapsed span:nth-child(1) {
        transform: rotate(45deg) translate(3px, 4px);
      }

      .cortext.collapsed span:nth-child(2) {
        opacity: 0;
      }

      .cortext.collapsed span:nth-child(3) {
        transform: rotate(-45deg) translate(3px, -4px);
      }
    </style>
  </head>

  <body class="fundo-total">

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler collapsed cortext btn-secondary" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="./assets/img/lgpd-web.png" alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link " href="index.php"><b>Cadastro Instituição</b></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="entrevista.php">Entrevista</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="listar.php">Lista Dados</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="wrapper">
      <div class="main-panel">

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Levantamento RD | <button type="button" class="btn btn-primary" name="gerar-json">Gerar arquivo JSON</button></h4>
            </div>
            <div class="card-body">
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Instituição principal</label>
                  <select name="inst_prc" class="form-control">
                    <option value="">Selecione uma instituição</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->


    <!-- Inclua a biblioteca PerfectScrollbar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/perfect-scrollbar/1.5.3/perfect-scrollbar.min.js"></script>

    <!-- Inclua o arquivo paper-dashboard.min.js -->
    <script src="./assets/js/paper-dashboard.min.js"></script>

    <script>
      $(document).ready(function() {
        // faz uma solicitação AJAX para buscar os nomes das instituições
        $.ajax({
          url: "buscar_instituicao.php",
          type: "GET",
          dataType: "json",
          success: function(resultado) {
            // adiciona os nomes das instituições ao select
            var options = "<option value=''>Selecione uma instituição</option>";
            for (var i = 0; i < resultado.length; i++) {
              options += "<option value='" + resultado[i] + "'>" + resultado[i] + "</option>";
            }
            $("select[name='inst_prc']").html(options);
          },
          error: function() {
            alert("Erro ao buscar as instituições!");
          }
        });
      });
      // adiciona um evento ao botão para gerar o arquivo JSON com base no valor selecionado no select
      $("button[name='gerar-json']").click(function() {
        var inst_prc = $("select[name='inst_prc']").val();
        // faz uma solicitação AJAX para buscar os dados da tabela com base no valor selecionado no select
        $.ajax({
          url: "fetch_data.php",
          type: "GET",
          dataType: "json",
          data: {
            inst_prc: inst_prc
          },
          success: function(resultado) {
            // cria um link dinâmico para baixar o arquivo JSON
            var dados = "text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(resultado));
            var link = document.createElement('a');
            link.href = 'data:' + dados;
            link.download = 'dados_entrevista.json';
            link.click();
          },
          error: function() {
            alert("Erro ao buscar os dados da tabela!");
          }
        });
      });
    </script>
  </body>

  </html>