<?php 
/* 
El footer del theme
*/
$theme_url = get_template_directory_uri();
wp_footer() ?>
<!--========== FOOTER ==========-->
<footer class="g-bg-color--dark">
    <!-- Links -->
    <div class="g-hor-divider__dashed--white-opacity-lightest">
        <div class="container g-padding-y-80--xs">
            <div class="row">
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="index.html">Inicio</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="nosotros.html">Nosotros</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="contacto.html">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
 <!--                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Twitter</a></li> -->
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://web.facebook.com/proboxing.cl/">Facebook</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.instagram.com/proboxing.cl/">Instagram</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">YouTube</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Subscribe to Our Newsletter</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Privacy Policy</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                    <h3 class="g-font-size-18--xs g-color--white">Proboxing</h3>
                    <p class="g-color--white-opacity">The Sweet Science.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="container g-padding-y-50--xs">
        <div class="row">
            <div class="col-xs-6">
                <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="<?php echo $theme_url ?>/assets/images/logo.png" alt="Proboxing Logo">
                        </a>
            </div>
            <div class="col-xs-6 g-text-right--xs">
                <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light">Proboxing:
                    <a href="http://www.webdeveloper.cl">Web Developer</a>.
                </p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

<!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
<!-- Vendor -->
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/jquery.back-to-top.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/waypoint.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/counterup.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/jquery.parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHe4jrSRpYdcxQf4SDGxTDBWahDit-j5A"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/jquery.wow.min.js"></script>

<!-- General Components and Settings -->
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/global.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/header-sticky.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/counter.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/portfolio-3-col.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/parallax.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/google-map.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url ?>/assets/js/wow.min.js"></script>
<!--========== END JAVASCRIPTS ==========-->

</body>

</html>
