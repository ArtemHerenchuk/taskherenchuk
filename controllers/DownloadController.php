<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 18.11.2016
 * Time: 21:18
 */

include_once '../models/PicturesModel.php';

function downloadAction()
{
    $resData = array();
    if ($_FILES["filename"]["size"] > 1024 * 1024) {
        echo "Размер изображения больше 1МБ, что недопустимо!";
        exit();
    }
    if ($_POST['text'])
        htmlspecialchars($_POST['text']);
    else
        echo "pzdc";

    if ($_POST['description'])
        htmlspecialchars($_POST['description']);
    else
        echo 'pzdc';


    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        move_uploaded_file($_FILES["filename"]["tmp_name"], "images/products/" . $_FILES["filename"]["name"]);
        $resData['name'] = $_POST['text'];
        $resData['image_name'] = $_FILES['filename']['name'];

        $resData['size'] = $_FILES["filename"]["size"];

        $resData['description'] = $_POST['description'];
    } else {
        echo "Ошибка загрузки";
    }

    insertDataPicture($resData);
    redirect('/../');
}

function updateAction(){
    $resData = array();
    if($_POST['description'])
        $resData['description'] = trim(htmlspecialchars($_POST['description']));
    else
        echo 'Ошибка обновления';

    updateDataPicture($resData);
    redirect('/../');
}







