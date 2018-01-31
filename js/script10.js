function hideTable5() {
    var form = $('#continent_participation');
    $.ajax({
        method: "POST",
        url: "index.php?pg=continent_participation&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $('#table').fadeIn(400, function () {
                $('#table').html(response.html).fadeOut();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}