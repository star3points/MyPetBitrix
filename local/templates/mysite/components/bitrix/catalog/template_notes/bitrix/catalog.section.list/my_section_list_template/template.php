<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<pre>
<?php 
//print_r($arResult);
?>
</pre>

<div class = "card">
<div class = "card-body">
<h5 class = "card-title">Categores</h5>
<a href ='/notes' class="badge badge-light">All categores</a><br>
<?php foreach($arResult['SECTIONS'] as $section): ?>
    <a href='<?php echo $section['SECTION_PAGE_URL'];?>' class="badge badge-light"> <?php echo $section['NAME']; ?></a><br>
<?php endforeach; ?>
</div>
</div>
