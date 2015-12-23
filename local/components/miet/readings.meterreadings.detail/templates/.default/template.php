<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if($arResult['OK']):?>
    <?ShowMessage(array('TYPE' => 'OK','MESSAGE' => $arResult['OK']));?>
<?endif;?>
<?if($arResult['ERROR']):?>
    <?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' => $arResult['ERROR']));?>
<?endif;?>

<form name="meterreadingsform" action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <table class="formMeterReadings">
        <tr>
            <td><?=GetMessage("Surname");?></td>
            <td><input type="text" name="Surname" value="<?=$REQUEST["Surname"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Name");?></td>
            <td><input type="text" name="Name" value="<?=$REQUEST["Name"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Patronymic");?></td>
            <td><input type="text" name="Patronymic" value="<?=$REQUEST["Patronymic"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Birth");?></td>
            <td><input type="date" name="Birth" value="<?=$REQUEST["Birth"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Flat");?></td>
            <td><input type="text" name="Flat" value="<?=$REQUEST["Flat"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("House");?></td>
            <td><input type="text" name="House" value="<?=$REQUEST["House"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Region");?></td>
            <td><input type="text" name="Region" value="<?=$REQUEST["Region"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Street");?></td>
            <td><input type="text" name="Street" value="<?=$REQUEST["Street"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("City");?></td>
            <td><input type="text" name="City" value="<?=$REQUEST["City"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Index");?></td>
            <td><input type="text" name="Index" value="<?=$REQUEST["Index"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Meter_readings");?></td>
            <td><input type="text" name="Meter_readings" value="<?=$REQUEST["Meter_readings"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Service_name");?></td>
            <td>
                <select name="UF_SERVICE_NAME">
                    <?foreach($arResult["SERVICES"] as $arItem):?>
                        <option  value="<?=$arItem['ID'];?>"> <?=$arItem['UF_SERVICE_NAME'];?></option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td><?=GetMessage("Show_date");?></td>
            <td><input type="date" name="Show_date" value="<?=$REQUEST["Show_date"];?>"></td>
        </tr>
        <tr>
            <td>
    <input type="submit" name="saveMeterReading" value="<?=GetMessage("Save_readings");?>">
            </td>
        </tr>
    </table>
</form>



