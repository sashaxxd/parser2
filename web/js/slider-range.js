
/**
 Ползунок цены
 */

$(function () {
    var price = Number($("#Editbox1").val());
    var price2 = Number($("#Editbox2").val());

    var priceX = Number(($(" #Editbox1").data('id')));
    var priceX2 = Number(($(" #Editbox2").data('id')));


    if (price == 0 && price2 == 0) {
        var price = Number(($(" #Editbox1").data('id')));
        var price2 = Number(($(" #Editbox2").data('id')));
        $("#Editbox1").val(price);
        $("#Editbox2").val(price2);
    }
    $("#slider-range").slider({
        range: true,
        min: priceX,
        max: priceX2,
        values: [price, price2],
        slide: function (event, ui) {
            $("#Editbox1").val(ui.values[0]);
            $("#Editbox2").val(ui.values[1]);

        }
    });

});


/**
 Ползунок мощности
 */


$(function () {
    var power = Number($("#Editbox-power1").val());
    var power2 = Number($("#Editbox-power2").val());

    var powerX = Math.round(($(" #Editbox-power1").data('id')));
    var powerX2 = Math.round(($(" #Editbox-power2").data('id')));


    if (power == 0 && power2 == 0) {
        var power = Math.round(($(" #Editbox-power1").data('id')));
        var power2 = Math.round(($(" #Editbox-power2").data('id')));
        $("#Editbox-power1").val(power);
        $("#Editbox-power2").val(power2);
    }
    $("#slider-range2").slider({
        range: true,
        min: powerX,
        max: powerX2,
        values: [power, power2],
        step:0.1,
        slide: function (event, ui) {
            $("#Editbox-power1").val(ui.values[0]);
            $("#Editbox-power2").val(ui.values[1]);

        }
    });

});






