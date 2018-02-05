function showTable7(ajax) {
    var form = $('#results');
    $.ajax({
        method: "POST",
        url: "index.php?pg=results&ajax="+ajax,
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            if (ajax == 1) {
                $('#table').fadeOut(400, function () {
                    $('#table').html(response.html).fadeIn();
                });
            }
            if (ajax == 2) {
                $('#table2').fadeOut(400, function () {
                    $('#table2').html(response.html).fadeIn();
                });
            }
            if (ajax == 3) {
                $('#table3').fadeOut(400, function () {
                    $('#table3').html(response.html).fadeIn();
                });
            }
            if (ajax == 4) {
                $('#table4').fadeOut(400, function () {
                    $('#table4').html(response.html).fadeIn();
                });
            }
            if (ajax == 5) {
                $('#table5').fadeOut(400, function () {
                    $('#table5').html(response.html).fadeIn();
                });
            }
            if (ajax == 6) {
                $('#table6').fadeOut(400, function () {
                    $('#table6').html(response.html).fadeIn();
                });
            }
            if (ajax == 7) {
                $('#table7').fadeOut(400, function () {
                    $('#table7').html(response.html).fadeIn();
                });
            }
            if (ajax == 8) {
                $('#table8').fadeOut(400, function () {
                    $('#table8').html(response.html).fadeIn();
                });
            }
            if (ajax == 9) {
                $('#table9').fadeOut(400, function () {
                    $('#table9').html(response.html).fadeIn();
                });
            }
            if (ajax == 10) {
                $('#table10').fadeOut(400, function () {
                    $('#table10').html(response.html).fadeIn();
                });
            }
            if (ajax == 11) {
                $('#table11').fadeOut(400, function () {
                    $('#table11').html(response.html).fadeIn();
                });
            }
            if (ajax == 12) {
                $('#table12').fadeOut(400, function () {
                    $('#table12').html(response.html).fadeIn();
                });
            }
            if (ajax == 13) {
                $('#table13').fadeOut(400, function () {
                    $('#table13').html(response.html).fadeIn();
                });
            }
            if (ajax == 14) {
                $('#table14').fadeOut(400, function () {
                    $('#table14').html(response.html).fadeIn();
                });
            }
            if (ajax == 15) {
                $('#table15').fadeOut(400, function () {
                    $('#table15').html(response.html).fadeIn();
                });
            }
            if (ajax == 16) {
                $('#table16').fadeOut(400, function () {
                    $('#table16').html(response.html).fadeIn();
                });
            }
            if (ajax == 17) {
                $('#table17').fadeOut(400, function () {
                    $('#table17').html(response.html).fadeIn();
                });
            }
            if (ajax == 18) {
                $('#table18').fadeOut(400, function () {
                    $('#table18').html(response.html).fadeIn();
                });
            }
            if (ajax == 19) {
                $('#table19').fadeOut(400, function () {
                    $('#table19').html(response.html).fadeIn();
                });
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}