<script>
    $(document).ready(function() {
        //atalho para abrir a escolha de que colunas seram listadas
        $(document).bind('keydown', function(e) {
            if (e.keyCode == 13 && e.shiftKey) {
                $( "#foo" ).trigger( "click" );
            }
        });
    });    
</script>
