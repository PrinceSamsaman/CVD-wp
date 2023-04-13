<?php get_header(); ?>
<section class="tags">

    <div class="container">
        <div class="tagsWrapper">
        <?php echo get_the_post_thumbnail(); ?>
        <ul>
            <li><i class="fa-solid fa-user"></i> Prince Samsaman</li>
            <li><i class="fa-solid fa-calendar"></i> March 15, 2023</li>
            <li><i class="fa-solid fa-tags"></i> Web Design | Wire Frame</li>
        </ul>
        <h4><?php the_title(); ?></h4>
        <p><?php the_excerpt(); ?></p>
        </div>

    </div>
</section>

<?php get_footer(); ?>


