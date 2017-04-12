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
    $("#url").on('input', emptydata());
    $(".url-form").submit(function(e) {
        $("#loader").css('display', 'block');
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
                    $("#loader").css('display', 'none');
                    $("#result").css('display', 'block');
                    return false;
                }
            }
        });
}

function emptydata() {
    $.ajax({
        url: 'empty.php',
        async: false,
        success: function(data) {
            if (data.empty)
            {
                console.log('Successfull');
            }
            else
            {
                console.log('Failed');
            }
        }
    });
}