<?php
$this->pageTitle='Flot Charts - '.Yii::app()->name;


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
 * js/plugins/flot/jquery.flot.min.js
 * js/plugins/flot/jquery.flot.resize.min.js
 * js/plugins/flot/jquery.flot.pie.min.js
 * js/plugins/flot/jquery.flot.categories.min.js
 * page script
 */
// Jquery
$cs->registerCoreScript('jquery');
    
// Bootstrap
$cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);
    
// AdminLTE JS
$cs->registerScriptFile($tadmin.'app.js', CClientScript::POS_END);
$cs->registerScriptFile($tadmin.'demo.js', CClientScript::POS_END);

// FLOT CHARTS
$cs->registerScriptFile($tplugins.'flot/jquery.flot.min.js', CClientScript::POS_END);

// FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized
$cs->registerScriptFile($tplugins.'flot/jquery.flot.resize.min.js', CClientScript::POS_END);

// FLOT PIE PLUGIN - also used to draw donut charts
$cs->registerScriptFile($tplugins.'flot/jquery.flot.pie.min.js', CClientScript::POS_END);

// FLOT CATEGORIES PLUGIN - Used to draw bar charts
$cs->registerScriptFile($tplugins.'flot/jquery.flot.categories.min.js', CClientScript::POS_END);

// page script
$cs->registerScriptFile($tcostum.'charts_flot.js', CClientScript::POS_END);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Flot Charts
        <small>preview sample</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- interactive chart -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Interactive Area Chart</h3>
                    <div class="box-tools pull-right">
                        Real time
                        <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                            <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>
                            <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div id="interactive" style="height: 300px;"></div>
                </div><!-- /.box-body-->
            </div><!-- /.box -->

        </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <!-- Line chart -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Line Chart</h3>
                </div>
                <div class="box-body">
                    <div id="line-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
            </div><!-- /.box -->

            <!-- Area chart -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Full Width Area Chart</h3>
                </div>
                <div class="box-body">
                    <div id="area-chart" style="height: 338px;" class="full-width-chart"></div>
                </div><!-- /.box-body-->
            </div><!-- /.box -->

        </div><!-- /.col -->

        <div class="col-md-6">
            <!-- Bar chart -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Bar Chart</h3>
                </div>
                <div class="box-body">
                    <div id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
            </div><!-- /.box -->

            <!-- Donut chart -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Donut Chart</h3>
                </div>
                <div class="box-body">
                    <div id="donut-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->