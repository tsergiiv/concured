let pageNumber = 1;
let ppp = 8;

function load_posts() {
    pageNumber++;
    var str = '&pageNumber=' + pageNumber + '&offset=' + offset + '&action=more_post_ajax';
    console.log(str);

    jQuery.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_posts.ajaxurl,
        data: str,
        success: function(data){
            var $data = jQuery(data);
            if ($data.length) {
                jQuery("#ajax-posts").append($data);
                jQuery("#more_posts").attr("disabled",false);
            }

            if (ppp * pageNumber >= (postCount - offset)) {
                console.log("no more posts");
                jQuery("#more_posts").remove();
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

    });
    return false;
}

function loadClick(newOffset) {
    offset = newOffset;
    load_posts();
    jQuery("#more_posts").insertAfter('#ajax-posts'); // Move the 'Load More' button to the end of the the newly added posts.
};