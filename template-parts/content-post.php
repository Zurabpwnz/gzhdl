<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GZhDL
 */

?>


<div class="col-12 col-md-6" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" class="article-item blog-item">
        <h3 class="article__title"><?php the_title(); ?></h3>
        <div class="article__img"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>"></div>
        <div class="article__pre"><?php the_content(); ?></div>
        <p class="btn btn-white article__btn">Читать</p>
    </a>
</div>