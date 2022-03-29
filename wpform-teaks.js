jQuery(document).ready(function ( $ ){
  $('.wpforms-page-button').click(function(){
    $( document ).ajaxComplete(function() {
        console.log("preview active");
        $(".wpforms-entry-preview.wpforms-entry-preview-compact .wpforms-entry-preview-label").each(function(){
            $(this).append('<span id="required_adttn" class="wpforms-required-label">必須</span>');
            if(!$(this).find("#required_adttn")){
                $(this).append('<span id="required_adttn" class="wpforms-required-label">必須</span>');
            }
        });
      });
  });
});