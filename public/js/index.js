$(document).ready(function() {

    $(document).on("click", ".read-more", function() {
        var cat_name = $(this).closest(".inner-box").find('h3').text().trim();
        // alert(cat_name);
        localStorage.setItem("cat_name", cat_name);

    });

    var cat_name = localStorage.getItem("cat_name");

    if (cat_name == 'Mattress') {
        $(".mattress-tab").click();
        localStorage.removeItem("cat_name");
    } else if (cat_name == 'Pillows') {
        $(".pillow-tab").click();
        localStorage.removeItem("cat_name");
    } else if (cat_name == 'Bed linen') {
        $(".bedlinen-tab").click();
        localStorage.removeItem("cat_name");
    } else if (cat_name == 'Sleep accessories'){
        $(".accessories-tab").click();
        localStorage.removeItem("cat_name");
    }

});