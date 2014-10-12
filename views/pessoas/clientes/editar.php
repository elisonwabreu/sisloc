<?php
//classe responsavel pela mudan�a automatica do titulo dos modulos
require 'MudaTitulo.php';
$mTitle = new MudaTitulo;
?>
<div class="container-fluid"><!-- Inicia o conteudo -->
    <div class="row-fluid">
        <div class="span12">
            <div class="w-box">
                <div class="w-box-header">
                    <h4><?php $mTitle->trocarTitulo($_GET['url'], $_GET['modulo']); //realiza a mudan�a do titulo automaticamente   ?></h4>
                </div>
                <div class="w-box-content cnt_b">
                    <div class="tabbable tabbable-bordered">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#infP">Informações Pessoais</a></li>
                            <li><a data-toggle="tab" href="#endereco">Endereço</a></li>
                            <li><a data-toggle="tab" href="#oldInfo">Outras Informações</a></li>
                        </ul>
                        <div class="tab-content"><!-- informa��es pessoais -->
                            <div id="infP" class="tab-pane active">

                                <form id="validate_field_types" action="" method="post">
                                    <div class="formSep">
                                        <div class="span10">
                                            <div class="row-fluid">
                                                <div class="span1">
                                                    <label class="req">Cód:</label>
                                                    <input class="span12" type="text" name="id" id="id" value="000000" disabled />
                                                </div>
                                                <div class="span4">                                                   
                                                    <label class="req">Nome Completo:</label>
                                                    <input class="span12 pop-over" data-content="Um Dois Tres de Oliveira Quatro" data-title="Nome Completo" data-placement="bottom" data-trigger="hover" type="text" name="nome" id="nome" required />
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
                                                    <select name="grupoPessoas" id="grupoPessoas" class="span12" required >
                                                        <option value="A">Ativo</option>
                                                        <option value="I">Inativo</option>
                                                    </select>
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Grupo de Pessoas:</label>
                                                    <select name="grupoPessoas" id="grupoPessoas" class="span12" required >
                                                        <option value="0">Nenhum</option>
                                                        <option value="option1">CE</option>
                                                        <option value="option2">SP</option>
                                                        <option value="option3">RJ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    <label class="req">CPF:</label>
                                                    <input class="span12 mask_cpf pop-over" data-content="Digite aqui o número CPF do cliente. Digite apenas números." data-title="CPF do Cliente" data-placement="bottom" data-trigger="hover" type="text" name="cpf" required />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">RG:</label>
                                                    <input class="span12 pop-over" data-content="Digite aqui o número RG do cliente. Digite apenas números." data-title="RG do Cliente" data-placement="bottom" data-trigger="hover" type="text" name="rg" id="rg" required />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Orgão Expedidor (RG)</label>
                                                    <input class="span12 pop-over" data-content="Digite aqui a sigla do orgão emissor do RG do cliente. Ex.: SSP" data-title="Orgão Expedidor (RG)" data-placement="bottom" data-trigger="hover" type="text" name="orgExped" id="orgExped" required />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Unidade Federativa:</label>
                                                    <select name="val1_sport" id="val1_sport" class="span12" required >
                                                        <option></option>
                                                        <option value="option1">CE</option>
                                                        <option value="option2">SP</option>
                                                        <option value="option3">RJ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span3">
                                                    <label class="req">Data de Nascimento:</label>
                                                    <input type="text" class="span12 mask_date pop-over" data-content="Digite aqui a data de nascimento do cliente. Digite apenas números. Ex.: 01052000" data-title="Data de Nascimento" data-placement="bottom" data-trigger="hover" name="dataNasc" required />
                                                </div>
                                                <div class="span3">
                                                    <label class="req">Sexo:</label>
                                                    <select name="val1_sport" id="val1_sport" class="span12" required >
                                                        <option></option>
                                                        <option value="M">Masculino</option>
                                                        <option value="F">Feminino</option>
                                                    </select>
                                                </div>
                                                <div class="span3">
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
                                                    <label class="req">Nome do Contato:</label>
                                                    <input class="span12 pop-over" data-content="Digite aqui o nome da pessoa para contato. Ex.: Maria" data-title="Com quem falar" data-placement="bottom" data-trigger="hover" type="text" name="contato" id="contato" required />
                                                </div>
                                                <div class="span2">
                                                    <label>Inadimplente:</label>
                                                    <input class="span12" type="text" name="inad" id="inad" value="Sim" disabled />
                                                </div>
                                                <div class="span3">
                                                    <label>Cliente desde:</label>
                                                    <input class="span12 mask_date pop-over" data-content="Digite aqui a data em que captou o cliente. Digite apenas números." data-title="Cliente Desde" data-placement="bottom" data-trigger="hover" type="text" name="empresa"  />
                                                </div>
                                                <div class="span2">
                                                    <label class="req">Percen. Desconto:</label>
                                                    <select name="val1_sport" id="val1_sport" class="span12">
                                                        <option></option>
                                                        <option value="S">0.5%</option>
                                                        <option value="D">1%</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <label class="req">Observações:</label>
                                                    <textarea class="span12 limit250 pop-over" data-content="Informe as observações sobre o cliente. Limite máx. 250 caracteres." data-title="Obsevações" 
                                                              data-placement="top" data-trigger="hover" rows="5"></textarea>
                                                </div>
                                                <div class="span6">
                                                    <label class="req">Preferências:</label>
                                                    <textarea class="span12 limit500 pop-over" data-title="Preferências" data-content="Limite máx. 500 caracteres." 
                                                              data-placement="top" data-trigger="hover" rows="5" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span2"><!-- Pega foto do cliente -->
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail span12" style="height: 180px;">
                                                    <img src="http://lorempixel.com/200/180/sports/1/NO-IMAGE" alt="">
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 180px; max-height: 180px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-small btn-file span12"><span class="fileupload-new">Selecinar Foto</span>
                                                        <span class="fileupload-exists span6">Mudar</span><input type="file"></span>
                                                    <a href="#" class="btn fileupload-exists span6" data-dismiss="fileupload">Remover</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	


                            </div><!-- fim das Informacoes pessoais -->                                        
                            <div id="endereco" class="tab-pane"><!-- Outras Informacoes -->

                                <div class="formSep">
                                    <div class="span12">
                                        <div class="row-fluid"> 
                                            <div class="span2">                                      
                                                <label class="req">CEP:</label>
                                                <input class="span12 mask_cep" type="text" name="ceps" required />
                                            </div><!-- FIM do CEP  -->
                                            <div class="span5"><!-- Incio do Endereco  -->
                                                <label class="req">Endereço:</label>
                                                <input class="span12" type="text" name="endereco" id="id" />
                                            </div><!-- Incio do Endereco  -->
                                            <div class="span1"><!-- Incio do Num  -->
                                                <label class="req">Numero:</label>
                                                <input class="span12 mask_numeros" type="text" name="num"  />
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
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <label>Dados complementares:</label>
                                                    <textarea class="span12" rows="5" cols="60"> </textarea>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div>

                            </div><!-- Fim Endereco -->
                            <div id="oldInfo" class="tab-pane"><!-- Fim Outras Informacoes -->



                            </div><!-- Fim Endereco -->
                            <div class="formSep">
                                <button type="submit" class="btn-success">Cadastrar</button>
                                <button type="submit" class="btn-danger">Cancelar</button>
                            </div>
                            </form><!-- Fim do formulario -->
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>  
</div>
<div class="footer_space"></div>
</div><!-- Encerra o conteudo -->