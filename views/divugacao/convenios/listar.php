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
                                <h4><?php $mTitle->trocarTitulo($_GET['url'], $_GET['modulo']);//realiza a mudança do titulo automaticamente ?></h4>                                
                            </div>
                            <div class="w-box-content cnt_b">
                                <div class="tabbable tabbable-bordered">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#pf">Pessoa Física</a></li>
                                    </ul>
                                    <div class="tab-content"><!-- Listagem de pessoa fisica -->
                                        <div id="pf" class="tab-pane active">
                                            <ul class="ico-list">
                                                <li><a href="?modulo=divugacao/convenios&url=cadastrar" alt="Novo funcionario" title="Novo funcionario"><i class="splashy-add"></i></a></li>
                                                <li><a href="?modulo=divugacao/convenios&url=editar" alt="Editar funcionario" title="Editar funcionario"><i class="splashy-pencil"></i></a></li>
                                                <li><a href="#" alt="Excluir funcionario" title="Excluir funcionario"><i class="splashy-error_x"></i></a></li>
                                            </ul>
                                            <!-- DATATABLES -->    
                                            <div class="w-box w-box-blue">
                                                <div class="w-box-header">
                                                    <h4>Listagem Pessoa Física</h4>
                                                </div>
                                                <div class="w-box-content">
                                                    <table class="table table-striped table-condensed dataTableListagemDt_colVis_Reorder">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Short name</th>
                                                            <th>Long Name</th>
                                                            <th>Calling Code</th>
                                                            <th>ISO 2</th>
                                                            <th>ISO 3</th>
                                                            <th>ISO #</th>
                                                            <th>ccTLD</th>
                                                            <th>UN Member</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td>1</td><td>Afghanistan</td><td>Islamic Republic of Afghanistan</td><td>93</td><td>AF</td><td>AFG</td><td>004</td><td>.af</td><td>yes</td></tr>
                                                        <tr><td>2</td><td>Aland Islands</td><td>Ã…land Islands</td><td>358</td><td>AX</td><td>ALA</td><td>248</td><td>.ax</td><td>no</td></tr>
                                                        <tr><td>3</td><td>Albania</td><td>Republic of Albania</td><td>355</td><td>AL</td><td>ALB</td><td>008</td><td>.al</td><td>yes</td></tr>
                                                        <tr><td>4</td><td>Algeria</td><td>People's Democratic Republic of Algeria</td><td>213</td><td>DZ</td><td>DZA</td><td>012</td><td>.dz</td><td>yes</td></tr>
                                                        <tr><td>5</td><td>American Samoa</td><td>American Samoa</td><td>1+684</td><td>AS</td><td>ASM</td><td>016</td><td>.as</td><td>no</td></tr>
                                                        <tr><td>6</td><td>Andorra</td><td>Principality of Andorra</td><td>376</td><td>AD</td><td>AND</td><td>020</td><td>.ad</td><td>yes</td></tr>
                                                        <tr><td>7</td><td>Angola</td><td>Republic of Angola</td><td>244</td><td>AO</td><td>AGO</td><td>024</td><td>.ao</td><td>yes</td></tr>
                                                        <tr><td>8</td><td>Anguilla</td><td>Anguilla</td><td>1+264</td><td>AI</td><td>AIA</td><td>660</td><td>.ai</td><td>no</td></tr>
                                                        <tr><td>9</td><td>Antarctica</td><td>Antarctica</td><td>672</td><td>AQ</td><td>ATA</td><td>010</td><td>.aq</td><td>no</td></tr>
                                                        <tr><td>10</td><td>Antigua and Barbuda</td><td>Antigua and Barbuda</td><td>1+268</td><td>AG</td><td>ATG</td><td>028</td><td>.ag</td><td>yes</td></tr>
                                                        <tr><td>11</td><td>Argentina</td><td>Argentine Republic</td><td>54</td><td>AR</td><td>ARG</td><td>032</td><td>.ar</td><td>yes</td></tr>
                                                        <tr><td>12</td><td>Armenia</td><td>Republic of Armenia</td><td>374</td><td>AM</td><td>ARM</td><td>051</td><td>.am</td><td>yes</td></tr>
                                                        <tr><td>13</td><td>Aruba</td><td>Aruba</td><td>297</td><td>AW</td><td>ABW</td><td>533</td><td>.aw</td><td>no</td></tr>
                                                        <tr><td>14</td><td>Australia</td><td>Commonwealth of Australia</td><td>61</td><td>AU</td><td>AUS</td><td>036</td><td>.au</td><td>yes</td></tr>
                                                        <tr><td>15</td><td>Austria</td><td>Republic of Austria</td><td>43</td><td>AT</td><td>AUT</td><td>040</td><td>.at</td><td>yes</td></tr>
                                                        <tr><td>16</td><td>Azerbaijan</td><td>Republic of Azerbaijan</td><td>994</td><td>AZ</td><td>AZE</td><td>031</td><td>.az</td><td>yes</td></tr>
                                                        <tr><td>17</td><td>Bahamas</td><td>Commonwealth of The Bahamas</td><td>1+242</td><td>BS</td><td>BHS</td><td>044</td><td>.bs</td><td>yes</td></tr>
                                                        <tr><td>18</td><td>Bahrain</td><td>Kingdom of Bahrain</td><td>973</td><td>BH</td><td>BHR</td><td>048</td><td>.bh</td><td>yes</td></tr>
                                                        <tr><td>19</td><td>Bangladesh</td><td>People's Republic of Bangladesh</td><td>880</td><td>BD</td><td>BGD</td><td>050</td><td>.bd</td><td>yes</td></tr>
                                                        <tr><td>20</td><td>Barbados</td><td>Barbados</td><td>1+246</td><td>BB</td><td>BRB</td><td>052</td><td>.bb</td><td>yes</td></tr>
                                                        <tr><td>21</td><td>Belarus</td><td>Republic of Belarus</td><td>375</td><td>BY</td><td>BLR</td><td>112</td><td>.by</td><td>yes</td></tr>
                                                        <tr><td>22</td><td>Belgium</td><td>Kingdom of Belgium</td><td>32</td><td>BE</td><td>BEL</td><td>056</td><td>.be</td><td>yes</td></tr>
                                                        <tr><td>23</td><td>Belize</td><td>Belize</td><td>501</td><td>BZ</td><td>BLZ</td><td>084</td><td>.bz</td><td>yes</td></tr>
                                                        <tr><td>24</td><td>Benin</td><td>Republic of Benin</td><td>229</td><td>BJ</td><td>BEN</td><td>204</td><td>.bj</td><td>yes</td></tr>
                                                        <tr><td>25</td><td>Bermuda</td><td>Bermuda Islands</td><td>1+441</td><td>BM</td><td>BMU</td><td>060</td><td>.bm</td><td>no</td></tr>
                                                        <tr><td>26</td><td>Bhutan</td><td>Kingdom of Bhutan</td><td>975</td><td>BT</td><td>BTN</td><td>064</td><td>.bt</td><td>yes</td></tr>
                                                        <tr><td>27</td><td>Bolivia</td><td>Plurinational State of Bolivia</td><td>591</td><td>BO</td><td>BOL</td><td>068</td><td>.bo</td><td>yes</td></tr>
                                                        <tr><td>28</td><td>Bonaire, Sint Eustatius and Saba</td><td>Bonaire, Sint Eustatius and Saba</td><td>599</td><td>BQ</td><td>BES</td><td>535</td><td>.bq</td><td>no</td></tr>
                                                        <tr><td>29</td><td>Bosnia and Herzegovina</td><td>Bosnia and Herzegovina</td><td>387</td><td>BA</td><td>BIH</td><td>070</td><td>.ba</td><td>yes</td></tr>
                                                        <tr><td>30</td><td>Botswana</td><td>Republic of Botswana</td><td>267</td><td>BW</td><td>BWA</td><td>072</td><td>.bw</td><td>yes</td></tr>
                                                        <tr><td>31</td><td>Bouvet Island</td><td>Bouvet Island</td><td>NONE</td><td>BV</td><td>BVT</td><td>074</td><td>.bv</td><td>no</td></tr>
                                                        <tr><td>32</td><td>Brazil</td><td>Federative Republic of Brazil</td><td>55</td><td>BR</td><td>BRA</td><td>076</td><td>.br</td><td>yes</td></tr>
                                                        <tr><td>33</td><td>British Indian Ocean Territory</td><td>British Indian Ocean Territory</td><td>246</td><td>IO</td><td>IOT</td><td>086</td><td>.io</td><td>no</td></tr>
                                                        <tr><td>34</td><td>Brunei</td><td>Brunei Darussalam</td><td>673</td><td>BN</td><td>BRN</td><td>096</td><td>.bn</td><td>yes</td></tr>
                                                        <tr><td>35</td><td>Bulgaria</td><td>Republic of Bulgaria</td><td>359</td><td>BG</td><td>BGR</td><td>100</td><td>.bg</td><td>yes</td></tr>
                                                        <tr><td>36</td><td>Burkina Faso</td><td>Burkina Faso</td><td>226</td><td>BF</td><td>BFA</td><td>854</td><td>.bf</td><td>yes</td></tr>
                                                        <tr><td>37</td><td>Burundi</td><td>Republic of Burundi</td><td>257</td><td>BI</td><td>BDI</td><td>108</td><td>.bi</td><td>yes</td></tr>
                                                        <tr><td>38</td><td>Cambodia</td><td>Kingdom of Cambodia</td><td>855</td><td>KH</td><td>KHM</td><td>116</td><td>.kh</td><td>yes</td></tr>
                                                        <tr><td>39</td><td>Cameroon</td><td>Republic of Cameroon</td><td>237</td><td>CM</td><td>CMR</td><td>120</td><td>.cm</td><td>yes</td></tr>
                                                        <tr><td>40</td><td>Canada</td><td>Canada</td><td>1</td><td>CA</td><td>CAN</td><td>124</td><td>.ca</td><td>yes</td></tr>
                                                        <tr><td>41</td><td>Cape Verde</td><td>Republic of Cape Verde</td><td>238</td><td>CV</td><td>CPV</td><td>132</td><td>.cv</td><td>yes</td></tr>
                                                        <tr><td>42</td><td>Cayman Islands</td><td>The Cayman Islands</td><td>1+345</td><td>KY</td><td>CYM</td><td>136</td><td>.ky</td><td>no</td></tr>
                                                        <tr><td>43</td><td>Central African Republic</td><td>Central African Republic</td><td>236</td><td>CF</td><td>CAF</td><td>140</td><td>.cf</td><td>yes</td></tr>
                                                        <tr><td>44</td><td>Chad</td><td>Republic of Chad</td><td>235</td><td>TD</td><td>TCD</td><td>148</td><td>.td</td><td>yes</td></tr>
                                                        <tr><td>45</td><td>Chile</td><td>Republic of Chile</td><td>56</td><td>CL</td><td>CHL</td><td>152</td><td>.cl</td><td>yes</td></tr>
                                                        <tr><td>46</td><td>China</td><td>People's Republic of China</td><td>86</td><td>CN</td><td>CHN</td><td>156</td><td>.cn</td><td>yes</td></tr>
                                                        <tr><td>47</td><td>Christmas Island</td><td>Christmas Island</td><td>61</td><td>CX</td><td>CXR</td><td>162</td><td>.cx</td><td>no</td></tr>
                                                        <tr><td>48</td><td>Cocos (Keeling) Islands</td><td>Cocos (Keeling) Islands</td><td>61</td><td>CC</td><td>CCK</td><td>166</td><td>.cc</td><td>no</td></tr>
                                                        <tr><td>49</td><td>Colombia</td><td>Republic of Colombia</td><td>57</td><td>CO</td><td>COL</td><td>170</td><td>.co</td><td>yes</td></tr>
                                                        <tr><td>50</td><td>Comoros</td><td>Union of the Comoros</td><td>269</td><td>KM</td><td>COM</td><td>174</td><td>.km</td><td>yes</td></tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>                                            

                                        </div><!-- fim da Listagem de pessoa fisica -->        
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>  
            </div>
            <div class="footer_space"></div>
        </div><!-- Encerra o conteudo -->