
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?=base_url()?>assets/site/favicon.ico">

  <title><?=$titulo?></title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/site/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/site/starter-template.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?=base_url()?>">Igrejas</a>
       >


    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Norte</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?=base_url()?>estados/amazonas">Amazonas</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/amapa">Amapá</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/acre">Acre</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/para">Pará</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/rondonia">Rondônia</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/roraima">Roraima</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/tocantins">Tocantins</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nordeste</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?=base_url()?>estados/alagoas">Alagoas</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/bahia">Bahia</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/ceara">Ceará</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/maranhao">Maranhão</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/paraiba">Paraíba</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/pernambuco">Pernambuco</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/piaui">Piauí</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/riograndedonorte">Rio Grande do Norte</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/sergipe">Sergipe</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Centro-Oeste</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?=base_url()?>estados/distritofederal">Distrito-Federal</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/goias">Goiás</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/matogrosso">Mato Grosso</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/matogrossodosul">Mato Grosso do Sul</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sudeste</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?=base_url()?>estados/espiritosanto">Espiríto Santo</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/<?=base_url()?>estados/minasgerais">Minas Gerais</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/riodejaneiro">Rio De Janeiro</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/saopaulo">São Paulo</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sul</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?=base_url()?>estados/parana">Paraná</a>
            <a class="dropdown-item" href="<?=base_url()?>estados/riograndedosul">Rio Grande Do Sul</a>

            <a class="dropdown-item" href="<?=base_url()?>estados/santacatarina">Santa Catarina</a>
          </div>
        </li>
          <a class="navbar-brand" href="<?=base_url()?>cadastro">Cadastrar Igreja</a
      </ul>


      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="container">

    <div class="starter-template">
     <?php $this->load->view($view); ?>
   </div>

 </div><!-- /.container -->



    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="<?=base_url()?>assets/site/assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="<?=base_url()?>assets/site/dist/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="<?=base_url()?>assets/site/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
    </html>
