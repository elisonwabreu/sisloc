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
                            <li class="active"><a data-toggle="tab" href="#infP">Trajes</a></li>
                            <li><a data-toggle="tab" href="#endereco">Pagamento</a></li>
                           <!-- <li><a data-toggle="tab" href="#oldInfo">Admissão</a></li> -->
                        </ul>
                        <div class="tab-content"><!-- informações pessoais -->
                            <div id="infP" class="tab-pane active">

                                <form id="validate_field_types" action="" method="post">
                                    <div class="formSep">
                                        <div class="span12">
                                            
                                            <div class="row-fluid">
                                                
                                                <div class="span1">
                                                    <label class="req">Cód:</label>
                                                    <input class="span12" type="text" name="id" id="id" required/>
                                                </div>
                                                
                                                <div class="span4">
                                                    <label class="">Cliente:</label>
                                                    <input class="span12 pop-over" data-content="Nome do Cliente."
                                                           data-title="Após informar o código do cliente, o nome do mesmo aparecerá aqui." data-placement="bottom" data-trigger="hover"
                                                           type="text" name="nome" id="nome" disabled />
                                                </div>

                                                <div class="span2">
                                                    <label class="req">Data Reserva:</label>
                                                    <input class="span12 mask_date" type="text" name="reserva" id="dtReserva" required />
                                                </div>
                                                
                                                <div class="span2">
                                                    
                                                   <label class="req">Evento:</label>
                                                   <select name="selectEvento" id="tipoEvento" class="span12" required >
                                                        <option></option>
                                                        <option value="C">Casamento</option>
                                                        <option value="F">Formatura</option>
                                                        <option value="A">Aniversário</option>
                                                    </select>
                                                   
                                                </div>
                                                
                                                <div class="span3">
                                                    
                                                    <label class="req">Local Evento:</label>
                                                    <input class="span12" type="text" name="locEvento" id="locEvento" />
                                                    
                                                </div>                                                

                                            </div>
                                            
                                            <div class="row-fluid">
                                                
                                                <div class="span2">
                                                    
                                                    <label class="req">Data Evento:</label>
                                                    <input class="span12 mask_date" type="text" name="dtEvento" id="dtEvento" required />
                                                
                                                </div>
                                                
                                                <div class="span2">
                                                    
                                                    <label class="">Desconto:</label>
                                                    <input class="span12 pop-over" data-content="Inserir um valor de desconto para esse contrato de locação." 
                                                           data-title="Informe o deconto." data-placement="bottom" data-trigger="hover" type="text" name="descContrato" id="descContrato"  />
                                                
                                                </div>
                                                
                                                <div class="span2">
                                                    
                                                    <label class="req">N° Contrato:</label>
                                                    <input type="text" class="span12 pop-over" 
                                                           data-content="O número do contrado será gerado automaticante ao acessar a página" 
                                                           data-title="O número do contrado." data-placement="bottom" data-trigger="hover" name="numContrato" required />
                                                
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row-fluid">
                                                
                                                <div class="span5">
                                                    
                                                    <label class="">Observação:</label>
                                                    <textarea class="span12 pop-over" data-title="Observação" data-content="Limite máx. 500 caracteres." 
                                                              data-placement="bottom" data-trigger="hover" rows="3"></textarea>
                                                
                                                </div>
                                                
                                                <div class="span5">
                                                    
                                                    <label class="">Informações Adicionais:</label>
                                                    <textarea class="span12 pop-over" data-title="Informações Adicionais" data-content="Limite máx. 500 caracteres." 
                                                              data-placement="bottom" data-trigger="hover" rows="3"></textarea>
                                                
                                                </div>
                     
                                            </div>
                                            
                                            <div class="row-fluid">
                                                
                                                <div class="span2">
                                                    <label class="req">Data Retirada:</label>
                                                    <input class="span12 mask_date" data-content="Informe a data que o cliente retirou os itens." 
                                                           data-title="Data da retirada." data-placement="bottom" data-trigger="hover" name="dtRetirada" required />
                                                </div>
                                                
                                                <div class="span1">
                                                    <label class="req">Horas:</label>
                                                    <input class="span12 mask_hora pop-over" data-content="Informa a hora que o cliente retirou os itens." 
                                                           data-title="Hora da Retira." data-placement="bottom" data-trigger="hover" name="hrRetirada" id="hrRetirada" required/>
                                                </div>
                                                
                                                <div class="span2">
                                                    <label class="req">Data Devolução:</label>
                                                    <input class="span12 mask_date" data-content="Informe a data que o cliente retirou os itens." 
                                                           data-title="Data da retirada." data-placement="bottom" data-trigger="hover" name="dtRetirada" required />
                                                </div>
                                                 
                                            </div> 
                                            
                                            <div class="row-fluid">
                                                
                                                <div class="span12">
                                                    
                                                    <label class="">Itens:</label>
                                                    <textarea class="span12 pop-over" data-title="Informações Adicionais" data-content="Limite máx. 500 caracteres." 
                                                              data-placement="bottom" data-trigger="hover" rows="3"></textarea>
                                                
                                                </div>
                                                
                                            </div>
                                            <div class="formSep">
                                            <div class="row-fluid">
                                                
                                                <div class="span1">
                                                    <label class="">Desconto:</label>
                                                    <input class="span12" type="text" name="desconto" id="desconto" disabled />
                                                </div>

                                                <div class="span1">
                                                    <label class="">Subtotal:</label>
                                                    <input class="span12 mask_numeric" type="text" name="subTotal" id="subTotal" disabled />
                                                </div>
                                                
                                                <div class="span1">
                                                    <label class="">Total:</label>
                                                    <input class="span12 mask_numeric" type="text" name="subTotal" id="subTotal" disabled />
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </div>	
                                       
                                    </div> 
                                    
                            </div><!-- fim das informações pessoais -->                                        

                            <div class="tab-pane" id="endereco" ><!-- Outras Informações -->
                                <!-- ------------------------ Incio do cad enderco ----------------------------------------------------- -->                
                                <div class="formSep">
                                    <div class="span12">
                                        <div class="row-fluid"> 
                                              <div class="span12">
                                                    
                                                    <label class="">Pagamento:</label>
                                                    <textarea class="span12 pop-over" data-title="Informações Adicionais" data-content="Limite máx. 500 caracteres." 
                                                              data-placement="bottom" data-trigger="hover" rows="3"></textarea>
                                                
                                                </div> 
                                        </div>
                                    </div>

                            </div><!-- Fim Endereço -->

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