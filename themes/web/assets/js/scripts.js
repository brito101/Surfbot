$(function () {
    // mobile menu open
    $(".j_menu_mobile_open").click(function (e) {
        e.preventDefault();

        $(".j_menu_mobile_tab").css("left", "auto").fadeIn(1).animate({"right": "0"}, 200);
    });

    // mobile menu close
    $(".j_menu_mobile_close").click(function (e) {
        e.preventDefault();

        $(".j_menu_mobile_tab").animate({"left": "100%"}, 200, function () {
            $(".j_menu_mobile_tab").css({
                "right": "auto",
                "display": "none"
            });
        });
    });

    // scroll animate
    $("[data-go]").click(function (e) {
        e.preventDefault();

        var goto = $($(this).data("go")).offset().top;
        $("html, body").animate({scrollTop: goto}, goto / 2, "easeOutBounce");
    });

    // modal open
    $("[data-modal]").click(function (e) {
        e.preventDefault();

        var modal = $(this).data("modal");
        $(modal).fadeIn(200).css("display", "flex");
    });

    // modal close
    $(".j_modal_close").click(function (e) {
        e.preventDefault();

        if ($(e.target).hasClass("j_modal_close")) {
            $(".j_modal_close").fadeOut(200);
        }

        var iframe = $(this).find("iframe");
        if (iframe) {
            iframe.attr("src", iframe.attr("src"));
        }
    });

    // collpase
    $(".j_collapse").click(function () {
        var collapse = $(this);

        collapse.parents().find(".j_collapse_icon").removeClass("icon-minus").addClass("icon-plus");
        collapse.find(".j_collapse_icon").removeClass("icon-plus").addClass("icon-minus");

        if (collapse.find(".j_collapse_box").is(":visible")) {
            collapse.find(".j_collapse_box").slideUp(200);
        } else {
            collapse.parent().find(".j_collapse_box").slideUp(200);
            collapse.find(".j_collapse_box").slideDown(200);
        }
    });

    //ajax form
    $("form:not('.ajax_off')").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var load = $(".ajax_load");
        var flashClass = "ajax_response";
        var flash = $("." + flashClass);

        form.ajaxSubmit({
            url: form.attr("action"),
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                load.fadeIn(200).css("display", "flex");
            },
            success: function (response) {
                //redirect
                if (response.redirect) {
                    window.location.href = response.redirect;
                } else {
                    load.fadeOut(200);
                }

                //message
                if (response.message) {
                    if (flash.length) {
                        flash.html(response.message).fadeIn(100).effect("bounce", 300);
                    } else {
                        form.prepend("<div class='" + flashClass + "'>" + response.message + "</div>")
                                .find("." + flashClass).effect("bounce", 300);
                    }
                } else {
                    flash.fadeOut(100);
                }
            },
            complete: function () {
                if (form.data("reset") === true) {
                    form.trigger("reset");
                }
            }
        });
    });

    $("#cpf").mask('000.000.000-00', {reverse: true});
    $("#zipcode").mask('00.000-000', {reverse: true});
    $("#card_number").mask('0000 0000 0000 0000', {reverse: true});
    $("#card_expiration").mask('00/00', {reverse: true});

    $('input[id="credit_card"]').on("click", function () {
        if ($(this).is(':checked')) {
            $(".credit_card").css("background-color", "#BBCBD9");
            $(".debit_card").css("background-color", "#EFF4F9");
        }
    });

    $('input[id="debit_card"]').on("click", function () {
        if ($(this).is(':checked')) {
            $(".debit_card").css("background-color", "#BBCBD9");
            $(".credit_card").css("background-color", "#EFF4F9");
        }
    });

    $('input[id="infantil"]').on("click", function () {
        if ($(this).is(':checked')) {
            $(".header_register_box_option-1").css("background-color", "#BBCBD9");
            $(".header_register_box_option-2").css("background-color", "#FFF");
            $(".header_register_box_option-3").css("background-color", "#FFF");
            $(".custom_plan_title").text("Infantil");
            $(".custom_plan_price").text("R$ 49,00/Aula");
            $(".custom_plan_description").html(
                    "<ul><li>Público de 5 a 15 anos</li><li>Fornecimento de equipamento</li><li>Horários de Segunda à Sábado</li><li>2 horas de aula</li></ul>"
                    );
            $(".value_paymant").text("Seu cartão será debitado em R$ 49,00");
            $(".pattern-icon").hide();
            $(".icon-hidden").hide();
            $("#icon-surf-1").show();
        }
    });

    $('input[id="adulto"]').on("click", function () {
        if ($(this).is(':checked')) {
            $(".header_register_box_option-2").css("background-color", "#BBCBD9");
            $(".header_register_box_option-1").css("background-color", "#FFF");
            $(".header_register_box_option-3").css("background-color", "#FFF");
            $(".custom_plan_title").text("Adulto");
            $(".custom_plan_price").text("R$ 59,00/Aula");
            $(".custom_plan_description").html(
                    "<ul><li>Público de 15 anos em diante</li><li>Fornecimento de equipamento</li><li>Horários de Segunda à Sábado</li><li>3 horas de aula</li></ul>"
                    );
            $(".value_paymant").text("Seu cartão será debitado em R$ 59,00");
            $(".pattern-icon").hide();
            $(".icon-hidden").hide();
            $("#icon-surf-2").show();
        }
    });

    $('input[id="profissional"]').on("click", function () {
        if ($(this).is(':checked')) {
            $(".header_register_box_option-3").css("background-color", "#BBCBD9");
            $(".header_register_box_option-1").css("background-color", "#FFF");
            $(".header_register_box_option-2").css("background-color", "#FFF");
            $(".custom_plan_title").text("Profissional");
            $(".custom_plan_price").text("R$ 69,00/Aula");
            $(".custom_plan_description").html(
                    "<ul><li>Público de 10 anos em diante</li><li>Fornecimento de equipamento</li><li>Horários de Segunda à Sábado</li><li>4 horas de aula</li></ul>"
                    );
            $(".value_paymant").text("Seu cartão será debitado em R$ 69,00");
            $(".pattern-icon").hide();
            $(".icon-hidden").hide();
            $("#icon-surf-3").show();
        }
    });

});

window.SimpleAnime = class {
    constructor() {
        this.items = document.querySelectorAll("[data-anime]"), this.init();
    }
    animateItems() {
        this.items.forEach(t => {
            const e = Number(t.getAttribute("data-anime"));
            isNaN(e) || setTimeout(() => {
                t.classList.add("anime");
            }, e);
        });
    }
    handleVisibility() {
        void 0 !== document.visibilityState ? "visible" === document.visibilityState && this.animateItems() : this.animateItems();
    }
    init() {
        this.handleVisibility = this.handleVisibility.bind(this), this.handleVisibility(), document.addEventListener("visibilitychange", this.handleVisibility);
    }
};

new SimpleAnime();

