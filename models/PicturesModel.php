<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 16.11.2016
 * Time: 17:10
 */
/**
 *
 *	Получаем последние добавленные картинки.
 *
 *	@param integer $limit Лимит картинок
 *	@return array Массив картинок.
 */
function getLastPictures($limit = null){
    $sql = "SELECT * FROM `pictures` ORDER BY `ID` DESC";
    /*if($limit)
        $sql .= "LIMIT {$limit}";*/
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}
/**
 *
 *	Получить продукты для категории $itemId
 *
 *	@param integer $itemId ID категории
 *	@return array массив продуктов
 *
 */
function getPicturesByCat($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT * FROM `pictures` WHERE `category_id` = '{$itemId}'";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

/**
	*
	*	Получить данные продукта по ID
	*
	*	@param integer $itemId ID продукта
	*	@return array массив данных продукта
	*/
function getPictureById($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT * FROM `pictures` WHERE `ID` = '{$itemId}'";
    $rs = mysql_query($sql);
    return mysql_fetch_assoc($rs);
}


/**
 *
 * Получить категорию по ID картинки.
 *
 * @param array ID картинки
 * @return integer $rs[0] category_id картинки
 *
 */


function insertDataPicture($loadres){
    $sql = "INSERT INTO `pictures` (`name`, `image_name`, `size`, `description`, `datetime`) VALUES ('{$loadres['name']}', '{$loadres['image_name']}', {$loadres['size']}, '{$loadres['description']}', NOW())";
    $rs = mysql_query($sql);
}
function updateDataPicture($loadres){
    $sql = "UPDATE `pictures` SET `description` = '{$loadres['description']}'";
    $rs = mysql_query($sql);
}


