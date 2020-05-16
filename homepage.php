<?php
/*
Template Name: Homepage
*/
?>

</div><!-- / .row -->
</div><!-- / .container -->

<?php function get_trim_text ($string) {
  $maxlen = 180;
  $excerpt = $string;
  $excerptlen = strlen($excerpt);
  if ($excerptlen > $maxlen) {
    $excerpt = substr($excerpt, 0, $maxlen).'...';
    $excerptlen = $maxlen + 3;
  }
  if ($excerpt[0] == '"')
    $excerpt = substr($excerpt, 0, $excerptlen-1);
  return $excerpt;
}?>

<div class="sigla feeds-hero">
    <div class="container">
  <div class="row feeds-hero__row">
    <h3 class="half-black">
      Accurate information is the foundation of a functioning democracy
    </h3>
  </div>
        </div>
</div>
<div class="feeds-aim overflow-hidden">
  <div class="container"><div class="feeds-container">
      <p class="feeds-aim__container__img col col-2"> WHAT WE DO </p>
      <p class="feeds-aim__container__text col col-10">
Science Feedback is a worldwide network of scientists sorting fact from fiction in science based media coverage. Our goal is to help readers know which news to trust. </p>
  </div></div>
</div>

<div class="container"> <!-- Claim review Climate-->
        
<?php
//Extract ID from category name
    $theCatId2 = get_term_by( 'slug', 'climate', 'category' );
    $theCatId2 = $theCatId2->term_id;
  $args = array(
    'post_type' => array('claimreview'),
    'cat' => $theCatId2,
    'posts_per_page' => 2
  );
  $posts = new WP_Query( $args );
?>
<div class="feeds-container feeds-container__claim ">
 <div class="feeds-title h3">Latest Claim Reviews – CLIMATE</div>  
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <a href="https://climatefeedback.org/claimreview/<?php echo basename(get_permalink( get_the_ID() )); ?>" >
      <div class="feed feed__claim col col-lg-6 mb1">
        <div class="feed__claim__container relative">
          <div class="feed__claim__container__illustration col col-4">
            <div class="feed__claim__container__illustration__screenshot">
              <img
                class="feed__claim__container__illustration__screenshot__img"
                src="<?php echo get_post_meta( get_the_ID(), 'screenshot', true)?>"
              >
            </div>
          </div>
          <div class="feed__claim__container__content col col-8">
            <img
              class="feed__claim__container__content__verdict__img mb1"
              src="<?php echo get_site_url(); ?>/wp-content/uploads/tags/HTag_<?php echo get_post_meta( get_the_ID(), 'verdict', true)?>.png"
            >
            <div class="feed-excerpt feed__claim__container__content__text mb1">
              <?php echo get_post_meta( get_the_ID(), 'claimshort', true); ?>
            </div>
            <div class="feed__claim__container__content__outlet">
              <?php echo get_post_meta( get_the_ID(), 'author', true); ?>, <?php echo get_post_meta( get_the_ID(), 'outlet', true); ?>
            </div>
            <div>
                - <?php echo get_the_date( 'd M Y' ); ?>
            </div>
          </div>
        </div>
      </div>
    </a>
  <?php endwhile; ?>
</div>
    <div class="feeds-more mb1 p1">
      <a class="feeds-more__link h4 p1" href="https://climatefeedback.org/claim-reviews/">
        More Climate Claim Reviews
      </a>
    </div>

</div><!-- / .container -->

<div class="container"> <!-- Claim review Health-->
        
<?php
//Extract ID from category name
    $theCatId2 = get_term_by( 'slug', 'health', 'category' );
    $theCatId2 = $theCatId2->term_id;
  $args = array(
    'post_type' => array('claimreview'),
    'cat' => $theCatId2,
    'posts_per_page' => 2
  );
  $posts = new WP_Query( $args );
?>
<div class="feeds-container feeds-container__claim ">
 <div class="feeds-title h3">Latest Claim Reviews – HEALTH</div>  
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <a href="https://healthfeedback.org/claimreview/<?php echo basename(get_permalink( get_the_ID() )); ?>" >
      <div class="feed feed__claim col col-lg-6 mb1">
        <div class="feed__claim__container relative">
          <div class="feed__claim__container__illustration col col-4">
            <div class="feed__claim__container__illustration__screenshot">
              <img
                class="feed__claim__container__illustration__screenshot__img"
                src="<?php echo get_post_meta( get_the_ID(), 'screenshot', true)?>"
              >
            </div>
          </div>
          <div class="feed__claim__container__content col col-8">
            <img
              class="feed__claim__container__content__verdict__img mb1"
              src="<?php echo get_site_url(); ?>/wp-content/uploads/tags/HTag_<?php echo get_post_meta( get_the_ID(), 'verdict', true)?>.png"
            >
            <div class="feed-excerpt feed__claim__container__content__text mb1">
              "<?php echo get_post_meta( get_the_ID(), 'claimshort', true); ?>"
            </div>
            <div class="feed__claim__container__content__outlet">
              <?php echo get_post_meta( get_the_ID(), 'author', true); ?>, <?php echo get_post_meta( get_the_ID(), 'outlet', true); ?>
            </div>
            <div>
                - <?php echo get_the_date( 'd M Y' ); ?>
            </div>
          </div>
        </div>
      </div>
    </a>
  <?php endwhile; ?>
