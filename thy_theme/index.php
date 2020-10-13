<?php get_header(); ?>

<div class="container">
<div style="margin:0 atuo;"><img src="http://localhost:8000/wp-content/uploads/2020/09/main.png"></div>
    <div class="contents">
    
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article <?php post_class('gaiyou'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>
                </a>
            </article>
        <?php endwhile; endif; ?>    
    </div>
    <div class="sub">
        <?php get_sidebar(); ?>
        <!-- <?php get_login(); ?> -->
    </div>
</div>
<?php get_footer(); ?>