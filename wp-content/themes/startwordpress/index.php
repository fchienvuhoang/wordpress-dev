<?php get_header(); ?>
    <div class="row wrap-list-blog-posts">
        <div class="col-md-8">
            <div class="row">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                    get_template_part('content', get_post_format());
                endwhile; endif; ?>
                <!-- /.blog-main -->

                <?php
                global $post;
                $category = get_the_category($post->ID);
                var_dump($category);
                ?>
            </div>
        </div>
    </div> <!-- /.row -->
<?php get_footer(); ?>