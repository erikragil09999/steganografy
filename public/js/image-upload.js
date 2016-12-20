jQuery(document).ready(function($) {

    var $rekening = $('#rekening'), $rekening_lainnya = $('#rekening_lainnya');

   $rekening.change(function() {
        if ($rekening.val() == 'lainnya') {
            $rekening_lainnya.removeAttr('disabled');
        } else {
            $rekening_lainnya.attr('disabled', 'disabled').val('');
        }
    }).trigger('change');

	$("#fileUpload").on('change', function () {
 
        if (typeof (FileReader) != "undefined") {
 
            var image_holder = $("#image-holder");
            image_holder.empty();
 
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#pre-avatar").remove();
                $("<div class=thumb-image style=background-image:url('"+ e.target.result +"')></div>").appendTo(image_holder);
 
            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });
    $("#fileUploadNormal").on('change', function () {
 
        if (typeof (FileReader) != "undefined") {
 
            var image_holder_normal = $("#image-holder-normal");
            image_holder_normal.empty();
 
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#pre-avatar-normal").remove();
                $("<div class=thumb-image-normal style=background-image:url('"+ e.target.result +"')></div>").appendTo(image_holder_normal);
 
            }
            image_holder_normal.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });
});