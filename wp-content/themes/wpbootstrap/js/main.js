/**
 * Created by Ineta on 12/14/2017.
 */
jQuery(document).ready(function ($) {
    const fbApi = "https://www.facebook.com/sharer.php?u=";


    $('.add_to_cart_button').prepend('<span class="add_to_cart_icon"></span>');



    /*adding links to fb */
    var listingItem$ = $('.listing-item');
    $("<a class='fb-url'><i class='fa fa-facebook' aria-hidden='true'></i></a>").insertBefore(".listing-item .content");

    listingItem$.each(function () {
        var postLink = $(this).find('.image').attr("href");
        $(this).find('.fb-url').attr("href", fbApi + postLink);

    })


    /*wrapping element */
    $( ".blog-wrapper" ).find(".image").wrap( "<div></div>" );
    $( ".blog-wrapper" ).find(".title").wrap( "<div class='title-container'></div>" );

    var author = $( ".blog-wrapper" ).find(".author").html();
    $( ".blog-wrapper" ).find(".author").remove();
    $('.title-container').append(author)


});