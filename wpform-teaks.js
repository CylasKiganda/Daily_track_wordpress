jQuery(document).ready(function ( $ ){
  $('.wpforms-page-button').click(function(){
    $( document ).ajaxComplete(function() {
        console.log("preview active");
        var filter =[4,9,11,14]
        $(".wpforms-entry-preview.wpforms-entry-preview-compact .wpforms-entry-preview-label").each(function(index){
            if(!($(this).find("#required_adttn").length)){
                if($.inArray( index, filter ) == -1){
                    $(this).append('<span id="required_adttn" class="wpforms-required-label">REQ</span>');
                }
                else{
                    $(this).append('<span id="required_adttn" class="wpforms-any-label">OPT</span>');
                }
            }
        });
        var submit_button_clone = $(".wpforms-submit-container").clone();
        if(!($("#wpforms-5988-field_28-container").find(".wpforms-submit-container").length)){
            $("#wpforms-5988-field_28-container").append(submit_button_clone); 
        }
        $(".wpforms-submit-container").hide();
        $("#wpforms-5988-field_28-container .wpforms-submit-container").show();
      });
  });
});

