<?php

/*****************************************
******************************************
******************************************
******************************************
Core Module 1
******************************************
******************************************
******************************************
*****************************************/
function module_1() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_1','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_1'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_1','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_1"].'_content', 'module_1' );
}
/*****************************************
******************************************
******************************************
******************************************
Core Module 2
******************************************
******************************************
******************************************
*****************************************/
function module_2() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_2','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_2'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_2','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_2"].'_content', 'module_2' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 3
******************************************
******************************************
******************************************
*****************************************/
function module_3() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_3','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_3'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_3','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_3"].'_content', 'module_3' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 4
******************************************
******************************************
******************************************
*****************************************/
function module_4() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_4','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_4'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_4','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_4"].'_content', 'module_4' );
}
/*****************************************
******************************************
******************************************
******************************************
Core Module 5
******************************************
******************************************
******************************************
*****************************************/
function module_5() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_5','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_5'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_5','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_5"].'_content', 'module_5' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 6
******************************************
******************************************
******************************************
*****************************************/
function module_6() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_6','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_6'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_6','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_6"].'_content', 'module_6' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 7
******************************************
******************************************
******************************************
*****************************************/
function module_7() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_7','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_7'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_7','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_7"].'_content', 'module_7' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 8
******************************************
******************************************
******************************************
*****************************************/
function module_8() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_8','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_8'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_8','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_8"].'_content', 'module_8' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 9
******************************************
******************************************
******************************************
*****************************************/
function module_9() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_9','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_9'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_9','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_9"].'_content', 'module_9' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 10
******************************************
******************************************
******************************************
*****************************************/
function module_10() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_10','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_10'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_10','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_10"].'_content', 'module_10' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 11
******************************************
******************************************
******************************************
*****************************************/
function module_11() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_11','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_11'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_11','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_11"].'_content', 'module_11' );
}
/*****************************************
******************************************
******************************************
******************************************
Core Module 12
******************************************
******************************************
******************************************
*****************************************/
function module_12() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_12','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_12'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_12','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_12"].'_content', 'module_12' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 13
******************************************
******************************************
******************************************
*****************************************/
function module_13() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_13','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_13'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_13','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_13"].'_content', 'module_13' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 14
******************************************
******************************************
******************************************
*****************************************/
function module_14() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_14','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_14'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_14','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_14"].'_content', 'module_14' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 15
******************************************
******************************************
******************************************
*****************************************/
function module_15() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_15','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_15'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_15','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_15"].'_content', 'module_15' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 16
******************************************
******************************************
******************************************
*****************************************/
function module_16() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_16','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_16'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_16','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_16"].'_content', 'module_16' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 17
******************************************
******************************************
******************************************
*****************************************/
function module_17() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_17','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_17'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_17','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_17"].'_content', 'module_17' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 18
******************************************
******************************************
******************************************
*****************************************/
function module_18() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_18','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_18'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_18','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_18"].'_content', 'module_18' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 19
******************************************
******************************************
******************************************
*****************************************/
function module_19() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_19','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_19'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_19','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_19"].'_content', 'module_19' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 20
******************************************
******************************************
******************************************
*****************************************/
function module_20() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_20','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_20'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_20','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_20"].'_content', 'module_20' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 21
******************************************
******************************************
******************************************
*****************************************/
function module_21() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_21','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_21'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_21','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_21"].'_content', 'module_21' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 22
******************************************
******************************************
******************************************
*****************************************/
function module_22() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_22','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_22'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_22','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_22"].'_content', 'module_22' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 23
******************************************
******************************************
******************************************
*****************************************/
function module_23() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_23','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_23'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_23','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_23"].'_content', 'module_23' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 24
******************************************
******************************************
******************************************
*****************************************/
function module_24() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_24','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_24'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_24','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_24"].'_content', 'module_24' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 25
******************************************
******************************************
******************************************
*****************************************/
function module_25() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_25','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_25'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_25','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_25"].'_content', 'module_25' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 26
******************************************
******************************************
******************************************
*****************************************/
function module_26() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_26','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_26'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_26','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_26"].'_content', 'module_26' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 27
******************************************
******************************************
******************************************
*****************************************/
function module_27() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_27','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_27'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_27','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_27"].'_content', 'module_27' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 28
******************************************
******************************************
******************************************
*****************************************/
function module_28() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_28','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_28'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_28','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_28"].'_content', 'module_28' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 29
******************************************
******************************************
******************************************
*****************************************/
function module_29() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_29','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_29'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_29','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_29"].'_content', 'module_29' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 30
******************************************
******************************************
******************************************
*****************************************/
function module_30() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_30','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_30'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_30','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_30"].'_content', 'module_30' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 31
******************************************
******************************************
******************************************
*****************************************/
function module_31() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_31','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_31'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_31','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_31"].'_content', 'module_31' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 32
******************************************
******************************************
******************************************
*****************************************/
function module_32() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_32','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_32'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_32','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_32"].'_content', 'module_32' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 33
******************************************
******************************************
******************************************
*****************************************/
function module_33() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_33','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_33'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_33','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_33"].'_content', 'module_33' );
}

/*****************************************
******************************************
******************************************
******************************************
Core Module 34
******************************************
******************************************
******************************************
*****************************************/
function module_34() {
ob_start();
$i = 0;  
$coreContentArgs = array(
    'post_type' => 'tpp-content',
    'cat'       => array(),
    'order'   => 'ASC'
);
// display a sub field value
$rows = get_field('module_34','option');

foreach($rows as $row){
$coreContentArgs['cat'][] = $row['category_34'] ;
}
$coreContent = new WP_Query( $coreContentArgs );
echo '<div id="divWrap">';
while( $coreContent->have_posts() ) :
        $coreContent->the_post();
        ?>
          <div id='div1<?php echo $i++; ?>'><?php printf( '%1$s', the_content());  ?></div>
        <?php
      endwhile;
wp_reset_postdata();
echo '</div>';
return ob_get_clean();
}
//// Shortcode Ouput
$modules = get_field('module_34','option');
foreach( $modules as $module ) {
    add_shortcode( 'core_mod_'.$module["shortcode_34"].'_content', 'module_34' );
}
 

  
