<?php
/**
 * Created by PhpStorm.
 * User: Илющка
 * Date: 20.05.2018
 * Time: 13:24
 */
?>

<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?> <?use Bitrix\Main\Localization\Loc; Loc::loadMessages(__FILE__); $arTemplate = Array( "NAME" => Loc::getMessage("TEMPLATE_DESCRIPTION_NAME"), "DESCRIPTION" => Loc::getMessage("TEMPLATE_DESCRIPTION_DESC") ); ?>