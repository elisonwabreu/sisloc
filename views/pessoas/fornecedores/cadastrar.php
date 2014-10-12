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
                    <h4><?php $mTitle->trocarTitulo($_GET['url'], $_GET['modulo']); //realiza a mudança do titulo automaticamente   ?></h4>
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
                                                    <label class="req">Cód:</label>
                                                    <input class="span12" type="text" name="id" id="id" disabled />
                                                </div>
                                                <div class="span4">
                                                    <label class="req">Nome Completo:</label>
                                                    <input placeholder="Um Dois Tres de Oliveira Quatro" class="span12" type="text" name="nome" id="nome" />
                                                </div>
                                                <div class="span2">
                                                    <label class="req">Tipo de Pessoa:</label>
                                                    <select name="tipoPessoa" id="tipoPessoa" class="span12">
                                                        <option value="option1">Física</option>
                                                        <option value="option2">Juridica</option>
                                                    </select>
                                                </div>
                                                <div class="span2">
                                                    <label class="req">Status:</label>
                                                    <select name="grupoPessoas" id="grupoPessoas" class="span12">
                                                        <option value="A">Ativo</option>
                                                        <option value="I">Inativo</option>
                                                    </select>
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Grupo de Pessoas:</label>
                                                    <select name="grupoPessoas" id="grupoPessoas" class="span12">
                                                        <option value="0">Nenhum</option>
                                                        <option value="option1">CE</option>
                                                        <option value="option2">SP</option>
                                                        <option value="option3">RJ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    <label class="req">CNPJ:</label>
                                                    <input placeholder="00000000000" class="span12" type="text" name="cpf" id="cnpj" />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">IE:</label>
                                                    <input placeholder="0000000000000" class="span12" type="text" name="rg" id="ie" />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Nome Fantasia</label>
                                                    <input placeholder="Senhor dos Anzois" class="span12" type="text" name="orgExped" id="nomeFantasia" />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Unidade Federativa:</label>
                                                    <select name="val1_sport" id="val1_sport" class="span12">
                                                        <option></option>
                                                        <option value="option1">CE</option>
                                                        <option value="option2">SP</option>
                                                        <option value="option3">RJ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    <label class="req">Contato:</label>
                                                    <input placeholder="Rsponsável" class="span12" type="text" name="cpf" id="contato" />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Tipo de Fornecedor:</label>
                                                    <select name="val1_sport" id="val1_sport" class="span12"  >
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
                                                    <label class="req">Observação:</label>
                                                    <textarea class="span12" rows="5"></textarea>
                                                </div>
                                                <div class="span6">
                                                    <label class="req">Informações Adicionais:</label>
                                                    <textarea class="span12" rows="5"></textarea>
                                                </div>
                                            </div>
                                                <div class="formSep">
                                                    <button type="submit" class="btn-success">Cadastrar</button>
                                                    <button type="submit" class="btn-danger">Cancelar</button>
                                                </div>

                                        </div>	
                                </form>
                                    </div> 
                            </div><!-- fim das informações pessoais -->                                        

                            <div class="tab-pane" id="endereco" ><!-- Outras Informações -->
                          <!-- ------------------------ Incio do cad enderco ----------------------------------------------------- -->                
                                <div class="formSep">
                                    <div class="span12">
                                        <div class="row-fluid"> 
                                                <div class="span2">                                      
                                                    <label class="req">CEP:</label>
                                                    <input class="span12" type="text" name="ceps" id="id" />
                                                </div><!-- FIM do CEP  -->
                                                <div class="span5"><!-- Incio do Endereco  -->
                                                    <label class="req">Endereço:</label>
                                                    <input class="span12" type="text" name="endereco" id="id" />
                                                </div><!-- Incio do Endereco  -->
                                                <div class="span1"><!-- Incio do Num  -->
                                                    <label class="req">Numero:</label>
                                                    <input class="span12" type="text" name="num" id="id" />
                                                </div><!-- Incio do Num  -->
                                                <div class="span4"><!-- Incio do Num  -->
                                                    <label class="req">Complemento:</label>
                                                    <input class="span12" type="text" name="complemento" id="id" />
                                                </div><!-- Incio do Num  -->
                                            <div class="row-fluid">
                                                <div class="span2"><!-- Incio do Num  -->
                                                    <label class="req">Cidade:</label>
                                                    <input class="span12" type="text" name="cidade" id="id" />
                                                </div><!-- Incio do Num  -->
                                                <div class="span2"><!-- Incio do Num  -->
                                                    <label class="req">Bairro:</label>
                                                    <input class="span12" type="text" name="bairro" id="id" />
                                                </div><!-- Incio do Num  -->
                                            </div>
                                        </div>
                                        </div>
                                        </div>


                            </div><!-- Fim Endereço -->

                            <div id="oldInfo" class="tab-pane"><!-- Fim Outras Informações -->


                                </form>
                            </div><!-- Fim Endereço -->
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>  
</div>
<div class="footer_space"></div>
</div><!-- Encerra o conteudo -->