<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Salutem</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="{{ asset('fonts.css') }}">

    <link rel="stylesheet" href=" {{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/overwrite.css') }}">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link rel="icon" type="{{ asset('image/png') }}" href="img/icon.png" />

    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="{{ asset('js/arriba.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <link rel="shortcut icon" href="{{ asset('img/icon.ico') }}">

    <script type="text/javascript">
      $(window).load(function() {
          $(".loader").fadeOut("slow");
      });
</script>

</head>

<body>
    <div class="loader"></div>
    <span class="ir-arriba icon-arrow-up span-color"></span>
    <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/icon.png') }}" width="30" height="30" alt="">
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Learning</a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#header">Home</a></li>
                        <li><a href="#servicios">Servicios</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>Manage appointment <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#admCita">Schedule appointment</a></li>
                                <li><a href="#admCita">Cancel appointment</a></li>
                                <li><a href="#admCita">Update appointment</a></li>
                            </ul>
                        </li>

                        <li><a href="#credits">Credits</a></li>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button">Search</button>
                            </span>
                        </div><!-- /input-group -->

                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->

    <!-- ********************************************
         *    Se crean los modal para la información    *
         ********************************************
     -->
    <!-- Modal Convergente-->
    <div class="modal fade" id="ModalConvergenteInfo" tabindex="-1" role="dialog" aria-labelledby="ModalConvergenteLabelInfo">
        <div class="modal-dialog" id="mdialTamanio" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalConvergenteLabelInfo"><p class="p-white">Estilo de aprendizaje convergente</p></h4>
                </div>
                <div class="modal-body">
                    <p>Este estilo de aprendizaje combina la experiencia concreta
                       y la observación reflexiva, posee algunas características
                       tales como:</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">1. Habilidad imaginativa, son buenos generando ideas.</li>
                    <li class="list-group-item">2. Pueden ver las situaciones desde diferentes perspectivas.</li>
                    <li class="list-group-item">3. Emotivos, se interesan por la gente.</li>
                    <li class="list-group-item">4. Se caracterizan por ser individuos
                    con un trasfondo en Artes Liberales o Humanidades.</li>
                    <li class="list-group-item">5. Características de individuos en
                    el área de Consejería, Administración de Personal y Especialista
                    en Desarrollo Organizacional.</li>
                </ul>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Asimilador-->
    <div class="modal fade" id="ModalAsimiladorInfo" tabindex="-1" role="dialog" aria-labelledby="ModalAsimiladorLabelInfo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-color">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalAsimiladorLabelInfo"><p class="p-white">Estilo de aprendizaje asimilador</p></h4>
                </div>
                <div class="modal-body">
                    <p>Este estilo de aprendizaje combina la conceptualización
                       abstracta y la observación reflexiva, posee algunas características
                       tales como:</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">1. Habilidad para crear modelos teóricos.</li>
                    <li class="list-group-item">2. Razonamiento inductivo.</li>
                    <li class="list-group-item">3. Les preocupa más los conceptos.
                    que las personas, menos interesados en el uso práctico de las teorías.</li>
                    <li class="list-group-item">4. Característico de individuos en el
                    área de Ciencias, Planificación e Investigación.</li>
                </ul>
                <div class="modal-footer modal-color">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Asimilador-->
    <div class="modal fade" id="ModalDivergenteInfo" tabindex="-1" role="dialog" aria-labelledby="ModalDivergenteLabelInfo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-color">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalDivergenteLabelInfo"><p class="p-white">Estilo de aprendizaje divergente</p></h4>
                </div>
                <div class="modal-body">
                    <p>Este estilo de aprendizaje Combina la experiencia concreta
                       y la observación reflexiva, posee algunas características
                       tales como:</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Habilidad imaginativa, son buenos generando ideas.</li>
                    <li class="list-group-item">Pueden ver las situaciones desde diferentes perspectivas.</li>
                    <li class="list-group-item">Emotivos, se interesan por la gente.</li>
                    <li class="list-group-item">Se caracterizan por ser individuos
                    con un trasfondo en Artes Liberales o Humanidades.</li>
                    <li class="list-group-item">Características de individuos en el
                    área de Consejería, Administración de Personal y Especialista
                    en Desarrollo Organizacional.</li>
                </ul>
                <div class="modal-footer modal-color">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Acomodador-->
    <div class="modal fade" id="ModalAcomodadorInfo" tabindex="-1" role="dialog" aria-labelledby="ModalAcomodadorLabelInfo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-color">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalAcomodadorLabelInfo"><p class="p-white">Estilo de aprendizaje acomodador</p></h4>
                </div>
                <div class="modal-body">
                    <p>Este estilo de aprendizaje combina la experiencia concreta
                       y la experimentación activa, posee algunas características
                       tales como:</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Habilidad para llevar a cabo planes, orientados a la acción.</li>
                    <li class="list-group-item">Les gustan nuevas experiencias, son arriesgados.</li>
                    <li class="list-group-item">Se adaptan a las circunstancias inmediatas.</li>
                    <li class="list-group-item">Intuitivos, aprenden por tanteo y error.</li>
                    <li class="list-group-item">Característicos de individuos en el área de los Negocios.</li>
                </ul>
                <div class="modal-footer modal-color">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="slider">
        <div id="about-slider">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/Convergente.jpeg" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="content"> <!-- Div con color y borde redondeado-->
                                <br>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                                    <h2><span>Convergente</span></h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                    <p>El aprendizaje convergente combina la conceptualización abstracta y la experimentación activa.</p>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <button type="button" name="Live Demo"
                                            class="btn btn-info btn-lg" data-toggle="modal"
                                            data-target="#ModalConvergenteInfo">
                                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                            Más información</button>
                                        </div>
                                        <!-- <div class="form-group">
                                            <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
                                        </div> -->
                                    </form>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/Asimilador.jpeg" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="content"> <!-- Div con color y borde redondeado-->
                                <br>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                                    <h2><span>Asimilador</span></h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                    <p>El aprendizaje asimilador combina la conceptualización abstracta y la observación reflexiva.</p>
                                </div>

                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <button type="button" name="purchase"
                                            class="btn btn-info btn-lg" data-toggle="modal"
                                            data-target="#ModalAsimiladorInfo">
                                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                            Más información</button>
                                        </div>
                                        <!-- <div class="form-group">
                                            <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                                        </div>-->
                                    </form>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('img/Divergente.png') }}" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="content"> <!-- Div con color y borde redondeado-->
                                <br>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                                    <h2>Divergente</h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">
                                    <p>El aprendizaje divergente combina la experiencia concreta y la observación reflexiva.</p>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <button type="button" name="purchase"
                                            class="btn btn-info btn-lg" data-toggle="modal"
                                            data-target="#ModalDivergenteInfo">
                                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                            Más información</button>
                                        </div>
                                        <!-- <div class="form-group">
                                            <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                                        </div>-->
                                    </form>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/Acomodador.gif') }}" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="content"> <!-- Div con color y borde redondeado-->
                                <br>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                                    <h2>Acomodador</h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                    <p>El aprendizaje acomodador combina la experiencia concreta y la experimentación activa</p>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <button type="button" name="purchase"
                                            class="btn btn-info btn-lg" data-toggle="modal"
                                            data-target="#ModalAcomodadorInfo">
                                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                            Más información</button>
                                        </div>
                                        <!-- <div class="form-group">
                                            <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
                                        </div> -->
                                    </form>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

                <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <!--/#carousel-slider-->
        </div>
        <!--/#about-slider-->
    </div>


    <!-- ********************************************
         *    Se crean los modal para los videos    *
         ********************************************
     -->
    <!-- Modal Convergente-->
    <div class="modal fade" id="ModalConvergenteVideo" tabindex="-1" role="dialog" aria-labelledby="ModalConvergenteLabelVideo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalConvergenteLabelVideo"><p class="p-white">Aprendizaje convergente</p></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oxFlKZ0zQ0k"></iframe>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true"
                    onclick="document.getElementById('convergente').click();">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Asimilador-->
    <div class="modal fade" id="ModalAsimiladorVideo" tabindex="-1" role="dialog" aria-labelledby="ModalAsimiladorLabelVideo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalAsimiladorLabelVideo"><p class="p-white">Aprendizaje Asimilador</p></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Yj_qwthaBKA"></iframe>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true"
                    onclick="document.getElementById('convergente').click();">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Asimilador-->
    <div class="modal fade" id="ModalDivergenteVideo" tabindex="-1" role="dialog" aria-labelledby="ModalDivergenteLabelVideo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalDivergenteLabelVideo"><p class="p-white">Aprendizaje divergente</p></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Sh7TS5TGSBo"></iframe>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true"
                    onclick="document.getElementById('convergente').click();">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Acomodador-->
    <div class="modal fade" id="ModalAcomodadorVideo" tabindex="-1" role="dialog" aria-labelledby="ModalAcomodadorLabelVideo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalAcomodadorLabelVideo"><p class="p-white">Aprendizaje acomodador</p></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6vHYayCg-KM"></iframe>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true"
                    onclick="document.getElementById('convergente').click();">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="servicios">
        <div class="container">
            <div class="text-center">
                <h3>Servicios que ofrecemos</h3>
                <p class="p-style">En esta sección se presentan los diferentes servicios que ofrecemos a nuestros clientes.</p>
            </div>
            <div class="row">
                <figure class="effect-chico">
                    <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                        <a data-toggle="modal" data-target="#ModalConvergenteVideo">
                            <img src="{{ asset('img/work/Convergente.jpeg') }}" class="img-responsive" alt="">
                            <div class="middle">
                                <div class="text">Convergente</div>
                            </div>
                        </a>
                    </div>
                </figure>
                <figure class="effect-chico">
                    <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                        <a data-toggle="modal" data-target="#ModalAsimiladorVideo">
                            <img src="{{ asset('img/work/Asimilador.jpeg') }}" class="img-responsive" alt="">
                            <div class="middle">
                                <div class="text">Asimilador</div>
                            </div>
                        </a>
                    </div>
                </figure>
                <figure class="effect-chico">
                    <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
                        <a data-toggle="modal" data-target="#ModalDivergenteVideo">
                            <img src="{{ asset('img/work/Divergente.png') }}" class="img-responsive" alt="">
                            <div class="middle">
                                <div class="text">Divergente</div>
                            </div>
                        </a>
                    </div>
                </figure>
                <figure class="effect-chico">
                    <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
                        <a data-toggle="modal" data-target="#ModalAcomodadorVideo">
                            <img src="{{ asset('img/work/Acomodador.jpeg') }}" class="img-responsive" alt="">
                            <div class="middle">
                                <div class="text">Acomodador</div>
                            </div>
                        </a>
                    </div>
                </figure>
            </div>
        </div>
    </div>
    <!--/#gallery-->

    <!-- ********************************************
         *  Se crean los modal para los formularios *
         ********************************************
     -->

    <!-- Modal Recinto-->
    <div class="modal fade" id="ModalRecinto" tabindex="-1" role="dialog" aria-labelledby="ModalRecintoLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalRecintoLabel"><p class="p-white">Por favor ingrese los datos requeridos</p></h4>
                </div>
                <div class="modal-body">
                    <form name="recintoSexo">
                        <div class="form-group" id="sexoEstilo">
                            <label for="exampleInputName2">Sexo &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;</label>
                            <select name="RSexo" id="RSexo" class="form-control">
                            <option value="" selected disabled hidden>Escoja una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            </select>
                        </div>

                        <br><br>

                        <div class="form-group" id="promedioEstilo">
                            <label for="exampleInputName2">Promedio</label>
                            <input type="number" class="form-control" name="RPromedio" id="numPromedioEstilo" value="1" min="1"/>
                        </div>

                        <br><br>

                        <div class="form-group" id="recintoEstilo">
                            <label for="exampleInputName2">Estilo de aprendizaje &nbsp;&nbsp;</label>
                            <select class="form-control" id="REstilo" name="REstilo">
                                <option value="" selected disabled hidden>Escoja un estilo</option>
                                <option value="1">Divergente</option>
                                <option value="2">Convergente</option>
                                <option value="3">Asimilador</option>
                                <option value="4">Acomodador</option>
                            </select>
                        </div>

                        <!-- Gif de carga-->
                        <img id="loadRecinto" class="center" src="{{ asset('./img/ajax-loader.gif') }}" width="10%" alt="">

                        <!-- Se cargan los mensajes en el modal-->
                        <div id="recintoMessage"></div>

                        <button type="button" class="btn btn-info" onclick="calcularRecinto()">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                        Obtener resultado</button>
                    </form>
                </div> <!-- Cierre del modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sexo-->
    <div class="modal fade" id="ModalSexo" tabindex="-1" role="dialog" aria-labelledby="ModalSexoLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalSexoLabel"><p class="p-white">Por favor ingrese los datos requeridos</p></h4>
                </div>
                <div class="modal-body">
                    <form name="Sexo">
                        <div class="form-group" id="sexoEstilo">
                            <label for="exampleInputName2">AgendarCita &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;</label>
                            <select id="SelectRecinto" class="form-control">
                            <option value="" selected disabled hidden>Escoja una opción</option>
                            <option value="1">Turrialba</option>
                            <option value="2">Paraíso</option>
                            </select>
                        </div>

                        <br><br>

                        <div class="form-group" id="promedioEstilo">
                            <label for="exampleInputName2">Promedio</label>
                            <input type="number" class="form-control" id="numPromedioSexo" value="1" min="1"/>
                        </div>

                        <br><br>

                        <div class="form-group" id="recintoEstilo">
                            <label for="exampleInputName2">Estilo de aprendizaje &nbsp;&nbsp;</label>
                            <select class="form-control" id="SEstilo">
                                <option value="" selected disabled hidden>Escoja un estilo</option>
                                <option value="1">Divergente</option>
                                <option value="2">Convergente</option>
                                <option value="3">Asimilador</option>
                                <option value="4">Acomodador</option>
                            </select>
                        </div>

                        <!-- Gif de carga-->
                        <img id="loadSexo" class="center" src="{{ asset('./img/ajax-loader.gif') }}" width="10%" alt="">

                        <!-- Se cargan los mensajes en el modal-->
                        <div id="sexoMessage"></div>

                        <button type="button" class="btn btn-info" onclick="calcularSexo();">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                        Obtener resultado</button>
                    </form>
                </div> <!-- Cierre del modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Estilo Custom-->
    <div class="modal fade" id="ModalEstiloCustom" tabindex="-1" role="dialog" aria-labelledby="ModalEstiloCustomLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalEstiloCustomLabel"><p class="p-white">Por favor ingrese los datos requeridos</p></h4>
                </div>
                <div class="modal-body">
                    <form name="datos">
                        <div class="form-group" id="sexoEstilo">
                          <label for="exampleInputName2">Cancelar cita &nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;</label>
                          <select class="form-control" id="SSexoCustom">
                              <option value="" selected disabled hidden>Escoja una opción</option>
                              <option value="1">Masculino</option>
                              <option value="2">Femenino</option>
                          </select>
                        </div>

                        <br><br>

                         <div class="form-group" id="promedioEstilo">
                              <label for="exampleInputName2">Promedio</label>
                              <input type="number" class="form-control" id="numPromedioSexoCustom" value="1" min="1"/>
                          </div>

                          <br><br>

                          <div class="form-group" id="recintoEstilo">
                            <label for="exampleInputName2">Recinto &nbsp;&nbsp;</label>
                            <select class="form-control" id="SRecintoCustom">
                                <option value="" selected disabled hidden>Escoja un recinto</option>
                                <option value="1">Turrialba</option>
                                <option value="2">Paraíso</option>
                            </select>
                          </div>

                          <!-- Gif de carga-->
                          <img id="loadEstiloCustom" class="center" src="{{ asset('./img/ajax-loader.gif') }}" width="10%" alt="">

                          <!-- Se cargan los mensajes en el modal-->
                          <div id="estiloCustomMessage"></div>

                          <button type="button" class="btn btn-info" onclick="calcularEstiloAprendizajeCustom();">
                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Obtener resultado</button>
                    </form>
                </div> <!-- Cierre del modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Estilo -->
    <div class="modal fade" id="ModalEstilo" tabindex="-1" role="dialog" aria-labelledby="ModalEstiloLabel">
        <div class="modal-dialog tam" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalEstiloLabel"><p class="p-white">Por favor ingrese los datos requeridos</p></h4>
                </div>
                <div class="modal-body">
                    <form class="form-inline" name="estilo">
                        <table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                        <tbody>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        discerniendo<br>
                        </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        ensayando<br>
                        </td>
                        <td style="vertical-align: top;">
                        <select name="c3">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        involucrándome</td>
                        <td style="vertical-align: top;">
                        <select name="c4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        practicando</td>
                        </tr>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        receptivamente </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        relacionando </td>
                        <td style="vertical-align: top;">
                        <select name="c7">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        analíticamente </td>
                        <td style="vertical-align: top;">
                        <select name="c8">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        imparcialmente </td>
                        </tr>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c9">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        sintiendo </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c10">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        observando </td>
                        <td style="vertical-align: top;">
                        <select name="c11">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        pensando </td>
                        <td style="vertical-align: top;">
                        <select name="c12">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        haciendo </td>
                        </tr>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c13">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        aceptando </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c14">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        arriesgando </td>
                        <td style="vertical-align: top;">
                        <select name="c15">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        evaluando </td>
                        <td style="vertical-align: top;">
                        <select name="c16">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        con cautela </td>
                        </tr>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c17">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        intuitivamente </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c18">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        productivamente </td>
                        <td style="vertical-align: top;">
                        <select name="c19">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        lógicamente </td>
                        <td style="vertical-align: top;">
                        <select name="c20">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        cuestionando </td>
                        </tr>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c21">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        abstracto </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c22">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        observando </td>
                        <td style="vertical-align: top;">
                        <select name="c23">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        concreto </td>
                        <td style="vertical-align: top;">
                        <select name="c24">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        activo </td>
                        </tr>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c25">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        orientado al presente </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c26">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        reflexivamente </td>
                        <td style="vertical-align: top;">
                        <select name="c27">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        orientado hacia el futuro </td>
                        <td style="vertical-align: top;">
                        <select name="c28">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        pragmático </td>
                        </tr>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c29">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        aprendo más de la experiencia </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c30">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        aprendo más de la observación </td>
                        <td style="vertical-align: top;">
                        <select name="c31">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        aprendo más de la conceptualización </td>
                        <td style="vertical-align: top;">
                        <select name="c32">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        aprendo más de la experimentación </td>
                        </tr>
                        <tr>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c33">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        emotivo </td>
                        <td style="vertical-align: top; width: 25%;">
                        <select name="c34">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        reservado </td>
                        <td style="vertical-align: top;">
                        <select name="c35">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        racional </td>
                        <td style="vertical-align: top;">
                        <select name="c36">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                        abierto </td>
                        </tr>
                        </tbody>
                        </table>

                        <br>
                        <!-- Gif de carga-->
                        <img id="loadEstilo" class="center" src="{{ asset('./img/ajax-loader.gif') }}" width="5%" alt="">

                        <!-- Se cargan los mensajes en el modal-->
                        <div id="apreMessage"></div>

                        <button type="button" class="btn btn-info" onclick="calcularEstiloAprendizajeConDatosDeColumnas()">
                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Obtener resultado</button>
                    </form>
                </div> <!-- Cierre del modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Profesor-->
    <div class="modal fade" id="ModalProfesor" tabindex="-1" role="dialog" aria-labelledby="ModalProfesorLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalProfesorLabel"><p class="p-white">Por favor ingrese los datos requeridos</p></h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <select class="form-control" id="comboEdadProfesor">
                                <option value="" selected disabled hidden>Escoja un rango de edad</option>
                                <option value="1">Menor o igual a 30 años</option>
                                <option value="2">Mayor a 30 y menor o igual a 55 años</option>
                                <option value="3">Mayor a 55 años</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edad">Género</label>
                            <select class="form-control" id="comboGeneroProfesor">
                                <option value="" selected disabled hidden>Escoja un género</option>
                                <option value="1">M</option>
                                <option value="2">F</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="autoevaluacion">Nota de autoevaluación</label>
                            <select class="form-control" id="comboNotaProfesor">
                                <option value="" selected disabled hidden>Escoja una nota</option>
                                <option value="1">Avanzado</option>
                                <option value="2">Principiante</option>
                                <option value="3">Intermedio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cantidadImp">Cantidad de veces que impartió el curso</label>
                            <select class="form-control" id="comboImparticionCurso">
                                <option value="" selected disabled hidden>Escoja una cantidad</option>
                                <option value="1">Nunca</option>
                                <option value="2">De una a cinco veces</option>
                                <option value="3">Más de cinco veces</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="autoevaluacion">Área de especialización</label>
                            <select class="form-control" id="comboAreaProfesor">
                                <option value="" selected disabled hidden>Escoja un área</option>
                                <option value="1">Diseñador de redes</option>
                                <option value="2">Toma de decisiones</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="autoevaluacion">Habilidad en la computadora</label>
                            <select class="form-control" id="comboHabilidadProfesor">
                                <option value="" selected disabled hidden>Escoja una habilidad</option>
                                <option value="1">Intermedio</option>
                                <option value="2">Alto</option>
                                <option value="3">Bajo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="autoevaluacion">Experiencia del docente en tecnología web para la enseñanza</label>
                            <select class="form-control" id="comboExperienciaEnsenanza">
                                <option value="" selected disabled hidden>Escoja una experiencia</option>
                                <option value="1">Nunca</option>
                                <option value="2">Algunas veces</option>
                                <option value="3">A menudo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="autoevaluacion">Experiencia del docente usando sitios web</label>
                            <select class="form-control" id="comboExperienciaUso">
                                <option value="" selected disabled hidden>Escoja una experiencia</option>
                                <option value="1">Nunca</option>
                                <option value="2">Algunas veces</option>
                                <option value="3">A menudo</option>
                            </select>
                        </div>

                        <!-- Gif de carga-->
                        <img id="loadProfesor" class="center" src="{{ asset('./img/ajax-loader.gif') }}" width="10%" alt="">

                        <!-- Se cargan los mensajes en el modal-->
                        <div id="tipoProfesor"></div>

                        <button type="button" class="btn btn-info" onclick="calcularTipoProfesor()">
                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Obtener resultado</button>
                    </form>
                </div> <!-- Cierre del modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Redes-->
    <div class="modal fade" id="ModalRedes" tabindex="-1" role="dialog" aria-labelledby="ModalRedesLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ModalRedesLabel"><p class="p-white">Por favor ingrese los datos requeridos</p></h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="confiabilidad ">Confiabilidad de la red </label>
                            <input type="number" class="form-control" id="confiabilidad" value="1" min="1"/>
                        </div>
                        <div class="form-group">
                            <label for="NumeroDeLinks ">Número de links </label>
                            <input type="number" class="form-control" id="numeroDeLinks" value="1" min="1"/>
                        </div>

                        <div class="form-group">
                            <label for="autoevaluacion">Capacidad total de la red</label>
                            <select class="form-control" id="SCapacidad">
                                <option value="" selected disabled hidden>Capacidad</option>
                                <option value="1">Alta</option>
                                <option value="2">Media</option>
                                <option value="3">Baja</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="autoevaluacion">Costo de la red</label>
                            <select class="form-control" id="SCosto">
                                <option value="" selected disabled hidden>Costo</option>
                                <option value="1">Alto</option>
                                <option value="2">Medio</option>
                                <option value="3">Bajo</option>
                            </select>
                        </div>

                        <!-- Gif de carga-->
                        <img id="loadRedes" class="center" src="{{ asset('./img/ajax-loader.gif') }}" width="10%" alt="">

                        <!-- Se cargan los mensajes en el modal-->
                        <div id="redes"></div>

                        <button type="button" class="btn btn-info" onclick="calcularRed();">
                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Obtener resultado</button>
                    </form>
                </div> <!-- Cierre del modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="admCita">
        <div class="team">
            <div class="container">
                <div class="text-center">
                    <div id="operacionRequerida"></div>
                    <h3>Agendar cita</h3>
                    <p class="p-style">En esta sección se presentan diferentes operaciones que puede llevar acabo el 
                    colaborador con respecto a la cita.</p>
                </div>
                <div class="row">
                <br>
                AGENDAR CITA
                    <div class="col-md-offset-4">
                        <div class="col-lg-8 borderRounded">
                            <br>
                            <form class="" action="{{url('appointment/store')}}" method="POST">
                                <div class="form-group">
                                    <label for="fecha">Fecha</label>
                                    <input type="text" name="date" id="date" class="form-control" id="fechaInput" placeholder="Fecha">
                                </div>
                                <div class="form-group">
                                    <label for="Hora">Hora</label>
                                    <input type="text" name="hour" id="hour" class="form-control" id="horaInput" placeholder="Hora">
                                </div>
                                
                                {!! csrf_field() !!} {{-- Se usa para evitar ataques de peticiones POST de sitios maliciosos--}}
                                <button type="submit" class="btn btn-info">Agendar</button>
                                <br>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>

                <br><br>

                USUARIO VS ESPECAILISTA
                <div class="row">
                <br>
                    <div class="col-md-offset-4">
                        <div class="col-lg-8 borderRounded">
                            <br>
                            
                            <form class="" action="{{url('user/store')}}" method="POST">
                               
                                <select class="form-control" id="mySelect" onchange="myFunction()">
                                    <option value="User">User</option>
                                    <option value="Specialist">Specialist</option>
                                </select> 
                                <br>

                            </form>
                        </div>
                    </div>
                </div>
                
                <br>
                <br>

                INSERTAR USUARIO
                <div class="row">
                <br>
                    <div class="col-md-offset-4">
                        <div class="col-lg-8 borderRounded">
                            <br>
                            <form class="" action="{{url('user/store')}}" method="POST">
                                <div class="form-group">
                                    <label for="identityCard">IdentityCard</label>
                                    <input type="text" name="identityCard" id="identityCard" class="form-control" id="identityCardInput" placeholder="IdentityCard">
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" id="nameInput" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" id="lastnameInput" placeholder="Lastname">
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="text" name="age" id="age" class="form-control" id="ageInput" placeholder="Age">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" id="addressInput" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" name="position" id="position" class="form-control" id="positionInput" placeholder="Position">
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="selectUser">
                                        <option value="User">User</option>
                                        <option value="Specialist">Specialist</option>
                                    </select> 
                                </div>

                                <div class="form-group">
                                    <label for="rol">Rol</label>
                                    <input type="text" name="rol" id="rol" class="form-control" id="rolInput" placeholder="Rol">
                                </div>
                                
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" id="passwordInput" placeholder="Password">
                                </div>
                                
                                {!! csrf_field() !!} {{-- Se usa para evitar ataques de peticiones POST de sitios maliciosos--}}
                                <button type="submit" class="btn btn-info">Ingresar usuario</button>
                                <br>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>

                <br>
                <br>

                

                 INSERTAR RECETA
                <div class="row">
                <br>
                    <div class="col-md-offset-4">
                        <div class="col-lg-8 borderRounded">
                            <br>
                            <form class="" action="{{url('recipe/store')}}" method="POST">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" id="usernameInput" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" id="description" class="form-control" id="descriptionInput" placeholder="Description">
                                </div>
                                
                                {!! csrf_field() !!} {{-- Se usa para evitar ataques de peticiones POST de sitios maliciosos--}}
                                <button type="submit" class="btn btn-info">Ingresar receta</button>
                                <br>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
                
                <br>
                <br>

                

            </div>
        </div>
    </div>
    <!--/#our-team-->
    <br>
    <footer id="credits">
        <div class="text-center">
            <div class="copyright">
                &copy; Salutem UCR. Todos los derechos reservados.
                <br>

                <div class="credits">
                    Desarrollado por: <br>
                    Danny Zúñiga Barrantes <br>
                    Priscilla Mena Monge <br>
                    Adrian Serrano <br>
                </div>
            </div>
        </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/parallax.min.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/fliplightbox.min.js') }}"></script>
  <script src="{{ asset('js/functions.js') }}"></script>
  <script src="{{ asset('contactform/contactform.js') }}"></script>
  <script src="{{ asset('js/myJs.js') }}"></script>

</body>

</html>

<script>


    function myFunction() {
        var x = document.getElementById("mySelect").value;
        alert(x);
        //document.getElementById("demo").innerHTML = "You selected: " + x;
    }










$('#btnAgendarCita').click(function(){
    /**/ //{{-- {{ route("users.details", ['id' => $user->id]) }} --}}

    var dateValue = document.getElementById('date').value;
    var hourValue = document.getElementById('hour').value;

    $.ajax({
      url: '{{url('prueba')}}',
      type: 'POST', /*Se usa con get, por que con post genera muchos problemas*/
      dataType: 'text',
      data: {
        "_token": "{{ csrf_token() }}" //Se usa para evitar ataques de peticiones POST de sitios maliciosos
      }
    })
    .done(function(respuesta){
        alert("hola")
        //var decode = JSON.parse(respuesta);
        //alert(decode.length)
        //alert(decode[0].name)
    })
    .fail( function(error, textStatus, errorThrown) {
        alert(error.responseText)
        //alert(error.responseText)//responseText
        //console.log(error.value); //Check console for output
        //$("#loadIMg").hide();//#datos es un div
    });
});
</script>
