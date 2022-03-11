<!-- Footer -->
<footer class="mt-5 mb-5 pt-5">
    <div class="container">
        <div class="row">

            <?php if (is_active_sidebar('footer1')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('footer1'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer2')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('footer2'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer3')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('footer3'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer4')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('footer4'); ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="row mt-3">
            <div class="col-lg-12 credits text-center">
                <p>
                    © 2019 <?php echo get_bloginfo('name'); ?> &nbsp;|&nbsp; <?php echo get_bloginfo('description'); ?> &nbsp;|&nbsp;
                    <a href="<?php echo esc_url(home_url('/')); ?>privacy-policy/">Privacy Policy</a> &nbsp;|&nbsp; <a href="mailto:<?php echo get_bloginfo('admin_email'); ?>" title="<?php echo get_bloginfo('name'); ?>"><?php echo get_bloginfo('admin_email'); ?></a>
                </p>
            </div>

            <div class="col-12 text-center">
                Realizzato da <a href="http://albydev.net" target="_blank" title="Alby DEV">Alby DEV</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>