<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package BoldGrid
 */

get_header(); ?>

<div class="container">
	<div class="row background-primary">
        <?php do_action( '404_before' ); ?>
        <div class="row">
            <div class="col-md-12">
            <?php do_action( 'boldgrid_404' ); ?>
            </div><!-- .col -->
        </div><!-- .row -->
        <?php do_action( '404_after' ); ?>
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(  ); ?>
