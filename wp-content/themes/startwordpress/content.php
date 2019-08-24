<div class="col-md-6 blog-item mb-3">
    <div class="wrap-post-thumbnail">
       <a href="<?php the_permalink(); ?>">
           <img src="<?php the_post_thumbnail_url() ?>"/>
       </a>
    </div>
    <div class="wrap-blog-title">
        <a href="<?php the_permalink(); ?>" class="blog-title"><?php the_title(); ?></a>
    </div>
</div>