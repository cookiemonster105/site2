<?php
get_header();
/* Template Name: Events Page*/
?>
<div id="wrapper">
    <main>
       
     
                            
   <!-- If we have post display them with while loop -->
            <?php if (have_posts()) : ?>
                    <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php endif ?>
                <?php while(have_posts()) : the_post() ; ?>

                    <?php the_content() ; ?>
                <?php endwhile ; ?>
                    
                    <?php  else : ?>
                    <h2> <?php echo wpautop('Sorry, no posts were found!'); ?></h2>
                    
            
    </main>

    
                     <aside id="secondary" class="widget-area"> 
                        <?php dynamic_sidebar('sidebar-tours'); ?>

                        <?php dynamic_sidebar('sidebar-tours-specials'); ?>

                    </aside>

        <?php endif; ?>


        
</div><!-- close wrapper -->
<?php dynamic_sidebar('sidebar-buy'); ?>
<?php
get_footer();
?>