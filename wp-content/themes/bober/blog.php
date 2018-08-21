<?php



    $blog_title = bober_get_option('al-blog-heading', 'Blog');
    $blog_description = get_bloginfo('description');

    if( bober_get_option('al-blog-description') ){
        $blog_description = bober_get_option('al-blog-description');
    }

    if(class_exists('acf')){
        /* Template Name: Blog Template */
        if(!empty(get_field('blog_title'))){
            $blog_title = get_field('blog_title');
        }
        if(!empty(get_field('blog_description'))){
            $blog_description = get_field('blog_description');
        }
    }
?>

<?php get_header(); ?>

<section <?php echo bober_blog_background(); ?> class="display-page al-bg-mask background-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2">
                <div class="content">

                    <div class="heading-title al-center">
                        <h1 class="al-headitg-title"><?php echo esc_html($blog_title); ?></h1>

                        <div class="al-line-title">
                            <svg class="al-svg-line" fill="red" x="0px" y="0px" viewBox="0 0 100 19.5" ><g><polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"/></g></svg>
                        </div>

                        <div class="al-subtitle">
                            <p><?php echo esc_html($blog_description); ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="blog">
    <?php if(class_exists('acf')): ?>
        <?php get_template_part('loop/loop-post','acf'); ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
