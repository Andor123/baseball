function hideTable7(ajax) {
    var form = $('#results');
    $.ajax({
        method: "POST",
        url: "index.php?pg=results&ajax="+ajax,
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            if (ajax == 1) {
                $('#table').fadeIn(400, function () {
                    $('#table').html(response.html).fadeOut();
                });
            }
            if (ajax == 2) {
                $('#table2').fadeIn(400, function () {
                    $('#table2').html(response.html).fadeOut();
                });
            }
            if (ajax == 3) {
                $('#table3').fadeIn(400, function () {
                    $('#table3').html(response.html).fadeOut();
                });
            }
            if (ajax == 4) {
                $('#table4').fadeIn(400, function () {
                    $('#table4').html(response.html).fadeOut();
                });
            }
            if (ajax == 5) {
                $('#table5').fadeIn(400, function () {
                    $('#table5').html(response.html).fadeOut();
                });
            }
            if (ajax == 6) {
                $('#table6').fadeIn(400, function () {
                    $('#table6').html(response.html).fadeOut();
                });
            }
            if (ajax == 7) {
                $('#table7').fadeIn(400, function () {
                    $('#table7').html(response.html).fadeOut();
                });
            }
            if (ajax == 8) {
                $('#table8').fadeIn(400, function () {
                    $('#table8').html(response.html).fadeOut();
                });
            }
            if (ajax == 9) {
                $('#table9').fadeIn(400, function () {
                    $('#table9').html(response.html).fadeOut();
                });
            }
            if (ajax == 10) {
                $('#table10').fadeIn(400, function () {
                    $('#table10').html(response.html).fadeOut();
                });
            }
            if (ajax == 11) {
                $('#table11').fadeIn(400, function () {
                    $('#table11').html(response.html).fadeOut();
                });
            }
            if (ajax == 12) {
                $('#table12').fadeIn(400, function () {
                    $('#table12').html(response.html).fadeOut();
                });
            }
            if (ajax == 13) {
                $('#table13').fadeIn(400, function () {
                    $('#table13').html(response.html).fadeOut();
                });
            }
            if (ajax == 14) {
                $('#table14').fadeIn(400, function () {
                    $('#table14').html(response.html).fadeOut();
                });
            }
            if (ajax == 15) {
                $('#table15').fadeIn(400, function () {
                    $('#table15').html(response.html).fadeOut();
                });
            }
            if (ajax == 16) {
                $('#table16').fadeIn(400, function () {
                    $('#table16').html(response.html).fadeOut();
                });
            }
            if (ajax == 17) {
                $('#table17').fadeIn(400, function () {
                    $('#table17').html(response.html).fadeOut();
                });
            }
            if (ajax == 18) {
                $('#table18').fadeIn(400, function () {
                    $('#table18').html(response.html).fadeOut();
                });
            }
            if (ajax == 19) {
                $('#table19').fadeIn(400, function () {
                    $('#table19').html(response.html).fadeOut();
                });
            }
            if (ajax == 20) {
                $('#table20').fadeIn(400, function () {
                    $('#table20').html(response.html).fadeOut();
                });
            }
            if (ajax == 21) {
                $('#table21').fadeIn(400, function () {
                    $('#table21').html(response.html).fadeOut();
                });
            }
            if (ajax == 22) {
                $('#table22').fadeIn(400, function () {
                    $('#table22').html(response.html).fadeOut();
                });
            }
            if (ajax == 23) {
                $('#table23').fadeIn(400, function () {
                    $('#table23').html(response.html).fadeOut();
                });
            }
            if (ajax == 24) {
                $('#table24').fadeIn(400, function () {
                    $('#table24').html(response.html).fadeOut();
                });
            }
            if (ajax == 25) {
                $('#table25').fadeIn(400, function () {
                    $('#table25').html(response.html).fadeOut();
                });
            }
            if (ajax == 26) {
                $('#table26').fadeIn(400, function () {
                    $('#table26').html(response.html).fadeOut();
                });
            }
            if (ajax == 27) {
                $('#table27').fadeIn(400, function () {
                    $('#table27').html(response.html).fadeOut();
                });
            }
            if (ajax == 28) {
                $('#table28').fadeIn(400, function () {
                    $('#table28').html(response.html).fadeOut();
                });
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}