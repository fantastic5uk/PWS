<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" /> -->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<?php
	$cs = Yii::app()->clientScript;
	$themePath = Yii::app()->theme->baseUrl;

	/**
	 * StyleSHeets
	 */
	$cs
	->registerCssFile($themePath.'/assets/css/bootstrap.min.css')
	->registerCssFile($themePath.'/assets/css/bootstrap-theme.min.css')
	->registerCssFile($themePath.'/assets/css/custom.css');

	/**
	 * JavaScripts
	 */
	$cs
	->registerCoreScript('jquery',CClientScript::POS_END)
	->registerCoreScript('jquery.ui',CClientScript::POS_END)
	->registerScriptFile($themePath.'/assets/js/bootstrap.min.js',CClientScript::POS_END)

	->registerScript('tooltip',
		"$('[data-toggle=\"tooltip\"]').tooltip();
		$('[data-toggle=\"popover\"]').tooltip()"
		,CClientScript::POS_READY);

		?>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/html5shiv.js"></script>
	    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/respond.min.js"></script>
	    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" /> -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page">

		<div id="header">
			<div id="logo" class="logo"> <?php echo CHtml::encode(Yii::app()->name); ?></div>
		</div><!-- header -->

		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Officer', 'url'=>array('/officer/index'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible' => !Yii::app()->user->isGuest && Yii::app()->user->checkAccessList(array('oSystemFormManage'))),
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

					<div class="row">
						<div class="col-sm-12">
							<div id="footer">
								Copyright &copy; <?php echo date('Y'); ?>.<br/>
								All Rights Reserved.<br/>
								<?php //echo Yii::powered(); ?>
							</div><!-- footer -->
						</div>
					</div>



				</div><!-- page -->

			</body>


			</html>
