<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 16.11.2016
 * Time: 17:16
 */
	/**
     *
     *	PictureContoller.php
     *
     *	Контроллер страницы картинки(/picture/1)
     */

	//подключаем модели

	include_once '../models/CategoriesModel.php';
	include_once '../models/PicturesModel.php';

	/**
     *
     *	Формирование страницы картинки.
     *
     *	@param object $smarty шаблонизатор
     *
     */




	function indexAction($smarty){
        $itemId = isset($_GET['id']) ? $_GET['id'] : null;
        if($itemId == null)
            exit();

        //получить данные картинки
        $rsPicture = getPictureById($itemId);

        $smarty->assign('pageTitle', '');
        $smarty->assign('rsPicture', $rsPicture);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'product');
        loadTemplate($smarty, 'footer');
    }

