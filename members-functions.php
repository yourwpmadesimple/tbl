<?php
function user_toggle(){
ob_start();
?>
<?php if (is_user_logged_in()) : ?>
    <?php echo do_shortcode('[memb_logout_link]'); ?> | Hi, <?php echo do_shortcode('[memb_contact fields=FirstName]'); ?>
<?php endif;?>

<span class="avi"><a href="/my-account/"><?php
   $user_id = get_current_user_id();
   echo get_wp_user_avatar($user_id, 'thumbnail');
?></a></span>

<?php
return ob_get_clean();
}
add_shortcode('user-toggle','user_toggle');

function no_menu_access(){
  if (memb_hasAnyTags("1982") || current_user_can('administrator')) { 
?>
<style>
 #tpp-menu{
    display:none !important;
  }
  #onboard-menu{
    display:block !important;
  }
</style>
<?php
  }elseif (memb_hasAnyTags("1178") || memb_hasAnyTags("1170")) { 
?>
<style>
 #tpp-menu{
    display:block !important;
  }
  #onboard-menu{
    display:none !important;
  }
</style>
<?php
  }
}
/*add_action('wp_head','no_menu_access');*/


function hide_posts1(){
?>
<?php if (memb_hasAnyTags("1178")): ?>
<style>
.tpp{
    display:none;
  }  
  .tpp-lite{
    display:block;
  }
</style> 
<?php endif; ?> 
<?php
}
add_action('wp_head','hide_posts1');
add_shortcode('hide_posts','hide_posts1');

function hide_posts2(){
 // Tags 1170, 1172... do not work for the function param below.
?>
<?php if (memb_hasAnyTags("1170")): ?>
<style>
  .tpp{
    display:block;
  }
  .tpp-lite{
    display:none !important;
  }

</style>
<?php endif; ?>
<?php
}
add_action('wp_head','hide_posts2');



/*add_filter( 'vc_gitem_template_attribute_post_image_background_image_css_value', 'fn_check_protected', 10, 2 );*/
function output_test($content, $data){
if(!memb_hasAnyTags("1170") && has_tag(315)){
  return "$content -webkit-filter: grayscale(100%); filter: grayscale(100%);";
}elseif(current_user_can('administrator')){
  return $content;
}else{
  return $content;
}
}
add_filter( 'vc_gitem_template_attribute_post_image_background_image_css_value', 'output_test' );
/*add_shortcode('output_test','output_test');*/

function page_blurb(){
  ob_start();
  echo get_post_meta( get_the_ID(), 'blurb', true ); 
  ob_get_clean();
}
add_shortcode('blurb', 'page_blurb');

include('stress-less-tax-prep.php');
include('tpp-core.php');

/** Blog Posts***/
add_shortcode('blog_posts','blog_posts');
function blog_posts(){
ob_start();
$args = array(
        'post_type' => 'tpp-content',
        'cat' => array('-326,-328,-330,-332,-334,-336,-338'),
        'posts_per_page' => 7

);
$pagination = get_the_posts_pagination( array(
    'mid_size' => 2,
) );

$query = new WP_Query( $args ); 
while( $query->have_posts() ) :
        $query->the_post();
        echo '<div>';
        echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
        echo get_the_post_thumbnail();
        echo '</div>';
endwhile;
?>
<div class="nav-previous alignleft"><?php echo $pagination; ?></div>

<?php
 return ob_get_clean();
}
