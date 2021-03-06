<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?> style="margin-top: 0px;">
    <header>
      <div class="page-header myfull">
          <h2  style="color:#000"> . </h2> 
      </div>
        <h1 class="entry-title"><?php the_title(); ?></h1> 
    </header>

    <div class="entry-content">
        
      <p><em><?php the_excerpt(); ?></em> <a href="<?php echo get_post_meta( get_the_ID(), 'link', true) ?>" target="_blank">READ MORE</a></p>
      <center>
        <?php the_post_thumbnail(array(600, 375), array( 'class' => 'img-responsive' )); ?>
      </center>
    </div>

    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>

  </article>

<!--      add tags list to the post <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?> 

<p> Outlet: <a href="/ "> </a><?php echo get_post_meta( get_the_ID(), 'outlet', true ); ?></p> -->

  <div class="foot-notes">
    <p class="small"><?php echo get_post_meta( get_the_ID(), 'footNote', true) ?></p>
  </div>

  <!--  <h1>--><?php //echo get_post_meta( get_the_ID(), 'score', true ); ?><!--</h1>-->


<?php endwhile; ?>
