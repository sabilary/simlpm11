<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <?php $this->renderPartial('//layouts/_column2/_sidebar'); ?>
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <?php echo $content; ?>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<?php $this->endContent(); ?>