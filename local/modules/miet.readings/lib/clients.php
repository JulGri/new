<?php
namespace MIET\READINGS;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class ClientTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'client';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('CLIENT_ID_FIELD')
            ),
            'UF_OTCH' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('OTCH_FIELD')
            ),
            'UF_IMYA' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('IMYA_FIELD')
            ),
            'UF_FAM' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('FAM_FIELD')
            ),
            'UF_FLAT' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('FLAT_FIELD')
            ),
            'UF_HOUSE_BUILDING' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('HOUSE_BUILDING_FIELD')
            ),
            'UF_REGION' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('REGION_FIELD')
            ),
            'UF_STREET_DISTRICT' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('STREET_DISTRICT_FIELD')
            ),

            'UF_CITY' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('CITY_FIELD')
            ),
            'UF_INDEX' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('INDEX_FIELD')
            ),
            'UF_BIRTH_DATE' => array(
                'data_type' => 'date',
                'required' => true,
                'title' => Loc::getMessage('BIRTH_DATE_FIELD')
            ),

        );
    }

    //public static function GetMinPeriod()
    //{
    //   return current(self::getList(array(
    //     'select' => array(
    //         new Entity\ExpressionField('MIN_PERIOD', 'MIN(%s)',
    //             array('UF_PERIOD'))
    //   )
    // ))->fetch());
    // }
}