<?php
$this->pageTitle='404 Page not found - '.Yii::app()->name;


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
 */
// Bootstrap
$bootstrap     = $twidgets.'bootstrap/3.3.1/';
$bootstrap_css = $bootstrap.'css/';
$bootstrap_js  = $bootstrap.'js/';
$cs->registerCssFile($bootstrap_css.'bootstrap.css');
    
// AdminLTE CSS
$cs->registerCssFile($tcss.'AdminLTE-fonts.css');
$cs->registerCssFile($tcss.'AdminLTE.css');


/*
 * JS
 * =================================================================
 * js/jquery/2.1.3/jquery.min.js
 * widgets/bootstrap/3.3.1/js/bootstrap.min.js
 * js/AdminLTE/app.js
 * js/AdminLTE/demo.js
 */
// Jquery
$cs->registerCoreScript('jquery');
    
// Bootstrap
$cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);
    
// AdminLTE JS
$cs->registerScriptFile($tadmin.'app.js', CClientScript::POS_END);
$cs->registerScriptFile($tadmin.'demo.js', CClientScript::POS_END);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        404 Error Page
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">404 error</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="error-page">
        <h2 class="headline text-info"> 404</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
            <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href='../../index.html'>return to dashboard</a> or try using the search form.
            </p>
            <form class='search-form'>
                <div class='input-group'>
                    <input type="text" name="search" class='form-control' placeholder="Search"/>
                    <div class="input-group-btn">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div><!-- /.input-group -->
            </form>
        </div><!-- /.error-content -->
    </div><!-- /.error-page -->

</section><!-- /.content -->