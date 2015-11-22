<div id="tooplate_menu" class="ddsmoothmenu">
	<?if (!empty($arResult)):?>
	<ul>
		<?foreach($arResult as $key => $arItem):?>
				<?if($arItem['DEPTH_LEVEL'] != 1){continue;}	?>
						<?if($arItem['DEPTH_LEVEL'] == 1):?>
								<li <?if($arItem["SELECTED"]):?>class="current"<?endif;?>><a href="<?=$arItem["LINK"];?>" class="applyfont"><span></span><?=$arItem["TEXT"];?></a>
						<?endif;?>
						<?foreach($arResult as $keyInner => $arItemInner):?>
								<?if($keyInner <= $key) {
								continue;
													}
								?>
					<ul>
							<?if($arItemInner['DEPTH_LEVEL'] == 2):?><li><a href="<?=$arItemInner["LINK"];?>"><?=$arItemInner["TEXT"];?></a></li>
							<?endif;?>
								<?if($arItemInner['DEPTH_LEVEL'] != 2){
								break;
																		}
								?>
						<?endforeach;?>
								<?if($arItem['DEPTH_LEVEL'] == 1):?>
								<?endif;?>
					</ul>

							    </li>
		<?endforeach;?>
	</ul>
		<br style="clear: left" />
	<?endif;?>
</div>



