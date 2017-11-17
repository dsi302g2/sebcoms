
var rowId;
var test=false;


$(document).ready(function(){



    $('#tab').on('click', '.clickable-row', function(event) {
        if($(this).hasClass('bg-primary'))
        {
            $(this).removeClass('bg-primary');
            document.getElementById("btnModif").disabled = true;
            document.getElementById("btnSupp").disabled = true;
        }
        else
        {
            $(this).addClass('bg-primary').siblings().removeClass('bg-primary');
            document.getElementById("btnModif").disabled = false;
            document.getElementById("btnSupp").disabled = false;
            rowId=$(this).data('value');
        }


    });
    jQuery.expr[":"].Contains = jQuery.expr.createPseudo(function(arg) {
        return function( elem ) {
            return jQuery(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
        };
    });

    $("#rech").keyup(function () {
        var data = this.value.split(" ");
        var tbl = $("#tab").find("tr").not(':first');
        if (this.value == "") {
            tbl.show();
            return;
        }
        tbl.hide();
        tbl.filter(function (i, v) {
            var t = $(this);
            for (var d = 0; d < data.length; d++) {
                if (t.is(":Contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        }).show();
    });








});
