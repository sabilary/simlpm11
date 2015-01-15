<?php
$this->layout='//layouts/example_black';
$this->pageTitle='Log in - '.Yii::app()->name;


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
 */
// Jquery
$cs->registerCoreScript('jquery');
    
// Bootstrap
$cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);
?>

<div class="form-box" id="login-box">
    <div class="header">Sign In</div>
    <form action="../../index.html" method="post">
        <div class="body bg-gray">
            <div class="form-group">
                <input type="text" name="userid" class="form-control" placeholder="User ID"/>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password"/>
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember_me"/> Remember me
            </div>
        </div>
        <div class="footer">
            <button type="submit" class="btn bg-olive btn-block">Sign me in</button>

            <p><a href="#">I forgot my password</a></p>

            <a href="register.html" class="text-center">Register a new membership</a>
        </div>
    </form>

    <div class="margin text-center">
        <span>Sign in using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>
</div>