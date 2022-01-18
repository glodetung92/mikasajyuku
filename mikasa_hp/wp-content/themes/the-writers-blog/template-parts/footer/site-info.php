<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'the_writers_blog_hide_show_scroll',false) != '' || get_theme_mod( 'the_writers_blog_enable_disable_scrolltop',false) != '') { ?>
    <?php $the_writers_blog_theme_lay = get_theme_mod( 'the_writers_blog_footer_options','Right');
        if($the_writers_blog_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('the_writers_blog_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'the-writers-blog' ); ?></span></a>
        <?php }else if($the_writers_blog_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('the_writers_blog_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'the-writers-blog' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('the_writers_blog_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'the-writers-blog' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<span><?php the_writers_blog_credit(); ?> <?php echo esc_html(get_theme_mod('the_writers_blog_footer_text',__('By ThemesEye','the-writers-blog'))); ?> </span>
	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','the-writers-blog') ?></span>
</div>