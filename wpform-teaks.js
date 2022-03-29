jQuery(document).ready(function ( $ ){
  $('.wpforms-page-button').click(function(){
    $( document ).ajaxComplete(function() {
        console.log("preview active");
        $(".wpforms-entry-preview.wpforms-entry-preview-compact .wpforms-entry-preview-label").each(function(index){
            if(!($(this).find("#required_adttn").length)){
                if(index != 3){
                    $(this).append('<span id="required_adttn" class="wpforms-required-label">必須</span>');

                }
            }
        });
      });
  });
});