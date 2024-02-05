    <!-- footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">

                <?php if(is_active_sidebar('footer-1')) : ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php endif; ?>

                <?php if(is_active_sidebar('footer-2')) : ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php endif; ?>

                <?php if(is_active_sidebar('footer-3')) : ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php endif; ?>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>

</html>