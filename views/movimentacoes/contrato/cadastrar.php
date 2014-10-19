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
                                            
                                        </div>	
                                       
                                    </div> 
                                    
                            </div><!-- fim das informações pessoais -->                                        

                            <div class="tab-pane" id="endereco" ><!-- Outras Informações -->
                                <!-- ------------------------ Incio do cad enderco ----------------------------------------------------- -->                
                                <div class="formSep">
                                    <div class="span12">
                                        <div class="row-fluid"> 
                                            <div class="span2">                                      
                                                <label class="req">CEP:</label>
                                                <input class="span12 pop-over mask_cep" data-title="CEP" data-content="informe um CEP válido." 
                                                       data-placement="bottom" data-trigger="hover" type="text" name="ceps" id="" required />
                                            </div><!-- FIM do CEP  -->
                                            <div class="span5"><!-- Incio do Endereco  -->
                                                <label class="req">Endereço:</label>
                                                <input class="span12 pop-over" data-title="Endereço" data-content="Informe o endereço do Fornecedor." 
                                                       data-placement="bottom" data-trigger="hover" type="text" name="endereco" id="id" required />
                                            </div><!-- Incio do Endereco  -->
                                            <div class="span1"><!-- Incio do Num  -->
                                                <label class="req">Núm:</label>
                                                <input class="span12 pop-over mask_numeros" data-title="Número" data-content="Informe o número da residência." 
                                                       data-placement="bottom" data-trigger="hover" type="text" name="num" id="" required />
                                            </div><!-- Incio do Num  -->
                                            <div class="span4"><!-- Incio do Num  -->
                                                <label class="">Complemento:</label>
                                                <input class="span12 pop-over" data-title="Complemento" data-content="Informe o complemento da residência." 
                                                       data-placement="bottom" data-trigger="hover" type="text" name="complemento" id="id" />
                                            </div><!-- Incio do Num  -->
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span2"><!-- Incio do Num  -->
                                                    <label class="req">Cidade:</label>
                                                    <input class="span12 pop-over" data-title="Cidade" data-content="Informe a cidade a qual a empresa pertence." 
                                                           data-placement="bottom" data-trigger="hover" type="text" name="cidade" id="id" required />
                                                </div><!-- Incio do Num  -->
                                                <div class="span2"><!-- Incio do Num  -->
                                                    <label class="req">Bairro:</label>
                                                    <input class="span12 pop-over" data-title="Bairro" data-content="Informe o bairro ao qual a empresa está situada." 
                                                           data-placement="bottom" data-trigger="hover" type="text" name="bairro" id="id" required />
                                                </div><!-- Incio do Num  -->
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <label>Dados complementares:</label>
                                                    <textarea class="span12 pop-over" data-title="Complemento" data-content="Insira alguma informação que possa ser importante ao Fornecedor." 
                                                              data-placement="bottom" data-trigger="hover" rows="5" cols="60"> </textarea>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>

                            </div><!-- Fim Endereço -->

                            <div id="oldInfo" class="tab-pane"><!-- Fim Outras Informações -->
                                <div class="formSep">
                                    <div class="span12">
                                        <div class="row-fluid">
                                            <div class="span2">
                                                <label class="req">PIS/PASEP</label>
                                                <input class="span12 pop-over mask_pis" data-content="Digite aqui número do PIS ou PASEP"
                                                       data-title="PIS / PASEP" data-placement="bottom" data-trigger="hover" type="text" 
                                                       name="orgExped" id="orgExped" required />
                                            </div>
                                            <div class="span2">
                                                <label class="req">Nº CTPS</label>
                                                <input class="span12 pop-over " data-content="Digite aqui número da CTPS."
                                                       data-title="Número Carteira de Trabalho" data-placement="bottom" data-trigger="hover" type="text" 
                                                       name="orgExped" id="orgExped" required />
                                            </div>
                                            <div class="span1">
                                                <label class="req">Serie</label>
                                                <input class="span12 pop-over " data-content="Digite aqui a Serie da CTPS."
                                                       data-title="Número Serie" data-placement="bottom" data-trigger="hover" type="text" 
                                                       name="orgExped" id="orgExped" required />
                                            </div>

                                            <div class="span2">
                                                <label class="req">UF CTPS:</label>
                                                <select name="val1_sport" id="val1_sport" class="span12" required >
                                                    <option></option>
                                                    <option value="option1">CE</option>
                                                    <option value="option2">SP</option>
                                                    <option value="option3">RJ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span2">
                                                <label class="req">Admissão:</label>
                                                <input  class="span12 pop-over mask_date" data-title="Data de Admissão" data-content="Informe a data de admissão do Funcionário"
                                                        data-placement="bottom" data-trigger="hover" type="text" name="telefone" id="" required />
                                            </div>
                                            <div class="span2">
                                                <label class="req">Horário:</label>
                                                <select name="val1_sport" id="val1_sport" class="span12" required >
                                                    <option></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                            <div class="span6">
                                                <label class="req">Horário de Trabalho:</label>
                                                <input  class="span12 pop-over" data-title="Horário de Trabalho" data-content="Campo preenchido de acordo com a seleção do Horário."
                                                        data-placement="bottom" data-trigger="hover" type="text" name="telefone" id="" disabled />
                                            </div>
                                        </div>
                                        <div class="row-fluid"> 
                                            <div class="span1">                                      
                                                <label class="">Banco:</label>
                                                <input class="span12" type="text" name="banco" id="id" />
                                            </div>
                                            <div class="span5"><!-- Incio do Endereco  -->
                                                <label class="">Nome:</label>
                                                <input class="span12" type="text" name="nomeBanco" id="id" />
                                            </div><!-- Incio do Endereco  -->
                                            <div class="span1"><!-- Incio do Num  -->
                                                <label class="">Agência:</label>
                                                <input class="span12" type="text" name="agencia" id="id" />
                                            </div><!-- Incio do Num  -->
                                            <div class="span2"><!-- Incio do Num  -->
                                                <label class="">Conta:</label>
                                                <input class="span12" type="text" name="conta" id="id" />
                                            </div><!-- Incio do Num  -->
                                            <div class="span1"><!-- Incio do Num  -->
                                                <label class="">Dígito:</label>
                                                <input class="span12" type="text" name="digito" id="id" />
                                            </div><!-- Incio do Num  -->

                                        </div>
                                    </div>
                                </div>


                            </div><!-- Fim Endereçso -->
                            <div class="formSep">
                                <button type="submit" class="btn-success">Cadastrar</button>
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