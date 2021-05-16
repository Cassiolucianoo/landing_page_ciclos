<?php
 $page        = 'home';
 $title       = 'Projeto Ciclos';
 $description = '';
 $keywords    = '';
 $canonical   = "index.php";
 include 'header.php';
?>



<body data-enllax-ratio="0.25">

    <!--  Inicio scroll -->
    <div class="scroll">

        <!-- inicio main  -->
        <main>

            <section class="logo" data-enllax-ratio="0.02" data-enllax-type="foreground">
                <div class="container">
                    <div class="row justify-content-lg-center justify-content-xl-start">
                        <div class="col-12 col-lg-3 col-xl-2 offset-xl-1 align-self-center">
                            <h2>Projeto</h2>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-3 align-self-center">
                            <img src="assets/img/logo.png" class="logo">
                        </div>
                        <div class="col-12 col-lg-4 col-xl-4 align-self-center">
                            <h3>A vida acontece em ciclos.</h3>
                            <img src="assets/img/logofernada.png" class="logof">
                        </div>
                    </div>
                </div>
            </section>


            <section class="texto">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-7">
                            <h2 class="margin">O <strong>Ciclos</strong> é um projeto social GRATUITO comprometido em
                                apoiar mulheres que estejam encontrando alguma dificuldade em engravidar naturalmente.
                            </h2>
                            <img class="ramo" src="assets/img/flo1.png" data-enllax-ratio="0.1"
                                data-enllax-type="foreground" />
                            <p> É uma inciativa que envolve <strong>acolhimento</strong>, mas que, por ironia do
                                destino,
                                nasce em meio ao isolamento social. Estamos passando por um momento ímpar da humanidade:
                                o afastamento físico imposto por um vírus. Mas o ser humano se reinventou e se aproximou
                                virtualmente. </p>

                            <p> Como todo ciclo, essa fase teve um <strong>começo</strong> e também terá um
                                <strong>fim</strong>.
                            </p>

                            <p> Para muitas mulheres, algumas já pacientes da Reprodução Assistida, o <strong>sonho da
                                    gestação foi adiado</strong> pela pandemia de COVID-19. </p>

                            <p class="margin">Diante de uma doença nova, com tantas incertezas, a primeira recomendação
                                foi que os tratamentos de reprodução assistida fossem suspensos. <strong>Hoje</strong>,
                                já temos flexibilidade e alguns tratamentos estão sendo retomados.</p>

                            <h2 class="margin">Isso também vai passar!</h2>

                            <img class="lua" src="assets/img/luasemeialua.png" data-enllax-ratio="0.17"
                                data-enllax-type="foreground" />

                            <p>Nosso objetivo, nesse momento, é oferecer suporte e ferramentas para que você passe por
                                esse ciclo da melhor maneira possível. Nossa munição, nessa batalha, é a informação.
                            </p>

                            <p>Por isso, você está convidada para participar de um ciclo de encontros
                                <em> EXCLUSIVAS</em> para mulheres que encontram dificuldades na jornada para
                                engravidar.
                            </p>

                            <p class="margin">Queremos dividir conhecimento e, ao mesmo tempo, escutar e conhecer você,
                                ajudá-la a passar por essa fase e prepará-la para o próximo ciclo, o da
                                <em>REALIZAÇÃO</em>.
                            </p>

                            <p class="branco margin">Para isso, organizamos encontros <em>GRATUITOS</em>, com vagas
                                <em>LIMITADAS</em>. Utilizaremos salas virtuais <em>EXCLUSIVAS</em> para nos encontrar e
                                discutir com total <em>PRIVACIDADES</em> a respeito de alguns assuntos.
                            </p>

                            <ul>
                                <li><strong>26/05/20 - TERÇA</strong> Reserva ovariana e o impacto na fertilidade
                                    feminina;</li>
                                <li><strong>29/05/20 - SEXTA</strong> Etapas da fertilização in vitro;</li>
                                <li><strong>02/06/20 - TERÇA</strong> Fator masculino de infertilidade;</li>
                                <li><strong>05/06/20 - SEXTA</strong> Nutrição e fertilidade.</li>
                            </ul>

                            <p class="rosa">Encontros sempre às 18h</p>

                            <p class="branco">Todos os encontros serão <em>on-line</em> e <em>ao vivo</em>. Se você se
                                interessou e gostaria de participar do <em>Projeto Ciclos</em>, responda a
                                <em>todas</em> as perguntas abaixo e seja muito bem-vinda!
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <section class="linha">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-11 offset-lg-1">

                            <img src="assets/img/flor.png" class="flor" data-enllax-ratio="0.4"
                                data-enllax-type="foreground" />
                        </div>
                    </div>
                </div>
            </section>


            <!-- ********************************** Formulario aqui **************************************** -->


            <section class="form">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-7">
                            <h2>Formulário de participação dos encontros</h2>


                            <div id="mauticform_wrapper_encontrospesquisa" class="mauticform_wrapper">
                                <form autocomplete="false" role="form" method="post" action="./email.php"
                                    id="mauticform_encontrospesquisa" data-mautic-form="encontrospesquisa"
                                    enctype="multipart/form-data">


                                    <div>
                                        <div data-validate="email" data-validation-type="email"
                                            class="mauticform-row mauticform-email mauticform-field-1 mauticform-required">

                                            <h3 class="amarelo">Endereço de e-mail</h3>

                                            <h4>(o link exclusivo para participar dos encontros será enviado para seu
                                                e-mail):</h4>

                                            <!-- input email -->
                                            <input id="mauticform_input_encontrospesquisa_email" name="email"
                                                class="field" type="email" placeholder="seuemail@dominio.com.br" />
                                        </div>


                                        <div id="sliderMobile">

                                            <div class="slider">

                                                <!-- inicio Pergunta de numero 1-->
                                                <div class="item">

                                                    <div id="mauticform_encontrospesquisa_ha_quanto_tempo_voce_tent"
                                                        data-validate="ha_quanto_tempo_voce_tent"
                                                        data-validation-type="radiogrp"
                                                        class="mauticform-row mauticform-radiogrp mauticform-field-3 mauticform-required">

                                                        <h3><strong>1)</strong> Há quanto tempo você tenta engravidar?
                                                        </h3>

                                                        <div class="mauticform-radiogrp-row">


                                                            <input type="radio" id="pergunta1ate1ano" name="pergunta1"
                                                                value="Até 1 ano">
                                                            <label for="pergunta1ate1ano">Até 1 ano</label><br>

                                                            <input type="radio" id="pergunta1ate2a4anos"
                                                                name="pergunta1" value="2 a 4 anos">
                                                            <label for="pergunta1ate2a4anos">2 a 4 anos</label><br>

                                                            <input type="radio" id="pergunta1maisde4" name="pergunta1"
                                                                value="Mais de 4 anos">
                                                            <label for="pergunta1maisde4">Mais de 4 anos</label><br>

                                                        </div>
                                                        <span class="seta prev"></span><span class="seta next">Próxima
                                                            ></span>

                                                    </div>

                                                </div>
                                                <!-- Fim Pergunta de numero 1 -->

                                                <!-- inicio Pergunta de numero 2 -->
                                                <div class="item">

                                                    <div id="mauticform_encontrospesquisa_ha_quanto_tempo_voce_tent"
                                                        data-validate="ha_quanto_tempo_voce_tent"
                                                        data-validation-type="radiogrp"
                                                        class="mauticform-row mauticform-radiogrp mauticform-field-3 mauticform-required">

                                                        <h3><strong>2)</strong> Você tem indicação para realizar
                                                            fertilização in vitro?</h3>

                                                        <div class="mauticform-radiogrp-row">

                                                            <input type="radio" id="pergunta2sim" name="pergunta2"
                                                                value="Sim">
                                                            <label for="pergunta2sim">Sim</label><br>

                                                            <input type="radio" id="pergunta2nao" name="pergunta2"
                                                                value="Não">
                                                            <label for="pergunta2nao">Não</label><br>

                                                        </div>
                                                        <span class="seta prev">
                                                            < Anterior</span><span class="seta next">Próxima ></span>

                                                    </div>

                                                </div>
                                                <!-- Fim Pergunta de numero 2 -->


                                                <!-- inicio Pergunta de numero 3 -->
                                                <div class="item">

                                                    <div id="mauticform_encontrospesquisa_ha_quanto_tempo_voce_tent"
                                                        data-validate="ha_quanto_tempo_voce_tent"
                                                        data-validation-type="radiogrp"
                                                        class="mauticform-row mauticform-radiogrp mauticform-field-3 mauticform-required">

                                                        <h3><strong>3)</strong> O seu tratamento foi adiado por causa da
                                                            pandemia de COVID-19?</h3>

                                                        <div class="mauticform-radiogrp-row">

                                                            <input type="radio" id="pergunta3sim" name="pergunta3"
                                                                value="Sim">
                                                            <label for="pergunta3sim">Sim</label><br>

                                                            <input type="radio" id="pergunta3nao" name="pergunta3"
                                                                value="Não">
                                                            <label for="pergunta3nao">Não</label><br>

                                                            <input type="radio" id="pergunta3naoestavaemtratamento"
                                                                name="pergunta3" value="Não estava em tratamento">
                                                            <label for="pergunta3naoestavaemtratamento">Não estava em
                                                                tratamento</label><br>

                                                        </div>
                                                        <span class="seta prev">
                                                            < Anterior</span><span class="seta next">Próxima >

                                                    </div>

                                                </div>
                                                <!-- Fim Pergunta de numero 3 -->

                                                <!-- inicio Pergunta de numero 4 -->
                                                <div class="item">

                                                    <div id="mauticform_encontrospesquisa_ha_quanto_tempo_voce_tent"
                                                        data-validate="ha_quanto_tempo_voce_tent"
                                                        data-validation-type="radiogrp"
                                                        class="mauticform-row mauticform-radiogrp mauticform-field-3 mauticform-required">

                                                        <h3><strong>4)</strong>Como você se sente em relação ao seu
                                                            tratamento em meio à pandemia de COVID-19?</h3>

                                                        <div class="mauticform-radiogrp-row">

                                                            <input type="radio" id="pergunta4Segura"
                                                                name="pergunta4Segura" value="Segura">
                                                            <label for="pergunta4Segura">Segura</label><br>

                                                            <input type="radio" id="pergunta4Ansiosa"
                                                                name="pergunta4Ansiosa" value="Ansiosa">
                                                            <label for="pergunta4Ansiosa">Ansiosa</label><br>

                                                            <input type="radio" id="pergunta4Triste"
                                                                name="pergunta4Triste" value="Triste">
                                                            <label for="pergunta4Triste">Triste</label><br>

                                                            <input type="radio" id="pergunta4Confiante"
                                                                name="pergunta4Confiante" value="Confiante">
                                                            <label for="pergunta4Confiante">Confiante</label><br>

                                                            <input type="radio" id="pergunta4Indiferente"
                                                                name="pergunta4Indiferente" value="Indiferente">
                                                            <label for="pergunta4Indiferente">Insegura</label><br>

                                                            <input type="radio"
                                                                id="pergunta4Desestimuladaporterqueaguardar"
                                                                name="pergunta4Desestimuladaporterqueaguardar"
                                                                value="Desestimulada por ter que aguardar">
                                                            <label
                                                                for="pergunta4Desestimuladaporterqueaguardar">Desestimulada
                                                                por ter que aguardar</label><br>

                                                            <input type="radio" id="pergunta4Naoseimportouemaguardar"
                                                                name="pergunta4Naoseimportouemaguardar"
                                                                value="Não se importou em aguardar">
                                                            <label for="pergunta4Naoseimportouemaguardar">Não se
                                                                importou em aguardar</label><br>

                                                        </div>
                                                        <span class="seta prev">
                                                            < Anterior</span><span class="seta next">Próxima >

                                                    </div>

                                                </div>
                                                <!-- Fim Pergunta de numero 4 -->


                                                <!-- inicio Pergunta de numero 5 -->
                                                <div class="item">

                                                    <div id="mauticform_encontrospesquisa_ha_quanto_tempo_voce_tent"
                                                        data-validate="ha_quanto_tempo_voce_tent"
                                                        data-validation-type="radiogrp"
                                                        class="mauticform-row mauticform-radiogrp mauticform-field-3 mauticform-required">

                                                        <h3><strong>5)</strong> Qual frequência você consideraria ideal
                                                            para as reuniões desse grupo ?</h3>

                                                        <div class="mauticform-radiogrp-row">

                                                            <input type="radio" id="pergunta1semana" name="pergunta5"
                                                                value="1 vez por semana">
                                                            <label for="pergunta1semana">1 vez por semana</label><br>

                                                            <input type="radio" id="pergunta2semana" name="pergunta5"
                                                                value="2 vez por semana">
                                                            <label for="pergunta2semana">2 vez por
                                                                semana</label><br><br>


                                                            <button type="submit" name="mauticform[submit]"
                                                                value="Enviar"
                                                                id="mauticform_input_encontrospesquisa_submit"
                                                                class="mauticform-button btn btn-default">Quero
                                                                participar
                                                                dos encontros exclusivos e gratuitos!</button>

                                                        </div>
                                                        <span class="seta prev">
                                                            < Anterior</span>

                                                    </div>

                                                </div>
                                                <!-- Fim Pergunta de numero 5 -->

                                            </div>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </section>




            <!-- ********************************** Formulario aqui **************************************** -->

            <section class="linha">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10">
                            <img src="assets/img/linhab.png" class="linha" data-enllax-ratio="0.1"
                                data-enllax-type="foreground" />

                        </div>
                    </div>
                </div>
            </section>
            <section class="titulo">
                <div class="container">
                    <div class="row">
                        <div class="mobile col-12 col-lg-5 align-self-center">
                            <h2 class="margin">Quem é a<br /> Dra. Fernanda Valente?</h2>
                        </div>
                        <div class="offset-lg-1 col-12 col-lg-4 align-self-center">
                            <img class="dra" src="assets/img/imgfernada.png" data-enllax-ratio="0.1"
                                data-enllax-type="foreground" />
                        </div>
                        <div class="desktop col-12 col-lg-5 align-self-center">
                            <h2>Quem é a<br /> Dra. Fernanda Valente?</h2>
                        </div>
                    </div>
                </div>
            </section>

<?php
         include 'footer.php';
        ?>