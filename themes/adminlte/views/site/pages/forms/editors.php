<?php
$this->pageTitle='Text Editors - '.Yii::app()->name;


/*
 * VARIABLES
 * =================================================================
 */
$cs       = Yii::app()->clientScript;
$themeUrl = Yii::app()->theme->baseUrl.'/';
$twidgets = $themeUrl.'widgets/';
$tcss     = $themeUrl.'css/';
$tjs      = $themeUrl.'js/';
$tplugins = $tjs.'plugins/';
$tadmin   = $tjs.'AdminLTE/';
$tcostum  = $tjs.'costum/';


/*
 * CSS
 * =================================================================
 * widgets/bootstrap/3.3.1/css/bootstrap.min.css
 * widgets/font-awesome/4.2.0/css/font-awesome.min.css
 * widgets/ionicons/2.0.0/css/ionicons.min.css
 * css/AdminLTE.css
 * css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css
 */
// Bootstrap
$bootstrap     = $twidgets.'bootstrap/3.3.1/';
$bootstrap_css = $bootstrap.'css/';
$bootstrap_js  = $bootstrap.'js/';
$cs->registerCssFile($bootstrap_css.'bootstrap.css');
    
// AdminLTE CSS
$cs->registerCssFile($tcss.'AdminLTE-fonts.css');
$cs->registerCssFile($tcss.'AdminLTE.css');

// Bootstrap WYSIHTML5
$cs->registerCssFile($tcss.'bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');


/*
 * JS
 * =================================================================
 * js/jquery/2.1.3/jquery.min.js
 * widgets/bootstrap/3.3.1/js/bootstrap.min.js
 * js/AdminLTE/app.js
 * js/AdminLTE/demo.js
 * widgets/ckeditor/4.4.4/standard/ckeditor.js
 * js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js
 * page script
 */
// Jquery
$cs->registerCoreScript('jquery');
    
// Bootstrap
$cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);
    
// AdminLTE JS
$cs->registerScriptFile($tadmin.'app.js', CClientScript::POS_END);
$cs->registerScriptFile($tadmin.'demo.js', CClientScript::POS_END);

// CK Editor
$ckeditor = $twidgets.'ckeditor/4.4.4/standard/';
$cs->registerScriptFile($ckeditor.'ckeditor.js', CClientScript::POS_END);

// Bootstrap WYSIHTML5
$cs->registerScriptFile($tplugins.'bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', CClientScript::POS_END);

// page script
Yii::app()->clientScript->registerScript('ckeditor-page', "
    $(function() {
        // Replace the <textarea id=\"editor1\"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(\".textarea\").wysihtml5();
    });
");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Text Editors
        <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class='row'>
        <div class='col-md-12'>
            <div class='box box-info'>
                <div class='box-header'>
                    <h3 class='box-title'>CK Editor <small>Advanced and full of features</small></h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                    <form>
                        <textarea id="editor1" name="editor1" rows="10" cols="80">
                            This is my textarea to be replaced with CKEditor.
                        </textarea>
                    </form>
                </div>
            </div><!-- /.box -->

            <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>Bootstrap WYSIHTML5 <small>Simple and fast</small></h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                    <form>
                        <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- ./row -->



</section><!-- /.content -->