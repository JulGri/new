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
            <a href="#"><img alt="facebook" src="<?=SITE_TEMPLATE_PATH;?>/_include/images/facebook.png" title="facebook" /></a>
            <a href="#"><img alt="flickr" src="<?=SITE_TEMPLATE_PATH;?>/_include/images/flickr.png" title="flickr" /></a>
            <a href="#"><img alt="twitter" src="<?=SITE_TEMPLATE_PATH;?>/_include/images/twitter.png" title="twitter" /></a>
            <a href="#"><img alt="youtube" src="<?=SITE_TEMPLATE_PATH;?>/_include/images/youtube.png" title="youtube" /></a>
            <a href="#"><img alt="rss" src="<?=SITE_TEMPLATE_PATH;?>/_include/images/feed.png" title="rss" /></a>
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer wrapper -->

</body>
</html>