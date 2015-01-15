<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <?php
    /**
     * CSS MEDIA : print/handheld/screen
     * 
     * JS  POSITION :
     * The position of the JavaScript code. Valid values include the following, 
     * 1. CClientScript::POS_HEAD  : the script is inserted in the head section right before the title element.
     * 2. CClientScript::POS_BEGIN : the script is inserted at the beginning of the body section.
     * 3. CClientScript::POS_END   : the script is inserted at the end of the body section.
     * 4. CClientScript::POS_LOAD  : the script is inserted in the window.onload() function.
     * 5. CClientScript::POS_READY : the script is inserted in the jQuery's ready function.
     * 
     * Yii::app()->clientScript->registerCssFile(URL, MEDIA);
     * Yii::app()->clientScript->registerScriptFile(URL, POSITION);
     **/
	 
    
    /*
     * CSS
     * =================================================================
     */
    $cs       = Yii::app()->clientScript;
    $themeUrl = Yii::app()->theme->baseUrl.'/';
    $twidgets = $themeUrl.'widgets/';
    $tcss     = $themeUrl.'css/';
    
    // Jquery-UI
    $cs->registerCssFile($cs->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');
    
    // Bootstrap
    $bootstrap     = $twidgets.'bootstrap/3.3.1/';
    $bootstrap_css = $bootstrap.'css/';
    $cs->registerCssFile($bootstrap_css.'bootstrap.css');
    
    // Fontawesome
    $fontawesome     = $twidgets.'font-awesome/4.2.0/';
    $fontawesome_css = $fontawesome.'css/';
    $cs->registerCssFile($fontawesome_css.'font-awesome.css');
    
    // Ionicons
    $ionicons     = $twidgets.'ionicons/2.0.0/';
    $ionicons_css = $ionicons.'css/';
    $cs->registerCssFile($ionicons_css.'ionicons.min.css');
    
    // Morris.js charts
    $cs->registerCssFile($tcss.'morris/morris.css');
    
    // jvectormap
    $cs->registerCssFile($tcss.'jvectormap/jquery-jvectormap-1.2.2.css');
    
    // Daterangepicker
    $cs->registerCssFile($tcss.'daterangepicker/daterangepicker-bs3.css');
    
    // Datepicker
    $cs->registerCssFile($tcss.'datepicker/datepicker3.css');
    
    // Bootstrap WYSIHTML5
    $cs->registerCssFile($tcss.'bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');
    
    // fullCalendar
    $fullcalendar = $twidgets.'fullcalendar/2.2.6/';
    $cs->registerCssFile($fullcalendar.'fullcalendar.css');
    $cs->registerCssFile($fullcalendar.'fullcalendar.print.css', 'print');
    
    // AdminLTE CSS
    $cs->registerCssFile($tcss.'AdminLTE-fonts.css');
    $cs->registerCssFile($tcss.'AdminLTE.css');
    ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="skin-blue">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            AdminLTE
        </a>
        
        <?php $this->renderPartial('//layouts/_example/_navbar'); ?>
    </header>
    
    
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <?php $this->renderPartial('//layouts/_example/_sidebar'); ?>
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <?php echo $content; ?>
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- add new calendar event modal -->

</body>
</html>