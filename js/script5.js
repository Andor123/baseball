function showTable3() {
    var form = $('#champions');
    $.ajax({
        method: "POST",
        url: "index.php?pg=champions&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $('#table').fadeOut(400, function () {
                $('#table').html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}