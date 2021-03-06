<?php
$this->pageTitle='Calendar - '.Yii::app()->name;


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
 * widgets/fullcalendar/2.2.6/fullcalendar.css
 * widgets/fullcalendar/2.2.6/fullcalendar.print.css, media='print'
 * css/AdminLTE.css
 */
// Bootstrap
$bootstrap     = $twidgets.'bootstrap/3.3.1/';
$bootstrap_css = $bootstrap.'css/';
$bootstrap_js  = $bootstrap.'js/';
$cs->registerCssFile($bootstrap_css.'bootstrap.css');
    
// Jquery-UI
$cs->registerCssFile($cs->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');
    
// fullCalendar
$fullcalendar = $twidgets.'fullcalendar/2.2.6/';
$cs->registerCssFile($fullcalendar.'fullcalendar.css');
$cs->registerCssFile($fullcalendar.'fullcalendar.print.css', 'print');
    
// AdminLTE CSS
$cs->registerCssFile($tcss.'AdminLTE-fonts.css');
$cs->registerCssFile($tcss.'AdminLTE.css');


/*
 * JS
 * =================================================================
 * js/jquery/2.1.3/jquery.min.js
 * widgets/bootstrap/3.3.1/js/bootstrap.min.js
 * js/jquery-ui/1.11.2/jquery-ui.min.js
 * js/AdminLTE/app.js
 * js/AdminLTE/demo.js
 * widgets/moment/2.9.0/moment.min.js
 * widgets/fullcalendar/2.2.6/fullcalendar.min.js
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

// Moment, for fullCalendar
$moment = $twidgets.'moment/2.9.0/';
$cs->registerScriptFile($moment.'moment.min.js', CClientScript::POS_END);

// FullCalendar
$cs->registerScriptFile($fullcalendar.'fullcalendar.min.js', CClientScript::POS_END);

// Page specific script
$cs->registerScriptFile($tcostum.'calendar_fullcalendar.js', CClientScript::POS_END);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Calendar
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-header">
                    <h4 class="box-title">Draggable Events</h4>
                </div>
                <div class="box-body">
                    <!-- the events -->
                    <div id='external-events'>
                        <div class='external-event bg-green'>Lunch</div>
                        <div class='external-event bg-red'>Go home</div>
                        <div class='external-event bg-aqua'>Do homework</div>
                        <div class='external-event bg-yellow'>Work on UI design</div>
                        <div class='external-event bg-navy'>Sleep tight</div>
                        <p>
                            <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
                        </p>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /. box -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Create Event</h3>
                </div>
                <div class="box-body">
                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                        <button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>
                        <ul class="dropdown-menu" id="color-chooser">
                            <li><a class="text-green" href="#"><i class="fa fa-square"></i> Green</a></li>
                            <li><a class="text-blue" href="#"><i class="fa fa-square"></i> Blue</a></li>
                            <li><a class="text-navy" href="#"><i class="fa fa-square"></i> Navy</a></li>
                            <li><a class="text-yellow" href="#"><i class="fa fa-square"></i> Yellow</a></li>
                            <li><a class="text-orange" href="#"><i class="fa fa-square"></i> Orange</a></li>
                            <li><a class="text-aqua" href="#"><i class="fa fa-square"></i> Aqua</a></li>
                            <li><a class="text-red" href="#"><i class="fa fa-square"></i> Red</a></li>
                            <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i> Fuchsia</a></li>
                            <li><a class="text-purple" href="#"><i class="fa fa-square"></i> Purple</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <div class="input-group">
                        <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                        <div class="input-group-btn">
                            <button id="add-new-event" type="button" class="btn btn-default btn-flat">Add</button>
                        </div><!-- /btn-group -->
                    </div><!-- /input-group -->
                </div>
            </div>
        </div><!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                </div><!-- /.box-body -->
            </div><!-- /. box -->
        </div><!-- /.col -->
    </div><!-- /.row -->


</section><!-- /.content -->