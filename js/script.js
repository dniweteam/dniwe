jQuery.noConflict();
(function($) {
$(function() {
    if($('.show-password').size() > 0 ){
        $('.show-password').change(function(){
            if($(this).is(':checked')){
                $('.password').prop('type', 'text');
            }else{
                $('.password').prop('type', 'password');
            }
        });
    }
});
})(jQuery);