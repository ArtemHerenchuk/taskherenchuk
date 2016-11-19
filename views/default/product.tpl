    {*страница продукта*}
    <html>
    <head>
        <title>{$pageTitle}</title>
        <link rel="stylesheet" href="{TemplateWebPath}css/main.css" type="text/css" />
        <script type="text/javascript" src="/js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </head>

    <body>
        <div id="picturePage">
            <h3>{$rsPicture['name']}</h3>
            <h3>Дата загрузки: {$rsPicture['datetime']}</h3>
            <form action="/download/update/" method="post">
                <textarea name="description" maxlength="200" placeholder="{$rsPicture['description']}"></textarea></br></br>
                <input type="submit"  value="Обновить комментарий">
            </form>
            <img src="/images/products/{$rsPicture['image_name']}">
        </div>
    </body>

