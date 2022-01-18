<?php

if( ! function_exists( 'author_blog_admin_notice' ) ) :

/**

 * Addmin notice for getting started page

*/

function author_blog_admin_notice(){

    global $pagenow;

    $theme_args      = wp_get_theme();

    $meta            = get_option( 'author_blog_admin_notice' );

    $name            = $theme_args->__get( 'Name' );

    $current_screen  = get_current_screen();



    if( 'themes.php' == $pagenow && !$meta ){



        if( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ){

            return;

        }



        if( is_network_admin() ){

            return;

        }



        if( ! current_user_can( 'manage_options' ) ){

            return;

        } ?>



        <div class="welcome-message notice notice-info">

            <div class="notice-wrapper">

                <div class="notice-text">

                    <h3><?php esc_html_e( 'Congratulations!', 'author-blog' ); ?></h3>

                    <p><?php printf( __( '%1$s is now installed and ready to use. Click below to see theme documentation, plugins to install and other details to get started.', 'author-blog' ), esc_html( $name ) ); ?></p>

                    <p><a href="<?php echo esc_url( admin_url( 'themes.php?page=author-blog-getting-started' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Go to the getting started.', 'author-blog' ); ?></a></p>

                    <p class="dismiss-link"><strong><a href="?author_blog_admin_notice=1"><?php esc_html_e( 'Dismiss', 'author-blog' ); ?></a></strong></p>

                </div>

            </div>

        </div>

    <?php }

}

endif;

add_action( 'admin_notices', 'author_blog_admin_notice' );



if( ! function_exists( 'author_blog_update_admin_notice' ) ) :

/**

 * Updating admin notice on dismiss

*/

function author_blog_update_admin_notice(){

    if ( isset( $_GET['author_blog_admin_notice'] ) && $_GET['author_blog_admin_notice'] = '1' ) {

        update_option( 'author_blog_admin_notice', true );

    }

}

endif;

add_action( 'admin_init', 'author_blog_update_admin_notice' );

