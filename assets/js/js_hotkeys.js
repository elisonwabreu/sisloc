function domo() {
    jQuery('#platform-details').html('<code>' + navigator.userAgent + '</code>');

    // Binding keys
    $(document).bind('keydown', 'f1', function assets() {
        $("#colunas").trigger("click");
        return false;
    });
    $(document).bind('keydown', 'f2', function assets() {
        $("#bb-alert").trigger("click");
        return false;
    });
}

jQuery(document).ready(domo);