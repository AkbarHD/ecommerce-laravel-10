$(document).ready(function () {

    $('.plus').click(function (e) {
        e.preventDefault();
        var card = $(this).closest('.card-body');
        var qtyInput = card.find('#qty');
        var hargaInput = card.find('#harga');
        var totalInput = card.find('#total');
        var totalHidden = card.find('#total-hidden');

        var qty = parseInt(qtyInput.val());
        var harga = parseInt(hargaInput.val());

        qty++;
        qtyInput.val(qty);

        var total = harga * qty;
        totalHidden.val(total);
        totalInput.val('Rp ' + total.toLocaleString('id-ID'));

        card.find('.minus').prop('disabled', false);
    });


    $('.minus').click(function (e) {
        e.preventDefault();
        var card = $(this).closest('.card-body');
        var qtyInput = card.find('#qty');
        var hargaInput = card.find('#harga');
        var totalInput = card.find('#total');
        var totalHidden = card.find('#total-hidden');

        var qty = parseInt(qtyInput.val());
        var harga = parseInt(hargaInput.val());

        if (qty > 1) {
            qty--;
            qtyInput.val(qty);

            var total = harga * qty;
            totalHidden.val(total);
            totalInput.val('Rp ' + total.toLocaleString('id-ID'));

            if (qty === 1) {
                $(this).prop('disabled', true);
            }
        }
    });



    $('.card-body').each(function () {
        var card = $(this);
        var harga = parseInt(card.find('#harga').val());
        var qty = parseInt(card.find('#qty').val());
        var total = harga * qty;
        card.find('#total-hidden').val(total);
        card.find('#total').val('Rp ' + total.toLocaleString('id-ID'));
    });
    // var nilai = $("#qty").val();
    // var harga = $("#harga").val();

    // $("#total").val(harga);


    // $("#plus").click(function () {
    //     var nilai = $("#qty").val();
    //     var penjumlahan = parseInt(nilai) + parseInt(1);
    //     $("#qty").val(penjumlahan);
    //     var harga = $("#harga").val();
    //     var subtotal = parseInt(penjumlahan) * parseInt(harga);
    //     $("#total").val(subtotal);
    //     if (penjumlahan > 0) {
    //         $("#minus").prop("disabled", false);
    //     }
    // });

    // $("#minus").click(function () {
    //     var nilai = $("#qty").val();
    //     var penjumlahan = parseInt(nilai) - parseInt(1);
    //     $("#qty").val(penjumlahan);
    //     var harga = $("#harga").val();
    //     var subtotal = parseInt(penjumlahan) * parseInt(harga);
    //     $("#total").val(subtotal);
    //     if (penjumlahan <= 1) {
    //         $("#minus").prop("disabled", true);
    //     }
    // });


    // //  ini yang benar
    // $("#diterima").on('input', function () {
    //     var total = parseInt($("#dibayarkan").val()) || 0;
    //     var diterima = parseInt($("#diterima").val()) || 0;
    //     var hasil = diterima - total;

    //     if (hasil < 0) {
    //         $("#dikembalikan").val(0);
    //     } else {
    //         $("#dikembalikan").val(hasil);
    //     }
    // });

});
