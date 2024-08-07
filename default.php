<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu-mobile.css">
    <link rel="icon" href="icons/MarcourosLogo.ico">
    
  
<!-- End Google Tag Manager -->
    <title>Marcouros</title>
</head>

<body>
    <header class="header" id="Top">
        
            <nav class="navbar">
                <img class="logo" src="icons/MarcourosLogo.png" alt="">
                <nav>
                    <ul>
                        <li><a href="default.php">Home</a></li>
                        <li><a style="cursor: pointer;" href="#SobreNos">Sobre Nós</a></li>
                        <li><a href="#Servico">Serviços</a></li>                      
                        <li><a href="#Ctc">Contato</a></li>
                    </ul>
                    
                </nav>

                <div class="menu-hamburguer">
                    <input type="checkbox" id="menu-hamburguer" class="input-menu-hamburguer">

                    <label for="menu-hamburguer">
                        <div class="menu">
                            <span class="hamburguer"></span>
                        </div>
                    </label>
                </div>
            </nav>
        </div>
    </header>

    <nav class="navMobile">

        <h2>Menu</h2>

        <ul>
            <li><a onclick="fecharNav()" href="default.php">Home</a></li>
            <li><a onclick="fecharNav()" href="#Servico">Serviços</a></li>
            <li><a onclick="fecharNav()" href="Pages/Bancos.html">Bancos</a></li>
            <li><a onclick="fecharNav()" href="Pages/Volantes.html">Volantes</a></li>
            <li><a onclick="fecharNav()" href="Pages/Laterais.html">Laterais</a></li>
            <li><a onclick="fecharNav()" href="Pages/Painies.html">Paineís</a></li>
            <li><a onclick="fecharNav()" href="Pages/Logomarca.html">Logomarca</a></li>
            <li><a style="cursor: pointer;" onclick="fecharNav(),scrollToSobre()" >Sobre Nós</a></li>
            <li><a onclick="fecharNav()" href="#Ctc">Contato</a></li>
            
        </ul>





    </nav>

    

    <section class="banner" id="banner">
        <div class="slider banner-imagem banner-imagem-1 active">
          <!--  <a style="cursor: pointer;"  onclick="scrollToSobre()"></a>
        </div>
        <div class="slider banner-imagem banner-imagem-2">
            <a style="cursor: pointer;"  onclick="scrollToSobre()"></a>
        </div>
        <div class="slider banner-imagem banner-imagem-3">
            <a style="cursor: pointer;"  onclick="scrollToSobre()"></a>
        </div>
        --->
    </section>
    <section class="sobre-nos" id="sobre-nos1" >
        <div class="class-sobre-nos1" >
        <div class="listraR">
        <hr>
        </div>
            <div class="texto-sobreR"id="SobreNos" >
                <h1 class="title">SOBRE NÓS</h1>
                    <p>Na empresa Marcouros acreditamos que seu carro merece mais do que apenas um revestimento. Oferecemos soluções premium em revestimentos automotivos desenvolvidos com paixão, excelência,  inovação e  proporcionando a estética da proteção duradoura ao seu veículo.
                    </p>
                    </div>
                    <div class="listraTR1">
                    </div>
            </div>
            
            
        </div>

    </section>
    <section class="sobre-nos" id="sobre-nos2">
    <div class="class-sobre-nos2">
        <div class="listraL">
            <img src="assets/MarcourosLogo.png" alt="">
        </div>
        <div class="listraTL">
        </div>
        <div class="texto-sobreL">
            <h1 class="title">MISSÃO</h1>
            <p">Desenvolver e fornecer revestimentos automotivos de alta qualidade que atendam às expectativas e demandas dos clientes.</p>
        </div>
    </div>
</section>
<section class="sobre-nos" id="sobre-nos3">
    <div class="class-sobre-nos3">
        <div class="listraR2">
            <hr>
        </div>
        <div class="texto-sobreR" id="VisaoeValores">
            <h1 class="titleR">VISÃO</h1>
            <p class="pR">Ser a referência no mercado de revestimentos automotivos, inovando constantemente em tecnologias e design, estabelecendo<br> parcerias duradouras com clientes e fornecedores.</p>
            <br>
            <br>
            <h1 class="titleL">VALORES</h1>
            <p class="pL">Compromisso com a excelência, integridade nas relações comerciais, sustentabilidade, foco no cliente, paixão pela inovação e pontualidade na entrega. </p>
        </div>
        <div class="listraTR2">
            <hr>
        </div>
       
    </div>
