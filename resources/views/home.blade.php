@extends('layouts.app')

@section('links')
<link href="{{ asset('varial/css/home.css') }}" rel="stylesheet">
<link href="{{ asset('varial/css/jquery-ui.css') }}" rel="stylesheet">
<script type="text/javascript" src="<?php echo asset('varial/jquery-ui.js') ?>"></script>

<script>
onload = function () {
    document.body.style.visibility = "visible";
}
$(function () {
    $("#datepicker").datepicker();
});

/* Brazilian initialisation for the jQuery UI date picker plugin. */
/* Written by Leonildo Costa Silva (leocsilva@gmail.com). */
(function (factory) {
    if (typeof define === "function" && define.amd) {

        // AMD. Register as an anonymous module.
        define(["../widgets/datepicker"], factory);
    } else {

        // Browser globals
        factory(jQuery.datepicker);
    }
}(function (datepicker) {

    datepicker.regional[ "pt-BR" ] = {
        closeText: "Fechar",
        prevText: "&#x3C;Anterior",
        nextText: "Próximo&#x3E;",
        currentText: "Hoje",
        monthNames: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
        monthNamesShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun",
            "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
        dayNames: [
            "Domingo",
            "Segunda-feira",
            "Terça-feira",
            "Quarta-feira",
            "Quinta-feira",
            "Sexta-feira",
            "Sábado"
        ],
        dayNamesShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
        dayNamesMin: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
        weekHeader: "Sm",
        dateFormat: "dd/mm/yy",
        firstDay: 0,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ""};
    datepicker.setDefaults(datepicker.regional[ "pt-BR" ]);

    return datepicker.regional[ "pt-BR" ];

}));
</script>
@yield('link')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="container-meio">
                    <div class="corpo">
                        <div class="fundo-meio"></div>

                        <!--conteudo da lateral esquerda-->
                        <div class="content-esquerdo">
                            <a href="#"><img class="slogan" src="{{ asset('varial/img/home/slogan.png') }}"></a> 
                            <a href="#"><img class="moca" src="{{ asset('varial/img/home/moca.png') }}"></a> 
                            <ul class="nav nav-pills nav-stacked" role="tablist">
                                <li class="active"><a href="#">Intranet</a></li>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">About</a></li>        
                            </ul>
                        </div>
                        <!--fim do conteudo da lateral esquerda-->
                        <!--conteudo do menu nav-->
                        <div class="content-direito">
                            <div class="menu-navegacao">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="pri"><a href="#">TML</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">About</a></li>        
                                </ul>
                            </div>
                            <!--fim do conteudo menu  nav-->
                            <div class="content-meio">
                                <!--onde vai chamar os modulos-->
                                <div class="meio">
                                    @yield('module')
                                </div>
                                <!--  conteudo do menu direito-->
                                <div class="menu-direito">
                                    <table class="t-funcoes">
                                        <tr>
                                            <th class="suporte"  title="Precione para registrar um chamado com a T.I"><a target=“_blank” href="http://localhost/projeto01/projeto0.1/vendor/glpi/">
                                                    <img src="{{ asset('varial/img/home/suporte.png') }}" title="Precione para registrar um chamado com a T.I"></a><br>
                                                Suporte
                                            </th>
                                            <th class="patrimonio" title="Precione para gerenciar o sistema de patrimonio">
                                                <img src="{{ asset('varial/img/home/patrimonio.png') }}" title="Precione para gerenciar o sistema de patrimonio"><br>
                                                Patrimonio
                                            </th>
                                            <th class="email" title="Precione para gerenciar os e-mails">
                                                <img src="{{ asset('varial/img/home/email.png') }}" title="Precione para gerenciar os e-mails"><br>
                                                E-Mail
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="lista-tel" title="Precione para verificar a lista telefonica">
                                                <img src="{{ asset('varial/img/home/tel.png') }}" title="Precione para verificar a lista telefonica"><br>
                                                Telefone
                                            </th>
                                            <th class="almoxarifado" title="Precione para gerenciar o sistema de almoxarife">
                                                <img  src="{{ asset('varial/img/home/almoxarife.png') }}" title="Precione para gerenciar o sistema de almoxarife"><br>
                                                Almoxarife
                                            </th>
                                        </tr>
                                    </table>
                                    <div class="calendario">
                                        <div id="datepicker"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rodape">
                        <p>Av. IX, 315 - Jereissati II, Maracanaú - CE, 61901-090 Telefone: (85) 3371-6162</p>
                        <p>Desenvolvido por Cyber Tec Informatica</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
