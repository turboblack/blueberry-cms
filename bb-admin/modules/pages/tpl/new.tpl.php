<?php get_admin_header(); ?>

<?php get_admin_sidebar(); ?>

<div id="dashboard-content-container" class="pure-u-1">
    <div id="dashboard-content">
        <h1><?php echo __('admin.pages.new_title'); ?></h1>

        <?php if(!is_null($message)): ?>
            <?php echo $message; ?>
        <?php endif; ?>

        <form method="post" action="<?php echo bb('current_uri'); ?>" class="pure-form pure-form-aligned">
            <input class="pure-input-1" id="title" name="title" type="text" placeholder="<?php echo __('admin.pages.form_title'); ?>">
            <textarea class="pure-input-2-3" id="content" name="content"></textarea>

            <div class="form-buttons">
                <button type="submit" class="pure-button pure-button-primary">
                    <i class="fa fa-plus"></i>
                    <?php echo __('admin.pages.btn_create'); ?>
                </button>

                <a class="pure-button" href="<?php echo module_uri('pages'); ?>"><i class="fa fa-reply"></i> <?php echo __('admin.pages.btn_back'); ?></a>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src="<?php echo bb('admin_uri') . 'modules/shared/tpl/js/placeholder-polyfill.js'; ?>"></script>
<script type="text/javascript" src="<?php echo bb('admin_uri') . 'modules/pages/vendor/ckeditor/ckeditor.js'; ?>"></script>
<script type="text/javascript" src="<?php echo bb('admin_uri') . 'modules/pages/vendor/ckfinder/ckfinder.js'; ?>"></script>
<script type="text/javascript">
(function () {
    "use strict";

    var editor = CKEDITOR.replace(document.getElementById('content'), { 'height': '400px' });
    CKFinder.setupCKEditor(editor, <?php echo "'" . bb('admin_uri') . 'modules/pages/vendor/ckfinder/' . "'"; ?>);
} ());
</script>

<?php get_admin_footer(); ?>
