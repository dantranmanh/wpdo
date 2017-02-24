<?php
/**
 * @package SKT Full Width
 * Setup the WordPress core custom functions feature.
 *
*/

add_action('skt_full_width_optionsframework_custom_scripts', 'skt_full_width_optionsframework_custom_scripts');
function skt_full_width_optionsframework_custom_scripts() { ?>
	<script type="text/javascript">
    jQuery(document).ready(function() {
    
        jQuery('#example_showhidden').click(function() {
            jQuery('#section-example_text_hidden').fadeToggle(400);
        });
        
        if (jQuery('#example_showhidden:checked').val() !== undefined) {
            jQuery('#section-example_text_hidden').show();
        }
        
    });
    </script><?php
}
define('SKT_THEME_URL_DIRECT','http://www.sktthemes.net/shop/skt_full_width_pro/');

?>