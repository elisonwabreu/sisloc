<?php
    require 'VerURL.php';
    //clase responsavel pela troca de url - será usada apenas durante a etapa de desnvolvimento das telas do sistema
    //ao informar um link interno usar a seguinte estrutura ?modulo=exemplos/xml&url=ler
    $url = new VerURL;
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>

        <meta charset="UTF-8">
        <title>SISLOC - Sistema de Locação para Eventos!</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" type="image/ico" href="assets/favicon.ico">

        <!-- common stylesheets-->
        <!-- bootstrap framework css -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.min.css">
        <!-- iconSweet2 icon pack (16x16) -->
        <link rel="stylesheet" href="assets/img/icsw2_16/icsw2_16.css">
        <!-- splashy icon pack -->
        <link rel="stylesheet" href="assets/img/splashy/splashy.css">
        <!-- flag icons -->
        <link rel="stylesheet" href="assets/img/flags/flags.css">
        <!-- power tooltips -->
        <link rel="stylesheet" href="assets/js/lib/powertip/jquery.powertip.css">
        <!-- google web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
        <!-- sticky notifications -->
            <link rel="stylesheet" href="assets/js/lib/sticky/sticky.css">
        <?php 
            //troca efetivamente a tela do sistema
            $urli = ( !empty( $_GET['url'] ) ) ? $_GET['url'] : "";
            $url->mudaEstilo($urli,"css"); 
        ?>
        <!-- main stylesheet -->
        <link rel="stylesheet" href="assets/css/beoro.css">

        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css"><![endif]-->
        <!--[if IE 9]><link rel="stylesheet" href="assets/css/ie9.css"><![endif]-->

        <!--[if lt IE 9]>
            <script src="assets/js/ie/html5shiv.min.js"></script>
            <script src="assets/js/ie/respond.min.js"></script>
            <script src="assets/js/lib/flot-charts/excanvas.min.js"></script>
        <![endif]-->

    </head>
    <body class="bg_d">
        <!-- main wrapper (without footer) -->    
        <div class="main-wrapper">
            <!-- top bar -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        
                        <div id="fade-menu" class="pull-left">
                            <ul class="clearfix" id="mobile-nav">
                                <li>
                                    <a href="javascript:void(0)">Cadastros</a>
                                    <ul>
                                        <li>
                                            <a href="#">Pessoas</a>
                                            <ul>
                                                <li><a href="?modulo=pessoas/clientes&url=listar">Clientes</a></li>
                                                <li><a href="?modulo=pessoas/fornecedores&url=listar">Fornecedores</a></li>
                                                <li><a href="?modulo=pessoas/empresas&url=listar">Empresas</a></li>
                                                <li><a href="?modulo=pessoas/funcionarios&url=listar">Funcinários</a></li>
                                                <li><a href="?modulo=pessoas/org_patro&url=listar">Organizadores / Patrocinadores</a></li>
                                                <li><a href="?modulo=pessoas/agenda_contatos&url=listar">Agenda de Contatos</a></li>
                                                <li><a href="?modulo=pessoas/cargos&url=listar">Cargos</a></li>
                                                <li><a href="?modulo=pessoas/pronomes_trat&url=listar">Pronomes de Tratamento</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Trajes</a>
                                            <ul>
                                                <li><a href="?modulo=trajes/trajes_pecas&url=listar">Trajes / Peças</a></li>
                                                <li><a href="?modulo=trajes/categoria&url=listar">Categoria de Trajes</a></li>
                                                <li><a href="?modulo=trajes/pacotes_comp&url=listar">Pacotes / Componentes dos Trajes</a></li>
                                                <li><a href="?modulo=trajes/loc_ajuste&url=listar">Locais de ajuste</a></li>
                                                <li><a href="?modulo=trajes/tamanhos&url=listar">Tamanhos</a></li>
                                                <li><a href="?modulo=trajes/cores&url=listar">Cores</a></li>
                                                <li><a href="?modulo=trajes/tecidos&url=listar">Tecidos</a></li>
                                                <li><a href="?modulo=trajes/locale_traje&url=listar">Localização do traje</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Divugação</a>
                                            <ul>
                                                <li><a href="?modulo=divugacao/convenios&url=listar">Convênios</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Eventos</a>
                                            <ul>
                                                <li><a href="?modulo=eventos/eventos&url=listar">Eventos</a></li>
                                                <li><a href="?modulo=eventos/tema_eventos&url=listar">Temas de Eventos</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Marcas</a>
                                            <ul>
                                                <li><a href="?modulo=marcas/marcas&url=listar">Marcas</a></li>
                                                <li><a href="?modulo=marcas/tip_marcas&url=listar">Tipos de Marcas</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Movimentações</a>
                                    <ul>
                                        <li><a href="?modulo=movimentacoes/contrato&url=listar">Novo Contrato</a></li>
                                        <li><a href="?modulo=movimentacoes/devolucao&url=listar">Devolução</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Consultas</a>
                                    <ul>
                                        <li><a href="?modulo=consultas/pedido&url=listar">Consulta por Pedido</a></li>
                                        <li><a href="?modulo=consultas/fornecedor&url=listar">Por Fornecedor</a></li>
                                        <li><a href="?modulo=consultas/situacao&url=listar">Consulta Situção</a></li>
                                        <li><a href="?modulo=consultas/sit_financeira&url=listar">Consulta Financeira dos Contratos</a></li>
                                        <li><a href="?modulo=consultas/graf_contrato&url=listar">Gráficos dos Contratos</a></li>
                                        <li><a href="?modulo=consultas/graf_comp_convenios&url=listar">Gráfico Comparativo dos Convênios</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Ferramentas</a>
                                    <ul>
                                        <li><a href="?modulo=ferramentas/usuarios&url=listar">Usuários</a></li>
                                        <li><a href="?modulo=ferramentas/perfis&url=listar">Perfis de Usuários</a></li>
                                        <li><a href="?modulo=ferramentas/senha&url=listar">Alterar Senha</a></li>
                                        <li><a href="#">Backup</a>
                                            <ul>
                                                <li><a href="?modulo=ferramentas/backup/fazer&url=listar">Fazer Backup</a></li>
                                                <li><a href="?modulo=ferramentas/backup/importar&url=listar">Importar Backup</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="?modulo=ferramentas/configuracoes&url=listar">Configurações</a></li>
                                        <li><a href="?modulo=ferramentas/atualizacao&url=listar">Histórico de Atualizações</a></li>
                                        <li><a href="?modulo=ferramentas/desbloq_contratos&url=listar">Desbloqueio de Contratos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- fim top bar -->

            <!-- header -->
            <header>
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span3">
                            <div class="main-logo"><a href="./"><img src="" alt="SISLOC" title="SISLOC - Sistema de Locação para Eventos"></a></div>
                        </div>
                        <div class="span5">
                            <nav class="nav-icons">
                                <ul>
                                    <li><a href="javascript:void(0)" class="ptip_s" id="ptip_s" title="Dashboard"><i class="icsw16-home"></i></a></li>
                                    <li><a href="javascript:void(0)" class="ptip_s" title="Content"><i class="icsw16-create-write"></i></a></li>
                                    <li><a href="javascript:void(0)" class="ptip_s" title="Mailbox"><i class="icsw16-mail"></i><span class="badge badge-info">6</span></a></li>
                                    <li><a href="javascript:void(0)" class="ptip_s" title="Comments"><i class="icsw16-speech-bubbles"></i><span class="badge badge-important">14</span></a></li>
                                    <li class="active"><span class="ptip_s" title="Statistics (active)"><i class="icsw16-graph"></i></span></li>
                                    <li><a href="javascript:void(0)" class="ptip_s" title="Settings"><i class="icsw16-cog"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="span4">
                            
                        </div>
                    </div>
                </div>
            </header><!-- fim header -->

            <!-- breadcrumbs -->
            <div class="container-fluid">
                <ul id="breadcrumbs">
                    <li><a href="./"><i class="icon-home"></i></a></li>
                    <li><span>Tela Inicial</span></li>
                </ul>
            </div>
            <!-- main content -->
            <?php 
                //troca efetivamente a tela do sistema
                $modulo = ( isset( $_GET['modulo'] ) && !empty( $_GET['modulo'] ) ) ? $_GET['modulo'] : "dashboard";
                $urli = ( isset( $_GET['url'] ) && !empty( $_GET['url'] ) ) ? $_GET['url'] : "";
                $url->trocarURL($modulo,$urli); 
            ?>
        <!-- footer --> 
        <footer>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span5">
                        <div>&copy; DocType Solutions</div>
                    </div>
                    <div class="span7">
                        <ul class="unstyled">
                            <li><a href="./">Inico</a></li>
                            <li>&middot;</li>
                            <li><a href="./">Link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Common JS -->
        <!-- jQuery framework -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- bootstrap Framework plugins -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- top menu -->
        <script src="assets/js/jquery.fademenu.js"></script>
        <!-- top mobile menu -->
        <script src="assets/js/selectnav.min.js"></script>
        <!-- actual width/height of hidden DOM elements -->
        <script src="assets/js/jquery.actual.min.js"></script>
        <!-- jquery easing animations -->
        <script src="assets/js/jquery.easing.1.3.min.js"></script>
        <!-- power tooltips -->
        <script src="assets/js/lib/powertip/jquery.powertip-1.1.0.min.js"></script>
        <!-- date library -->
        <script src="assets/js/moment.min.js"></script>
        <!-- hotkeys library ( teclas de atalho ) -->
        <script src="assets/js/lib/js-hotkeys/jquery.hotkeys.js"></script>
        <script src="assets/js/js_hotkeys.js"></script>
        <!-- common functions -->
        <script src="assets/js/beoro_common.js"></script>        
        <?php 
            //troca efetivamente a tela do sistema
            $urli = ( !empty( $_GET['url'] ) ) ? $_GET['url'] : "";
            $url->mudaEstilo($urli,"js");
        ?>
        <!-- sticky notifications -->
            <script src="assets/js/lib/sticky/sticky.min.js"></script>
        <!-- bootbox -->
            <script src="assets/js/lib/bootbox/bootbox.min.js"></script>
            
            <script src="assets/js/pages/beoro_notifications.js"></script>
    </body>
</html>