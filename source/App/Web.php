<?php

namespace Source\App;

use Source\Core\Controller;

/**
 * Web Controller
 * @package Source\App
 */
class Web extends Controller {

    /**
     * Web constructor.
     */
    public function __construct() {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * SITE HOME
     */
    public function home(): void {
        $head = $this->seo->render(
                CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
                CONF_SITE_DESC,
                url(),
                theme("/assets/images/share.jpg")
        );
        echo $this->view->render("home", [
            "head" => $head
        ]);
    }

    /**
     * SITE HOME
     */
    public function register(array $data): void {
        if (!empty($data)) {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            if (in_array($data['plan'], ['profissional', 'adulto', 'infantil'])) {
                $plan = $data['plan'];
            }
            switch ($plan) {
                case 'profissional':
                    $value = "69,00";
                    $plan_name = "Profissional";
                    $time_plan = 4;
                    $value_plan = "69,00";
                    $first_line = "Público de 10 anos em diante";
                    break;
                case 'adulto':
                    $value = "59,00";
                    $plan_name = "Adulto";
                    $time_plan = 3;
                    $value_plan = "59,00";
                    $first_line = "Público de 15 anos em diante";
                    break;
                case 'infantil':
                    $value = "49,00";
                    $plan_name = "Infantil";
                    $value_plan = "49,00";
                    $time_plan = 2;
                    $first_line = "Público de 5 a 15 anos";
                    break;
                default:
                    $value = "69,00";
                    $plan_name = "Profissional";
                    $time_plan = 4;
                    $first_line = "Público de 10 anos em diante";
                    break;
            }
        }
        $head = $this->seo->render(
                CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
                CONF_SITE_DESC,
                url(),
                theme("/assets/images/share.jpg")
        );
        echo $this->view->render("register", [
            "head" => $head,
            "plan" => $plan ?? null,
            "value" => $value ?? null,
            "value_plan" => $value_plan ?? "69,00",
            "plan_name" => $plan_name ?? "Profissional",
            "time_plan" => $time_plan ?? "4",
            "first_line" => $first_line ?? "Público de 10 anos em diante"
        ]);
    }

    /**
     * @param array $data
     * @throws \Exception
     */
    public function contact(array $data): void {
        if (empty($data)) {
            $json["message"] = $this->message->warning("Para enviar escreva sua mensagem.")->render();
            echo json_encode($json);
            return;
        }

        if (request_limit("appcontact", 3, 60 * 5)) {
            $json["message"] = $this->message->warning("Por favor, aguarde 5 minutos para enviar novos contatos")->render();
            echo json_encode($json);
            return;
        } else {
            $json['redirect'] = url("/obrigado");
        }
        echo json_encode($json);
        return;
    }

    public function optin(): void {
        $head = $this->seo->render(
                CONF_SITE_NAME . " - Contato",
                CONF_SITE_DESC,
                url("/termos"),
                theme("/assets/images/share.jpg")
        );
        echo $this->view->render("contact", [
            "head" => $head
        ]);
    }

    /**
     * SITE OPT-IN SUCCESS
     * @param array $data
     */
    public function success(array $data): void {
        $head = $this->seo->render(
                "Bem-vindo(a) ao " . CONF_SITE_NAME,
                CONF_SITE_DESC,
                url("/obrigado"),
                theme("/assets/images/share.jpg")
        );

        echo $this->view->render("optin", [
            "head" => $head,
            "data" => (object) [
                "title" => "Sua solicitação foi enviada :)",
                "desc" => "Em breve entraremos em contato com você!",
                "link" => url("/"),
                "linkTitle" => "Continue navegando...",
                "image" => theme("/assets/images/share.jpg")
            ],
            "track" => (object) [
                "fb" => "Lead",
                "aw" => CONF_SITE_GOOGLE_TRACK_CONVERSION
            ]
        ]);
    }

    /**
     * SITE NAV ERROR
     * @param array $data
     */
    public function error(array $data): void {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        $protocol = (isset($_SERVER["SERVER_PROTOCOL"]) ? $_SERVER["SERVER_PROTOCOL"] : "HTTP/1.0");
        $error = new \stdClass();

        switch ($data['errcode']) {
            case "problemas":
                $error->code = "OPS";
                $error->title = "Estamos enfrentando problemas!";
                $error->message = "Parece que nosso serviço não está diponível no momento. Já estamos vendo isso mas caso precise, envie um e-mail :)";
                $error->linkTitle = "ENVIAR E-MAIL";
                $error->link = "mailto:" . CONF_MAIL_SUPPORT;
                $error->httpResponseCode = header($protocol . " 503 Service Unavailable");
                break;

            case "manutencao":
                $error->code = "OPS";
                $error->title = "Desculpe. Estamos em manutenção!";
                $error->message = "Voltamos logo! Por hora estamos trabalhando para melhorar nosso conteúdo para você controlar melhor as suas contas :P";
                $error->linkTitle = null;
                $error->link = null;
                $error->httpResponseCode = header($protocol . " 503 Service Unavailable");
                break;

            default:
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indisponível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi removido :/";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                $error->httpResponseCode = header($protocol . ($data['errcode'] == 405 ? " 405 Method Not Allowed" : " 404 Not Found"));
                break;
        }

        $head = $this->seo->render(
                "{$error->code} | {$error->title}",
                $error->message,
                url("/ops/{$error->code}"),
                theme("/assets/images/share.jpg"),
                false
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);
    }

}
