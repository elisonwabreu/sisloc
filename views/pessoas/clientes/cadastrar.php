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
                                <h4><?php $mTitle->trocarTitulo($_GET['url'], $_GET['modulo']);//realiza a mudan�a do titulo automaticamente ?></h4>
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
                                                                <label class="req">CPF:</label>
                                                                <input class="span12" type="text" name="cpf" id="mask_cpf" />
                                                            </div>
                                                            <div class="span3">
                                                                <label class="req">RG:</label>
                                                                <input placeholder="0000000000000" class="span12" type="text" name="rg" id="rg" />
                                                            </div>
                                                            <div class="span3">
                                                                <label class="req">Orgão Expedidor (RG)</label>
                                                                <input placeholder="SSP" class="span12" type="text" name="orgExped" id="orgExped" />
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
                                                                <label class="req">Data de Nascimento:</label>
                                                                <input type="text" id="mask_date" class="span12" name="dataNasc"  />
                                                            </div>
                                                            <div class="span3">
                                                                <label class="req">Sexo:</label>
                                                                <select name="val1_sport" id="val1_sport" class="span12">
                                                                    <option></option>
                                                                    <option value="M">Masculino</option>
                                                                    <option value="F">Feminino</option>
                                                                </select>
                                                            </div>
                                                            <div class="span3">
                                                                <label class="req">Estado Civil:</label>
                                                                <select name="val1_sport" id="val1_sport" class="span12">
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
                                                                <input class="span12" type="text" name="contato" id="contato" />
                                                            </div>
                                                            <div class="span2">
                                                                <label>Inadimplente:</label>
                                                                <input class="span12" type="text" name="inad" id="inad" placeholder="Sim" disabled />
                                                            </div>
                                                            <div class="span2">
                                                                <label class="req">Empresa:</label>
                                                                <input class="span12" type="text" name="empresa" id="empresa"  />
                                                            </div>
                                                            <div class="span3">
                                                                <label class="req">Cliente desde:</label>
                                                                <input class="span12" type="text" name="empresa" id="empresa"  required />
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
                                                                <label class="req">Cliente desde:</label>
                                                                <textarea class="span12" rows="5"></textarea>
                                                            </div>
                                                            <div class="span6">
                                                                <label class="req">Percen. Desconto:</label>
                                                                <textarea class="span12" rows="5"></textarea>
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
                                                <div class="formSep">
                                                    <button type="submit" class="btn-success">Cadastrar</button>
                                                    <button type="submit" class="btn-danger">Cancelar</button>
                                                </div>
                                            </form>

                                        </div><!-- fim das Informacoes pessoais -->                                        
                                        <div id="endereco" class="tab-pane"><!-- Outras Informacoes -->
                                        

                                        
                                        </div><!-- Fim Endereco -->
                                        <div id="oldInfo" class="tab-pane"><!-- Fim Outras Informacoes -->
                                        

                                        </form><!-- Fim do formulario -->
                                        </div><!-- Fim Endereco -->
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>  
            </div>
            <div class="footer_space"></div>
        </div><!-- Encerra o conteudo -->