<?php

/*****************************************
******************************************
******************************************
******************************************
Pocket Your Profit Content
******************************************
******************************************
******************************************
*****************************************/
add_shortcode('pocket_your_profit_content','pocket_your_profit_content');
function pocket_your_profit_content(){
ob_start();
$i = 0;  
$PocketYourProfitContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => 343,
    'order'   => 'ASC'
);
$PocketYourProfitContent = new WP_Query( $PocketYourProfitContentArgs );
echo '<div id="divWrap">';
while( $PocketYourProfitContent->have_posts() ) :
        $PocketYourProfitContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}