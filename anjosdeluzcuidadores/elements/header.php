<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>

<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  
      <?php
      View::element('header_required', [
          'pageTitle' => isset($pageTitle) ? $pageTitle : '',
          'pageDescription' => isset($pageDescription) ? $pageDescription : '',
          'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
      ]);
      ?>

     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     

     <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/animate.css">
     <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/owl.carousel.css">
     <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/owl.theme.default.min.css">

     <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
  
	<div class="<?php echo $c->getPageWrapperClass()?>">