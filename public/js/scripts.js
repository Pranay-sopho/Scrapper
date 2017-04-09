/* global google */
/* global _ */
/**
 * scripts.js
 *
 * Project_2
 *
 * Global JavaScript.
 */

$(document).ready(function() {
    $(".url-form").submit(function(e) {
        $("#loader").removeClass('hide').addClass('show');
        e.preventDefault();
        var urlr = $("#url").val();
        var url = $("#url").val();
        var page = 1;
        getdata(urlr, url, page);
    });
});

function getdata(urlr, url, page) {
        $.ajax({
            url: "home.php",
            data: {
                url: url
            },
            method: "GET",
            async: false,
            success: function(data) {
                if (data.next)
                {
                    page++;
                    var url = urlr + '-' + page;
                    getdata(urlr, url, page);
                }
                else
                {
                    $("#loader").removeClass('show').addClass('hide');
                    $("#result").removeClass('hide').addClass('show');
                    return false;
                }
            }
        });
}