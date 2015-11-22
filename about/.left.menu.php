<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/about/.left.menu.php");
$aMenuLinks = Array(
	Array(
		"История фирмы",
		"/about/index.php", 
		Array("/about/official.php"), 
		Array(), 
		"" 
	),
	Array(
	"Отзывы о фирме",
		"/about/calendar.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('CompanyCalendar')" 
	),
);
?>