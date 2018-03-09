<?php
/**
 * The template for displaying the Front Page
 *
 * This is the template that displays without sidebars
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aguilas
 */

get_header('full-viewport'); ?>

<?php get_template_part('parts/home-podcast'); ?>

<?php get_template_part('parts/home-predicas'); ?>

<?php get_template_part('parts/home-devocional'); ?>

<?php get_template_part('parts/home-remas'); ?>

<?php get_template_part('parts/home-tabernaculo'); ?>

<?php get_template_part('parts/home-extraordinaria'); ?>



<?php
get_footer();
