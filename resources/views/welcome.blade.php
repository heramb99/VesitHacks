
@extends('master')

@section('content')
      <nav class="white" role="navigation">
                 <div class="nav-wrapper container">
                   <a id="logo-container" href="#" class="brand-logo">EPARS</a>

                   <ul class="right ">
                     <li><a  class='modal-trigger' href="#modal1">Login </a></li>
                     <li><a   href="/register">Register</a></li>

                   </ul>
                  {{-- Login Modal --}}
                   <div id="modal1" class="modal  grey lighten-2">
                      <div class="modal-content">
                        <h4 class="black-text">Login</h4>
                        <div class="row">
                            <form class="col s12">
                              <div class="row">
                               
                                <div class="input-field col s12">
                                  <input id="username" type="text" class="validate">
                                  <label for="username">Username</label>
                                </div>
                              </div>
                            
                              <div class="row">
                                <div class="input-field col s12">
                                  <input id="password" type="password" class="validate">
                                  <label for="password">Password</label>
                                </div>
                              </div>
                              <button class="btn waves-effect waves-light" type="submit" name="action">Login                            
                              </button>
                             
                            </form>
                          </div>
                      </div>
                      
                    </div>

                  </div>

                  
               </nav>

             
               <div id="index-banner" class="parallax-container">
                 <div class="section no-pad-bot">
                   <div class="container">
                     <br><br>
                     <h2 class="header center light cyan-text lighten-5">Employee Performance<br> And Rating System</h1>
                      <br><br>
                     <div class="row center">
                       <h5 class="header col s12 light blwack-text">
                        An efficient way to assess & track your employees<br> and enhance your organisation's performance
                      </h5>
                     </div>
                     <div class="row center">
                       <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
                     </div>
                     <br><br>
             
                   </div>
                 </div>
                 <div class="parallax"><img src="images/background1.jpg" alt="Unsplashed background img 1"></div>
               </div>
             
             
               <div class="container">
                 <div class="section">
             
                   <!--   Icon Section   -->
                   <div class="row">
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                         <h5 class="center">Speeds up development</h5>
             
                         <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <h5 class="center">User Experience Focused</h5>
             
                         <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                         <h5 class="center">Easy to work with</h5>
             
                         <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                       </div>
                     </div>
                   </div>
             
                 </div>
               </div>
             
             
               <div class="parallax-container valign-wrapper">
                 <div class="section no-pad-bot">
                   <div class="container">
                     <div class="row center">
                       <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                     </div>
                   </div>
                 </div>
                 <div class="parallax"><img src="images/background2.jpg" alt="Unsplashed background img 2"></div>
               </div>
             
               <div class="container">
                 <div class="section">
             
                   <div class="row">
                     <div class="col s12 center">
                       <h3><i class="mdi-content-send brown-text"></i></h3>
                       <h4>Contact Us</h4>
                       <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                     </div>
                   </div>
             
                 </div>
               </div>
             
             
               <div class="parallax-container valign-wrapper">
                 <div class="section no-pad-bot">
                   <div class="container">
                     <div class="row center">
                       <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                     </div>
                   </div>
                 </div>
                 <div class="parallax"><img src="images/background3.jpg" alt="Unsplashed background img 3"></div>
               </div>
             
            
             

@endsection