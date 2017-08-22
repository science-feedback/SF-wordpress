<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
      <span itemscope itemtype="https://schema.org/Article">
    <header>
      <div class="page-header myfull">
          <h2  style="color:#000"> . </h2> 
      </div>
        <h1 itemprop="name" class="entry-title"><?php the_title(); ?></h1> 
      
    </header>

    <div class="entry-content">
       <aside class="mashsb-stretched">  <?php echo do_shortcode('[mashshare]'); ?></aside>
      <center>
        <span itemprop="image"><?php the_post_thumbnail(array(800, 500), array( 'class' => 'img-responsive' )); ?> </span>
      </center>
        <br />
        
      <p><?php the_content(); ?></p>
    </div>

    <div>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

    </div>
      </span>
  </article>

      <p class="small spaceup1">
       <i class="fa fa-tags fa-lg" aria-hidden="true"></i> <?php the_tags( '<span class="bot-tag">', '</span> &nbsp;<span class="bot-tag">', '</span>'); ?>
      </p>
        <p class="small">
            Published on: <?php echo get_the_date( 'd M Y' ); ?> &#124; Editor: <?php the_author_posts_link(); ?>
        </p>

<?php endwhile; ?>
