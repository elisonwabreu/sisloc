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
                            
                            <li class="active"><a data-toggle="tab" href="#infP">Devolução</a></li>
                           
                        </ul>
                        <div class="tab-content"><!-- informações pessoais -->
                            <div id="infP" class="tab-pane active">

                                <form id="validate_field_types" action="" method="post">
                                    <div class="formSep">
                                        <div class="span10">
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    <label class="req">Contrato:</label>
                                                    <input class="span12" type="text" name="contrato" id="contrato" required />
                                                </div>
                                                
                                                <div class="span4">
                                                    <label class="">Cliente:</label>
                                                    <input class="span12" type="text" name="cliente" id="cliente" disabled />
                                                </div>
                                                
                                                <div class="span4">
                                                    <label class="">Status:</label>
                                                    <input class="span12" type="text" name="status" id="status" disabled />
                                                </div>
                                                
                                           </div> 
                                            
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    <label class="">Qtd. Locado:</label>
                                                    <input class="span12" type="text" name="qtdLocado" id="qtdLocado" disabled />
                                                </div>
                                                
                                                <div class="span4">
                                                    <label class="">Qtd. Entregue:</label>
                                                    <input class="span12" type="text" name="qtdEntregue" id="qtdEntregue"  />
                                                </div>
                                                
                                                <div class="span2">
                                                    <label class="">Data Entrega:</label>
                                                    <input class="span12 mask_date" type="text" name="dtEntrega" id="dtEntrega"  />
                                                </div>
                                                
                                                <div class="span2">
                                                    <label class="">Pendente:</label>
                                                    <input class="span12" type="text" name="pendente" id="pendente"  />
                                                </div>
                                           </div>
                                            <div class="row-fluid">
                                                 <label class="">Observações:</label>
                                                    <textarea class="span12 pop-over" data-title="Informações Adicionais" data-content="Limite máx. 500 caracteres." 
                                                              data-placement="bottom" data-trigger="hover" rows="3"></textarea>
                                            </div>
                                            
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    
                                                    <label class="req">Recebido:</label>
                                                     <input class="span12 moedaReal" type="text" name="recebido" id="recebido"  />
                                                 
                                                </div>
                                                
                                                <div class="span3">
                                                    
                                                    <label class="">Total:</label>
                                                    <input class="span12 moedaReal" type="text" name="total" id="total" disabled  />
                                                 
                                                </div>
                                                
                                                <div class="span3">
                                                    
                                                    <label class="">Troco:</label>
                                                    <input class="span12 moedaReal" type="text" name="troco" id="troco" disabled />
                                                 
                                                </div>
                                            </div>    
                                    </div>
                                </div>


                            </div><!-- Fim Endereçso -->
                            <div class="formSep">
                                <button type="submit" class="btn-success">Confirmar</button>
                                <button type="submit" class="btn-danger">Cancelar</button>
                            </div>

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