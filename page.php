<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */
    

$context = Timber::get_context();

$post = new TimberPost();

$context['post'] = $post;

// Add ACF field data to context

$about_page_id = 9;
$about = new TimberPost( $about_page_id );
$context['thepage'] = $about;

$args = array(
  'post_type'			  => 'cases',
	'posts_per_page'  => -1,
);

$context['cases'] = Timber::get_posts($args);
  
  $args = array(
    'post_type'			  => 'jobs',
    'posts_per_page'  => -1,
  );
  
  $context['jobs'] = Timber::get_posts($args);
  
$terms = \Timber::get_terms(array('taxonomy' => 'jobs_category', 'hide_empty' => true, 'parent' => 0));
$context['categories'] = $terms;

Timber::render( array( 'page-' . $post->post_name . '.twig', 'page.twig' ), $context );