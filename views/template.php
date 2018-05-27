<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel - <?php echo $viewData['company_name']; ?></title>
        <link href="<?php echo BASE_URL; ?>/assets/css/template.css" rel="stylesheet" />
    </head>
    <body>
        <div class="leftmenu">
            <div class="company_name">
                <?php echo $viewData['company_name']; ?>
            </div>
            <div class="menuarea">
                <ul>
                    <li><a href="<?php BASE_URL; ?>">Home</a></li>
                    <li><a href="<?php BASE_URL; ?>permissoes">Permissões</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="top">
                <div class="top_right"><a href="<?php echo BASE_URL; ?>/login/logout">Sair</a></div>
                <div class="top_right"><?php echo $viewData['user_email']; ?></div>
            </div>
        
        <div class="area">
       <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </div>
    </div>
    </body>
</html>
