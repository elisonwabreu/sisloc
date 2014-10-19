<?php
//classe responsavel pela mudança automatica do titulo dos modulos
require 'MudaTitulo.php';
$mTitle = new MudaTitulo;
?>
<div class="container-fluid"><!-- Inicia o conteudo -->
    <div class="row-fluid">
        <div class="span12">
            <div class="w-box">
                <div class="w-box-header">
                    <h4><?php $mTitle->trocarTitulo($_GET['url'], $_GET['modulo']); //realiza a mudança do titulo automaticamente     ?></h4>
                </div>
                <div class="w-box-content cnt_b">
                    <div class="tabbable tabbable-bordered">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#infP">Informações Pessoais</a></li>
                            
                        </ul>
                        <div class="tab-content"><!-- informações pessoais -->
                            <div id="infP" class="tab-pane active">

                                <form id="validate_field_types" action="" method="post">
                                    <div class="formSep">
                                        <div class="span10">
                                            <div class="row-fluid">
                                                <div class="span1">
                                                    <label class="">Cód:</label>
                                                    <input class="span12" type="text" name="id" id="id" disabled />
                                                </div>
                                                <div class="span6">
                                                    <label class="req">Cargo:</label>
                                                    <input class="span12 pop-over" data-content="Digite o nome do Cargo."
                                                           data-title="Nome do Cargo a cadastrar" data-placement="bottom" data-trigger="hover"
                                                           type="text" name="cargo" id="cargo" required />
                                                </div>

                                                <div class="span2">
                                                    <label class="req">Status:</label>
                                                    <select name="funStatus" id="fornStatus" class="span12" required>
                                                        <option value="A">Ativo</option>
                                                        <option value="I">Inativo</option>
                                                    </select>
                                                </div>
                                           </div>

                                        </div>	
                                           
                                    </div> 
                            </div><!-- fim das informações pessoais -->                                        

                            <div class="formSep">
                                <button type="submit" class="btn-success">Cadastrar</button>
                                <button type="submit" class="btn-danger">Cancelar</button>
                            </div>
                                    </div>
                            
                                </div>

                            
                            </div><!-- Fim Endereçso -->
                            

                            </form>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>  
</div>
<div class="footer_space"></div>
</div><!-- Encerra o conteudo -->