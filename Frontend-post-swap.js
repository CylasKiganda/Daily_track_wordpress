
jQuery(document).ready(function ( $ ){
    $('.reOrder-post').each(function(){
        var ft = $(this).find(".eael-post-list-wrap .eael-post-list-featured-wrap");
        var fp = $(this).find(".eael-post-list-posts-wrap.eael-post-appender .eael-post-list-post:first");
        
        ft_image = ft.find("img").attr('src');
        fp_image = fp.find("img").attr('src');
        

        ft_title = ft.find(".eael-post-list-title a");
        fp_title = fp.find(".eael-post-list-title a");

        ft_link = ft.find(".eael-post-list-title a").attr('href');
        fp_link = fp.find(".eael-post-list-title a").attr('href');
        
        //swapping------------------------------
        ft.find("img").attr('src', fp_image);
        fp.find("img").attr('src', ft_image);
        
        ft.find(".eael-post-list-title").html(fp_title);
        fp.find(".eael-post-list-title").html(ft_title);

        fp.find(".eael-post-list-thumbnail a").attr('src', ft_image);
        


    })
 
 });