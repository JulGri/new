

<div id="slider_wrapper">
	<?if (!empty($arResult)):?>
	<ul class="slider horizontal" >
		<?foreach($arResult[ROWS][0] as $key => $arItem):?>
		<li id="<?=$arItem["ID"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" /></li>
		<?endforeach;?>
	</ul>
	<?endif?>
</div>





