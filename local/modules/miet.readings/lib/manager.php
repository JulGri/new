<?php
namespace MIET\READINGS;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
Loc::loadMessages(__FILE__);

Class ReadingsManager
{
    public static function SaveReadings($arData)
    {
        $db = Application::getConnection();
        $db->startTransaction();
        /* таблица Клиент, все поля*/
        $date = explode("-", $arData['Birth']);
        $result = ClientTable::add(array(
            'UF_FAM' => $arData['Surname'],
            'UF_IMYA' => $arData['Name'],
            'UF_OTCH' => $arData['Patronymic'],
            'UF_FLAT' => $arData['Flat'],
            'UF_HOUSE_BUILDING' => $arData['House'],
            'UF_REGION' => $arData['Region'],
            'UF_STREET_DISTRICT' => $arData['Street'],
            'UF_CITY' => $arData['City'],
            'UF_INDEX' => $arData['Index'],
            'UF_BIRTH_DATE' => new \Bitrix\Main\Type\Date($date[2].'.'.$date[1].'.'.$date[0])
        ));
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
            return false;
        }
        $idClient = $result->getId();
        $date = explode("-", $arData['Show_date']);
        /* таблица Показания счетчика,только поля дата и показания*/
        $result = MeterReadingsTable::add(array(
            'UF_ID_CLIENT' => $idClient,
            'UF_ID_SERVICE' => $arData['UF_SERVICE_NAME'],
            'UF_SHOW_DATE' => new \Bitrix\Main\Type\Date($date[2].'.'.$date[1].'.'.$date[0]),
            'UF_READINGS' => $arData['Meter_readings']
        ));
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
            return false;
        }
        $db->commitTransaction();
        return true;
    }
}