function showTable2() {
    var form = $('#continental_table');
    $.ajax({
        method: "POST",
        url: "index.php?pg=continental_table&ajax=1",
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