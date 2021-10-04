        </main>
        <footer>
            <div class="footer-upper">
                <?php echo get_template_part('parts/social_menu');?>
                <?php wp_nav_menu(array('theme_location' => 'sub_menu', 'container' => 'nav', 'container_class' => 'footer_menu'));?>
            </div>
            <hr />
            <div class="footer-lower">
                <?php the_field('copyright', 'option');?>
            </div>
        </footer>
    </div>
    <?php wp_footer();?>
    </body>
</html>