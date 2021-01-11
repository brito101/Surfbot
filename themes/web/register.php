<?php $v->layout("_theme_out"); ?>

<!--CONTACT -->
<article class="home_optin contact">
    <div class="home_optin_header" style="background-color: #EFF4F9; padding: 30px; margin-top: -30px;">
        <h2>Matricule-se</h2>
    </div>
    <div class="home_optin_content container content">
        <div class="home_optin_content_flex">
            <form action="<?= url("/contato"); ?>" method="post" enctype="multipart/form-data">
                <div class="ajax_response"><?= flash(); ?></div>
                <?= csrf_input(); ?>
                <label for="name">Nome Completo</label>
                <input type="text" name="name" id="name" required/>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required/>
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" required placeholder="000.000.000-00" />
                <div class="form_register">
                    <div class="form_register_label">
                        <label for="address">Endereço</label>
                        <input type="text" name="address" id="address" required placeholder="Rua, nº, Bairro"/>
                    </div>
                    <div class="form_register_label">
                        <label for="city">Cidade</label>
                        <input type="text" name="city" id="address" required placeholder="Cidade"/>
                    </div>
                </div>
                <div class="form_register">
                    <div class="form_register_label">
                        <label for="zipcode">CEP</label>
                        <input type="text" name="zipcode" id="zipcode" required placeholder="00.000-000"/>
                    </div>
                    <div class="form_register_label">
                        <label for="state">Estado</label>
                        <select name="state" id="state" required style="color: #7F8285;">
                            <option value="default">Selecione um estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                </div>

                <h3 class="form_paymant">Foma de pagamento</h3>

                <div class="pay_method">
                    <span class="credit_card">
                        <input type="radio" id="credit_card" name="pay_method" value="credit_card">
                        <label for="credit_card">Cartão de Crédito</label>                        
                    </span>
                    <span class="debit_card">
                        <input type="radio" id="debit_card" name="pay_method" value="debit_card">
                        <label for="debit_card">Cartão de Débito</label>  
                    </span>
                </div>

                <div class="form_register">
                    <div class="form_register_label">
                        <label for="card_name">Nome do Cartão</label>
                        <input type="text" name="card_name" id="card_name" required placeholder="Nome impresso no cartão"/>
                    </div>
                    <div class="form_register_label">
                        <label for="card_expiration">Validade</label>
                        <input type="text" name="card_expiration" id="card_expiration" required placeholder="MM/AA"/>
                    </div>
                </div>

                <div class="form_register">
                    <div class="form_register_label">
                        <label for="card_number">Número do Cartão</label>
                        <input type="text" name="card_number" id="card_number" required placeholder="0000 00000 0000 0000"/>
                    </div>
                    <div class="form_register_label">
                        <label for="city">Código de Segurança</label>
                        <input type="text" name="city" id="address" required placeholder="000" maxlength="3"/>
                    </div>
                </div>
                <?php if (!empty($value)): ?>
                    <h3 class="value_paymant">Seu cartão será debitado em R$ <?= $value; ?></h3>
                <?php else: ?>
                    <h3 class="value_paymant">Selecione um plano</h3>
                <?php endif; ?>
                <button class="radius transition gradient gradient-blue gradient-hover">Realizar Matrícula</button>

                <div class="information_security">
                    <img src="<?= theme("/assets/images/cadeado.png"); ?>" alt="cadeado">
                    <span>Informações seguras e criptografadas</span>
                </div>
            </form>
        </div>

        <div class="register_plan">
            <h3 class="header_register">Escolha um Plano</h3>
            <div class="header_register_box">

                <div class="header_register_box_option-1">
                    <input type="radio" name="plan" id="infantil" value="infantil" class="header_register_box_input">
                    <label for="infantil">Infantil</label>    
                </div>
                <div class="header_register_box_option-2">
                    <input type="radio" name="plan" id="adulto" value="adulto" class="header_register_box_input">
                    <label for="adulto">Adulto</label>
                </div>
                <div class="header_register_box_option-3">                  
                    <input type="radio" name="plan" id="profissional" value="profissional" class="header_register_box_input">
                    <label for="profissional">Profissional</label>
                </div>
            </div>

            <article class="radius custom_plan transition register_plan_box">
                <div class="spotlight-4">
                    <?php if ($plan == "infantil"): ?>
                        <img src="<?= theme("/assets/images/surfbot-icon-1.svg"); ?>" alt="Surfboat"class="pattern-icon">
                    <?php elseif ($plan == "adulto"): ?>
                        <img src="<?= theme("/assets/images/surfbot-icon-2.svg"); ?>" alt="Surfboat" style="margin-left: -10px;" class="pattern-icon">
                    <?php else: ?>
                        <img src="<?= theme("/assets/images/surfbot-icon-3.svg"); ?>" alt="Surfboat" style="margin-left: -30px;" class="pattern-icon">
                    <?php endif; ?>
                    <img src="<?= theme("/assets/images/surfbot-icon-1.svg"); ?>" alt="Surfboat" id="icon-surf-1" class="icon-hidden" style="display: none;">
                    <img src="<?= theme("/assets/images/surfbot-icon-2.svg"); ?>" alt="Surfboat" style="margin-left: -10px; display: none;" id="icon-surf-2" class="icon-hidden">
                    <img src="<?= theme("/assets/images/surfbot-icon-3.svg"); ?>" alt="Surfboat" style="margin-left: -30px; display: none;" id="icon-surf-3" class="icon-hidden">
                </div>
                <div class="custom_plan_title"><?= $plan_name; ?></div>
                <div class="custom_plan_description custom_plan_description_custom">
                    <ul>
                        <li><?= $first_line; ?></li>
                        <li>Fornecimento de equipamento</li>
                        <li>Horários de Segunda à Sábado</li>
                        <li><?= $time_plan; ?> horas de aula</li>
                    </ul>
                </div>
                <div class="custom_plan_price radius custom_plan_price_custom">R$ <?= $value_plan; ?>/Aula</div>
            </article>
        </div>
    </div>
</article>