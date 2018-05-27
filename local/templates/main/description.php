<?php
/**
 * Created by PhpStorm.
 * User: Илющка
 * Date: 27.05.2018
 * Time: 2:08
 */
?>

<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?> <?use Bitrix\Main\Localization\Loc; Loc::loadMessages(__FILE__); $arTemplate = Array( "NAME" => Loc::getMessage("TEMPLATE_DESCRIPTION_NAME"), "DESCRIPTION" => Loc::getMessage("TEMPLATE_DESCRIPTION_DESC") ); ?>