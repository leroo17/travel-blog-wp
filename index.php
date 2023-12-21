<?php
    /*
    Template Name: home
    */
?>

<?php get_header(); ?>
<main class="main">
        <div class="container container-main">
        <div class="articles">
            <div class="articles-inner">

            <?php 
                $count = 0;
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                $count++;
                switch ($count) {
                    case '3':
                    ?>
                    <article class="article">
                        <div class="article__content-img">
                            <?php 
                            if( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            else {
                                echo '<img src="'.get_template_directory_uri() . '/assets/img/default.jpg" />';
                            }
                            ?>
                        </div>
                        <div class="article__content">
                            <div class="article__content-text">
                            <h2 class="article__content-text-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="article__content-desc">
                                <p><?php the_author(); ?></p>
                                <p><?php the_time('j F Y'); ?></p>
                            </div>
                            <p><?php the_excerpt(); ?></p>
                            
                            </div>
                            <div class="article__footer">
                            <a class="link-single" href="<?php echo get_the_permalink(); ?>">Читать далее</a>
                            <div class="article__footer-tags"></div>
                            <div class="article__footer-categories">
                                <?php the_tags( $before = '', $sep = null, $after = null ); ?>
                            </div>
                            </div>
                        </div>
                    </article>          
                    <?php    
                    break;
                    default:
                    ?>
                    <article class="article article-small">
                    <div class="article__content-img article__content-img-small">
                    <?php 
                    if( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    else {
                        echo '<img src="'.get_template_directory_uri() . '/assets/img/default.jpg" />';
                    }
                    ?>
                        </div>
                        <div class="article__content article__content-small">
                            <div class="article__content-text article__content-text-small">
                            <h2 class="article__content-text-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="article__content-desc">
                                <p><?php the_author(); ?></p>
                                <p><?php the_time('j F Y'); ?></p>
                            </div>
                            <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="article__footer">
                            <a class="link-single" href="<?php echo get_the_permalink(); ?>">Читать далее</a>

                            <div class="article__footer-tags"></div>
                            <div class="article__footer-categories">
                                <?php the_tags( $before = '', $sep = null, $after = null ); ?>
                            </div>
                            </div>
                        </div>
                    </article>
                    <?php    
                    break;
                }
            ?>
            
            <?php endwhile; else: ?>
                Записей нет.
            <?php endif; ?>
            </div>
            
            <?php the_posts_pagination(); ?>
        </div>
        <?php get_sidebar(); ?>
        </div>
    </main>
<?php get_footer(); ?>