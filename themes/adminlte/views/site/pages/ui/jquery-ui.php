<?php
$this->pageTitle='jQuery UI - '.Yii::app()->name;


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
 * css/jQueryUI/jquery-ui-1.10.3.custom.cs
 * css/AdminLTE.css
 */
// Bootstrap
$bootstrap     = $twidgets.'bootstrap/3.3.1/';
$bootstrap_css = $bootstrap.'css/';
$bootstrap_js  = $bootstrap.'js/';
$cs->registerCssFile($bootstrap_css.'bootstrap.css');
    
// Jquery-UI
$cs->registerCssFile($cs->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');
    
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
 * Page specific script
 */
// Jquery
$cs->registerCoreScript('jquery');
    
// Bootstrap
$cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);
    
// Jquery-UI
$cs->registerCoreScript('jquery.ui');
    
// AdminLTE JS
$cs->registerScriptFile($tadmin.'app.js', CClientScript::POS_END);
$cs->registerScriptFile($tadmin.'demo.js', CClientScript::POS_END);

// Page specific script
$cs->registerScriptFile($tcostum.'jq-ui.js', CClientScript::POS_END);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        jQuery UI
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class='row'>
        <div class='col-md-6'>
            <div class='box box-primary'>
                <div class='box-header'>
                    <h3 class='box-title'>Accordion</h3>
                </div>
                <div class='box-body pad'>
                    <div id="accordion">
                        <h3>Section 1</h3>
                        <div>
                            <p>
                                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                        </div>
                        <h3>Section 2</h3>
                        <div>
                            <p>
                                Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                suscipit faucibus urna.
                            </p>
                        </div>
                        <h3>Section 3</h3>
                        <div>
                            <p>
                                Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                            </p>
                            <ul>
                                <li>List item one</li>
                                <li>List item two</li>
                                <li>List item three</li>
                            </ul>
                        </div>
                        <h3>Section 4</h3>
                        <div>
                            <p>
                                Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                mauris vel est.
                            </p>
                            <p>
                                Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                inceptos himenaeos.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.box accordion -->
        </div><!-- /.col left -->
        <!-- Right column -->
        <div class='col-md-6'>
            <div class='box box-danger'>
                <div class='box-header'>
                    <h3 class='box-title'>Date Picker</h3>
                </div>
                <div class="box-body">
                    <p>Date: <input type="text" id="datepicker"></p>
                    <p>Date range:</p>
                    <label for="from">From</label>
                    <input type="text" id="from" name="from">
                    <label for="to">to</label>
                    <input type="text" id="to" name="to">
                </div>
            </div>
            <div class='box box-info'>
                <div class='box-header'>
                    <h3 class='box-title'>Dialog</h3>
                </div>
                <div class='box-body'>
                    <div id="dialog" title="Basic dialog">
                        <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
                    </div>

                    <button id="opener">Open Dialog</button>
                </div>
            </div>
        </div><!-- /.col right -->
    </div><!-- /.row -->

</section><!-- /.content -->