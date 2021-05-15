<?php
/**
 * The template for author archive pages.
 * by : ahmed akef
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Newspaper X
 */

get_header(); ?>

<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div class="row author-description">
    <!-- Avatar -->
    <div class="avatar text-center">
        <img src="<?php echo get_avatar_url ($curauth->ID,array('size' => 75))?>" />
    </div>
    <div class="description">
        <h6><?php echo $curauth->nickname; ?></h6>
        <!-- Short Description -->
        <p><?php echo $curauth->user_description; ?></p>
    </div>
    <?php
    /*
    * Newspaper_X_Profile_Fields::echo_social_media();
    * doen't display the correct user as it should be inside loop of posts
    */
    ?> 
</div>

<div class="row">
	<header class="col-xs-12">
        
        <h4>Posts by : </h4>
        <h3 class="page-title"><span><?php echo $curauth->nickname; ?></span></h3>

	</header><!-- .page-header -->
</div>



<div class="row">
    <div id="primary" class="newspaper-x-content newspaper-x-archive-page col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <main id="main" class="site-main" role="main">

            <div class="row">
                <?php if ( have_posts() ) : ?>

                
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="col-md-6">
                        <?php
                        get_template_part( 'template-parts/content', get_post_format() );
                        ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php the_posts_pagination( array(
                'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                'next_text' => '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ) ); ?>
        <?php
        else :
            echo '<div class="row">';
            get_template_part( 'template-parts/content', 'none' );
            echo '</div>';
        endif;
        ?>
        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- #row -->
<?php
get_footer();







