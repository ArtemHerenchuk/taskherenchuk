<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 16.11.2016
 * Time: 17:38
 */

	/**
     *	Контроллер главной страницы.
     *
     */

	//подключаем модели
	include_once '../models/CategoriesModel.php';
	include_once '../models/PicturesModel.php';

	function testAction(){
        echo 'IndexController.php > testAction';
    }

    /**
     *
     *
     * Асинхронная загрузка страницы с картинкой
     *
     *
     *
     */
    function openPictureAction(){
        $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
        if(!$itemId)
            return false;

        $resData = array();
        //получить данные картинки$
        $resData['rsPicture'] = getPictureById($itemId);

        $resData['rsCategory'] = getCategoryNameByID($itemId);

        echo json_encode($resData);

    }




	/**
     *формирование главной страницы сайта
     *
     *@param object $smarty шаблонизатор
     */
	function indexAction($smarty){
        $rsPictures = getLastPictures();
        $smarty->assign('pageTitle', 'Главная страница сайта');
        $smarty->assign('rsPictures', $rsPictures);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'download');
        loadTemplate($smarty, 'index');
        loadTemplate($smarty, 'footer');
    }

