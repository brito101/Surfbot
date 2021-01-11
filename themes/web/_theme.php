<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="mit" content="2020-07-10T19:04:58-03:00+169593">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <?= $head; ?>
        <link rel="icon" type="image/png" href="<?= theme("/assets/images/logo.png"); ?>"/>
        <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
    </head>
    <body>

        <div class="ajax_load">
            <div class="ajax_load_box">
                <div class="ajax_load_box_circle"></div>
                <p class="ajax_load_box_title">Aguarde, carregando...</p>
            </div>
        </div>

        <!--HEADER-->
        <header class="main_header gradient gradient-blue">
            <div class="container">
                <div class="main_header_logo">
                    <a class="transition" title="Home" href="<?= url(); ?>">
                        <div class="main_header_logo_img">
                            <img id="logo" src="<?= theme("/assets/images/logo-name.png"); ?>" alt="<?= CONF_SITE_NAME; ?>" title="<?= CONF_SITE_NAME; ?> ">         
                        </div>
                    </a>
                </div>

                <nav class="main_header_nav">
                    <span class="main_header_nav_mobile j_menu_mobile_open icon-menu icon-notext radius transition"></span>
                    <div class="main_header_nav_links j_menu_mobile_tab">
                        <span class="main_header_nav_mobile_close j_menu_mobile_close icon-error icon-notext transition"></span>
                        <a class="link transition radius" title="Praia" data-go=".home_optin" style="cursor: pointer;">Praia</a>
                        <a class="link transition radius" title="Aulas" data-go=".activities_plan" style="cursor: pointer;">Aulas</a>
                        <a class="link transition radius" title="Contato" data-go=".contact" style="cursor: pointer;">Contato</a>
                        <a class="matricula transition radius" title="Matrícula" href="<?= url("/matricula"); ?>">Matrícula</a>
                    </div>
                </nav>
            </div>
        </header>

        <!--CONTENT-->
        <main class="main_content">
            <?= $v->section("content"); ?>
        </main>

        <!--FOOTER-->
        <footer class="main_footer gradient gradient-blue">
            <div class="container main_footer_content">
                <p>SurfBot <?= date("Y"); ?> - Todos os direitos reservados</p>
                <img id="logo" src="<?= theme("/assets/images/logo-white.png"); ?>" alt="<?= CONF_SITE_NAME; ?>" title="<?= CONF_SITE_NAME; ?> ">         
            </div>  
        </footer>
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-599866664"></script>
        <script src="<?= theme("/assets/scripts.js"); ?>"></script>
        <?= $v->section("scripts"); ?>
    </body>
</html>