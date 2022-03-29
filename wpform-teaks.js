jQuery(document).ready(function ( $ ){
  $('.wpforms-page-button').click(function(){
    $( document ).ajaxComplete(function() {
        console.log("preview active");
        var filter =[4,9,11,14]
        $(".wpforms-entry-preview.wpforms-entry-preview-compact .wpforms-entry-preview-label").each(function(index){
            if(!($(this).find("#required_adttn").length)){
                if($.inArray( index, filter ) == -1){
                    $(this).append('<span id="required_adttn" class="wpforms-required-label">必須</span>');

                }
                else{
                    $(this).append('<span style="position: absolute !important;color: #fff !important;font-size: 80%!important;font-weight: normal!important;margin-left: 5px!important;padding: 3px!important;display: inline-block!important;line-height: 1!important;border-radius: 3px!important;background: #B7B7B7 !important;vertical-align: text-top!important;" id="required_adttn" class="wpforms-any-label">任意</span>');

                }
            }
        });
      });
  });
});