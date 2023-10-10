<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name','KIZALU SOFT-LDA')}}</title>
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section id="Home">
        <nav>
            <div class="logo">
               <p class="logo-p">Kizalu <span>SOft-lda</span></p>
            </div>

            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">Sobre</a></li>
                <li><a href="#servico">Servicos</a></li> 
          
                <li><a href="#contacto">Contacto</a></li>

            </ul>

            <div class="icon">
       
         <a href="{{route('login')}}" target="_blank" rel="noopener noreferrer">
   <button class="bg-blue-500 text-white py-2 px-4 rounded-md " id="btn" >entrar</button>
   </a> 
                <i class="fa-solid fa-magnifying-glass"></i>
               
                
            </div>

        </nav>

        <div class="main">

            <div class="men_text">
                <h1>KIZALU<span></span>SOFT- LDA</h1>
           
            <p>
            Prestação de soluções tecnologicas, consultorearia & mentorearia
        </p>

        <div class="main_btn">
            <a href="#">Serviços</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>
     </div>
        </div>

        

        

    </section>



    <!--About-->
<section id="About">
    <div class="about reveal" >
        <div class="about_main">

            <div class="image">
            <img src="{{ asset('assets/image/sobre.jpg') }}" alt="Exemplo">
               
            </div>

            <div class="about_text">
                <h1 ><span class="h1">Sobre Nós</span></h1>
                <h3>Porquê Nós Escolher?</h3>
                <p>
                    Contamos com uma equipe altamente qualificada e experiente em todas as fases do ciclo de vida do
                     desenvolvimento de software. Nossa experiência prática abrange desde 
                    a concepção até a entrega de soluções tecnológicas inovadoras. Reconhecemos que cada cliente é único, 
                    e nossos serviços são adaptados para atender às necessidades específicas de cada negócio.
                     Desenvolvemos soluções personalizadas que impulsionam a eficiência e a inovação. 
                     <br>
                     Além do desenvolvimento de software, 
                     oferecemos serviços de consultoria estratégica. Compreendemos as complexidades do ambiente de negócios moderno e orientamos
                      nossos clientes na aplicação eficaz da tecnologia
                      para impulsionar o crescimento e a competitividade.
                   
                </p> 
                <a href="#" class="about_btn btn">saber mas</a>
            </div>

        </div>

       

    </div>
    </section>
<br>

    <!--Servicos -->