</div>
    <div class="feeds-more mb1 p1">
      <a class="feeds-more__link h4 p1" href="https://healthfeedback.org/claim-reviews/">
        More Health Claim Reviews
      </a>
    </div>

</div><!-- / .container -->   
        
<div class="container"> <!-- Article reviews Climate-->
    <?php
//Extract ID from category name
    $theCatId2 = get_term_by( 'slug', 'climate', 'category' );
    $theCatId2 = $theCatId2->term_id;
  $args = array(
    'post_type' => array('evaluation'),
    'cat' => $theCatId2,
    'posts_per_page' => 2
  );
  $loop = new WP_Query( $args );
?>
    
<div class="feeds-container">
    <div class="feeds-title h3">Latest Article Reviews - CLIMATE</div>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <a class="col col-lg-6" href="https://climatefeedback.org/evaluation/<?php echo basename(get_permalink( get_the_ID() )); ?>" >
        <div class='feed feed__article mb3'>
          <div class='feed__article-next__screenshot mb1'>
            <img
              class='feed__article-next__screenshot__img'
              src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
            >
          </div>
          <div class='feed-title h3'>
            <?php echo get_the_title(); ?>
          </div>
          <div class='feed-outlet h3'>
            <?php echo get_post_meta( get_the_ID(), 'outlet', true); ?>
          </div>
          <div class='feed-excerpt mb1'>
            <?php echo get_trim_text(get_the_excerpt());?>
          </div>
          <div>
            - <?php echo get_the_date( 'd M Y' ); ?>
          </div>
        </div>
      </a>
  <?php endwhile; ?>
</div>
    <div class="feeds-more mb1 p1">
      <a class="feeds-more__link h4 p1" href="https://climatefeedback.org/feedbacks/">
        More Climate Article Reviews
      </a>
    </div>
    </div><!-- / .container -->

<div class="container"> <!-- Article reviews Health-->
    <?php
//Extract ID from category name
    $theCatId2 = get_term_by( 'slug', 'health', 'category' );
    $theCatId2 = $theCatId2->term_id;
  $args = array(
    'post_type' => array('evaluation'),
    'cat' => $theCatId2,
    'posts_per_page' => 2
  );
  $loop = new WP_Query( $args );
?>
    
<div class="feeds-container">
    <div class="feeds-title h3">Latest Article Reviews - HEALTH</div>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <a class="col col-lg-6" href="https://healthfeedback.org/evaluation/<?php echo basename(get_permalink( get_the_ID() )); ?>" >
        <div class='feed feed__article mb3'>
          <div class='feed__article-next__screenshot mb1'>
            <img
              class='feed__article-next__screenshot__img'
              src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
            >
          </div>
          <div class='feed-title h3'>
            <?php echo get_the_title(); ?>
          </div>
          <div class='feed-outlet h3'>
            <?php echo get_post_meta( get_the_ID(), 'outlet', true); ?>
          </div>
          <div class='feed-excerpt mb1'>
            <?php echo get_trim_text(get_the_excerpt());?>
          </div>
          <div>
            - <?php echo get_the_date( 'd M Y' ); ?>
          </div>
        </div>
      </a>
  <?php endwhile; ?>
</div>
    <div class="feeds-more mb1 p1">
      <a class="feeds-more__link h4 p1" href="https://healthfeedback.org/feedbacks/">
        More Health Article Reviews
      </a>
    </div>
    </div><!-- / .container -->   

<div class="container"><!-- Insight Climate-->
<div class="feeds-title h3">Latest Insight articles – CLIMATE</div>     
<?php
    $theCatId2 = get_term_by( 'slug', 'climate', 'category' ); //only insight posts tagged with climate or health
    $theCatId2 = $theCatId2->term_id;
  $args = array(
    'post_type' => array('post'),
    'cat' => $theCatId2,
    'posts_per_page' => 2
  );
  $loop = new WP_Query( $args );
