<?php
global $porto_settings;
global $post;
$post_cat = get_the_category($post->ID);
$post_cats = array();
foreach ($post_cat as $cat){
    array_push($post_cats, $cat->cat_name);
}
if (count($post_cats) ==1 ):
    if(in_array('新製品リリース情報',$post_cats)):
        ?>
<p style="margin-top: -60px;padding-bottom: 20px;"><strong><br>
【本プレスリリースに関するお問い合わせ先】</strong><br>
Web：お問い合わせは<a target="_blank" href="https://support.pcdiy.newx.co.jp/hc/ja/requests/new?ticket_form_id=4415079134105" style="
    color: red;
">こちら</a><br>
E-mail：<a href="mailto:info@newx-corp.jp" style="
    color: red;
    font-weight: 500;
">info@newx-corp.jp</a>&nbsp;&nbsp;</p>

<?php
       
    elseif(in_array('キャンペーン',$post_cats)):
        ?>
<p style="margin-top: -60px;padding-bottom: 20px;"><strong><br>
【本キャンペーンに関するお問い合わせ先】</strong><br>
Web：お問い合わせは<a target="_blank" href="https://support.pcdiy.newx.co.jp/hc/ja/requests/new?ticket_form_id=4415079134105" style="
    color: red;
">こちら</a><br>
E-mail：<a href="mailto:info@newx-corp.jp" style="
    color: red;
    font-weight: 500;
">info@newx-corp.jp</a>&nbsp;&nbsp;</p>

<?php 

elseif(in_array('お知らせ',$post_cats)):
    ?>
<p style="margin-top: -60px;padding-bottom: 20px;"><strong><br>
【本記事に関するお問い合わせ先】</strong><br>
Web：お問い合わせは<a target="_blank" href="https://support.pcdiy.newx.co.jp/hc/ja/requests/new?ticket_form_id=4415079134105" style="
color: red;
">こちら</a><br>
E-mail：<a href="mailto:info@newx-corp.jp" style="
color: red;
font-weight: 500;
">info@newx-corp.jp</a>&nbsp;&nbsp;</p>

<?php 
    endif;
endif;
?>
<div class="blog-last-section" style="margin-bottom: 20px;margin-top: -22px;">
   <!-- <h5>●本記事に関するお問い合わせ</h5>
    <p style="margin-top: -8px;text-indent: 18px;"><a href="https://support.pcdiy.newx.co.jp/hc/ja/requests/new?ticket_form_id=900001705646" style="color:red;">お問い合わせはこちらから</a></p>-->
    <p style="line-height: 1.8;">※ ニュースに掲載している情報は、発表日現在のものであり、最新の情報とは異なる場合がございますので、あらかじめご了承ください。
        <br>※ ニュースに記載されている会社名および商品・サービス名は、各社の登録商標または商標です。
        <br>※ 消費税表示に関しまして、令和2年1月1日以降に弊社より発信されておりますニュースリリースの予想市場価格等の記載に関しましては、プレスリリース時に施行されておりました消費税率を元に「内税表示」を行っております。平成29年1月1日から令和元年12月31日の期間は「外税表示」とさせて頂いております。
    </p>
</div>
    <div class="post-gap"></div>

<?php

$share = porto_get_meta_value( 'post_share' );
if ( $porto_settings['share-enable'] && 'no' !== $share && ( 'yes' === $share || ( 'yes' !== $share && $porto_settings['post-share'] ) ) ) : ?>
    <?php
    $classes = array( 'post-share' );
    if ( ! isset( $style ) || 'inline' != $style ) {
        $classes[] = 'post-block';
    }
    if ( 'advance' === $porto_settings['post-share-position'] ) {
        $classes[] = 'post-share-advance';
    }
    ?>
    <div class="<?php echo implode( ' ', $classes ); ?>">
        <?php if ( isset( $style ) && 'inline' == $style ) : ?>
            <span><i class="fas fa-share-alt"></i><?php esc_html_e( 'Share:', 'porto' ); ?></span>
        <?php elseif ( 'without-icon' == $porto_settings['post-title-style'] ) : ?>
            <h3><?php esc_html_e( 'シェアする', 'porto' ); ?></h3>
        <?php else : ?>
            <h3><i class="fas fa-share"></i><?php esc_html_e( 'シェアする', 'porto' ); ?></h3>
        <?php endif; ?>
        <?php if ( 'advance' === $porto_settings['post-share-position'] ) : ?>
            <div class="post-share-advance-bg">
                <?php get_template_part( 'share' ); ?>
                <i class="fas fa-share-alt"></i>
            </div>
        <?php else : ?>
            <?php get_template_part( 'share' ); ?>
        <?php endif; ?>
    </div>
<?php
endif;
