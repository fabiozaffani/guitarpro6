<?php
/*
 *  Template Name: BuyNow
 */
?>

<?php get_header(); ?>

    <div id="presentation" class="clearfix">
        <h2>
            Facilidade e Tradição
        </h2>
        <p>
            Guitar Pro é o primeiro software criado para edição de tablaturas para guitarra, baixo e outros instrumentos de 4-8 cordas e
            <span class="title">compatível com as principais plataformas: Windows, Mac, Linux</span>.
            Não importa qual seja Guitar Pro 6 é ideal para estudar, trabalhar ou se divertir é o melhor programa para quem adora música disponível para você.
        </p>
        <div class="content-half">
            <h3>Guitar Pro 6 - Digital Download</h3>
            <a id="BuyNowDigitalAction" href="<?php echo get_home_url(); ?>/loja/guitar-pro-6-versao-digital" title="Comprar Versão Digital">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/painel-digital.jpg" alt="comprar versão digital" />
            </a>
        </div>
        <div class="content-half no-margin">
            <h3>Guitar Pro 6 - Box DVD</h3>
            <a id="BuyNowBoxAction" href="<?php echo get_home_url(); ?>/loja/guitar-pro-6-box-dvd" title="Comprar Box DVD">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/painel-box.jpg" alt="comprar box dvd" />
            </a>
        </div>
    </div>

    <div id="presentation-info">
        <ul>
            <li id="ferramentas">
                <p class="title">
                    Ferramentas
                </p>
                <p>
                    Guitar Pro é um verdadeiro workshop para guitarristas: acordes e biblioteca de escalas, Afinador, metrônomo, braço(traste) virtuais e teclado virtual.
Todas essas ferramentas de trabalho para instrumentos com trastes, de 4 a 8 cordas.
                </p>
            </li>

            <li id="quemusa">
                <p class="title">
                    Quem Usa?
                </p>
                <p>
                    Guitar Pro se tornou um parceiro valioso para muitos artistas e musicos, alguns acreditam que Guitar Pro mudou o seu fluxo de composição, outros decidiram que é ideal no processo criativo
                </p>
            </li>

            <li id="som">
                <p class="title">
                    Som
                </p>
                <p>
                    Guitar Pro 6 e RSE2 oferecem mais de cem soundbanks, novos ajustes totalmente integrados ao painel e a possibilidade de configurar o som de cada faixa.
                </p>
            </li>

            <li id="compartilhe">
                <p class="title">
                    Compartilhe
                </p>
                <p>
                    O formato Guitar Pro tornou-se um verdadeiro padrão na Internet, o software permitirá que você desfrute de milhares de notas, tablaturas e musicas que já estão disponíveis em sites diversos (arquivos em *. gp3, *. gp4, *. gp5 e formatos *. gpx) . 
                </p>
            </li>
            <li id="comentarios">
                <p class="title">
                    O que andam falando...
                </p>
                <blockquote>
                    Ótimo, Rico, Completo e ainda assim continua extremamente intuitivo e fácil de usar, como sempre foi.
                    <span class="source">Guitar Part Magazine</span>
                </blockquote>
                <blockquote>
                    [Guitar Pro 6] Tem se tornado referência suprema em sua categoria de atuação.
                    <span class="source">Audio Fanzine</span>
                </blockquote>
                <blockquote class="last">
                    Caso você seja uma banda-de-um-homem-só ou escrevendo músicas ou precisa de uma ferramenta para entrada de dados MIDI para outros aplicativos, Guitar Pro 6 é uma adição impressionante e totalmente necessária.
                    <span class="source">Macworld</span>
                </blockquote>

            </li>
        </ul>
    </div>
<?php get_footer(); ?>