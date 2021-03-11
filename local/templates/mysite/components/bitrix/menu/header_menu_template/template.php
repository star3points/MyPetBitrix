<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
<nav class = "navbar navbar-expand-sm bg-dark navbar-dark">
<a class = "navbar-brand" href = "/" >MyPetBlog </a>
<ul class="navbar-nav">

<?php
foreach($arResult as $arItem): ?>
		<li class = "nav-item">
			<a class = "nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</li>	
<?endforeach?>

</ul>
</nav>
<?endif?>
