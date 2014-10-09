<?PHP

/* * ************************************************
 * *  CLASSE DE INCLUSÃO DE PÁGINA NO INDEX
 * *  MÉTODO - trocarURL($url)
 * *  Data: 09-05-2009 - Versão 1.0
 * ************************************************ */

class VerURL {
    /*
     * @param string $modulo diretorio em que o arquivo a ser incluido se encontra
     * @param string $url o que sera incluido
     * @acess public
     */
    public function trocarURL($modulo, $url){
        if (empty($url)) {
            $url = "views/$modulo/dashboard.php";
        } else {
            $url = "views/$modulo/$url.php";
        }
        include_once($url);
    }
    /*
     * @param string $include informa o tipo de arquivo a ser incluido
     * @param string $acao informa se é cadastro, edição, listagem ...
     * @acess public
     */
    public function mudaEstilo($acao, $include = "css"){
        if ( $include == "css" ) {
            if ( !empty( $acao ) ) {
                if( $acao == 'cadastrar' || $acao == 'editar'){
                    $inc = 'inc/css_forms.php';
                }
                elseif ( $acao == 'listar' ){
                    $inc = 'inc/css_datatable.php';
                }
            } else {
                $inc = 'inc/css_dashbord.php';
            }
        } elseif ( $include == "js" ) {
            if ( !empty( $acao ) ) {
                if( $acao == 'cadastrar' || $acao == 'editar'){
                    $inc = 'inc/js_forms.php';
                }
                elseif ( $acao == 'listar' ){
                    $inc = 'inc/js_datatable.php';
                }
            } else {
                $inc = 'inc/js_dashbord.php';
            }
        }
        include_once($inc);
    }
}