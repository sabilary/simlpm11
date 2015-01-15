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
	 
    // Variabel
    $cs = Yii::app()->clientScript;
    
    $themeUrl = Yii::app()->theme->baseUrl.'/';
    $tcss     = $themeUrl.'css/';
    $tjs      = $themeUrl.'js/';
    $tplugins = $tjs.'plugins/';
    $twidgets = $themeUrl.'widgets/';
    
    // Jquery
    $cs->registerCoreScript('jquery');
	$cs->coreScriptPosition=CClientScript::POS_END;
    
    // Jquery-UI
    $cs->registerCoreScript('jquery.ui');
    $cs->registerCssFile($cs->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');
    
    // Bootstrap
    $bootstrap     = $twidgets.'bootstrap/3.3.1/';
    $bootstrap_css = $bootstrap.'css/';
    $bootstrap_js  = $bootstrap.'js/';
    $cs->registerCssFile($bootstrap_css.'bootstrap.css');
    $cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);
    
    // Fontawesome
    $fontawesome     = $twidgets.'font-awesome/4.2.0/';
    $fontawesome_css = $fontawesome.'css/';
    $cs->registerCssFile($fontawesome_css.'font-awesome.css');
    
    // Ionicons
    $ionicons     = $twidgets.'ionicons/2.0.0/';
    $ionicons_css = $ionicons.'css/';
    $ionicons_js  = $ionicons.'js/';
    $cs->registerCssFile($ionicons_css.'ionicons.min.css');
    
    // AdminLTE CSS
    $cs->registerCssFile($tcss.'AdminLTE-fonts.css');
    $cs->registerCssFile($tcss.'AdminLTE.css');
    
    // AdminLTE JS
    $tadminlte = $tjs.'AdminLTE/';
    $cs->registerScriptFile($tadminlte.'app.js', CClientScript::POS_END);
    $cs->registerScriptFile($tadminlte.'demo.js', CClientScript::POS_END);
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
        
        <?php $this->renderPartial('//layouts/_main/_navbar'); ?>
    </header>
    
    <?php echo $content; ?>

    <!-- add new calendar event modal -->

</body>
</html>
