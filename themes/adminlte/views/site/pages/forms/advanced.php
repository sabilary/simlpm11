<?php
$this->pageTitle='Advanced Form Elements - '.Yii::app()->name;


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
 * css/daterangepicker/daterangepicker-bs3.css
 * css/iCheck/all.css
 * css/colorpicker/bootstrap-colorpicker.min.css
 * css/timepicker/bootstrap-timepicker.min.css
 * css/AdminLTE.css
 */
// Bootstrap
$bootstrap     = $twidgets.'bootstrap/3.3.1/';
$bootstrap_css = $bootstrap.'css/';
$bootstrap_js  = $bootstrap.'js/';
$cs->registerCssFile($bootstrap_css.'bootstrap.css');

// Daterange picker
$cs->registerCssFile($tcss.'daterangepicker/daterangepicker-bs3.css');

// iCheck for checkboxes and radio inputs
$cs->registerCssFile($tcss.'iCheck/all.css');

// Bootstrap Color Picker
$cs->registerCssFile($tcss.'colorpicker/bootstrap-colorpicker.min.css');
    
// Bootstrap time Picker
$cs->registerCssFile($tcss.'timepicker/bootstrap-timepicker.min.css');

// AdminLTE CSS
$cs->registerCssFile($tcss.'AdminLTE-fonts.css');
$cs->registerCssFile($tcss.'AdminLTE.css');


/*
 * JS
 * =================================================================
 * js/jquery/2.1.3/jquery.min.js
 * widgets/bootstrap/3.3.1/js/bootstrap.min.js
 * js/plugins/input-mask/jquery.inputmask.js
 * js/plugins/input-mask/jquery.inputmask.date.extensions.js
 * js/plugins/input-mask/jquery.inputmask.extensions.js
 * js/plugins/daterangepicker/daterangepicker.js
 * js/plugins/colorpicker/bootstrap-colorpicker.min.js
 * js/plugins/timepicker/bootstrap-timepicker.min.js
 * js/AdminLTE/app.js
 * js/AdminLTE/demo.js
 * Page script
 */
// Jquery
$cs->registerCoreScript('jquery');
    
// Bootstrap
$cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);

// InputMask
$cs->registerScriptFile($tplugins.'input-mask/jquery.inputmask.js', CClientScript::POS_END);
$cs->registerScriptFile($tplugins.'input-mask/jquery.inputmask.date.extensions.js', CClientScript::POS_END);
$cs->registerScriptFile($tplugins.'input-mask/jquery.inputmask.extensions.js', CClientScript::POS_END);

// Date-range-picker
$cs->registerScriptFile($tplugins.'daterangepicker/daterangepicker.js', CClientScript::POS_END);

// Bootstrap color picker
$cs->registerScriptFile($tplugins.'colorpicker/bootstrap-colorpicker.min.js', CClientScript::POS_END);

// Bootstrap time picker
$cs->registerScriptFile($tplugins.'timepicker/bootstrap-timepicker.min.js', CClientScript::POS_END);
    
// AdminLTE JS
$cs->registerScriptFile($tadmin.'app.js', CClientScript::POS_END);
$cs->registerScriptFile($tadmin.'demo.js', CClientScript::POS_END);

// Page script
$cs->registerScriptFile($tcostum.'forms-advanced.js', CClientScript::POS_END);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Advanced Form Elements
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">

            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Input masks</h3>
                </div>
                <div class="box-body">
                    <!-- Date dd/mm/yyyy -->
                    <div class="form-group">
                        <label>Date masks:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- Date mm/dd/yyyy -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- phone mask -->
                    <div class="form-group">
                        <label>US phone mask:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- phone mask -->
                    <div class="form-group">
                        <label>Intl US phone mask:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- IP mask -->
                    <div class="form-group">
                        <label>IP mask:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Color & Time Picker</h3>
                </div>
                <div class="box-body">
                    <!-- Color Picker -->
                    <div class="form-group">
                        <label>Color picker:</label>
                        <input type="text" class="form-control my-colorpicker1"/>
                    </div><!-- /.form group -->

                    <!-- Color Picker -->
                    <div class="form-group">
                        <label>Color picker with addon:</label>
                        <div class="input-group my-colorpicker2">
                            <input type="text" class="form-control"/>
                            <div class="input-group-addon">
                                <i></i>
                            </div>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <label>Time picker:</label>
                            <div class="input-group">
                                <input type="text" class="form-control timepicker"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col (left) -->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Date picker</h3>
                </div>
                <div class="box-body">
                    <!-- Date range -->
                    <div class="form-group">
                        <label>Date range:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="reservation"/>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- Date and time range -->
                    <div class="form-group">
                        <label>Date and time range:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="reservationtime"/>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- Date and time range -->
                    <div class="form-group">
                        <label>Date range button:</label>
                        <div class="input-group">
                            <button class="btn btn-default pull-right" id="daterange-btn">
                                <i class="fa fa-calendar"></i> Date range picker
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                    </div><!-- /.form group -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- iCheck -->
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">iCheck - Checkbox & Radio Inputs</h3>
                </div>
                <div class="box-body">
                    <!-- Minimal style -->

                    <!-- checkbox -->
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal" checked/>
                        </label>
                        <label>
                            <input type="checkbox" class="minimal"/>
                        </label>
                        <label>
                            <input type="checkbox" class="minimal" disabled/>
                            Minimal skin checkbox
                        </label>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                        <label>
                            <input type="radio" name="r1" class="minimal" checked/>
                        </label>
                        <label>
                            <input type="radio" name="r1" class="minimal"/>
                        </label>
                        <label>
                            <input type="radio" name="r1" class="minimal" disabled/>
                            Minimal skin radio
                        </label>
                    </div>

                    <!-- Minimal red style -->

                    <!-- checkbox -->
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal-red" checked/>
                        </label>
                        <label>
                            <input type="checkbox" class="minimal-red"/>
                        </label>
                        <label>
                            <input type="checkbox" class="minimal-red" disabled/>
                            Minimal red skin checkbox
                        </label>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                        <label>
                            <input type="radio" name="r2" class="minimal-red" checked/>
                        </label>
                        <label>
                            <input type="radio" name="r2" class="minimal-red"/>
                        </label>
                        <label>
                            <input type="radio" name="r2" class="minimal-red" disabled/>
                            Minimal red skin radio
                        </label>
                    </div>

                    <!-- Minimal red style -->

                    <!-- checkbox -->
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="flat-red" checked/>
                        </label>
                        <label>
                            <input type="checkbox" class="flat-red"/>
                        </label>
                        <label>
                            <input type="checkbox" class="flat-red" disabled/>
                            Flat red skin checkbox
                        </label>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                        <label>
                            <input type="radio" name="r3" class="flat-red" checked/>
                        </label>
                        <label>
                            <input type="radio" name="r3" class="flat-red"/>
                        </label>
                        <label>
                            <input type="radio" name="r3" class="flat-red" disabled/>
                            Flat red skin radio
                        </label>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    Many more skins available.
                </div>
            </div><!-- /.box -->
        </div><!-- /.col (right) -->
    </div><!-- /.row -->

</section><!-- /.content -->