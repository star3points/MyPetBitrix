<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?php use Bitrix\Main\Page\Asset; ?>

<!DOCTYPE HTML>

<head>
    <?php $APPLICATION -> showHead(); ?>

    <title> <?php $APPLICATION -> showTitle(); ?>  </title>

    <?php
		Asset::getInstance() -> addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css');
		Asset::getInstance() -> addCss(SITE_TEMPLATE_PATH.'/css/mycss.css');
        Asset::getInstance() -> addJs(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');
    ?>
</head>

<body>

<div id = 'panel'><?php $APPLICATION -> ShowPanel(); ?></div>
<!-- navbar fixed top bug -->

<header id = headerNavBar>
<div id = "header">
    
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"header_menu_template", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => [],
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "header_menu_template"
	),
	false
);?>

</div>
</header>
<div id = "all-content">