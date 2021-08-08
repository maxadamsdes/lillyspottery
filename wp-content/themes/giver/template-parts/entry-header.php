<?php 
/**
 * entry-header
 *
 * @package Giver
 */

$giver_entry_header = get_custom_header();

if( $giver_entry_header->url ) {
    $entry_header_bg = 'background-image: url('. esc_url( $giver_entry_header->url ) .');';
} else {
    $entry_header_bg = '';
}

?>

<div class="entry-header" style="<?php echo $entry_header_bg; ?>">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
               <h2><?php echo get_the_title(); ?></h2>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</div>