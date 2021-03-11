<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION -> SetTitle('about page');
?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "my_include",
		"EDIT_TEMPLATE" => ""
	)
);
?>

<?php 
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>