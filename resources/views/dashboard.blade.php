<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--CSS-->
    <link rel="stylesheet" href="admin.css">
    <link href="{{asset('assets/css/admin.min.css')}}" rel="stylesheet">

     <!-- Fonts -->
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="menu-lateral">
    <div class="div-logo">
        <a href=""><span  class="logo">KS</span> 
                 <p>KIZALU SOFT LDA</p>
       </a>
        
    </div>
      <nav> 
                <ul class="menu">
                       
                          <hr>
                         
                      
                        <li>
                          <a class="a" href="#">
                            <i class="fa-solid fa-house"></i>
                            <span>Home</span>
                          </a>
                        </li>
                        <li id="submenu-trigger">
                          <a class="a" href="#">
                            <i class="fa-solid fa-id-card"></i>
                            <span>Cadastrar</span>
                          </a>
                          <ul class="submenu">
                            <li><a id="openUsuarioModal" href="#">
                                <i class="fa-solid fa-user"></i>
                               <span>Socios</span> 
                            </a></li>
                            <li><a id="openProdutoModal" href="#">
                                <i class="fa-solid fa-house"></i>
                               <span>Serviços</span> 
                            </a></li>
                           
                           </ul>
                        </li>
                        <li>
                          <a  class="a" href="reserva.html">
                            <i class="fa-solid fa-desktop"></i>
                            <span>Serviços</span>
                          </a>
                        </li>
                        <li>
                          <a class="a" href="contacto.html">
                            <i class="fa-solid fa-address-book"></i>
                            <span>Sobre</span>
                          </a>
                        </li>

                        
                        <li>
                            <a class="a" href="contacto.html">
                              <i class="fa-solid fa-address-book"></i>
                              <span>Definicoes</span>
                            </a>
                          </li>
         </ul>
      </nav>
                  

                       <!--div user info-->
           
                       <footer class="rodape-ajuda">
                               <a href="">
                                <p>Ajuda</p>
                               </a>
                              </footer>
    </div>

        
    <div class="container-principal">
    @livewire('navigation-menu')

                        <main>
                            <div class="container-home">
                                <div class="container">
                                    
                                            <div class="user">
                                                <div>
                                                    <strong>+6</strong>
                                                        <p>funcionário</p> 
                                                    </div>
                                                
                                                <a href="lista_user.html">     <i class="fa-solid fa-user"></i></a>
                                      
                                            </div>

                                            <div class="riquisitados">
                                                <div>
                                                    <strong>+6</strong>
                                                        <p>servicos</p> 
                                                    </div>
                                                    <a href="list_materias.html" class="ver">ver</a>
                                               
                                        
                                                </div>

                                                <div class="servicos">
                                                    <div>
                                                        <strong>+6</strong>
                                                            <p>Projectos</p> 
                                                        </div>
                                                        <a href="list_produto.html">  <i class="fa-solid fa-plate-wheat"></i>  </a>
                                                       
                                                    </div>

                                                    <div class="servicos">
                                                        <div>
                                                            <strong>+6</strong>
                                                                <p>Relatorios Financeiro</p> 
                                                            </div>
                                                            <a href="list_mesas.html"> <i class="fa-solid fa-table"></i>  </a>
                                                           
                                                        </div>

                                                       

                                                   

                                             

                                                        

                                     
                                    </div>

                               


                            </div>
                         
                        </main> 
                     <!--  Rodape -->
                     <footer class="rodape">

                     </footer>
                            
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
        <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>