<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 16.11.2016
 * Time: 17:09
 */



/*
	* 	Получить данные категории по id
	*
	*	@param integer $catId ID категории.
	*	@param array массив - строка категории.
	*
*/
function getCatById($catId){
    $catId = intval($catId);
    $sql = "SELECT * FROM `categories` WHERE `ID` = '{$catId}'";
    $rs = mysql_query($sql);
    return mysql_fetch_assoc($rs);
}

