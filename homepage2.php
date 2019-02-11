<?php
/*
Template Name: Homepage 2
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
Health Feedback is a worldwide network of scientists sorting fact from fiction in health and medical media coverage. Our goal is to help readers know which news to trust. </p>
  </div></div>
</div>

<div class="container">

<?php
  $args = array(
    'post_type' => array('evaluation'),
    'posts_per_page' => 3
  );
  $loop = new WP_Query( $args );
?>
<div class="feeds-container">
    <div class="feeds-title h3">Latest Article Reviews</div>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php if( $loop->current_post == 0 && !is_paged() ) : ?>
      <a href="<?php echo get_permalink( get_the_ID() ); ?>" >
        <div class='feed feed__article mb3'>
          <div class='col col-lg-8'>
              <div class='feed__article-first__screenshot' style='padding-left: 0px !important;  padding-right: 0px !important;'>
            <img
              class='feed__article-first__screenshot__img'
              src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
            >
          </div>
              </div>
          <div class="feed__article-first__text col col-lg-4">
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
        </div>
      </a>
    <?php else : ?>
      <a class="col col-lg-6" href="<?php echo get_permalink( get_the_ID() ); ?>" >
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
    <?php endif; ?>
  <?php endwhile; ?>
</div>
<div class="feeds-more mb1 p1">
  <a
    class="feeds-more__link h4 p1"
    href="<?php echo get_site_url(); ?>/feedbacks/"
  >
    More Article Reviews
  </a>
</div>

    </div><!-- / .container -->
        
<div class="container">
<?php
//Extract ID from category name
    $theCatId2 = get_term_by( 'slug', 'featured', 'category' );
    $theCatId2 = $theCatId2->term_id;
  $args = array(
    'post_type' => array('claimreview'),
    'cat' => $theCatId2,
    'posts_per_page' => 2
  );
  $loop = new WP_Query( $args );
?>
<div class="feeds-container feeds-container__claim ">
    <div class="feeds-title h3">Latest Claim Reviews</div>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a href="<?php echo get_permalink( get_the_ID() ); ?>" >
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
          </div>
        </div>
      </div>
    </a>
  <?php endwhile; ?>
</div>
<div class="feeds-more mb1 p1">
  <a
    class="feeds-more__link h4 p1"
    href="<?php echo get_site_url(); ?>/claim-reviews/"
  >
    More Claim Reviews
  </a>
</div>


</div><!-- / .container -->

<section class="scientist-signup">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action">
        <div class="media-left">
          <img alt="" class="sci-fig" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/scientists-logo2.png">
        </div>
        <div class="media-body">
          <h3 style="font-size: 21px;">Scientists, you can help create a better informed society. Become a reviewer today!</h3>
          <p> See <a class="wht" href="/community/">who is already contributing</a>.</p>
          <a href="/for-scientists/" class="btn btn-primary btn-lg">Apply here</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
<div class="feeds-title h3">Insights</div>
<?php
    //Extract ID from category name
    $theCatId = get_term_by( 'slug', 'insight', 'category' );
    $theCatId = $theCatId->term_id;
  $args = array(
    'post_type' => array('post'),
    // 'category_name' => array('insights'),
    'cat' => $theCatId,
    //'cat' => array('-claimreview', '-evaluation'),
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
    href="<?php echo get_site_url(); ?>/insights/"
  >
    More Insights
  </a>
</div>


</div><!-- / .container -->