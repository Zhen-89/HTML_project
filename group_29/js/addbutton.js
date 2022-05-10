$(function () {
        $("#btn_append").on("click", function () {
            $("#div_upload").append('<div><button type="button" class="btn btn-danger btn-xs" data-placement="right" title="移除"><i class="fa fa-times" aria-hidden="true"></i></button><input type="file" name="doc_upload[]" style="display: inline-block"></div>')
        })
        $("#div_upload").on("click", "button.btn-danger", function () {
            $(this).closest("div").remove();
        })
    });
    