<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="bg-gray-300 w-full py-12">
                <div class="text-center">
                    <a class="font-bold text-2xl text-black" href="/product-category/heren">
                        Heren
                    </a>
                </div>
            </div>
            <div class="col-full my-4">
                <?php
                $loop = findProductCategoryByName(3, 'heren');
                while ($loop->have_posts()) :
                    $loop->the_post();
                    global $product;
                    echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
                endwhile;
                ?>
            </div>
            <div class="bg-gray-300 w-full py-12">
                <div class="text-center">
                    <a class="font-bold text-2xl text-black" href="/product-category/dames">
                        Dames
                    </a>
                </div>
            </div>
            <div class="col-full my-4">
                <?php
                $loop = findProductCategoryByName(3, 'dames');
                while ($loop->have_posts()) :
                    $loop->the_post();
                    global $product;
                    echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
                endwhile;
                ?>
            </div>
            <div class="bg-gray-300 w-full py-12">
                <div class="text-center">
                    <a class="font-bold text-2xl text-black" href="/product-category/kinderen">
                        Kinderen
                    </a>
                </div>
            </div>
            <div class="col-full my-4">
                <div class="flex justify-between">
                    <?php
                    $loop = findProductCategoryByName(3, 'kinderen');
                    while ($loop->have_posts()) :
                        ?>
                        <?php
                        $loop->the_post();
                        global $product;
                        echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
                    endwhile;
                    ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
do_action('storefront_sidebar');
get_footer();
