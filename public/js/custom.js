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


});

// $(document).ready(function () {
//     $(".eksp").change(function (e) {
//         e.preventDefault();
//         var eksp = $(".eksp").val();

//         if (eksp === "jnt") {
//             var ongkir = $(".ongkir").val(9000);
//         } else if (eksp === "jne") {
//             var ongkir = $(".ongkir").val(10000);
//         } else if (eksp === "sicepat") {
//             var ongkir = $(".ongkir").val(8000);
//         } else {
//             var ongkir = $(".ongkir").val(9500);
//         }

//         $(".pembayaran").each(function () {
//             var card = $(this);
//             var totalBelanja = card.find(".totalBelanja").val();
//             var totalPpn = parseInt(totalBelanja) * 0.11;
//             var ppn = card.find(".ppn").val(totalPpn);
//             var disc = card.find(".discount").val();
//             var totalDisc = parseInt(totalBelanja) * parseFloat(disc);
//             var ongkir = card.find(".ongkir").val();

//             var subtotal = parseInt(totalBelanja) + parseInt(totalPpn);
//             var subtotal2 = parseInt(subtotal) + parseInt(ongkir);
//             console.log(subtotal2);
//             console.log(ongkir);
//             card.find("#dibayarkan").val(subtotal2);
//             // card.find('.ppn').val(ppn);
//         });
//     });
// });

$(document).ready(function () {
    // Sembunyikan field PPN dan total saat halaman dimuat
    // $("#PPn, #dibayarkan").val('').prop('disabled', true);

    $(".eksp").change(function (e) {
        e.preventDefault();
        var eksp = $(this).val();
        var ongkir = 0;

        switch (eksp) {
            case "jnt":
                ongkir = 9000;
                break;
            case "jne":
                ongkir = 10000;
                break;
            case "sicepat":
                ongkir = 8000;
                break;
            case "ninja":
                ongkir = 9500;
                break;
            default:
                ongkir = 0;
        }

        $("#ongkir").val(ongkir);

        // Hanya hitung dan tampilkan PPN dan total jika ekspedisi dipilih
        if (eksp) {
            calculateTotal();
            $("#PPn, #dibayarkan").prop('disabled', false);
        } else {
            $("#PPn, #dibayarkan").val('').prop('disabled', true);
        }
    });

    function calculateTotal() {
        var totalBelanja = parseFloat($("#totalBelanja").val()) || 0;
        var discount = parseFloat($("#discount").val()) || 0;
        var ongkir = parseFloat($("#ongkir").val()) || 0;

        var totalDiscount = totalBelanja * discount;
        var totalAfterDiscount = totalBelanja - totalDiscount;

        var ppn = totalAfterDiscount * 0.01;
        $("#PPn").val(ppn.toFixed(2));

        var total = totalAfterDiscount + ppn + ongkir;
        $("#dibayarkan").val(total.toFixed(2));
    }

    // Tambahkan event listener untuk input lain yang mungkin mempengaruhi total
    $("#totalBelanja, #discount, #ongkir").on('input', function () {
        if ($(".eksp").val()) {
            calculateTotal();
        }
    });

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
