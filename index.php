<!-- Template for BLOG Page -->
<?php get_header(); ?>

<div id="wrapper">

    <main>
            <?php if (have_posts()) : ?>
                <?php while(have_posts()) : the_post() ; ?>
                    <article class="post">
                     <h2 class="title"> <a href="<?php the_permalink() ; ?>"> 
                     <?php the_title() ; ?></a></h2>
                        <div class="meta">
                            <span> <b>posted By:</b> <?php the_author() ;?> </span>
                            <span> <b>posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
                        </div> <!-- close meta -->
                        <div class ="thumbnail">
                            <?php if(has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink() ; ?>">
                            <?php the_post_thumbnail(); ?>
                            </a>
                            <?php endif ?>


                        </div><!-- end thumbnail -->
                
                     <?php the_excerpt() ; ?>

                     <span class="block">
                        <a href="<?php the_permalink()  ;?>"> Read more about the <?php the_title(); ?> </a>
                     </span>

                     
                     

                    </article>

                <?php endwhile ; ?>
                    
                    <?php  else : ?>
                    <h3> Sorry, We could not find anything regarding your search terms.</h3>

                    <?php get_search_form(); ?> 
                    
            

            <?php endif; ?>
            <?php comments_template(); ?>
    </main>  

  <aside>
  </aside>

</div><!-- end wrapper -->

<?php get_footer(); ?>