<html>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Control Panel</title>



</head>

<body class="grey darken-3">

<div class="container center">
  <h1 class="center white-text">COVID-19 API </h1>


  <div class="input-field">
    <input placeholder="Nome do País" id="country" name="country" type="text" style="text-align:center;" class="validate white-text">
    <span class="helper-text white-text">Digite o nome do país em INGLÊS e a primeira letra MAIÚSCULA.</span>
  </div>

  <a class="waves-effect waves-light btn teal darken-2" style="margin-top: 20px;" onclick="getAPI()">Verificar</a>

  <div class="loading center hide" style="margin-top:20px;" id="loading">
        <div class="progress">
          <div class="indeterminate"></div>
        </div>
  </div>

    <p class="white-text" id="message">Status: </p>
    <p class="white-text" id="lastUpdate">Última Atualização: </p>
    <p class="white-text" id="province">Estado: </p>
    <p class="white-text" id="countrytext">País: </p>
    <p class="white-text" id="confirmed">Casos Confirmados: </p>
    <p class="white-text" id="deaths">Mortes: </p>
    <p class="white-text" id="recovered">Recuperados: </p>



    <h4 class="white-text" style="margin-top: 100px">ATENÇÃO</h4> 
    <p class="white-text">A API não tem estrutura de estado, então, alguns países mostram casos somente do estado e não do país em geral;</p>
    <p class="white-text">Todos os dados são extraidos deste csv que é atualizado diariamente das fontes citadas no readme, <a href="https://github.com/CSSEGISandData/COVID-19/">clique aqui para mais informações</a>;</p>
    <p class="white-text">É recomendado digitar o nome do país em INGLÊS e a primeira letra MAIÚSCULA.</p>
    <div class="divider"></div>

    </div>
  </div>

  <h6 class="center white-text">Developed & Designed with &hearts; by <a href="https://github.com/LordzSpectron/">LordzSpectron</a> & <a href="https://github.com/m00np">m00np</a></h6>
     <!-- Jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <!-- Compiled and minified Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!-- Compiled and minified Materialize JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>
	
	
</body>

</html>