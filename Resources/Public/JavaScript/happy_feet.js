jQuery(function ($) {
    if($('.footnote').length > 0){
        $('#pageMain').append($('<div id="footnote-container"></div>'));

        $('.footnote__content').each(function(){
            $('#footnote-container').append($(this));
        })
    }
});
