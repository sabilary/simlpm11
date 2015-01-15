<?php
$this->pageTitle='Morris.js Charts - '.Yii::app()->name;


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
 * css/morris/morris.css
 * css/AdminLTE.css
 */
// Bootstrap
$bootstrap     = $twidgets.'bootstrap/3.3.1/';
$bootstrap_css = $bootstrap.'css/';
$bootstrap_js  = $bootstrap.'js/';
$cs->registerCssFile($bootstrap_css.'bootstrap.css');
    
// Morris charts
$cs->registerCssFile($tcss.'morris/morris.css');
    
// AdminLTE CSS
$cs->registerCssFile($tcss.'AdminLTE-fonts.css');
$cs->registerCssFile($tcss.'AdminLTE.css');


/*
 * JS
 * =================================================================
 * js/jquery/2.1.3/jquery.min.js
 * widgets/bootstrap/3.3.1/js/bootstrap.min.js
 * widgets/raphael/2.1.2/raphael-min.js
 * js/plugins/morris/morris.min.js
 * js/AdminLTE/app.js
 * js/AdminLTE/demo.js
 * page script
 */
// Jquery
$cs->registerCoreScript('jquery');
    
// Bootstrap
$cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);
    
// Raphael, for Morris
$raphael = $twidgets.'raphael/2.1.2/';
$cs->registerScriptFile($raphael.'raphael-min.js', CClientScript::POS_END);

// Morris.js charts
$cs->registerScriptFile($tplugins.'morris/morris.min.js', CClientScript::POS_END);
    
// AdminLTE JS
$cs->registerScriptFile($tadmin.'app.js', CClientScript::POS_END);
$cs->registerScriptFile($tadmin.'demo.js', CClientScript::POS_END);

// page script
$cs->registerScriptFile($tcostum.'charts_morris.js', CClientScript::POS_END);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Morris Charts
        <small>Preview sample</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">Morris</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Area Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="revenue-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- DONUT CHART -->
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Donut Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col (LEFT) -->
        <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Line Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="line-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- BAR CHART -->
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Bar Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col (RIGHT) -->
    </div><!-- /.row -->

</section><!-- /.content -->