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
    // empty the data of previous search from database
    $("#url").on('input', emptydata());
    
    $(".url-form").submit(function(e) {
        // prevent's the page from refreshing.
        e.preventDefault();
        
        // obtain input url and scrape it to give url of first page.
        var url = $("#url").val();
        var regex = /(http:\/\/www\.shiksha\.com\/b-tech\/colleges\/b-tech-colleges-[^\d]*[^\d\-])(?=-\d.*)?/i;
        var urld = regex.exec(url);
        
        // checks if url is valid
        if (urld) {
            $("#loader").css('display', 'inline-block');
            var urlr = urld[1];
            url = urlr;
            var page = 1;
            getdata(urlr, url, page);
        }
        else {
            $("#url").val('');
            $('#myModal').modal('show');
            return false;
        }
    });
});

// sends ajax request to scrape and store data.
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
                    // scrape's data for next page as next page exists.
                    page++;
                    var url = urlr + '-' + page;
                    getdata(urlr, url, page);
                }
                else
                {
                    // remove the loader icon and give link for results.
                    $("#loader").css('display', 'none');
                    $("#result").css('display', 'inline-block');
                    return false;
                }
            }
        });
}

// sends ajax request to empty data from database.
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