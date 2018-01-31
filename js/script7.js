function showTable4() {
    var form = $('#participation');
    $.ajax({
        method: "POST",
        url: "index.php?pg=participation&ajax=1",
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