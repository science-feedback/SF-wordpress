<?php
/*
Template Name: Homepage RSS
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

<div class="container"> <!-- Article Reviews Climate-->
    <div class="feeds-title h3">Latest Article Reviews – CLIMATE</div>     
    <?php // Get RSS Feed(s)
    include_once( ABSPATH . WPINC . '/feed.php' );
    $rss = fetch_feed( 'http://healthfeedback.org/feed/?post_type=evaluation' ); 
    if ( ! is_wp_error( $rss ) ) : 
        $maxitems = $rss->get_item_quantity( 2 ); 
        $rss_items = $rss->get_items( 0, $maxitems );
    endif;
    ?>
    <div class="feeds-container mr3 p1">
      <?php foreach ( $rss_items as $item ) : ?>
        <?php require_once('lib/simplehtmldom_1_8_1/simple_html_dom.php');
            // from https://www.electrictoolbox.com/extract-images-web-page-php/
            $html = file_get_html($item->get_permalink());
        ?>
        <?php $myi = 0;?>
        <?php foreach ( $html->find('img') as $element ) : ?>                
            <?php if ($myi == 1): ?>
                 <?php $imgurl = $element->src; ?>
             <?php endif; ?>
             <?php $myi++;?>
         <?php endforeach; ?>
        <a class="col col-lg-6" href="<?php echo esc_url( $item->get_permalink() ); ?>" >
          <div class='feed feed__perspective mb1 p2'>
            <div class='feed__perspective__screenshot mb1'>
              <img class='feed__perspective__screenshot__img' src="<?php echo esc_url( $imgurl ); ?>" >
            </div>
            <div class='feed-title h3'>
              <?php echo esc_html( $item->get_title() ); ?> 
            </div>
            <div class='feed-excerpt mb1'>
              <?php echo get_trim_text( $item->get_description());?> 
            </div>
            <div> - <?php echo  $item->get_date('d M Y') ; ?> </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="feeds-more p1 mb1">
      <a class="feeds-more__link h4 p1" href="https://climatefeedback.org/feedbacks/">
        More Climate Article Reviews
      </a>
    </div>
</div><!-- / container Article Reviews Climate-->

<div class="container"> <!-- Insight Health-->
    <div class="feeds-title h3">Latest Article Reviews – HEALTH</div>     
    <?php // Get RSS Feed(s)
    include_once( ABSPATH . WPINC . '/feed.php' );
    $rss = fetch_feed( 'http://healthfeedback.org/feed/?post_type=evaluation' ); 
    if ( ! is_wp_error( $rss ) ) : 
        $maxitems = $rss->get_item_quantity( 2 ); 
        $rss_items = $rss->get_items( 0, $maxitems );
    endif;
    ?>
    <div class="feeds-container mr3 p1">
      <?php foreach ( $rss_items as $item ) : ?>
        <?php require_once('lib/simplehtmldom_1_8_1/simple_html_dom.php');
            // from https://www.electrictoolbox.com/extract-images-web-page-php/
            $html = file_get_html($item->get_permalink());
        ?>
        <?php $myi = 0;?>
        <?php foreach ( $html->find('img') as $element ) : ?>                
            <?php if ($myi == 1): ?>
                 <?php $imgurl = $element->src; ?>
             <?php endif; ?>
             <?php $myi++;?>
         <?php endforeach; ?>
        <a class="col col-lg-6" href="<?php echo esc_url( $item->get_permalink() ); ?>" >
          <div class='feed feed__perspective mb1 p2'>
            <div class='feed__perspective__screenshot mb1'>
              <img class='feed__perspective__screenshot__img' src="<?php echo esc_url( $imgurl ); ?>" >
            </div>
            <div class='feed-title h3'>
              <?php echo esc_html( $item->get_title() ); ?> 
            </div>
            <div class='feed-excerpt mb1'>
              <?php echo get_trim_text( $item->get_description());?> 
            </div>
            <div> - <?php echo  $item->get_date('d M Y') ; ?> </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="feeds-more p1 mb1">
      <a class="feeds-more__link h4 p1" href="http://healthfeedback.org/feedbacks/">
        More Health Article Reviews
      </a>
    </div>
</div><!-- / container Article Reviews Health-->        
        
<div class="container"> <!-- Insight Climate-->
    <div class="feeds-title h3">Latest Insight articles – CLIMATE</div>     
    <?php // Get RSS Feed(s)
    include_once( ABSPATH . WPINC . '/feed.php' );
    $rss = fetch_feed( 'http://healthfeedback.org/feed/?post_type=insight' ); 
    if ( ! is_wp_error( $rss ) ) : 
        $maxitems = $rss->get_item_quantity( 2 ); 
        $rss_items = $rss->get_items( 0, $maxitems );
    endif;
    ?>
    <div class="feeds-container mr3 p1">
      <?php foreach ( $rss_items as $item ) : ?>
        <?php require_once('lib/simplehtmldom_1_8_1/simple_html_dom.php');
            // from https://www.electrictoolbox.com/extract-images-web-page-php/
            $html = file_get_html($item->get_permalink());
        ?>
        <?php $myi = 0;?>
        <?php foreach ( $html->find('img') as $element ) : ?>                
            <?php if ($myi == 1): ?>
                 <?php $imgurl = $element->src; ?>
             <?php endif; ?>
             <?php $myi++;?>
         <?php endforeach; ?>
        <a class="col col-lg-6" href="<?php echo esc_url( $item->get_permalink() ); ?>" >
          <div class='feed feed__perspective mb1 p2'>
            <div class='feed__perspective__screenshot mb1'>
              <img class='feed__perspective__screenshot__img' src="<?php echo esc_url( $imgurl ); ?>" >
            </div>
            <div class='feed-title h3'>
              <?php echo esc_html( $item->get_title() ); ?> 
            </div>
            <div class='feed-excerpt mb1'>
              <?php echo get_trim_text( $item->get_description());?> 
            </div>
            <div> - <?php echo  $item->get_date('d M Y') ; ?> </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="feeds-more p1 mb1">
      <a class="feeds-more__link h4 p1" href="https://climatefeedback.org/insights/">
        More Climate Insights
      </a>
    </div>
</div><!-- / container Insight Climate-->

<div class="container"> <!-- Insight Health-->
    <div class="feeds-title h3">Latest Insight articles – HEALTH</div>     
    <?php // Get RSS Feed(s)
    include_once( ABSPATH . WPINC . '/feed.php' );
    $rss = fetch_feed( 'http://healthfeedback.org/feed/?post_type=insight' ); 
    if ( ! is_wp_error( $rss ) ) : 
        $maxitems = $rss->get_item_quantity( 2 ); 
        $rss_items = $rss->get_items( 0, $maxitems );
    endif;
    ?>
    <div class="feeds-container mr3 p1">
      <?php foreach ( $rss_items as $item ) : ?>
        <?php require_once('lib/simplehtmldom_1_8_1/simple_html_dom.php');
            // from https://www.electrictoolbox.com/extract-images-web-page-php/
            $html = file_get_html($item->get_permalink());
        ?>
        <?php $myi = 0;?>
        <?php foreach ( $html->find('img') as $element ) : ?>                
            <?php if ($myi == 1): ?>
                 <?php $imgurl = $element->src; ?>
             <?php endif; ?>
             <?php $myi++;?>
         <?php endforeach; ?>
        <a class="col col-lg-6" href="<?php echo esc_url( $item->get_permalink() ); ?>" >
          <div class='feed feed__perspective mb1 p2'>
            <div class='feed__perspective__screenshot mb1'>
              <img class='feed__perspective__screenshot__img' src="<?php echo esc_url( $imgurl ); ?>" >
            </div>
            <div class='feed-title h3'>
              <?php echo esc_html( $item->get_title() ); ?> 
            </div>
            <div class='feed-excerpt mb1'>
              <?php echo get_trim_text( $item->get_description());?> 
            </div>
            <div> - <?php echo  $item->get_date('d M Y') ; ?> </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="feeds-more p1 mb1">
      <a class="feeds-more__link h4 p1" href="http://healthfeedback.org/insights/">
        More Health Insights
      </a>
    </div>
</div><!-- / container Insight Health-->        
        
<div class="container"> <!-- Claim Reviews Climate-->
    <div class="feeds-title h3">Latest Claim Reviews – CLIMATE</div>     
    <?php // Get RSS Feed(s)
    include_once( ABSPATH . WPINC . '/feed.php' );
    $rss = fetch_feed( 'http://healthfeedback.org/feed/?post_type=claimreview' ); 
    if ( ! is_wp_error( $rss ) ) : 
        $maxitems = $rss->get_item_quantity( 2 ); 
        $rss_items = $rss->get_items( 0, $maxitems );
    endif;
    ?>
    <div class="feeds-container feeds-container__claim ">
      <?php foreach ( $rss_items as $item ) : ?>
        <?php require_once('lib/simplehtmldom_1_8_1/simple_html_dom.php');
            // from https://www.electrictoolbox.com/extract-images-web-page-php/
            $html = file_get_html($item->get_permalink());
        ?>
        <?php $myi = 0;?>
        <?php foreach ( $html->find('img') as $element ) : ?>                
            <?php if ($myi == 1): ?>
                 <?php $imgurl = $element->src; ?>
             <?php endif; ?>
             <?php if ($myi == 2): ?>
                 <?php $imgurlv = $element->src; ?>
             <?php endif; ?>
             <?php $myi++;?>
         <?php endforeach; ?>
<?php foreach($html->find('span.fact-check-card__details__text') as $e)
    $authout = $e->innertext ; ?>
<?php foreach($html->find('span.claimshort') as $f)
    $claim = $f->innertext ; ?>        
        
        
        <a href="<?php echo $item->get_permalink(); ?>" >
          <div class="feed feed__claim col col-lg-6 mb1">
            <div class="feed__claim__container relative">
            <div class='feed-title h3'>
              <?php echo esc_html( $item->get_title() ); ?> 
            </div>
              <div class="feed__claim__container__illustration col col-4">
                <div class="feed__claim__container__illustration__screenshot">
                  <img class="feed__claim__container__illustration__screenshot__img" src="<?php echo esc_url( $imgurl ); ?>" >
                </div>
              </div>
              <div class="feed__claim__container__content col col-8">
                <div class="feed-excerpt feed__claim__container__content__text mb1">
                  "<?php echo  $claim ; ?>"
                </div>
                  <img class="feed__claim__container__content__verdict__img mb1"
                  src="<?php echo esc_url( $imgurlv ); ?>">
                <div> <?php echo  $authout ; ?> </div>
              </div>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="feeds-more mb1 p1">
      <a class="feeds-more__link h4 p1" href="https://climatefeedback.org/claim-reviews/">
        More Climate Claim Reviews
      </a>
    </div>
</div><!-- / container Claim Reviews Climate-->

<div class="container"> <!-- Insight Health-->
    <div class="feeds-title h3">Latest Claim Reviews – HEALTH</div>     
    <?php // Get RSS Feed(s)
    include_once( ABSPATH . WPINC . '/feed.php' );
    $rss = fetch_feed( 'http://healthfeedback.org/feed/?post_type=claimreview' ); 
    if ( ! is_wp_error( $rss ) ) : 
        $maxitems = $rss->get_item_quantity( 2 ); 
        $rss_items = $rss->get_items( 0, $maxitems );
    endif;
    ?>
    
    <div class="feeds-container feeds-container__claim ">
      <?php foreach ( $rss_items as $item ) : ?>
        <?php require_once('lib/simplehtmldom_1_8_1/simple_html_dom.php');
            // from https://www.electrictoolbox.com/extract-images-web-page-php/
            $html = file_get_html($item->get_permalink());
        ?>
        <?php $myi = 0;?>
        <?php foreach ( $html->find('img') as $element ) : ?>                
            <?php if ($myi == 1): ?>
                 <?php $imgurl = $element->src; ?>
             <?php endif; ?>
             <?php if ($myi == 2): ?>
                 <?php $imgurlv = $element->src; ?>
             <?php endif; ?>
             <?php $myi++;?>
         <?php endforeach; ?>
         <?php foreach ($html->find('div.claimshort') as $ff) {
             $claim = $ff->innertext ;
          } ?> 
          <?php foreach ($html->find('span.fact-check-card__details__text') as $e) {
                $authout = $e->innertext ; } ?>            

          <div class="feed feed__claim col col-lg-6 mb1">
            <div class="feed__claim__container relative">
            <div class='feed-title h3'>
                <a href="<?php echo $item->get_permalink(); ?>" >
                  <?php echo esc_html( $item->get_title() ); ?> 
                </a>
            </div>
              <div class="feed__claim__container__illustration col col-4">
                <div class="feed__claim__container__illustration__screenshot">
                  <img class="feed__claim__container__illustration__screenshot__img" src="<?php echo esc_url( $imgurl ); ?>" >
                </div>
              </div>
              <div class="feed__claim__container__content col col-8">
                <div class="feed-excerpt feed__claim__container__content__text mb1">
                    <?php echo  $claim ; ?>
                </div>
                  <img class="feed__claim__container__content__verdict__img mb1"
                  src="<?php echo esc_url( $imgurlv ); ?>">
                <div> 
                    <?php echo  $authout ; ?> </div>
              </div>
            </div>
          </div>
        
      <?php endforeach; ?>
    </div>
    <div class="feeds-more mb3 p1">
      <a class="feeds-more__link h4 p1" href="http://healthfeedback.org/claim-reviews/">
        More Health Claim Reviews
      </a>
    </div>
</div><!-- / container Claim Reviews Health-->        
        