<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<?foreach($arResult["ITEMS"] as $arItem):?>

<div class = "card">
	<div class = "card-body">
		<h5 class = "card-title"> <?php echo $arItem['NAME']; ?> </h5>
		<p class = "card-text"> <?php echo $arItem['DETAIL_TEXT']; ?> </p>
		<div class = "d-flex justify-content-end">
			<a href = '<?php echo $arItem['DETAIL_PAGE_URL']; ?>' > Read more </a>
		</div>
	</div>
</div>


<?endforeach;?>
