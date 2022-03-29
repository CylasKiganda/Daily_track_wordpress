<?php
/**
 * Add variation custom fields on product edit page
 *
 * @param $loop
 * @param $variation_data
 */
function tsk_woocommerce_product_after_variable_attributes( $loop, $variation_data, $variation ) {
 
     
    // unit price
    woocommerce_wp_text_input(
        array(
            'id'          => 'unit_price[' . $variation->ID .']',
            'label'       => _e( 'Unit Price', 'tsk-woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_unit_price', true )
        )
    );

    // unit type
    woocommerce_wp_text_input(
        array(
            'id'          => 'unit_type[' . $variation->ID .']',
            'label'       => _e( 'Unit Type', 'tsk-woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_unit_type', true )
        )
    );

    // case amount
    woocommerce_wp_text_input(
        array(
            'id'          => 'case_amount[' . $variation->ID .']',
            'label'       => _e( 'Case Amount', 'tsk-woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_case_amount', true )
        )
    );
     
}
add_action( 'woocommerce_product_after_variable_attributes', 'tsk_woocommerce_product_after_variable_attributes', 10, 3 );
 
 
/**
 * Save product variation custom fields
 * 
 * @param   int $post_id
 */
function tsk_woocommerce_save_product_variation( $post_id ) {
     
    // unit price
    $unit_price = $_POST['unit_price'][ $post_id ];
    if ( isset($unit_price) && ! empty($unit_price) ) {
        update_post_meta( $post_id, '_unit_price', wc_clean( $unit_price ) );
    } else {
        delete_post_meta( $post_id, '_unit_price' );
    }

    // unit type
    $unit_type = $_POST['unit_type'][ $post_id ];
    if ( isset($unit_type) && ! empty($unit_type) ) {
        update_post_meta( $post_id, '_unit_type', wc_clean( $unit_type ) );
    } else {
        delete_post_meta( $post_id, '_unit_type' );
    }
     
     // case amount
     $unit_type = $_POST['case_amount'][ $post_id ];
     if ( isset($unit_type) && ! empty($unit_type) ) {
         update_post_meta( $post_id, '_case_amount', wc_clean( $unit_type ) );
     } else {
         delete_post_meta( $post_id, '_case_amount' );
     }
}
add_action( 'woocommerce_save_product_variation', 'tsk_woocommerce_save_product_variation', 10, 2 );

 ?>