<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// add post_thumbnail support
if ( function_exists('add_theme_support') )
  add_theme_support('post-thumbnails');
