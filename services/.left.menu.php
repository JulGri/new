<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/services/.left.menu.php");

$aMenuLinks = Array(
	Array(
<<<<<<< HEAD
		"Контакная информация",
=======
		GetMessage("SERVICES_MENU_MEETING_ROOM"),
>>>>>>> fc53c6e237ff0bf41d5aaf6b174cda313da8df2b
		"/services/index.php", 
		Array("/services/res_c.php"), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('MeetingRoomBookingSystem')" 
	),
	Array(
<<<<<<< HEAD
	"Схема проезда",
=======
		GetMessage("SERVICES_MENU_MEETING"),
>>>>>>> fc53c6e237ff0bf41d5aaf6b174cda313da8df2b
		"/services/meeting/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Meeting')" 
	),
<<<<<<< HEAD
	);
=======
	Array(
		GetMessage("SERVICES_MENU_IDEA"),
		"/services/idea/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Idea')" 
	),
	Array(
		GetMessage("SERVICES_MENU_PROCESSES"),
		"/services/processes/",
		Array(),
		Array(),
		"CBXFeatures::IsFeatureEnabled('Lists')"
	),
	Array(
		GetMessage("SERVICES_MENU_LISTS"),
		"/services/lists/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Lists')" 
	),
	Array(
		GetMessage("SERVICES_MENU_BP"),
		"/services/bp/", 
		Array(), 
		Array(), 
		""
	),
	Array(
		GetMessage("SERVICES_MENU_REQUESTS"),
		"/services/requests/", 
		Array(), 
		Array(), 
		(!IsModuleInstalled("form"))?"false":"CBXFeatures::IsFeatureEnabled('Requests')" 
	),
	Array(
		GetMessage("SERVICES_MENU_LEARNING"),
		"/services/learning/", 
		Array("/services/course.php"), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Learning')" 
	),
	Array(
		GetMessage("SERVICES_MENU_WIKI"),
		"/services/wiki/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Wiki')" 
	),
	Array(
		GetMessage("SERVICES_MENU_FAQ"),
		"/services/faq/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		GetMessage("SERVICES_MENU_VOTE"),
		"/services/votes.php", 
		Array("/services/vote_new.php", "/services/vote_result.php"), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Vote')" 
	),
	Array(
		GetMessage("SERVICES_MENU_SUPPORT"),
		"/services/support.php?show_wizard=Y", 
		Array("/services/support.php"), 
		Array(), 
		(!IsModuleInstalled("support"))?"false":"CBXFeatures::IsFeatureEnabled('Support')"
	),
	Array(
		GetMessage("SERVICES_MENU_LINKS"),
		"/services/links.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('WebLink')" 
	),
	Array(
		GetMessage("SERVICES_MENU_SUBSCR"),
		"/services/subscr_edit.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Subscribe')" 
	),
	Array(
		GetMessage("SERVICES_MENU_EVENTLIST"),
		"/services/event_list.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('EventList')" 
	),
	Array(
		GetMessage("SERVICES_MENU_SALARY"),
		"/services/salary/", 
		Array(), 
		Array(), 
		"LANGUAGE_ID == 'ru' && CBXFeatures::IsFeatureEnabled('Salary')"
	),
	Array(
		GetMessage("SERVICES_MENU_BOARD"),
		"/services/board/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Board')" 
	),	
	Array(
		GetMessage("SERVICES_MENU_TELEPHONY"),
		"/services/telephony/",
		Array(),
		Array(),
		'(!IsModuleInstalled("voximplant") || SITE_TEMPLATE_ID == "bitrix24")?false:$GLOBALS["USER"]->IsAdmin()'
	),
);
>>>>>>> fc53c6e237ff0bf41d5aaf6b174cda313da8df2b
?>