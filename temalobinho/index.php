<?php get_header(); ?>
    <main>
        <div class="pageName">
            <img class="wolfBackground">
            <div class="pgNameTxt">
                <h1 class="titlePgName"><?php the_field('titulo_inicial'); ?></h1> 
                <hr class="pgNameDivsor">
                <p class="pgNameDescription"><?php the_field('descricao_inicial'); ?></p>
            </div>
        </div>
        <div class="about">
            <h3 class="titleAbout">Sobre</h3>
            <p class="aboutTxt">Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas. Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.</p>
        </div>
        <div class="values">
            <h3 class="valuesTitle">Valores</h3>
            <div class="valuesEX">
                <div class="valuesOne">
                    <div class="circulo">
                        <img class="protectionImg" src="<?php echo get_stylesheet_directory_uri() ?>/images/protection.png" alt="Imagem Proteção">
                    </div>
                    <h5 class="protectionTitle">Proteção</h5>
                    <p class="protectionTxt">Assim mesmo, o desenvolvimento contínuo de distintas formas de atuação facilita a criação do sistema de participação geral.</p>    
                </div>
                <div class="valuesTwo">
                    <div class="circulo">
                        <img class="careImg" src="<?php echo get_stylesheet_directory_uri() ?>/images/carinho.png" alt="Imagem Carinho">
                    </div>
                
                    <h5 class="careTitle">Carinho</h5>
                    <p class="careTxt">Assim mesmo, o desenvolvimento contínuo de distintas formas de atuação facilita a criação do sistema de participação geral.</p>
                </div>
                <div class="valuesThree">
                    <div class="circulo">
                        <img class="compImg" src="<?php echo get_stylesheet_directory_uri() ?>/images/companheirismo.png" alt="Imagem Companheirismo">
                    </div>                 
                    <h5 class="compTitle">Companheirismo</h5>
                    <p class="compTxt">Assim mesmo, o desenvolvimento contínuo de distintas formas de atuação facilita a criação do sistema de participação geral.</p>
                </div>
                <div class="valuesFour">
                    <div class="circulo">
                        <img class="rescueImg" src="<?php echo get_stylesheet_directory_uri() ?>/images/resgate.png" alt="Imagem Resgate">
                    </div>                  
                    <h5 class="rescueTitle">Resgate</h5>
                    <p class="rescueTxt">Assim mesmo, o desenvolvimento contínuo de distintas formas de atuação facilita a criação do sistema de participação geral.</p>
                </div>

            </div>
        </div>
        <div class="sampleSection">
            <h3 class="sampleTitle">Lobos Exemplo</h3>
            <!-- Tudo comentado a partir daqui ate o final da main deve ser adquirido por API -->
            <!-- Deixei o codigo sem estar comentado para poder estilizar, depois de estilizado deixem comentado para guiar no arquivo JS -->
            <div class="samplesContainer">
                <div class="wolfOne">
                    <img class="wolfOneImg" src="images/loboExemplo1.png" alt="Lobo Exemplo 1">
                    <div class="wolfOneInfo">
                        <h4 class="wolfOneTitle">Nome do Lobo</h4>
                        <p class="wolfOneAge">Idade: XX anos</p>
                        <p class="wolfOneTxt">Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas. Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.</p>   
                    </div>
                </div>
                <div class="wolfTwo">
                    <img class="wolfTwoImg" src="images/loboExemplo2.png" alt="Lobo Exemplo 2">
                    <div class="wolfTwoInfo">
                        <h4 class="wolfTwoTitle">Nome do Lobo</h4>
                        <p class="wolfTwoAge">Idade: XX anos</p>   
                        <p class="wolfTwoTxt">Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas. Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.Não obstante, o surgimento do comércio virtual faz parte de um processo de gerenciamento do levantamento das variáveis envolvidas.</p>
                    </div>
                </div>
            </div> 
        </div>
    </main>
    <hr class="footerDivsor">
   
<?php get_footer(); ?>