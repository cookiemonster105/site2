<!-- Template for 404 Page -->
<?php get_header(); ?>

<div id="wrapper">

    <main>
           
                <h2>Nothing to see here. Please move along. </h2>
                <?php get_search_form(); ?><br>
                <?php wp_list_pages() ;?>
    </main>  

  <!-- <aside>
  </aside> -->

</div><!-- end wrapper -->

<?php get_footer(); ?>