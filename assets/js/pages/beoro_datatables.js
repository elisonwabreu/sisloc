/* [ ---- Beoro Admin - datatables ---- ] */

    $(document).ready(function() {
        //* datatables
        beoro_datatables.basic();
        beoro_datatables.hScroll();
        beoro_datatables.colReorder_visibility();
        beoro_datatables.table_tools();
        
        $('.dataTables_filter input').each(function() {
            $(this).attr("placeholder", "Digite os termos de busca");
        })
    });

    //* datatables
    beoro_datatables = {
        basic: function() {
            if($('#dt_basic').length) {
                $('#dt_basic').dataTable({
                    "sPaginationType": "bootstrap_full"
                });
            }
        },
        //* horizontal scroll
        hScroll: function() {
            if($('#dt_hScroll').length) {
                $('#dt_hScroll').dataTable({
                "sScrollX": "100%",
                "sScrollXInner": '150%',
                "sPaginationType": "bootstrap",
                "bScrollCollapse": true 
            });
            }
        },
        //* column reorder & toggle visibility
        colReorder_visibility: function() {
            if($('#dt_colVis_Reorder, #dt_colVis_Reorder2').length) {
                $('#dt_colVis_Reorder, #dt_colVis_Reorder2').dataTable({
                     
                    "sPaginationType": "bootstrap",
                    "sDom": "R<'dt-top-row'Clf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row-fluid'ip>",
                    "fnInitComplete": function(oSettings, json) {
                        $('.ColVis_Button').addClass('btn btn-mini btn-inverse').html('Colunas');
                    },
                    "oLanguage": {
                        "sProcessing": "Aguarde enquanto os dados são carregados ...",
                        "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                        "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                        "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                        "sInfoFiltered": "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Próximo",
                        "sLast":     "Último"
                    }
                 } 
                });
            }
        },
        //* column reorder & toggle visibility
        table_tools: function() {
            if($('#dt_table_tools').length) {
                $('#dt_table_tools').dataTable({
                    "sDom": "<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row-fluid'ip>",
                    "oTableTools": {
                        "aButtons": [
                            "copy",
                            "print",
                            {
                                "sExtends":    "collection",
                                "sButtonText": 'Save <span class="caret" />',
                                "aButtons":    [ "csv", "xls", "pdf" ]
                            }
                        ],
                        "sSwfPath": "js/lib/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
                    },
                    "fnInitComplete": function(oSettings, json) {
                        $(this).closest('#dt_table_tools_wrapper').find('.DTTT.btn-group').addClass('table_tools_group').children('a.btn').each(function(){
                            $(this).addClass('btn-mini btn-inverse');
                        });
                    }
                });
            }
        }
    };