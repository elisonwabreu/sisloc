<!-- Forms -->  
<!-- jQuery UI -->
<script src="assets/js/lib/jquery-ui/jquery-ui-1.9.2.custom.min.js"></script>
<!-- touch event support for jQuery UI -->
<script src="assets/js/lib/jquery-ui/jquery.ui.touch-punch.min.js"></script>
<!-- progressbar animations -->
<script src="assets/js/form/jquery.progressbar.anim.min.js"></script>
<!-- 2col multiselect -->
<script src="assets/js/lib/multi-select/js/jquery.multi-select.min.js"></script>
<script src="assets/js/lib/multi-select/js/jquery.quicksearch.min.js"></script>
<!-- combobox -->
<script src="assets/js/form/fuelux.combobox.min.js"></script>
<!-- file upload widget -->
<script src="assets/js/form/bootstrap-fileupload.min.js"></script>
<!-- masked inputs -->
<script src="assets/js/lib/jquery-inputmask/jquery.inputmask.min.js"></script>
<script src="assets/js/lib/jquery-inputmask/jquery.inputmask.extensions.js"></script>
<script src="assets/js/lib/jquery-inputmask/jquery.inputmask.date.extensions.js"></script>
<!-- enchanced select box, tag handler -->
<script src="assets/js/lib/select2/select2.min.js"></script>
<!-- password strength metter -->
<script src="assets/js/lib/pwdMeter/jquery.pwdMeter.min.js"></script>
<!-- datepicker -->
<script src="assets/js/lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- timepicker -->
<script src="assets/js/lib/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<!-- colorpicker -->
<script src="assets/js/lib/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- metadata -->
<script src="assets/js/lib/ibutton/js/jquery.metadata.min.js"></script>
<!-- switch buttons -->
<script src="assets/js/lib/ibutton/js/jquery.ibutton.beoro.min.js"></script>
<!-- autosize textarea -->
<script src="assets/js/form/jquery.autosize.min.js"></script>
<!-- textarea counter -->
<script src="assets/js/lib/jquery-textarea-counter/jquery.textareaCounter.plugin.min.js"></script>
<!-- UI Spinners -->
<script src="assets/js/lib/jqamp-ui-spinner/globalize/globalize.min.js"></script>
<script src="assets/js/lib/jqamp-ui-spinner/globalize/cultures/globalize.culture.fr-FR.js"></script>
<script src="assets/js/lib/jqamp-ui-spinner/globalize/cultures/globalize.culture.ja-JP.js"></script>
<script src="assets/js/lib/jqamp-ui-spinner/globalize/cultures/globalize.culture.zh-CN.js"></script>
<script src="assets/js/lib/jqamp-ui-spinner/compiled/jqamp-ui-spinner.min.js"></script>
<script src="assets/js/lib/jqamp-ui-spinner/compiled/jquery-mousewheel-3.0.6.min.js"></script>
<!-- plupload and the jQuery queue widget -->
<script type="text/javascript" src="assets/js/lib/plupload/js/plupload.full.js"></script>
<script type="text/javascript" src="assets/js/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<!-- WYSIWG Editor -->
<script src="assets/js/lib/ckeditor/ckeditor.js"></script>
<!-- jQuery validation -->
<script src="assets/js/lib/jquery-validation/jquery.validate.min.js"></script>  
<script src="assets/js/pages/beoro_form_validation.js"></script>
<!-- GlobalMoneyInput library ( mascara de moedas ) -->
<script src="assets/js/lib/global-money-input/jQuery.glob.js"></script>
<script src="assets/js/lib/global-money-input/globinfo/jQuery.glob.pt-BR.js"></script>
<script src="assets/js/lib/global-money-input/jquery.GlobalMoneyInput.js"></script>

<script src="assets/js/pages/beoro_form_elements.js"></script>

<script>
    $(document).ready(function() {
        $(".pj").hide();
        $('input').css('text-transform', 'uppercase');
        $('#tipoPessoa').change(function() {
            var tipoPessoa = $('#tipoPessoa option:selected').val();

            if (tipoPessoa == "pf") {
                $(".pf").show();
                $(".pj").hide();
            } else {
                $(".pj").show();
                $(".pf").hide();
            }
        });
        /* Init Global Plugin with Brazilian Portuguese configuration */
        var cfgCulture = 'pt-BR';
        $.preferCulture(cfgCulture);

        $('.moedaReal').maskMoney();
        
//        $('.abas').click(function() {
//            var abas = this.href;
//            alert(abas);
//            if (abas == "#listTR") {
//                $("#btnsForms").hide();
//            } else {
//                $("#btnsForms").show();
//            }
//        });
    });

</script>


