<?php
 /*
  * Template qui permet d'afficher un article ou un autre type de contenu
  */
get_header(); 

//var_dump(get_field('cover'));?>

<?php while (have_posts()) :
    the_post();
    $img = get_field('cover');
    echo $img;
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1><?php 
            echo  get_the_title(); ?> est le titre d'un type de contenu</h1>
            <h2><?php echo get_field('sous-titre')?></h2>
            <img src="<?php 
            echo $img['url']; ?>">
            <p class="lead">
                <?php
                echo get_the_content();
                ?>
            </p>
        </div>
    </div>
    <?php
endwhile; ?>
<?php get_footer(); ?>
