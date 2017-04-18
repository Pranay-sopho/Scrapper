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
        $("#loader").css('display', 'inline-block');
        e.preventDefault();
        var url = $("#url").val();
        var regex = /(http:\/\/www\.shiksha\.com\/b-tech\/colleges\/b-tech-colleges-[^\d]*[^\d\-])(?=-\d.*)?/i;
        var urld = regex.exec(url);
        var urlr = urld[1];
        url = urlr;
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
                    $("#result").css('display', 'inline-block');
                    return false;
                }
            }
        });
}

function emptydata() {
    $.ajax({
        url: 'empty.php',
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