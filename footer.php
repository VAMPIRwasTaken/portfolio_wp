<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4><?php echo get_field('kontakt','user_1')?>
                <? if(!empty(get_field('kontakt','user_1'))) ?></h4>
                <?php echo get_field('dane_1','user_1')?>
                <?php echo get_field('dane_2','user_1')?>
            </div>
            <div class="footer-col">
                <h4><?php echo get_field('social','user_1')?>
                <? if(!empty(get_field('social','user_1'))) ?></h4>
            <div class="social-links">
                <?php echo get_field('sociale_1','user_1')?>
                <?php echo get_field('sociale_2','user_1')?>
            </div>
        </div>
    </div>
    </footer>
	<?php wp_footer();?>
</body>
</html>