<section id="servico">
    <div class="servico reveal" >
        <h1><span>Nossos Serviços</span></h1>


        <div class="servico_box">
          
            <div class="servico_card">

            

                
                <div class="servico_info">
                   <h2> Desenvolvimento de Software</h2>
                   <p>Desenvolvemos softwares personalizados que atendem 
                    precisamente aos requisitos exclusivos de cada cliente.
                    Isso inclui desde aplicações web até sistemas 
                    complexos de gerenciamento de dados</p>
                 
                    
                    <a href="#" class="servico_btn">ver mas</a>
                </div>

            </div> 

            <div class="servico_card">

            

                
                <div class="servico_info">
                <h2> Desenvolvimento de Software</h2>
                   <p>Desenvolvemos softwares personalizados que atendem 
                    precisamente aos requisitos exclusivos de cada cliente.
                    Isso inclui desde aplicações web até sistemas 
                    complexos de gerenciamento de dados</p>
                 
                  
                    <a href="#" class="servico_btn">ver mas</a>
                </div>

            </div> 

            <div class="servico_card">

            

                
                <div class="servico_info">
                <h2> Desenvolvimento de Software</h2>
                   <p>Desenvolvemos softwares personalizados que atendem 
                    precisamente aos requisitos exclusivos de cada cliente.
                    Isso inclui desde aplicações web até sistemas 
                    complexos de gerenciamento de dados</p>
                 
                    
                    <a href="#" class="servico_btn">ver mas</a>
                </div>

            </div> 
            <div class="servico_card">

            

                
                <div class="servico_info">
                <h2> Desenvolvimento de Software</h2>
                   <p>Desenvolvemos softwares personalizados que atendem 
                    precisamente aos requisitos exclusivos de cada cliente.
                    Isso inclui desde aplicações web até sistemas 
                    complexos de gerenciamento de dados</p>
                 
                    
                    <a href="#" class="servico_btn">ver mas</a>
                </div>

            </div> 
            <div class="servico_card">

            

                
                <div class="servico_info">
                <h2> Desenvolvimento de Software</h2>
                   <p>Desenvolvemos softwares personalizados que atendem 
                    precisamente aos requisitos exclusivos de cada cliente.
                    Isso inclui desde aplicações web até sistemas 
                    complexos de gerenciamento de dados</p>
                 
                    <a href="#" class="servico_btn">ver mas</a>
                </div>

            </div> 
            
            

          
           
           


            

       
            
        </div>

    </div>

    </section>


    <!--membro-->
    <section id="membro" >

    <div class="membro reveal" >
        <h1><span>Membros da Empresa</span></h1>

        <div class="membro_box ">
            <div class="membro_card">

                <div class="membro_profile">
                <img src="{{ asset('assets/image/placido.jpg') }}" alt="Exemplo">
                </div>

                <div class="membro_text">
                    <h2 class="name">Sara Pedro</h2>

                    <div class="membro_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="membro_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                    <h3>Desenvolvedor Full</h3>
                    <p class="bio"> Licenciado em Ciencias da Computação.</p>
                    <p><strong>Universidade:</strong> Katiavala Bwila</p>
                    <p><strong>Faculdade:</strong> Instituto Politecnico</p>
                    <p>

                </div>

            </div>

            <div class="membro_card">

                <div class="membro_profile">
                <img src="{{ asset('assets/image/placido.jpg') }}" alt="Exemplo">
                </div>

                <div class="membro_text">
                    <h2 class="name">Placido Nguli</h2>

                    <div class="membro_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="membro_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                    <h3>Desenvolvedor front-End</h3>
                    <p class="bio"> Licenciado em Ciencias da Computação.</p>
                    <p><strong>Universidade:</strong> Katiavala Bwila</p>
                    <p><strong>Faculdade:</strong> Instituto Politecnico</p>
                    <p>
                 

                </div>

            </div>

            <div class="membro_card">

                <div class="membro_profile">
                <img src="{{ asset('assets/image/placido.jpg') }}" alt="Exemplo">
                </div>

                <div class="membro_text">
                    <h2 class="name">Eugenio Camelã</h2>

                    <div class="membro_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="membro_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <h3>Desenvolvedor front-End</h3>
                    <p class="bio"> Licenciado em Ciencias da Computação.</p>
                    <p><strong>Universidade:</strong> Katiavala Bwila</p>
                    <p><strong>Faculdade:</strong> Instituto Politecnico</p>
                    <p>

                </div>

            </div>

            <div class="membro_card">

                <div class="membro_profile">
                <img src="{{ asset('assets/image/placido.jpg') }}" alt="Exemplo">
                </div>

                <div class="membro_text">
                    <h2 class="name">Leonardo Limão</h2>

                    <div class="membro_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="membro_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                    <h3>Desenvolvedor Desktop</h3>
                    <p class="bio"> Licenciado em Ciencias da Computação.</p>
                    <p><strong>Universidade:</strong> Katiavala Bwila</p>
                    <p><strong>Faculdade:</strong> Instituto Politecnico</p>
                    <p>

                </div>

            </div>


            <div class="membro_card">

                <div class="membro_profile">
                <img src="{{ asset('assets/image/milton.jpg') }}" alt="Exemplo">
                </div>

                <div class="membro_text">
                    <h2 class="name">Milton Francisco</h2>

                    <div class="membro_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="membro_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                    <h3>Desenvolvedor Full Stack</h3>
                    <p class="bio"> Licenciado em Ciencias da Computação.</p>
                    <p><strong>Universidade:</strong> Katiavala Bwila</p>
                    <p><strong>Faculdade:</strong> Instituto Politecnico</p>
                    <p>

                </div>

            </div>



    
    


            <div class="membro_card">

                <div class="membro_profile">
                <img src="{{ asset('assets/image/placido.jpg') }}" alt="Exemplo">
                </div>

                <div class="membro_text">
                    <h2 class="name">Admir Tavares</h2>

                    <div class="membro_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="membro_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                    <h3>Desenvolvedor Full Stack</h3>
                    <p class="bio"> Licenciado em Ciencias da Computação.</p>
                    <p><strong>Universidade:</strong> Katiavala Bwila</p>
                    <p><strong>Faculdade:</strong> Instituto Politecnico</p>
                    <p>

                </div>

            </div>

        </div>

    </div>

</section>

    <!--Contacto-->
    <section  id="contacto">
    <div class="contacto reveal">
        <h1><span>Contacto</span></h1>

        <div class="contacto_main ">

            <div class="contacto-local">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31150.96523862915!2d13.39651215!3d-12.5907752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1bafd10adecd1033%3A0x9f62cf882e30a616!2sBenguela!5e0!3m2!1spt-PT!2sao!4v1696608885629!5m2!1spt-PT!2sao"  width="600" height="350" style="border:0; padding-left: 80px;" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                  <div class="contacto-form">
            <form action="#">
                      <div class="grupo">
                <div class="input" >
                <input type="text" placeholder="Seu nome">
                </div>

                <div class="input">
               
                    <input   type="email" placeholder=" Seu email">
                </div>
</div>
                <div class="input">
                    <input placeholder="Assunto">
                </div>

                <div class="input">
       
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                    
                </div>
                <a href="#" id="btn" class="contacto_btn ">Enviar</a>

            </form>
        </div>
        </div>

    </div>
 </section>


    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Nossos Serviços</h2>
                <p>Consultoria</p>
                <p>Desenvolvimento de Software</p>
         
                <p>Mentorearia</p>
                
            </div>


            <div class="footer_tag">
                <h2> Links</h2>
                <p>Home</p>
                  <p>Serviços</p>
                  <p>Sobre</p>
          
            </div>
            <div class="footer_tag">
                <h2>Encontre-nos</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="footer_tag">
                <h2>Contactos</h2>
                <p>+224 921590079</p>
                <p>+224 952330915</p>
                <p>placidonguli20@gmail.com</p>
                <p>kizalosoft@gmail.com</p>
            </div>

    
            <div class="footer_tag">
                <h2>Localização</h2>
                <p> <strong>Pais:</strong> Angola</p>
                <p><strong>Província:</strong> Benguela</p>
                <p><strong>Bairro:</strong> Benfica</p>
                <p><strong>Rua:</strong> 13</p>
             
            </div>

        </div>
         
        <p class="end" style="color: #d0d0d0; font-weight: 500;">Kizalu<span><i class="fa-solid fa-face-grin"></i> SOFT-LDA</span></p>

    </footer>

        <script src="{{asset('assets/js/scroll.js')}}"></script>

    
</body>
</html>