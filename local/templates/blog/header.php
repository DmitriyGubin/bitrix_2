<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html> 
<html>
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH.'/css/styles.css');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/search.js');
    ?>
</head>
<body>
    <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
    
    <?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "menu",
    Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(""),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "main",
        "USE_EXT" => "N"
    )
    );?>

    <div class="content"> 