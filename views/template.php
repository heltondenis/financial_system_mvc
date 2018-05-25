<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gerenciamento - <?php echo $viewData['company_name']; ?></title>
    </head>
    <body>
        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </body>
</html>
