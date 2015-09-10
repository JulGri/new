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
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?=LANGUAGE_ID?>">
<head>
    <title ><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <!--
    Template 2053 Leather Shop
    http://www.tooplate.com/view/2053-leather-shop
    -->
    <link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

    <script language="javascript" type="text/javascript">
        function clearText(field)
        {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>


    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/ddsmoothmenu.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/lightbox.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/tooplate_style.css", true);?>

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.min.js", true);?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/ddsmoothmenu.js", true);?>




    <script type="text/javascript">

        ddsmoothmenu.init({
            mainmenuid: "tooplate_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

    </script>

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery-1.2.6.min.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.easing.1.3.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.kwicks-1.5.1.pack.js", true);?>

    <script type="text/javascript">
        $().ready(function() {
            $('.slider').kwicks({
                max : 740,
                spacing : 1
            });
        });
    </script>

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div id="tooplate_top_wrapper">
    <div id="tooplate_top">
        <div id="tooplate_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html" class="selected"><span></span>Home</a></li>
                <li><a href="about.html"><span></span>About Us</a>
                    <ul>
                        <li><a href="#">Sub menu 1</a></li>
                        <li><a href="#">Sub menu 2</a></li>
                        <li><a href="#">Sub menu 3</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.html"><span></span>Portfolio</a>
                    <ul>
                        <li><a href="#">Sub menu 1</a></li>
                        <li><a href="#">Sub menu 2</a></li>
                        <li><a href="#">Sub menu 3</a></li>
                        <li><a href="#">Sub menu 4</a></li>
                        <li><a href="#">Sub menu 5</a></li>
                    </ul>
                </li>
                <li><a href="blog.html"><span></span>Blog</a></li>
                <li><a href="contact.html"><span></span>Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of menu -->
        <div id="tooplate_search">
            <form action="#" method="get">
                <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- end of top -->
</div> <!-- end of top wrapper -->

<div id="tooplate_header_wrapper">
    <div id="tooplate_header">

        <div id="site_title"><!-- вставка -->
        <div class="logo"><a href="index.html">
                <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        ));?>

                <?if(!CSite::InDir('/')):?></a><?endif;?>
        </div>
        <div id="slider_wrapper">
            <ul class="slider horizontal" >
                <li id="slide_1"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/slider/01.jpg" alt="Slider 1" /></li>
                <li id="slide_2"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/slider/02.jpg" alt="Slider 2" /></li>
                <li id="slide_3"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/slider/03.jpg" alt="Slider 3" /></li>
                <li id="slide_4"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/slider/04.jpg" alt="Slider 4" /></li>
                <li id="slide_5"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/slider/05.jpg" alt="Slider 5" /></li>
            </ul>
        </div>
    </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="tooplate_main_wrapper">
