<!-- Template for Front Page -->
<?php get_header(); ?>


<div id="wrapper">

        <?php if(have_posts()) : ?>
        

            <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile ; ?>
            <?php else : ?>
            <h2><?php echo wpautop('Sorry, no posts were found!');  ?></h2>

        <?php endif; ?>

</div><!-- end wrapper -->

<?php get_footer(); ?>