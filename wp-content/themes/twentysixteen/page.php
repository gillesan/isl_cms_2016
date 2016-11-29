<?php
get_header();
?>

<?php

/*$args = array('post_type' => array('formation'),
    'posts_per_page' => '5',
);

$query = new WP_Query($args);


while ($query->have_posts()) {
    
    $query->the_post();
    echo $post->post_title." ". $post->post_ ."<br/>";
}*/

while (have_posts()) {
    
  the_post();
  echo $post->post_title;
  

}


wp_reset_postdata();    

?>


<?php get_footer(); ?>
