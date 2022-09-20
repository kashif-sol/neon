/* Add here all your JS customizations */

$(function() {

    $(document).on("click", ".delete-record", function() {
        var id = $(this).data("id");
        if (!confirm("are you sure!")) {
            return true;
        }
        $.ajax({
            url: "/delete-quote/" + id,
            cache: false,
            success: function(html) {
                alert("Record deleted");
            }
        });
    });

    $(document).on("click", ".get-record", function() {
        var id = $(this).data("id");
        $.ajax({
            url: "/get-quote/" + id,
            cache: false,
            success: function(html) {
                $("#edit-quote").modal("show");
            }
        });
    });




});