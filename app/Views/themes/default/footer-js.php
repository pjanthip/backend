<script type="text/javascript">
    var baseUrl = "<?= base_url(); ?>";
</script>
<!-- Required Js -->
<?= script_tag('assets/js/plugins/popper.min.js'); ?>
<?= script_tag('assets/js/plugins/simplebar.min.js'); ?>
<?= script_tag('assets/js/plugins/bootstrap.min.js'); ?>
<?= script_tag('assets/js/fonts/custom-font.js'); ?>
<?= script_tag('assets/js/pcoded.js'); ?>
<?= script_tag('assets/js/plugins/feather.min.js'); ?>
<?= script_tag('assets/js/website.js'); ?>

<script type="text/javascript">
    <?php
    if (!session()->has('theme')) {
        session()->set('theme', DARK_LAYOUT);
    ?>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            dark_layout = 'true';
        } else {
            dark_layout = 'false';
        }
        layout_change_default();
        if (dark_layout == 'true') {
            layout_change('dark');
        } else {
            layout_change('light');
        }
        <?php
    } else {
        if (session()->get('theme') != 'default') {
        ?>
            layout_change('<?= session()->get('theme'); ?>');
        <?php
        } else {
            session()->set('theme', 'default');
        ?>
            layout_change_default();
    <?php
        }
    }
    ?>
    var theme_mode = "<?= session()->get('theme'); ?>";
</script>

<!-- 
<?php if (DARK_LAYOUT == 'default') { ?>
<script>
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        dark_layout = 'true';
    } else {
        dark_layout = 'false';
    }
    layout_change_default();
    if (dark_layout == 'true') {
        layout_change('dark');
    } else {
        layout_change('light');
    }
</script>
<?php } ?>
<?php if (DARK_LAYOUT != 'default') {
    if (DARK_LAYOUT == 'true') {
?><script>layout_change('dark');</script><?php
                                                } else {
                                                    ?><script>layout_change('light');</script><?php
                                                }
                                            } ?> -->
<?php if (THEME_CONTRAST == 'true') {
?><script>
        layout_theme_contrast_change('true');
    </script><?php
            } else {
                ?><script>
        layout_theme_contrast_change('false');
    </script><?php
            } ?>
<?php if (BOX_CONTAINER == 'true') {
?><script>
        change_box_container('true');
    </script><?php
            } else {
                ?><script>
        change_box_container('false');
    </script><?php
            } ?>
<?php if (CAPTION_SHOW == 'true') {
?><script>
        layout_caption_change('true');
    </script><?php
            } else {
                ?><script>
        layout_caption_change('false');
    </script><?php
            } ?>
<?php if (RTL_LAYOUT == 'true') {
?><script>
        layout_rtl_change('true');
    </script><?php
            } else {
                ?><script>
        layout_rtl_change('false');
    </script><?php
            } ?>
<?php if (PRESET_THEME != "") {
?><script>
        preset_change('<?= PRESET_THEME ?>');
    </script><?php
            } ?>