jQuery(document).ready(function ( $ ){
  $('.wpforms-page-button').click(function(){
    $( document ).ajaxComplete(function() {
        console.log("preview active");
        $(".wpforms-entry-preview.wpforms-entry-preview-compact .wpforms-entry-preview-label").each(function(){
            if(!$this.find("#required_adttn")){
                $this.append('<span class="wpforms-required-label">必須</span>');
            }
        });
      });
  });
});