function getData3(num) {
    var form = $("#champions");
    $.ajax({
        method: "POST",
        url: "index.php?pg=champions&ajax=3",
        dataType: "json",
        data: {
            form: form.serializeArray(),
            row_num: num
        },
        success: function (response) {
            console.log(response);
            $("#table").fadeOut(400, function () {
                $("#table").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}