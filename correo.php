<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio | Gala Gold</title>
    <meta name="description" content="Actualmente estamos enfocados en la exportación de una amplia gama de productos tropicales, conocidos también como productos étnicos, tales como: piña md2, papaya pococi, yuca, zanahoria, mango tommy.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="assets/css/fonticons.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="preloader">
        <div class="loaded">&nbsp;</div>
    </div>
    <!--Home page style-->
    <header id="main_menu" class="header">
        <div class="main_menu_bg navbar-fixed-top">
            <div class="head-container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo1.png" alt=""></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html#home">Inicio</a></li>
                            <li><a href="index.html#products">Productos</a></li>
                            <li><a href="index.html#q-somos">Qui&eacute;nes Somos&#63;</a></li>
                            <li><a href="index.html#servicios">Servicios</a></li>
                            <li><a href="index.html#calidad">Calidad</a></li>
                            <!--<li><a href="#contactenos">Log&iacute;stica</a></li>-->
                            <li><a href="index.html#contactenos">Cont&aacute;ctenos</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--End of header -->
    <section id="home" class="home">
        <div class="home_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="main_home">
                            <div class="mainhomecontent">
                                <div class="single_home">
                                    <div class="col-sm-7">
                                        <div class="single_home_left">
                                            <h2>Las mejores frutas tropicales</h2>
                                            <h3>De Costa Rica al mundo</h3>
                                            <p>El esfuerzo realizado en los &uacute;ltimos a&ntilde;os por Galagold Costa Rica, en cuanto a la inversi&oacute;n, especializaci&oacute;n y formaci&oacute;n a situado a la empresa entre las m&aacute;s destacadas del sector.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="single_home_right"> <a href=""><span>Llamenos :</span>  <strong>(506) 4001-3290</strong></a> <a href="mailto:info@galagold-cr.com"><span>Correo electr&oacute;nico :</span> <strong>info@galagold-cr.com</strong> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="main_footer">
                    <div class="col-sm-6 col-xs-12">
                        <div class="single_footer_left">
                            <p><strong>Curridabat, San Jos&eacute;, Costa Rica</strong>
                                <br/>Tel. (506) 4001-3290 Cel. (506) 7105-178</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="single_footer_right wow fadeInDown" data-wow-duration="1s">
                            <p><strong><a href="http://www.galagold-cr.com">galagold-cr.com</a></strong>Todos los derechos reservados 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- STRAT SCROLL TO TOP -->
    <div class="scrollup"> <a href="#"><i class="fa fa-chevron-up"></i></a> </div>
    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/isotope.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@galagold-cr.com"; 
    $email_subject = "Correo de contacto Sitio web";
 
    function died($error) {
        // your error code can go here
        echo "Lo sentimos, pero ococurrio un error dentro del formulario. ";
        echo "A continuacion el error.<br />";
        echo $error."<br /><br />";
        echo "Por favor intentelo mas tarde<br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['nombre']) ||
        !isset($_POST['empresa']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telefono']) ||
        !isset($_POST['pais'])||
        !isset($_POST['comentario'])) {
        died('Lo sentimos, pero ococurrio un error dentro del formulario.');       
    }
 
     
 
    $nombre = $_POST['nombre']; // required
    $empresa = $_POST['empresa']; // required
    $email_from = $_POST['email']; // required
    $telefono = $_POST['telefono']; //  required
    $pais = $_POST['pais'];
    $comentario = $_POST['comentario']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'El correo no es valido.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$nombre)) {
    $error_message .= 'Ingrese un Nombre valido.<br />';
  }
 
  if(!preg_match($string_exp,$empresa)) {
    $error_message .= 'El nombre de la empresa no es valido.<br />';
  }
  if(!preg_match($string_exp,$telefono)) {
    $error_message .= 'El numero no es valido.<br />';
  }
  if(strlen($comentario) < 2) {
    $error_message .= 'The comentario you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Empresa: ".clean_string($empresa)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefono: ".clean_string($telefono)."\n";
    $email_message .= "Pais: ".clean_string($pais)."\n";
    $email_message .= "comentario: ".clean_string($comentario)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_to."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
    <!-- include your own success html here -->Thank you for contacting us. We will be in touch with you very soon.
    <?php
 
}
?>