?>
<div class="feeds-container mr3 p1">
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a class="col col-lg-6" href="https://climatefeedback.org/<?php echo basename(get_permalink( get_the_ID() )); ?>" >
      <div class='feed feed__perspective mb1 p2'>
        <div class='feed__perspective__screenshot mb1'>
          <img
            class='feed__perspective__screenshot__img'
            src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
          >
        </div>
        <div class='feed-title h3'>
          <?php echo get_the_title(); ?>
        </div>
        <div class='feed-excerpt mb1'>
          <?php echo get_trim_text(get_the_excerpt());?>
        </div>
        <div>
          - <?php echo get_the_date( 'd M Y' ); ?>
        </div>
      </div>
    </a>
  <?php endwhile; ?>
</div>
    <div class="feeds-more p1 mb1">
      <a class="feeds-more__link h4 p1" href="https://climatefeedback.org/insights/">
        More Climate Insights
      </a>
    </div>
</div><!-- / .container -->

<div class="container"><!-- Insight Health-->
<div class="feeds-title h3">Latest Insight articles – HEALTH</div>     
<?php
    $theCatId2 = get_term_by( 'slug', 'health', 'category' ); //only insight posts tagged with climate or health
    $theCatId2 = $theCatId2->term_id;
  $args = array(
    'post_type' => array('post'),
    'cat' => $theCatId2,
    'posts_per_page' => 2
  );
  $loop = new WP_Query( $args );
?>
<div class="feeds-container mr3 p1">
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a class="col col-lg-6" href="https://healthfeedback.org/<?php echo basename(get_permalink( get_the_ID() )); ?>" >
      <div class='feed feed__perspective mb1 p2'>
        <div class='feed__perspective__screenshot mb1'>
          <img
            class='feed__perspective__screenshot__img'
            src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
          >
        </div>
        <div class='feed-title h3'>
          <?php echo get_the_title(); ?>
        </div>
        <div class='feed-excerpt mb1'>
          <?php echo get_trim_text(get_the_excerpt());?>
        </div>
        <div>
          - <?php echo get_the_date( 'd M Y' ); ?>
        </div>
      </div>
    </a>
  <?php endwhile; ?>
</div>
    <div class="feeds-more p1 mb1">
      <a class="feeds-more__link h4 p1" href="https://healthfeedback.org/insights/">
        More Health Insights
      </a>
    </div>
</div><!-- / .container -->   

<div class="container">
     <div class="feeds-title h3">News &amp; Events</div>
<?php
    $theCatId = get_term_by( 'slug', 'news', 'category' );
    $theCatId = $theCatId->term_id;
   $args = array(
    'post_type' => array( 'post', 'press' ),
    'cat' => $theCatId,
    'posts_per_page' => 2
  );
  $loop = new WP_Query( $args );
?>
<div class="feeds-container mr3 p1">
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a class="col col-lg-6" href="<?php echo get_permalink( get_the_ID() ); ?>" >
      <div class='feed feed__perspective mb1 p2'>
        <div class='feed__perspective__screenshot mb1'>
          <img
            class='feed__perspective__screenshot__img'
            src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
          >
        </div>
        <div class='feed-title h3'>
          <?php echo get_the_title(); ?>
        </div>
        <div class='feed-excerpt mb1'>
          <?php echo get_trim_text(get_the_excerpt());?>
        </div>
        <div>
          - <?php echo get_the_date( 'd M Y' ); ?>
        </div>
      </div>
    </a>
  <?php endwhile; ?>
</div>
<div class="feeds-more p1 mb3">
  <a
    class="feeds-more__link h4 p1"
    href="https://sciencefeedback.co/news-events/"
  >
    More News &amp; Events
  </a>
</div>

</div><!-- / .container -->
          
<!-- Press
<section class="press-show">
  <div class="container">

      <h3 style="font-size: 1.25rem;">Hear what they are saying about us</h3>
    <div class="row">
      <div class="col-4" style="padding-left: 1em; padding-right: 1em">
        <a href="/press/annotation-might-future-fact-checking/" target="_blank"> <img class="press-fig img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ps-Poynter.png"> </a>
      </div>
      <div class="col-4">
        <a href="/press/scientists-get-tool-to-mark-online-climate-science-media-coverage-and-its-not-a-rusty-teaspoon/" target="_blank">   <img class="press-fig img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/the-guardian-logo_grey.png"></a>
      </div>
      <div class="col-4 forbes" style="padding-left: 2em">
        <a href="/press/climate-scientists-launch-brainy-attack-inaccurate-news/" target="_blank"> <img class="press-fig img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ps-Forbes.png"></a>
      </div>
      <div class="col-4">
        <a href="https://sciencefeedback.co/press-coverage/" class="btn btn-primary">More Press</a>
      </div>
    </div>
  </div>
</section>
--> 