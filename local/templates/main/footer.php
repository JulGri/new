<?php
/**
 * Created by PhpStorm.
 * User: Julia
 * Date: 06.11.2015
 * Time: 21:57
 */
?>

<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>

</div> <!-- end of main wrapper -->

<div id="tooplate_footer_wrapper">
    <div id="tooplate_footer">
        <a href="#tooplate_header" class="goto_top"></a>
        <div class="col_3">
            <h5>Интересные факты</h5>
            <div class="rp_pp">
                <div class="image_frame image_fl"><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/tooplate_image_03.png" alt="image" /></a></div>
                <div class="date"><?=date('D M');?></div>
                <a href="#">Электростанция, обеспечивающая чайную плантацию Williamson Tea, является одной из самых мощных на востоке Африки. </a>
                <div class="cleaner"></div>
            </div>
            <div class="rp_pp">
                <div class="image_frame image_fl"><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/tooplate_image_04.png" alt="image" /></a></div>
                <div class="date"><?=date('D M');?></div>
                <a href="#">В некоторых регионах Российской Федерации стартовал отопительный сезон.</a></div>
        </div>
        <div class="col_3">
            <h5>Отзывы клиентов</h5>
            <ul class="twitter_post">
                <li>"Работаем с компанией EnergyPro++ уже довольно давно. Никаких нареканий, одни положительные впечатления." </li>
                <li>"Довольны работой компании. Будем продолжать сотрудничество." </li>
                <li>"Результаты превзошли ожидания: счета за электроэнергию приходят регулярно,оплта проходит воворемя и никаких очередей!" </li>
                <li>"Сервис отличный. Планируем и дальше работать с Вами." </li>
            </ul>

        </div>
        <div class="col_3 no_margin_right">
            <h5>О нас</h5>
            <p><em>Мы разработали собственную систему поддержки и настраивали её в течение двух лет. В данной отрасли мы единственные, кто предоставляет поддержку моментально в течение 24 часов.</em></p>
            <p>   <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
                    ));?></p>
            <p>   <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/e-mail.php"
                    ));?>.</p>
            <p>Copyright <?=date('Y');?> EnergyPro++<br /></p>
            <div class="cleaner h10"></div>
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "social", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "photos",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "33",	// Код информационного блока
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "ID",
			2 => "Название",
			3 => "Сортировка",
			4 => "Картинка для анонса",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "[URL] Ссылка",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Социальные сети",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	),
	false
);?><br>
           
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer wrapper -->

</body>
</html>