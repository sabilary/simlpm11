<?php
$this->pageTitle='Invoice - '.Yii::app()->name;


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

$timg     = $themeUrl.'img/';


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
        Invoice
        <small>#007612</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>

<div class="pad margin no-print">
    <div class="alert alert-info" style="margin-bottom: 0!important;">
        <i class="fa fa-info"></i>
        <b>Note:</b> This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
    </div>
</div>

<!-- Main content -->
<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-globe"></i> AdminLTE, Inc.
                <small class="pull-right">Date: 2/10/2014</small>
            </h2>
        </div><!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            From
            <address>
                <strong>Admin, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                Phone: (804) 123-5432<br/>
                Email: info@almasaeedstudio.com
            </address>
        </div><!-- /.col -->
        <div class="col-sm-4 invoice-col">
            To
            <address>
                <strong>John Doe</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                Phone: (555) 539-1037<br/>
                Email: john.doe@example.com
            </address>
        </div><!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Invoice #007612</b><br/>
            <br/>
            <b>Order ID:</b> 4F3S8J<br/>
            <b>Payment Due:</b> 2/22/2014<br/>
            <b>Account:</b> 968-34567
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Serial #</th>
                        <th>Description</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>455-981-221</td>
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>$64.50</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Need for Speed IV</td>
                        <td>247-925-726</td>
                        <td>Wes Anderson umami biodiesel</td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Monsters DVD</td>
                        <td>735-845-642</td>
                        <td>Terry Richardson helvetica tousled street art master</td>
                        <td>$10.70</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Grown Ups Blue Ray</td>
                        <td>422-568-642</td>
                        <td>Tousled lomo letterpress</td>
                        <td>$25.99</td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
            <p class="lead">Payment Methods:</p>
            <img src="<?php echo $timg; ?>credit/visa.png" alt="Visa"/>
            <img src="<?php echo $timg; ?>credit/mastercard.png" alt="Mastercard"/>
            <img src="<?php echo $timg; ?>credit/american-express.png" alt="American Express"/>
            <img src="<?php echo $timg; ?>credit/paypal2.png" alt="Paypal"/>
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
        </div><!-- /.col -->
        <div class="col-xs-6">
            <p class="lead">Amount Due 2/22/2014</p>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                    </tr>
                    <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                    </tr>
                    <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                    </tr>
                </table>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-xs-12">
            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
            <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
        </div>
    </div>
</section><!-- /.content -->