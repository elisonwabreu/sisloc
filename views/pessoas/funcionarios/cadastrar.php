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
                    <h4><?php $mTitle->trocarTitulo($_GET['url'], $_GET['modulo']); //realiza a mudança do titulo automaticamente    ?></h4>
                </div>
                <div class="w-box-content cnt_b">
                    <div class="tabbable tabbable-bordered">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#infP">Informações Pessoais</a></li>
                            <li><a data-toggle="tab" href="#endereco">Endereço</a></li>
                            <li><a data-toggle="tab" href="#oldInfo">Outras Informações</a></li>
                        </ul>
                        <div class="tab-content"><!-- informações pessoais -->
                            <div id="infP" class="tab-pane active">

                                <form id="validate_field_types" action="" method="post">
                                    <div class="formSep">
                                        <div class="span12">
                                            <div class="row-fluid">
                                                <div class="span1">
                                                    <label class="">Cód:</label>
                                                    <input class="span12" type="text" name="id" id="id" disabled />
                                                </div>
                                                <div class="span4">
                                                    <label class="req">Nome Completo:</label>
                                                    <input class="span12 pop-over" data-content="Digite o nome completo do forncedor"
                                                           data-title="Nome Completo Forncedor" data-placement="bottom" data-trigger="hover"
                                                           type="text" name="nome" id="nome" required />
                                                </div>
                                                
                                                <div class="span1">
                                                    <label class="req">Status:</label>
                                                    <select name="grupoPessoas" id="fornStatus" class="span12" required>
                                                        <option value="A">Ativo</option>
                                                        <option value="I">Inativo</option>
                                                    </select>
                                                </div>
                                                 <div class="span2">
                                                    <label class="req">CPF:</label>
                                                    <input class="span12 mask_cpf pop-over" data-content="Digite aqui o número CPF do cliente. Digite apenas números." data-title="CPF do Cliente" data-placement="bottom" data-trigger="hover" type="text" name="cpf" required />
                                                </div>
                                                <div class="span2">
                                                    <label class="req">RG:</label>
                                                    <input class="span12 pop-over" data-content="Digite aqui o número RG do cliente. Digite apenas números." data-title="RG do Cliente" data-placement="bottom" data-trigger="hover" type="text" name="rg" id="rg" required />
                                                </div>
                                                 <div class="span2">
                                                    <label class="req">Orgão Exp</label>
                                                    <input class="span12 pop-over" data-content="Digite aqui a sigla do orgão emissor do RG do cliente. Ex.: SSP" data-title="Orgão Expedidor (RG)" data-placement="bottom" data-trigger="hover" type="text" name="orgExped" id="orgExped" required />
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                
                                                <div class="span2">
                                                    <label class="req">Data de Nascimento:</label>
                                                    <input type="text" class="span12 pop-over mask_date" 
                                                           data-content="Digite aqui a data de nascimento do cliente. Digite apenas números. Ex.: 01052000" 
                                                           data-title="Data de Nascimento" data-placement="bottom" data-trigger="hover" name="dataNasc" required />
                                                </div>
                                                <div class="span2">
                                                    <label class="req">Sexo:</label>
                                                    <select name="grupoPessoas" id="fornStatus" class="span12" required>
                                                        <option ></option>
                                                        <option value="M">Maculino</option>
                                                        <option value="F">Feminino</option>
                                                    </select>
                                                </div>
                                                <div class="span1">
                                                    <label class="req">UF:</label>
                                                    <select name="val1_sport" id="val1_sport" class="span12" required >
                                                        <option></option>
                                                        <option value="option1">CE</option>
                                                        <option value="option2">SP</option>
                                                        <option value="option3">RJ</option>
                                                    </select>
                                                </div>
                                                <div class="span2">
                                                    <label class="req">Estado Civil:</label>
                                                    <select name="estCivil" id="estCivil" class="span12" required >
                                                        <option></option>
                                                        <option value="S">Solteiro</option>
                                                        <option value="D">Disvorciado</option>
                                                        <option value="C">Casado</option>
                                                        <option value="U">União Estavél</option>
                                                        <option value="V">Viúvo</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    <label class="">Contato:</label>
                                                    <input class="span12 pop-over" data-title="Contato" data-content="Digite nome de uma pessoal responsável pelo contato da empresa" 
                                                           data-placement="bottom" data-trigger="hover" type="text" name="cpf" id="contato" />
                                                </div>
                                                <div class="span2">
                                                    <label class="req">Telefone:</label>
                                                    <input  class="span12 pop-over mask_phone" data-title="Telefone" data-content="Digite um telefone para contato"
                                                            data-placement="bottom" data-trigger="hover" type="text" name="telefone" id="" required />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Tipo de Fornecedor:</label>
                                                    <select name="val1_sport" id="val1_sport" class="span12" required >
                                                        <option></option>
                                                        <option value="S">Roupas</option>
                                                        <option value="D">Fantasias</option>
                                                        <option value="C">Mesas</option>
                                                        <option value="U">Cadeiras</option>
                                                        <option value="V">Outros</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <label class="">Observação:</label>
                                                    <textarea class="span12 limit250 pop-over" data-title="Observação" data-content="Limite máx. 250 caracteres." 
                                                              data-placement="bottom" data-trigger="hover" rows="5"></textarea>
                                                </div>
                                                <div class="span6">
                                                    <label class="">Informações Adicionais:</label>
                                                    <textarea class="span12 limit500 pop-over" data-title="Informações Adicionais" data-content="Limite máx. 500 caracteres." 
                                                              data-placement="bottom" data-trigger="hover" rows="5"></textarea>
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
                                                <label class="req">Número:</label>
                                                <input class="span12 pop-over mask_numeros" data-title="Número" data-content="Informe o número da residência." 
                                                              data-placement="bottom" data-trigger="hover" type="text" name="num" id="" required />
                                            </div><!-- Incio do Num  -->
                                            <div class="span4"><!-- Incio do Num  -->
                                                <label class="">Complemento:</label>
                                                <input class="span12 pop-over" data-title="Complemento" data-content="Informe o complemento da residência." 
                                                              data-placement="bottom" data-trigger="hover" type="text" name="complemento" id="id" />
                                            </div><!-- Incio do Num  -->
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
                                </div>


                            </div><!-- Fim Endereço -->

                            <div id="oldInfo" class="tab-pane"><!-- Fim Outras Informações -->
                                <div class="formSep">
                                    <div class="span12">
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


                            </div><!-- Fim Endereço -->
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