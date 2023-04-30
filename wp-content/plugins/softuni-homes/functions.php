<?php

/**
 * This function update home post meta for the views count
 *
 * @param [type] $home_id
 * @return void
 */
function softuni_update_homes_views_count( $home_id){

    if ( empty( $home_id)) {
        return;
    }
    
    // ако нe е Single view на home
    // if (is_single( 'home' )) {
    //     return;
    // }
    
    $view_count = get_post_meta( $home_id, 'view_count', true );
    
    // var_dump($view_count);
    if ( ! empty( $view_count)) {
        $view_count ++;
    } else {
        $view_count = 1;
    }
    update_post_meta( $home_id, 'view_count', $view_count );
}