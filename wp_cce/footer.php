<?php
/**
 * Footer.php outputs the code for your footer widgets, contains your footer hook and closing body/html tags
 * @package Ultra WordPress Theme
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */ ?>
    <div class="clear"></div><!-- .clear -->
    </div><!-- #main-content -->
    
    <?php
    // Show widgetized footer if enabled
	if( of_get_option('footer_widgets','1') == '1' ) { ?>
    <div id="footer-wrap">
        <footer id="footer" class="boxed">
            <div id="footer-columns" class="clearfix">
                <div class="footer-col grid-<?php echo of_get_option('footer_columns','4'); if(of_get_option('footer_columns','4') == '1') echo ' remove-margin'; ?>">
                    <?php dynamic_sidebar('footer-one'); ?>
                </div>
                <div class="footer-col grid-<?php echo of_get_option('footer_columns','4'); if(of_get_option('footer_columns','4') == '2') echo ' remove-margin'; ?>">
                    <?php dynamic_sidebar('footer-two'); ?>
                </div>
                <div class="footer-col grid-<?php echo of_get_option('footer_columns','4'); if(of_get_option('footer_columns','4') == '3') echo ' remove-margin'; ?>">
                    <?php dynamic_sidebar('footer-three'); ?>
                </div>
                <div class="footer-col grid-<?php echo of_get_option('footer_columns','4'); if(of_get_option('footer_columns','4') == '4' || '2') echo ' remove-margin'; ?>">
                    <?php dynamic_sidebar('footer-four'); ?>
                </div>
            </div><!-- #footer-columns -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6876770867250812"
     crossorigin="anonymous"></script>
        </footer><!-- #footer -->
    </div><!-- #footer-wrap -->
    <?php } ?>
    
        <div id="subfooter">
            <div class="boxed clearfix">
                <div id="footer-menu">
                    <?php
                    // Footer menu
                    wp_nav_menu(
                            array(
                                'theme_location' => 'footer_menu',
                                'sort_column' => 'menu_order',
                                'fallback_cb' => false
                        )
                    ); ?>
                </div><!-- #footer-menu -->
                <div id="copyright">
                &copy; <?php _e('Copyright','wpex'); echo ' '. date('Y'); ?> &middot; <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                </div><!-- #copyright -->
                <a href="#top" id="toplink" class="scrolltop"><span class="icon-arrow-up"></span></a>
            </div><!-- .boxed -->
        </div><!-- #subfooter -->
        
    </div><!-- #wrap -->
</div><!-- #site-wrap -->
<?php wp_footer(); // Footer hook, do not delete, ever ?>
</body>
</html>
