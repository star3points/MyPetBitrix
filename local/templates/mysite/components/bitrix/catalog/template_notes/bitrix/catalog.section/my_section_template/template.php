<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>


<?php foreach ($arResult['ITEMS'] as $item): ?>
<div class = "card">
<div class = "card-body">
<h5 class = "card-title"><?php echo $item['NAME']; ?></h5>
<p class = "card-text"><?php echo $item['DETAIL_TEXT']; ?></p>
</div>
</div>
<?php endforeach; ?>
