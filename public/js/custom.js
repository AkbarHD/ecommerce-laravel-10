$(document).ready(function () {
    var nilai = $("#qty").val();
    var harga = $("#harga").val();
    // var total = $("#total").val();
    // var subtotal = parseInt(nilai) * parseInt(harga);
    // if (nilai > 0) {
    $("#total").val(harga);
    // }
    // if (total > 0) {
    //     $("#minus").prop("disabled", false);
    // }

    $("#plus").click(function () {
        var nilai = $("#qty").val();
        var penjumlahan = parseInt(nilai) + parseInt(1);
        $("#qty").val(penjumlahan);
        var harga = $("#harga").val();
        var subtotal = parseInt(penjumlahan) * parseInt(harga);
        $("#total").val(subtotal);
        if (penjumlahan > 0) {
            $("#minus").prop("disabled", false);
        }
    });

    $("#minus").click(function () {
        var nilai = $("#qty").val();
        var penjumlahan = parseInt(nilai) - parseInt(1);
        $("#qty").val(penjumlahan);
        var harga = $("#harga").val();
        var subtotal = parseInt(penjumlahan) * parseInt(harga);
        $("#total").val(subtotal);
        if (penjumlahan <= 1) {
            $("#minus").prop("disabled", true);
        }
    });

    // $("#diterima").on('input', function () {
    //     var total = $("#dibayarkan").val();
    //     var diterima = $("#diterima").val();
    //     var hasil = diterima - total;
    //     if (diterima < total) {
    //         $("#dikembalikan").val(0);
    //     } else {
    //         $("#dikembalikan").val(hasil);
    //     }

    // });
    //  ini yang benar
    $("#diterima").on('input', function () {
        var total = parseInt($("#dibayarkan").val()) || 0;
        var diterima = parseInt($("#diterima").val()) || 0;
        var hasil = diterima - total;

        if (hasil < 0) {
            $("#dikembalikan").val(0);
        } else {
            $("#dikembalikan").val(hasil);
        }
    });

});

$(document).ready(function () {

});
