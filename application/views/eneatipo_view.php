<?php
$this->load->view("header");
?>
<?php
$eene = array("Reformador", "Ayudador", "Triunfador", "Individualista", "Investigador", "Leal", "Entusiasta", "Desafiador", "Pacificador");
$tip = array("Emocional", "Intuitivo", "Racional")
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<style type="text/css">
    #eneatipos{
        margin-top: 50px;
    }

    .enea{
        height: 100px;
    }

    .des{
        text-align: justify;
        font-family: sans-serif;
        font-size: 1.2em;
    }

</style>
</head>
<body>
    <div id="outer-wrap">
        <div id="inner-wrap">

            <header id="top" role="banner">
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <h1 class="block-title">Book Title</h1>
                            <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
                        </div>
                    </div>
                </div>
            </header>

            <nav id="nav" role="navigation">
                <div class="block">
                    <h2 class="block-title">Dashboard</h2>
                    <ul>
                        <li>
                            <h6><a href="<?= base_url() ?>academia">Dashboard</a></h6>
                        </li><!--
                        -->
                        <li>
                            <a href="<?= base_url() ?>">Introduccion</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>academia/cartas">Eneagrama</a>
                        </li><!--
                        -->
                        <li>
                            <a href="<?= base_url() ?>gestalt">Prueba gestalt</a>
                        </li>


                        <li>
                            <a href="<?= base_url() ?>biblioteca">Anticurriculum</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>biblioteca">Disciplinas</a>
                        </li>
                        <li class="is-active">
                            <a href="<?= base_url() ?>biblioteca">Base de conocimientos</a>
                        </li>

                        <br><br><br>
                        <li>
                            <a href="<?= base_url() ?>academia/salir">Cerrar sesión</a>
                        </li>
                    </ul>
                    <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                </div>
            </nav>

            <div id="main" role="main">
                <div class="container" id="eneatipos">
                    <div class="row" >
                        <div class="Three columns">
                            <h1> Eneatipo <?= $eneatipo['ide'] . ": " . $eneatipo['inomb'] ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four columns offset-by-one">
                            <h4><?= $tip[$eneatipo['icen'] - 1] ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four columns offset-by-one">
                            <h4>Estres: <?= $eene[$eneatipo['iest'] - 1] ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four columns offset-by-one">
                            <h4>Seguridad: <?= $eene[$eneatipo['iseg'] - 1] ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ten columns centered des">
                            <?= $eneatipo['idescc'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four columns centered">
                            <table class="twelve">
                                <tbody>
                                    <tr>
                                        <td>Pasión</td>
                                        <td><?= $eneatipo['ipas'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fijación</td>
                                        <td><?= $eneatipo['ifij'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Trampa</td>
                                        <td><?= $eneatipo['itra'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Función</td>
                                        <td><?= $eneatipo['ifun'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Visión</td>
                                        <td><?= $eneatipo['ivis'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Temor</td>
                                        <td><?= $eneatipo['item'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Deseo</td>
                                        <td><?= $eneatipo['ides'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ten columns centered des">
                            <?= $eneatipo['idesc'] ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer -->
            <footer role="contentinfo">
                <!--<div class="block container">
                    <div class="row">
                        <div class="twelve columns">
                            <p class="small">Copyright © <a href="http://dbushell.com/">David Bushell</a></p>
                        </div>
                    </div>
                </div>-->
            </footer>

        </div>
        <!--/#inner-wrap-->
    </div>
    <!--/#outer-wrap-->

    <script src="<?= base_url() ?>media/js/main.js"></script>
</body>
</html>
