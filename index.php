<?php
/*
Plugin Name: WPFilegator
Plugin URI: https://t.me/WordPressBrasil
description: Add smart and secure WebFTP to WordPress.
Version: 0.1
Author: @henryjr
Author URI: https://t.me/WordPressBrasil
License: Que licença?
*/

add_action('admin_menu', 'wpfilegator');
function wpfilegator()
{
    add_options_page(
        'WPFilegator',
        'WPFilegator',
        'manage_options',
        'wpfilegator-options',
        'wpfilegator_content'
    );
}

function wpfilegator_content()
{ $url = get_option( 'home' ); ?>
    <div class="wrap">
        <div id="dashboard_site_health" class="postbox">
            <div class="postbox-header">
                <h2 class="hndle ui-sortable-handle" style="padding-left: 30px">WPFilegator - WebFTP</h2>
            </div>
            <div class="inside">
                <iframe src="<?php echo $url; ?>/wp-content/plugins/WPFilegator/filegator/index.php"
                        style="width:100%;height:700px;border:none;overflow:hidden;z-index:999999;">
                    Your browser doesn't support iframes
                </iframe>
            </div>
        </div>
    </div>
<?php }
