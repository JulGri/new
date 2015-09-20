
<?if (!empty($arResult)):?>
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<a href="#"><img alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"];?>" /></a>
	<?endforeach;?>
<?endif?>

	