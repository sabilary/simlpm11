<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
    $baseUrl = Yii::app()->request->baseUrl.'/';
    $assets  = $baseUrl.'assets/';
    $js      = $baseUrl.'js/';
    $css     = $baseUrl.'css/';
    $cs      = Yii::app()->clientScript;
    
    // Jquery
    $cs->registerCoreScript('jquery');
	$cs->coreScriptPosition=CClientScript::POS_END;
    
    // Jquery-UI
    $cs->registerCoreScript('jquery.ui');
    $cs->registerCssFile($cs->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');
    
    // Bootstrap
    $bootstrap     = $assets.'bootstrap-3.3.1/';
    $bootstrap_css = $bootstrap.'css/';
    $bootstrap_js  = $bootstrap.'js/';
    
    $cs->registerCssFile($bootstrap_css.'bootstrap.css');
    $cs->registerScriptFile($bootstrap_js.'bootstrap.min.js', CClientScript::POS_END);
    
    // Fontawesome
    $fontawesome     = $assets.'fontawesome-4.2.0/';
    $fontawesome_css = $fontawesome.'css/';
    
    $cs->registerCssFile($fontawesome_css.'font-awesome.css');
    
    // Select2
    $select2 = $assets.'select2-3.5.1/';
    
    $cs->registerScriptFile($select2.'select2.js', CClientScript::POS_END);
    $cs->registerCssFile($select2.'select2.css');
    $cs->registerCssFile($select2.'select2-bootstrap.css');
    $cs->registerScript('select2', "
        $('.select2').select2({
            minimumResultsForSearch: 20,
            placeholder: 'Pilih',
            allowClear: true,
        }); 
    ", CClientScript::POS_END);
    
    // Cleditor
    $cleditor = $assets.'cleditor-1.4.5/';
    
    $cs->registerScriptFile($cleditor.'jquery.cleditor.js', CClientScript::POS_END);
    $cs->registerCssFile($cleditor.'jquery.cleditor.css');
    
    // Costume JS
    $cs->registerScript('slideToggle-button', "
        $('.search-button').click(function(){
            $('.search-body').slideToggle();
            return false;
        });
    ");

    $cs->registerScript('reset-button', "
        $('.reset-button').click(function(){
            $('.select2').select2('val', '');
        });
    ");
    
    $cs->registerScript('form-input', "
        $('input.nospace').keyup(function(event)
        {
            // skip for arrow keys
            if(event.which >= 37 && event.which <= 40) return;

            // format number
            $(this).val(function(index, value) {
                return value
                    .replace(/\s/g, '')
                ;
            });
        });

        $('input.number').keyup(function(event)
        {
            // skip for arrow keys
            if(event.which >= 37 && event.which <= 40) return;

            // format number
            $(this).val(function(index, value) {
                return value
                    .replace(/\D/g, '')
                ;
            });
        });
        
        $('input.money').keyup(function(event) {
            // skip for arrow keys
            if(event.which >= 37 && event.which <= 40) return;

            // format number
            $(this).val(function(index, value) {
                return value
                    .replace(/\D/g, '')
                    .replace(/\B(?=(\d{3})+(?!\d))/g, '.')
                ;
            });
        });
    ", CClientScript::POS_END);
    
    // Costume CSS
    $costum_css = $css.'costum_css/';
    $cs->registerCssFile($costum_css.'css_screen.css', 'screen, projection');
    $cs->registerCssFile($costum_css.'css_navigation.css');
    $cs->registerCssFile($costum_css.'css_form.css');
    $cs->registerCssFile($costum_css.'css_main.css');
    ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div>

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
