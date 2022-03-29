<? php
global $ porto_settings;
global $ post;
$ post_cat = get_the_category ($ post-> ID);
$ post_cats = array ();
foreach ($ post_cat as $ cat) {
    array_push ($ post_cats, $ cat-> cat_name);
}
if (count ($ post_cats) == 1):
    if (in_array ('new product release information', $ post_cats)):
        ?>
<p style = "margin-top: -60px; padding-bottom: 20px;"> <strong> <br>
[Contact for inquiries regarding this press release] </ strong> <br>
Web: Support <a target="_blank" href="/Support" style="
    color: red;
"> Here </a> <br>
E-mail: <a href="mailto:info@newx-corp.jp" style="
    color: red;
    font-weight: 500;
"> info@newx-corp.jp </a> & nbsp; & nbsp; </ p>

<? php
       
    elseif (in_array ('campaign', $ post_cats)):
        ?>
<p style = "margin-top: -60px; padding-bottom: 20px;"> <strong> <br>
[Contact for inquiries regarding this campaign] </ strong> <br>
Web: Support <a target="_blank" href="/Support" style="
    color: red;
"> Here </a> <br>
E-mail: <a href="mailto:info@newx-corp.jp" style="
    color: red;
    font-weight: 500;
"> info@newx-corp.jp </a> & nbsp; & nbsp; </ p>

<? php

elseif (in_array ('Notice', $ post_cats)):
    ?>
<p style = "margin-top: -60px; padding-bottom: 20px;"> <strong> <br>
[Contact for inquiries regarding this article] </ strong> <br>
Web: Support <a target="_blank" href="/Support" style="
color: red;
"> Here </a> <br>
E-mail: <a href="mailto:info@newx-corp.jp" style="
color: red;
font-weight: 500;
"> info@newx-corp.jp </a> & nbsp; & nbsp; </ p>

<? php
    endif;
endif;
?>
<div class = "custom-tweak" style = "margin-bottom: 20px; margin-top: -22px;">
   <!-<H5> ● Inquiries about this article </ h5>
    <p style = "margin-top: -8px; text-indent: 18px;"> <a href="/support" style="color:red;"> Contact us here </a> </ p> ->
    <p style = "line-height: 1.8;"> * Please note that the information posted in the news is as of the date of the announcement and may differ from the latest information.
        <br> * Company names and product / service names mentioned in the news are registered trademarks or trademarks of each company.
        <br> * Regarding the consumption tax display, regarding the description of the expected market price etc. of the news release sent by our company after January 1, 2nd year of the Ordinance, the consumption tax rate that was enforced at the time of the press release is used. Based on this, we are displaying the tax included. The period from January 1, 2017 to December 31, 2017 is "tax not included".
    </ p>
</ div>
    <div class="post-gap"></div>

<?php

$ share = porto_get_meta_value ('post_share');
if ($ porto_settings ['share-enable'] &&'no'! == $ share && ('yes' === $ share || ('yes'! == $ share && $ porto_settings ['post-share' ])))):?>
    <? php
    $ classes = array ('post-share');
    if (! isset ($ style) ||'inline'! = $ style) {
        $ classes [] ='post-block';
    }
    if ('advance' === $ porto_settings ['post-share-position']) {
        $ classes [] ='post-share-advance';
    }
    ?>
    <div class = "<? php echo implode ('', $ classes);?>">
        <? php if (isset ($ style) &&'inline' == $ style):?>
            <span> <i class = "fas fa-share-alt"> </ i> <? php esc_html_e ('Share:','porto');?> </ span>
        <? php elseif ('without-icon' == $ porto_settings ['post-title-style']):?>
            <h3> <? php esc_html_e ('share','porto');?> </ h3>
        <? php else:?>
            <h3> <i class = "fas fa-share"> </ i> <? php esc_html_e ('share','porto');?> </ h3>
        <? php endif;?>
        <? php if ('advance' === $ porto_settings ['post-share-position']):?>
            <div class = "post-share-advance-bg">
                <? php get_template_part ('share');?>
                <i class = "fas fa-share-alt"> </ i>
            </ div>
        <? php else:?>
            <? php get_template_part ('share');?>
        <? php endif;?>
    </ div>
<? php
endif;
