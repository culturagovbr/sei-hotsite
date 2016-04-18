<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>SEI - Sistema Eletrônico de Informações</title>
  <meta name="description" content="SEI - Sistema Eletrônico de Informações">
  <meta name="keywords" content="digitalização, SEI, sem papel, Ministério da Cultura, CGTI">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]--> 

  <!-- Favicon -->
  <link href="img/favicon.png" rel="icon" type="image/png">

  <!-- Styles -->
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/bootstrap-override.css" rel="stylesheet">

  <!-- Font Avesome Styles -->
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">

  <!-- Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href="http://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700" rel="stylesheet" type="text/css">

	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   

</head>
<body>
  <!-- Header -->
  <header id="header">
 
    <div class="container">
      <div class="row t-container">
        <div class="texture2">
          <img src="img/background_home.png" alt="">
        </div>
        <!-- Logo -->
        <div class="span3">
          <div class="logo">
            <a href="index.php"><img src="img/logo-header.png" alt=""></a>
          </div>            
        </div>

        <div class="span9">
          <div class="row space90"></div>
          <?php include "menu.html"; ?>
          <div class="row space15 hidden-phone"></div>
        </div>

        <div class="span8">
          <div class="row">

            <div class="span6 offset2">
              <!--<h1> Acesse o <strong>Sistema</strong></h1>
              <div class="head-info">-->




                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

               </div>
            </div>

          </div>
        </div>
      </div>  

      <div class="space60"></div>

      <div class="row">
        <div class="span12">  
          <!-- Slider 
          <div class="slider1 flexslider">
            PODE SE COLOCAR TEXTO
          </div>     
            Slider End -->
        </div>
      </div>
  </div> 
  </header>
  <!-- Header End -->

  <div class="row space80"></div>

  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="row">
          
       
        <div class="span12" id="sei">
          <h2> Sistema Eletrônico de Informações</h2>
          <div class="head-info">
            O Sistema Eletrônico de Informações (SEI) foi instituído, no dia 4 de abril de 2016, como sistema oficial de gestão de processos e documentos eletrônicos do Ministério da Cultura (MinC). A oficialização se deu com a publicação da Portaria nº 26, de 1º de abril de 2016 no Diário Oficial da União.
            <br><br>
            Com os últimos ajustes de configurações e customizações para a realidade do Ministério da Cultura, a partir de 2 de maio, o sistema estará disponível para o público externo, sem necessidade de cadastro prévio, e ficará vedada a produção de novos documentos e a abertura de novos processos por outro meio que não seja o SEI.
            <br> <br>
            Desde o início do ano, servidores do MinC têm participado de treinamentos e sendo instruídos sobre o uso e a migração para o SEI.
          </div>
              <br>           
        </div> 
        <br><br>
        <div class="span8">
        
          <!--<div class="btn h-button"><h3>Acessar o Sistema SEI</h3></div>-->
        
        
          <img src="img/devices.png" alt="" usemap="#Map">
          <map name="Map">
            <area shape="rect" coords="0,10,170,149" href="http://sei.cultura.gov.br/sei" target="_blank" alt="Ambiente de Produção">
            <area shape="rect" coords="200,6,370,153" href="http://seitreinamento.cultura.gov.br/sei" target="_blank" alt="Ambiente de Treinamento">
          </map>
        </div>
        <div class="span4">
          <div class="ic-1"></div>
          <div class="title-1"><h4>Manual do SEI</h4></div>
          <!-- List -->
          <div class="text-1"> 
            <ul class="list-b">
              <!-- List Items -->
              <li><a href="ManualSEI.php"> <i class="icon-ok"></i> Manual do Usuário - SEI</a></li>

              <div class="btn h-button">
                <h5><a href="TutorialSEI.php">Tutorial de Digitalização</a></h5></div>
            </ul>     
          </div>
          <!-- List End -->
        </div>
               
      </div>

      <div class="space40"></div>  
              
      <!-- Our Clients -->
      <div class="span12">
          <h2>Agilidade, Interatividade, Mobilidade e Transparência</h2>

          <div class="row">
            <!-- Service Container --> 
            <div class="head-info">
              <p><strong>O SEI </strong>- O SEI é um sistema desenvolvido pelo Tribunal Regional Federal da 4ª Região (TRF-4) para uso de todo o governo federal. Essa ferramenta permite que processos administrativos do Ministério possam ser consultados via internet, por meio de um aparelho celular, tablet ou computador.</p>

            </div>
            </div>
            <!-- Service Container End --> 


          </div>   
        </div> 
    
      
      <!-- Our Clients End -->
      
      <div class="space50"></div> 
       
    </div>
  </div>
  <!-- Content End -->
  
  <!-- Footer -->
  <?php include "Rodape.php"; ?>
  <!-- Footer End -->

  <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>  
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>

</body>
</html>
  