$(function () {
    $("#filter").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableLinha > tbody > tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
$(function () {
    $("#filter").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableProduto > tbody > tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
$(function () {
    $("#filter").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableSetor > tbody > tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
$(function () {
    $("#filter").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableAtendente > tbody > tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
$(function () {
    $("#filter").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableDefeito > tbody > tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});