<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="wpsd-wrap-all" class="wrap wpsd-recaptcha-settings">

    <div class="settings-banner">
        <h2><i class="fa-solid fa-robot"></i>&nbsp;<?php _e('Google reCaptcha Settings', 'wp-stripe-donation'); ?></h2>
    </div>

    <div class="wpsd-wrap">

        <div class="wpsd_personal_wrap wpsd_personal_help" style="width: 75%; float: left;">

            <h4>Please Upgrade to Professional!</h4>

        </div>

        <?php $this->wpsd_admin_sidebar(); ?>

    </div>

</div>