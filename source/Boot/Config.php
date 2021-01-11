<?php

date_default_timezone_set("America/Sao_Paulo");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.rodrigobrito.dev.br/projetos/surfbot");
define("CONF_URL_TEST", "https://www.localhost/surfbot");

/**
 * SITE
 */
define("CONF_SITE_NAME", "Surfbot");
define("CONF_SITE_TITLE", "Escola de Surf");
define("CONF_SITE_DESC", "Aulas de Surf em uma das melhores praias do Rio.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "rodrigobrito.dev.br/projetos/surfbot");
define("CONF_SITE_ADDR_STREET", "Rua X");
define("CONF_SITE_ADDR_NUMBER", "000");
define("CONF_SITE_ADDR_COMPLEMENT", "Complemento");
define("CONF_SITE_ADDR_CITY", "Rio de Janeiro");
define("CONF_SITE_ADDR_STATE", "RJ");
define("CONF_SITE_ADDR_ZIPCODE", "00.000-000");
define("CONF_SITE_TELEPHONE", "(21) 99224-7968");
define("CONF_SITE_MAIL", "contato@rodrigobrito.dev.br");
define("CONF_SITE_OPEN", "Seg-Sáb: de 06:00h às 14:00h");
define("CONF_SITE_OPEN_WEEKEND", "Dom: de 06:00h às 12:00h");
define("CONF_SITE_GOOGLE_TRACK_CONVERSION", "AW-599866664/1d5lCNDZ59wBEKj6hJ4C");
define("CONF_SITE_GOOGLE_TRACK_VIP_CONVERSION", "AW-599866664/1d5lCNDZ59wBEKj6hJ4C");
define("CONF_SITE_LOCATION", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7344.469503402941!2d-43.39473966829419!3d-23.01515131151731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdb085a079173%3A0xbd0152870ed422be!2sPraia%20da%20Reserva!5e0!3m2!1spt-BR!2sbr!4v1606015657422!5m2!1spt-BR!2sbr");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@creator");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@creator");
define("CONF_SOCIAL_FACEBOOK_APP", "5555555555");
define("CONF_SOCIAL_FACEBOOK_PAGE", "facebook_page");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "author");
define("CONF_SOCIAL_GOOGLE_PAGE", "5555555555");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "5555555555");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "insta");
define("CONF_SOCIAL_YOUTUBE_PAGE", "youtube");
define("CONF_SOCIAL_VIDEO", "J2FzwNIi1zo");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "web");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);


/*
 * EMAIL
 */
define("CONF_MAIL_SUPPORT", "contato@rodrigobrito.dev.br");
