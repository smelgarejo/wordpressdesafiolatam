<?php
$theme_url = get_template_directory_uri();
get_header() ?>
<!--========== SWIPER SLIDER ==========-->
<div class="s-swiper js__swiper-one-item">
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper">
        <?php query_posts('posts_per_page=1&category_name=slide'); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('<?php the_post_thumbnail_url('full'); ?>');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"><?php the_title(); ?></h1> </div>
                <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=cZZ0Z1cndk8" title="Intro Video"> <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i> </a>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
    <!-- End Swiper Wrapper -->
    <!-- Arrows -->
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->
    <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs"> <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
    <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Leer Más</p>
</a>
</div>
<!--========== END SWIPER SLIDER ==========-->
<!-- Parallax -->
<div class="js__parallax-window" style="background: url(<?php echo $theme_url ?>/assets/images/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
<div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-margin-b-80--xs">
        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Conoce nuestras promociones</h2> </div> <a href="#" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">ver más</a> </div>
    </div>
    <!-- End Parallax -->
    <!-- Culture -->
    <div class="g-promo-section">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row">
                <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Proboxing</p>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Nuestra</h2>
                    </div>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Empresa</h2>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <p class="g-font-size-18--xs">Somos una empresa importadora y fabricante de productos para deportes de contacto, de alta gamma y calidad, que ofrece productos que se enfocan principalmente en el cuidado del deportista, ya que una lesión en estos deportes significa un paro considerable en el entrenamiento.</p>
                    <p class="g-font-size-18--xs">Nuestro principal objetivo es el cuidado del deportista, evitar lesiones y que el equipamiento cumpla con todas sus necesidades.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
            <img class="img-responsive" src="<?php echo $theme_url ?>/assets/images/970x970/03.jpg" alt="Image">
        </div>
    </div>
    <!-- End Culture -->
    <!-- Portfolio Filter -->
    <div class="container g-padding-y-80--xs">
        <div class="g-text-center--xs g-margin-b-40--xs">
            <h2 class="g-font-size-32--xs g-font-size-36--md">Productos</h2>
        </div>
        <div class="s-portfolio">
            <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
                <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">Todos</div>
                <div data-filter=".graphic" class="s-portfolio__filter-v1-item cbp-filter-item">Guantes Básicos</div>
                <div data-filter=".logos" class="s-portfolio__filter-v1-item cbp-filter-item">Guantes Semi Pro</div>
                <div data-filter=".motion" class="s-portfolio__filter-v1-item cbp-filter-item">Vendas</div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Filter -->
    <!-- Portfolio Gallery -->
    <div class="container g-margin-b-100--xs">
        <div id="js__grid-portfolio-gallery" class="cbp">
            <!-- Item -->
            <div class="s-portfolio__item cbp-item logos motion">
                <div class="s-portfolio__img-effect">
                    <img src="<?php echo $theme_url ?>/assets/images/970x647/05.jpg" alt="Portfolio Image">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Producto</h4>
                        <p class="g-color--white-opacity">Proboxing</p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="<?php echo $theme_url ?>/assets/images/970x647/05.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Producto <br/> Proboxing">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                <i class="ti-link"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Item -->
            <div class="s-portfolio__item cbp-item graphic">
                <div class="s-portfolio__img-effect">
                    <img src="<?php echo $theme_url ?>/assets/images/970x647/06.jpg" alt="Portfolio Image">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Producto</h4>
                        <p class="g-color--white-opacity">Proboxing</p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="<?php echo $theme_url ?>/assets/images/970x647/06.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Producto <br/> Proboxing">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                <i class="ti-link"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Item -->
            <div class="s-portfolio__item cbp-item logos">
                <div class="s-portfolio__img-effect">
                    <img src="<?php echo $theme_url ?>/assets/images/970x647/07.jpg" alt="Portfolio Image">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Producto</h4>
                        <p class="g-color--white-opacity">Proboxing</p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="<?php echo $theme_url ?>/assets/images/970x647/07.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Producto <br/> Proboxing">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                <i class="ti-link"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Item -->
            <div class="s-portfolio__item cbp-item motion graphic">
                <div class="s-portfolio__img-effect">
                    <img src="<?php echo $theme_url ?>/assets/images/970x647/08.jpg" alt="Portfolio Image">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Producto</h4>
                        <p class="g-color--white-opacity">Proboxing</p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="<?php echo $theme_url ?>/assets/images/970x647/08.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Producto <br/> Proboxing">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                <i class="ti-link"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Item -->
            <div class="s-portfolio__item cbp-item logos graphic">
                <div class="s-portfolio__img-effect">
                    <img src="<?php echo $theme_url ?>/assets/images/970x647/09.jpg" alt="Portfolio Image">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Producto</h4>
                        <p class="g-color--white-opacity">Proboxing</p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="<?php echo $theme_url ?>/assets/images/970x647/09.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Producto <br/> Proboxing">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                <i class="ti-link"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Item -->
            <div class="s-portfolio__item cbp-item motion graphic">
                <div class="s-portfolio__img-effect">
                    <img src="<?php echo $theme_url ?>/assets/images/970x647/04.jpg" alt="Portfolio Image">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                        <p class="g-color--white-opacity">Proboxing</p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="<?php echo $theme_url ?>/assets/images/970x647/04.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> Proboxing">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                <i class="ti-link"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Portfolio Gallery -->
    </div>
    <!-- End Portfolio -->
    <!-- News -->
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">Noticias</h2>
        </div>
        <div class="row">
            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                <!-- News -->
                <article>
                    <img class="img-responsive" src="<?php echo $theme_url ?>/assets/images/970x970/01.jpg" alt="Image">
                    <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Promociones</p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/"></a>Lista de precios.</h3>
                        <p></p>
                    </div>
                </article>
                <!-- End News -->
            </div>
            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                <!-- News -->
                <article>
                    <img class="img-responsive" src="<?php echo $theme_url ?>/assets/images/970x970/02.jpg" alt="Image">
                    <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Promociones</p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Promociòn por Lanzamiento</a></h3>
                        <p></p>
                    </div>
                </article>
                <!-- End News -->
            </div>
            <div class="col-sm-4">
                <!-- News -->
                <article>
                    <img class="img-responsive" src="<?php echo $theme_url ?>/assets/images/970x970/03.jpg" alt="Image">
                    <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Promociones</p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Promociòn por Lanzamiento</a></h3>
                        <p></p>
                    </div>
                </article>
                <!-- End News -->
            </div>
        </div>
    </div>
    <!-- End News -->
    <!-- Feedback Form -->
    <!-- <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Feedback</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">Send us a note</h2>
            </div>
            <form>
                <div class="row g-margin-b-40--xs">
                    <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                        <div class="g-margin-b-20--xs">
                            <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Name">
                        </div>
                        <div class="g-margin-b-20--xs">
                            <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                        </div>
                        <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone">
                    </div>
                    <div class="col-sm-6">
                        <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Your message"></textarea>
                    </div>
                </div>
                <div class="g-text-center--xs">
                    <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
                </div>
            </form>
        </div>
    </div> -->
    <!-- End Feedback Form -->
    <!-- Google Map -->
    <section class="s-google-map">
        <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
    </section>
    <!-- End Google Map -->
    <!--========== END PAGE CONTENT ==========-->
    <?php get_footer() ?>