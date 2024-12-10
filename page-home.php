<? /* Template Name: Strona główna */?>
<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
    <main>
        <section class="info">
            <article id="first-info">
                <div class="home">
                    <div class="txt">
                        <h1>HOME</h1>      
                        LLLLorem ipsum dolor sit amet consectetur adipisicing elit. Iste perferendis officia totam earum eaque sed ullam aspernatur dolor nostrum saepe.
                    </div>
                    <?php echo wp_get_attachment_image(79,'full')?>
                </div>
            </article>
            <article id="second-info">
                    <div class="about">
                        <div>
                            <div class="txt">
                            <h1>ABOUT</h1>
                            LLLLorem ipsum dolor sit amet consectetur adipisicing elit. Iste perferendis officia totam earum eaque sed ullam aspernatur dolor nostrum saepe.
                            </div>
                        </div>
                        <?php echo wp_get_attachment_image(75,'full')?>
                    </div>
            </article>
        </section>
        <section id="skills-section">
            <h1>My Skills</h1>
            <div class="skills-container">
                <div class="skill-information">
                    <p class="skill-name">HTML5</p>
                    <p> <progress value="100" max="100"></progress></p>
                </div>
                <div class="skill-information">
                    <p class="skill-name">REACT</p>
                    <p> <progress value="0" max="100"></progress></p>
                </div>
                <div class="skill-information">
                    <p class="skill-name">Github</p>
                    <p> <progress value="70" max="100"></progress></p>
                </div>
                <div class="skill-information">
                    <p class="skill-name">CSS</p>
                    <p> <progress value="80" max="100"></progress></p>
                </div>
            </div>
        </section>
        <section id="projects">
            <h1>My Projects</h1>
            <div class="project-container">
                <div class="project">
                    <a href="#">
                        <?php echo wp_get_attachment_image(76,'full')?>
                    </a>
                    <p>Opis projektu1</p>
                </div>
                <div class="project">
                    <a href="#">
                        <?php echo wp_get_attachment_image(77,'full')?>
                    </a>
                    <p>Opis projektu2</p>
                </div>
                <div class="project">
                    <a href="#">
                        <?php echo wp_get_attachment_image(78,'full')?> 
                    </a>
                    <p>Opis projektu3</p>
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