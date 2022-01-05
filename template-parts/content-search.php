<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GZhDL
 */

?>

<a href="#" class="search-link" id="post-<?php the_ID(); ?>">
    <h2 class="search-link__title"><?php the_title(); ?></h2>
    <p class="search-link__text"><?php the_excerpt(); ?></p>
</a>