</section>
    <main class="parallax-banner">
        <section class="parallax background"></section>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <article class="desc-zen" id="Servico">
        <figcaption class="desc-zen-image">
            <img data-aos="slide-right" data-aos-duration="1500"
                src="" alt="">
            <div>
                <h1>DEDICAMOS SERVIÇOS ESPECIALIZADOS PARA PERSONALIZAR E APRIMORAR O INTERIOR DE VEÍCULOS </h1>
                <p>Variedade de opções!</p>
            </div>
        </figcaption>

    <section class="desc-zen-section">
				<div class="quadradinhos">
					<img src="icons/asento.png" alt="">
					<h2>BANCOS</h2>
					<p>O serviço de revestimento de bancos consiste na remoção dos revestimentos originais para a aplicação de couro de alta qualidade. Isso não apenas proporciona uma sensação de luxo e conforto, mas também entrega durabilidade aos bancos tornando-os mais resistentes ao desgaste diário</p>
					<br>
					<!-- <a href="texto.html?text=Brincadeiras">Ver mais</a>*/ -->
                     <a href="Pages/Bancos.html">Ver mais</a>
				</div>
				<div class="quadradinhos">
					<img src="icons/WhiteV.png" alt="">
					<h2>VOLANTES</h2>
					<p>A personalização do volante envolve a substituição ou revestimento do volante original em couro, melhorando a estética, conforto e duração. Permitindo uma sensação mais refinada ao dirigir.</p>
                    <br>
					<a href="Pages/Volantes.html">Ver mais</a>
				  </div>
				<div class="quadradinhos">
					<img src="icons/carro.png" alt="">
					<h2>LATERAIS</h2>
					<p>Os revestimentos das laterais do veículo inclui portas internas onde ocorre uma transformação completa ao interior promovendo uma aparência uniforme e elegante. Além disso, protege as áreas contra desgastes e danos, mantendo a estética por mais tempo.</p>
					 <a href="Pages/Laterais.html">Ver mais</a>
				   <p></p>
				</div>
				<div class="quadradinhos">
					<img src="icons/Velocimetro.png" alt="">
					<h2>PAINEÍS</h2>
					<p>Revestimento do painel de couro de alta qualidade oferece diversos benefícios que o tornam uma escolha superior em relação aos painéis tradicionais de tecido ou plástico, tornando-o mais atraente em sua conservação.
                    </p>
					<br>
					<a href="Pages/Paineis.html">Ver mais</a> 
				</div>
                <div class="quadradinhos">
					<img src="icons/bmw.png" alt="">
					<h2>LOGOMARCA</h2>
					<p>Eleve o nível de estilo do seu veículo com a aplicação da logo da sua marca ou símbolo pessoal nos bancos de couro. Oferecemos duas opções de personalização para atender às suas necessidades. 
                    </p>
                    </p>
					<br>
					<a href="Pages/Logomarca.html">Ver mais</a> 
				</div>
			</section>

    </article> 
    
    <section>
        <div class="Qualidades">
            <div class="qualidade-item">
                <img src="icons/Relogio.png" alt="">
                <div class="texto">
                    <h2>ENTREGA  EM 24HRS</h2>        
                    <p>Entendemos a importância de agilidade e eficiência para nossos clientes, por isso oferecemos um serviço de entrega em até 24 horas para revestimentos automotivos. Com logística eficiente e equipe dedicada, garantimos entregas rápidas sem comprometer a qualidade. Na Marcouros, redefinimos o atendimento ao cliente, oferecendo produtos e serviços excepcionais e uma experiência de entrega rápida e confiável, adaptando em suas necessidades.</p>
                </div>
            </div>
            <div class="qualidade-item">
                <img src="icons/credibilidade.png" alt="">
                <div class="texto">
                    <h2>EQUIPE ESPECIALIZADA</h2>
                    <p>Nossa equipe, apaixonada por automóveis e dedicada à excelência, é composta por profissionais qualificados e experientes. Unidos pela inovação e qualidade, eles são essenciais para nossa missão de oferecer revestimentos automotivos. Ao escolher nossos serviços, você investe em produtos de alta qualidade e em uma experiência única.</p>
                </div>
            </div>
        </div>
    </section>
     

    </section>
    
    <br><br><br> 


    <!-- AVALIAÇÕES GOOGLE MAPS -->

    <h1 class="titleAVA">AVALIAÇÕES DE CLIENTES</h1>

    <section class="avaliacoes">


        <div class="avaliacoes-card">
            <div class="usuario">
                <img class="usuario_img" src="icons/Usuario1.png" alt="">
                <h2>Antonio Mangaba</h2>
            </div>

            <div>
                <div class="estrelas-avaliacoes">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                </div>
                <p>
                    Excelente trabalho e uma honestidade que, raramente, se vê hoje em dia. Vieram em casa, tiraram os bancos e revestiram em couro, não curvin, em tempo recorde e por um preço justo. Recomendo, sempre!!!!
                </p>
                
            </div>

            <div>
                <a target="_blank" href="https://g.co/kgs/4hdHAQf" class="ver-mais">Ver mais</a>
            </div>

        </div>

        <!--  -->

        <div class="avaliacoes-card">

            <div class="usuario">
                <img class="usuario_img" src="icons/Usuario2.png" alt="">
                <h2>Darcy Candido da Silva Junior</h2>
            </div>

            <div>
                <div class="estrelas-avaliacoes">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                    <img src="icons/estrela_avaliacao.png" alt="">
                </div>
                <p>
                Excelente trabalho... pontualidade....o serviço de retirada e instalação ajuda muito para quem não tem tempo. Indico para quem queira um trabalho espetacular....
                </p>
                
            </div>

            <div>
                <a target="_blank" href="https://g.co/kgs/4fZVBx7" class="ver-mais">Ver mais</a>
            </div>

        </div>

        <!--  -->

        <div class="avaliacoes-card">
           <div>
                <div class="usuario">
                    <img class="usuario_img" src="icons/Usuario3.png" alt="">
                    <h2>Bruna Telles</h2>
                </div>

                <div>
                    <div class="estrelas-avaliacoes">
                        <img src="icons/estrela_avaliacao.png" alt="">
                        <img src="icons/estrela_avaliacao.png" alt="">
                        <img src="icons/estrela_avaliacao.png" alt="">
                        <img src="icons/estrela_avaliacao.png" alt="">
                        <img src="icons/estrela_avaliacao.png" alt="">
                    </div>
                    <p>
                    Fiz a compra do revestimento dos bancos e volante em couro com o Vendedor Fábio, muito atencioso e organizado. O carro ficou pronto antes do horário previsto e ainda me deu um kit de brinde para cuidad dos bancos. O trabalho ficou excelente, exatamente como eu queria. Super indico, preço justo e qualidade.
                    </p>
                    
                </div>
           </div>

            <div>
                <a target="_blank" href="https://g.co/kgs/SUHk1Ty" class="ver-mais">Ver mais</a>
            </div>

        </div>

      

        
    </section>
    
   <div class="avalie_tambem">
        <a  target="_blank" href="https://www.google.com/maps/place/Marcouro+Revestimento+Automotivo/@-23.5157134,-46.7228063,15z/data=!3m1!5s0x94cef8eebeabb261:0x2b851ab2b5d9cef2!4m8!3m7!1s0x94cef9c88f60458f:0x671df2aebf78cd1d!8m2!3d-23.5157134!4d-46.7228063!9m1!1b1!16s%2Fg%2F11pc3zpghh?entry=ttu">Avalie também!</a>
   </div>

   <br><br>

    <main class="contato" id="Ctc">

        <div>
            <h1 class="title" id="TalkToMe">ENTRE EM CONTATO CONOSCO!</h1>
        </div>
		
		

        <div class="class-contato" >
        <section class="cardcontato">
        <div class="quadradinhosC" id="Maps">
					<img src="icons/localition75.png" alt="">
                    <div>
					<h2>Endereço</h2>
					<p>Rua Conselheiro Olegário 231, Vila Anastácio - São Paulo-SP.</p>
                    </div>
					
		</div>
        <div class="quadradinhosC" id="Wpp" >
					<img src="icons/call75.png" alt="">
                    <div>
					<h2>Telefone</h2>
					<p>(11)91446-3667</p>
                    </div>
					
		</div>
        <div class="quadradinhosC" id="Mail">
					<img src="icons/email.png" alt="">
                    <div>
					<h2>E-Mail</h2>
					<p>marcouros123@gmail.com</p>
                    </div>
					
		</div>
        </section>
            <form  action="mail/Envia.php" name="formEnvia" method="POST" class="Contato" id="FormStilo" >
                
                <div class="inputs">
                    
                    <input type="text" name="Nome"  id= "teste" class="input"  placeholder="Nome"  required>
                    <input type="email" name="Email" id="teste" class="input" placeholder="E-mail" required/>                   
                    <input type="number" name="Telefone" required id="teste" class="input" placeholder="Número de Telefone" />
                    <textarea required  name="Mensagem" placeholder="Escreva uma mensagem:" id="" cols="30" rows="10"></textarea>
                </div>
                 <button type="submit" id="buttonF">Enviar</button>
            </form>
			  
        </div>
       
    </main>
    

    <!-- BOTAO WHATSAPP -->
   <!-- BOTAO WHATSAPP -->
  
	<a target="_blank" class="btnInsta">
        <img width="50" src="icons/upperr.png" alt="" style="cursor: pointer;" onclick="scrollToInicio()">
    </a>
    <a target="_blank" class="btnWhatsapp" href="https://wa.me/5511914463667?text=Olá! Vim pelo site! Gostaria de saber mais.">
        <img width="50" src="icons/whatsapp.png" alt="">
    </a>
    
    <!--  -->
    <section class="duvidas-drop">
        <div class="listDrop">
            <h1>Dúvidas Frequentes</h1>
            <h2 id="DropEntrega">Nossa Entrega ▼</h2>
            <ul class="dropdown">
                <li>Sabemos da importância de receber seus produtos o mais rápido possível. Por isso, entregamos em até 24 horas para que você receba seus revestimentos automotivos premium no momento que mais precisa.</li>
            </ul>
            
            <h2 id="DropPagamento">Formas de Pagamento ▼</h2>
            <ul class="dropdown">
            <li id="DropCartao">Cartões ▼</li>
                <ul class="dropdown">
                    <li>Parcelamento em até 3 vezes sem juros</li>
                    <img src="assets/formasdepagamentocartoes.png" alt="">
                </ul>
            <li id="DropDinheiro">Dinheiro e Pix ▼</li>
                <ul class="dropdown">
                    <li>Negociação com o cliente na entrada ou retirada do revestimento.</li>
                    <li>Aceitamos Pagamentos Via Pix</li>
                </ul>
               
                
            </ul>
        
            <h2 id="DropGarantia">Garantia ▼</h2>
            <ul class="dropdown">
                <li id="finaldrop">Disponibilizando 3 anos de garantia 100% couro, tenha a tranquilidade de saber que seus revestimentos são de alta qualidade e durabilidade.</li>
            </ul>
        </div>
        </section>

    <footer id="footer">
      <section class="LogoMarca">
            <div>
                
                <img class="logo" src="assets/MarcourosLogo.png" alt="">
            </div>
            
            <div class="redesSociais">
                <div>
                    <a target="_blank" href="https://www.facebook.com/MarcourosBrasil/">
                        <img src="icons/facebook.png" alt="">
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://www.instagram.com/marcouros/">
                        <img src="icons/instagram (2).png" alt="">
                    </a>
                </div>
                <div>
                <a  href="#Ctc">
                    <img src="icons/email.png" alt="" >
                </a>
                </div>
            </div>
            <p id="marcouros">©Marcouros</p>
            <p id="marcourosT">Todos os direitos reservados</p>
        </section>

       


        <div class="listFooter">
            <h2>Atendimento</h2>
            <ul>
                <li><a target="_blank" href="https://wa.me/5511914463667?text=Olá! Vim pelo site! Gostaria de saber mais.">Fale conosco</a></li>
                <li><a  style="cursor: pointer;" onclick="scrollToEmail()">Contato</a></li>
               
            </ul>
        </div>
        
      
        
    </footer>



     <div class="madeby">
        <p>
            Desenvolvido por <a href="https://www.linkedin.com/in/raphael-fran%C3%A7a-simonetti-76b625249/" target="_blank">Raphael Simonetti</a>
        </p>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

<script src="Js/main.js"></script>

</html>