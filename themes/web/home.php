<?php $v->layout("_theme"); ?>

<!--HEADER-->
<article class="home_featured">
    <div class="home_featured_content container content">
        <header data-anime="400" class="home_featured_header fadeInDown">
            <h1>Escola de Surf</h1>
            <a href="<?= url("/matricula"); ?>"
               class="home_featured_btn gradient gradient-stimulus gradient-hover radius transition">
                Matricule-se</a>
        </header>
    </div>
</article>

<!--FEATURES-->
<article class="home_optin">
    <div data-anime="800" class="home_optin_content container content fadeInDown">
        <div class="home_optin_content_flex">
            <img src="<?= theme("/assets/images/foto-galeria.jpg"); ?>" class="radius" alt="<?= CONF_SITE_NAME; ?>" title="<?= CONF_SITE_NAME; ?>">                    
            <div class="home_modal_box">
                <div class="embed">
                    <iframe width="200" height="100"
                            src="<?= CONF_SITE_LOCATION; ?>" 
                            frameborder="0" 
                            style="border-radius: 15px;
                            -moz-border-radius: 15px;
                            -webkit-border-radius: 15px;"
                            allowfullscreen="" aria-hidden="false" tabindex="0">                                    
                    </iframe>
                </div>
            </div>  
        </div>
        <header class="home_optin_content_flex">
            <h2><span>Aulas</span> em uma das melhores praias do <span>Rio</span>.</h2>
            <ul class="home_optin_content_flex_list">
                <li><img src="<?= theme("/assets/images/costa.png"); ?>" alt="8Km de costa">8Km de costa</li>
                <li><img src="<?= theme("/assets/images/restaurantes.png"); ?>" alt="Restaurantes à beira-mar">Restaurantes à beira-mar</li>
                <li><img src="<?= theme("/assets/images/salva-vidas.png"); ?>" alt="Salva-vidas a cada 300m">Salva-vidas a cada 300m</li>
            </ul>
            <p>A Praia da Reserva, também conhecida como Praia da Reserva de Marapendi, é uma praia situada no bairro 
                da Barra da Tijuca, na Zona Oeste da cidade do Rio de Janeiro. Com cerca de 8,0 km de extensão, localiza-se 
                entre a Praia da Barra da Tijuca e a Praia do Recreio.</p>
        </header>
    </div>
</article>

<!--PLANS-->
<div class="home_features activities_plan fadeInDown" data-anime="24">
    <h2>Aulas</h2>
    <section class="container content">
        <div class="home_features_content about_custom transition">
            <article class="radius custom_plan transition">
                <div class="spotlight-1">
                    <img src="<?= theme("/assets/images/surfbot-icon-1.svg"); ?>" alt="Surfboat">
                </div>
                <div class="custom_plan_title">Infantil</div>
                <div class="custom_plan_description">
                    <ul>
                        <li>Público de 5 a 15 anos</li>
                        <li>Fornecimento de equipamento</li>
                        <li>Horários de Segunda à Sábado</li>
                        <li>2 horas de aula</li>
                    </ul>
                </div>
                <div class="custom_plan_price radius">R$ 49,00/Aula</div>
                <a href="<?= url("/matricula/infantil"); ?>"  title="Quero me Matricular!">
                    <span style="margin: 10px;"
                          class="icon-check-square-o plan_btn gradient gradient-blue gradient-hover radius transition">
                        Quero me Matricular!</span>
                </a>
            </article>
            <article class="radius custom_plan transition">
                <div class="spotlight-2">
                    <img src="<?= theme("/assets/images/surfbot-icon-2.svg"); ?>" alt="Surfboat">
                </div>
                <div class="custom_plan_title">Adulto</div>
                <div class="custom_plan_description">
                    <ul>
                        <li>Público de 15 anos em diante</li>
                        <li>Fornecimento de equipamento</li>
                        <li>Horários de Segunda à Sábado</li>
                        <li>3 horas de aula</li>
                    </ul>
                </div>
                <div class="custom_plan_price radius">R$ 59,00/Aula</div>
                <a href="<?= url("/matricula/adulto"); ?>"  title="Quero me Matricular!">
                    <span style="margin: 10px;"
                          class="icon-check-square-o plan_btn gradient gradient-blue gradient-hover radius transition">
                        Quero me Matricular!</span>
                </a>
            </article>
            <article class="radius custom_plan transition">
                <div class="spotlight-3">
                    <img src="<?= theme("/assets/images/surfbot-icon-3.svg"); ?>" alt="Surfboat">
                </div>
                <div class="custom_plan_title">Profissional</div>
                <div class="custom_plan_description">
                    <ul>
                        <li>Público de 10 anos em diante</li>
                        <li>Fornecimento de equipamento</li>
                        <li>Horários de Segunda à Sábado</li>
                        <li>4 horas de aula</li>
                    </ul>
                </div>
                <div class="custom_plan_price radius">R$ 69,00/Aula</div>
                <a href="<?= url("/matricula/profissional"); ?>"  title="Quero me Matricular!">
                    <span style="margin: 10px;"
                          class="icon-check-square-o plan_btn gradient gradient-blue gradient-hover radius transition">
                        Quero me Matricular!</span>
                </a>
            </article>
        </div>
        <div class="home_features_content_text_bottom">
            <p>Possui um grupo com mais de <span style="color: #FF3726;">3 pessoas</span>?</p>
            <p>Entre <span style="border-bottom: 2px solid #FF3726;">em contato</span> para obter um desconto personalizado</p>
        </div>
    </section>
</div>

<!-- BREAK FLOW-->
<article class="home_break_flow">
    <div class="home_break_flow_content container content">
        <header>
            <h2>“O surf liberta as ondas de uma vida”</h2>
            <p>Regis Pereira</p>
        </header>
    </div>
</article>

<!--CONTACT -->
<article class="home_optin contact">
    <div class="home_optin_header">
        <h2>Contato</h2>
    </div>
    <div class="home_optin_content container content">
        <div class="home_optin_content_flex">
            <form action="<?= url("/contato"); ?>" method="post" enctype="multipart/form-data">
                <div class="ajax_response"><?= flash(); ?></div>
                <?= csrf_input(); ?>
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required/>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required/>
                <label for="message">Mensagem</label>
                <textarea name="message" id="message" required></textarea>
                <button class="radius transition gradient gradient-blue gradient-hover">Enviar</button>
            </form>
        </div>
        <div class="home_optin_content_flex_contact">
            <p class="icon-phone"><b>Telefone:</b></p>
            <p><?= CONF_SITE_TELEPHONE; ?></p>
            <p class="icon-envelope"><b>Email:</b> </p>
            <p><?= CONF_SITE_MAIL; ?></p>
            <p class="icon-map-marker"><b>Endereço:</b></p>
            <p><?=
                CONF_SITE_ADDR_STREET . ", nº "
                . CONF_SITE_ADDR_NUMBER . "<br>"
                . CONF_SITE_ADDR_COMPLEMENT . ", "
                . CONF_SITE_ADDR_CITY . "-"
                . CONF_SITE_ADDR_STATE . "<br>" .
                "CEP: " . CONF_SITE_ADDR_ZIPCODE . " ";
                ?>
            </p>    
            <p class="icon-clock-o"><b>Funcionamento:</b></p>
            <p><?= CONF_SITE_OPEN; ?><br> 
                <?= CONF_SITE_OPEN_WEEKEND; ?></p>
        </div>
        <img class="feature" src="<?= theme("/assets/images/feature.png"); ?>" alt="Surfboat">
    </div>
</article>
