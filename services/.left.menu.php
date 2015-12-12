<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/services/.left.menu.php");

$aMenuLinks = Array(
	Array(
		"Контакная информация",
		"/services/index.php", 
		Array("/services/res_c.php"), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('MeetingRoomBookingSystem')" 
	),
	Array(
	"Схема проезда",
		"/services/meeting/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Meeting')" 
	),
	);
?>