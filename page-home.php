<? /* Template Name: Strona główna */?>
<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
    <main>
        <section class="info">
            <article id="first-info">
                <div class="home">
                    <div class="txt">
                        <h1><p><?php echo get_field('home_text')?>
                        <? if(!empty(get_field('home_text'))) ?></p></h1>      
                            <h1><?php echo get_field('Home')?></h1>
                            <? if(!empty(get_field('Home'))) ?>
                    </div>
                    <?php echo wp_get_attachment_image (get_field ('obok_domku'),'full')?>
                </div>
            </article>
            <article id="second-info">
                    <div class="about">
                        <div>
                            <div class="txt">
                                <h3><p><?php echo get_field('home_text_2')?>
                                <? if(!empty(get_field('home_text_2'))) ?></p></h3> 
                                    <h3><?php echo get_field('About')?></h3>
                                    <? if(!empty(get_field('About'))) ?>
                            </div>
                        </div>
                        <?php echo wp_get_attachment_image (get_field ('obok_ebolt'),'full')?>
                    </div>
            </article>
        </section>
        <section id="skills-section">
            <h1><?php echo get_field('skills')?>
            <? if(!empty(get_field('skills'))) ?></h1>
            <div class="skills-container">
                <div class="skill-information">
                    <p class="skill-name"><?php the_field('skill_name_1'); ?></p>
                    <p><progress value="<?php the_field('skill_value_1'); ?>" max="100"></progress></p>
                </div>
                <div class="skill-information">
                    <p class="skill-name"><?php the_field('skill_name_2'); ?></p>
                    <p><progress value="<?php the_field('skill_value_2'); ?>" max="100"></progress></p>
                </div>
                <div class="skill-information">
                    <p class="skill-name"><?php the_field('skill_name_3'); ?></p>
                    <p><progress value="<?php the_field('skill_value_3'); ?>" max="100"></progress></p>
                </div>
                <div class="skill-information">
                    <p class="skill-name"><?php the_field('skill_name_4'); ?></p>
                    <p><progress value="<?php the_field('skill_value_4'); ?>" max="100"></progress></p>
                </div>
            </div>
        </section>
        <section id="projects">
                <h1><?php echo get_field('moje_projekty')?>
                <? if(!empty(get_field('moje_projekty'))) ?></h1>
            <div class="project-container">
                <div class="project">
                    <a href="#">
                        <?php echo wp_get_attachment_image (get_field ('projekt_1'),'full')?>
                    </a>
                    <p><?php echo get_field('opis_projektu_1')?>
                    <? if(!empty(get_field('opis_projektu_1'))) ?></p>
                </div>
                <div class="project">
                    <a href="#">
                        <?php echo wp_get_attachment_image (get_field ('projekt_2'),'full')?>
                    </a>
                    <p><?php echo get_field('opis_projektu_2')?>
                    <? if(!empty(get_field('opis_projektu_2'))) ?></p>
                </div>
                <div class="project">
                    <a href="#">
                    <?php echo wp_get_attachment_image (get_field ('projekt_3'),'full')?>
                    </a>
                    <p><?php echo get_field('opis_projektu_3')?>
                    <? if(!empty(get_field('opis_projektu_3'))) ?></p>
                </div>
                <!-- <div class="project">
                    <p>Więcej o naszych projektach</p>
                    <iframe width="720" height="480" auto src="https://www.youtube.com/embed/UF8uR6Z6KLc" title="Nasze pozostałe projekty"></iframe>
                </div> -->
            </div>
        </section>
    </main>
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>