<?php include('header.php'); ?>


<script type="text/javascript">

$(document).ready(function(){
  var altura = $('.menu').offset().top;
  var fin = $('.menu').offset().bottom;
  var foot = $('.fin').offset().top;
  
  $(window).on('scroll', function(){
    if ( $(window).scrollTop() > altura ){
      $('.menu').addClass('menu-fixed');
    } 
    else if ($(window).scrollTop() > foot) {
      $('.menu').removeClass('menu-fixed');
    }
    else {
      $('.menu').removeClass('menu-fixed');
    }
  });
 
});
</script>

  <div class="container2">

  <section class="main give-top bgcolor5">


<div class="row"><!--Row de entradas rank-->
  <div class="col-md-12">

    <div class="bgcolor1 col-md-4">
      <div class="row">
            <div class="col-xs-2 col-sm-2col-md-2">
            <img class="icon-entry" src="img/dj.jpg">
            <h5 class="text-center txtblanco">19-JUL<h5>
            </div>
          <div class="col-xs-7 col-sm-7col-md-7"> <h4 class="txtblanco" >Titulo de evento Expo Quito 2016</h4></div>
          <div class="col-xs-3 col-sm-3col-md-3 ">
            <button class="btn btn-danger add-margin" type="button"> 
            <span class=" glyphicon glyphicon-heart" ></span><span class="badge">4</span>
            </button>
            <h5 class="text-right txtcolor2">#Publicante</h5>
        </div>
      </div>
    <div class="row">
         
      <div class="contenedor col-sm-6 col-md-12">
          <div class="imagen">
             <img class="Wallpaper flayers " src="img/flayer-1.jpg">
         </div>
       <div class="info ">
           <div class="row pad_inter">
             <div class="col-md-12"><div class="col-xs-1 col-md-1"><span class="txtblanco glyphicon glyphicon-map-marker">
             </span></div><div class="col-xs-10 col-md-10"><p class="txtblanco">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
             </div>
           </div>
           <div class="row pad_inter">
            <div class="col-md-12"><div class="col-xs-1 col-md-1"><span class="txtblanco glyphicon glyphicon-time">
             </span></div><div class="col-xs-10 col-md-10"><p class="txtblanco">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
             </div>
           </div>
           <div class="row pad_inter">
             <div class="col-md-12">
             <div class="col-md-4"></div>
                <div class="col-md-8">
                  <button class="btn btn-info" type="button">   
                Ver mas
               </button>
               <button class="btn btn-warning" type="button"> 
                Asistire <span class="badge">4</span>
               </button>
                </div>
             </div>
           </div>
        </div>
     </div>
    </div><!--row imagen-->
    </div><!--objeto-->
    <div class="bgcolor1 col-md-4">
      <div class="row">
            <div class="col-xs-2 col-sm-2col-md-2">
            <img class="icon-entry" src="img/dj.jpg">
            <h5 class="text-center txtblanco">19-JUL<h5>
            </div>
          <div class="col-xs-7 col-sm-7col-md-7"> <h4 class="txtblanco" >Titulo de evento Expo Quito 2016</h4></div>
          <div class="col-xs-3 col-sm-3col-md-3 ">
            <button class="btn btn-danger add-margin" type="button"> 
            <span class=" glyphicon glyphicon-heart" ></span><span class="badge">4</span>
            </button>
            <h5 class="text-right txtcolor2">#Publicante</h5>
        </div>
      </div>
    <div class="row">
         
      <div class="contenedor col-sm-6 col-md-12">
          <div class="imagen">
             <img class="Wallpaper flayers " src="img/flayer-2.jpg">
         </div>
       <div class="info ">
           <div class="row pad_inter">
             <div class="col-md-12"><div class="col-xs-1 col-md-1"><span class="txtblanco glyphicon glyphicon-map-marker">
             </span></div><div class="col-xs-10 col-md-10"><p class="txtblanco">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
             </div>
           </div>
           <div class="row pad_inter">
            <div class="col-md-12"><div class="col-xs-1 col-md-1"><span class="txtblanco glyphicon glyphicon-time">
             </span></div><div class="col-xs-10 col-md-10"><p class="txtblanco">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
             </div>
           </div>
           <div class="row pad_inter">
             <div class="col-md-12">
             <div class="col-md-4"></div>
                <div class="col-md-8">
                  <button class="btn btn-info" type="button">   
                Ver mas
               </button>
               <button class="btn btn-warning" type="button"> 
                Asistire <span class="badge">4</span>
               </button>
                </div>
             </div>
           </div>
        </div>
     </div>
    </div><!--row imagen-->
    </div><!--objeto-->
    <div class="bgcolor1 col-md-4">
      <div class="row">
            <div class="col-xs-2 col-sm-2col-md-2">
            <img class="icon-entry" src="img/dj.jpg">
            <h5 class="text-center txtblanco">19-JUL<h5>
            </div>
          <div class="col-xs-7 col-sm-7col-md-7"> <h4 class="txtblanco" >Titulo de evento Expo Quito 2016</h4></div>
          <div class="col-xs-3 col-sm-3col-md-3 ">
            <button class="btn btn-danger add-margin" type="button"> 
            <span class=" glyphicon glyphicon-heart" ></span><span class="badge">4</span>
            </button>
            <h5 class="text-right txtcolor2">#Publicante</h5>
        </div>
      </div>
    <div class="row">
         
      <div class="contenedor col-sm-6 col-md-12">
          <div class="imagen">
             <img class="Wallpaper flayers " src="img/flayer-3.jpg">
         </div>
       <div class="info ">
           <div class="row pad_inter">
             <div class="col-md-12"><div class="col-xs-1 col-md-1"><span class="txtblanco glyphicon glyphicon-map-marker">
             </span></div><div class="col-xs-10 col-md-10"><p class="txtblanco">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
             </div>
           </div>
           <div class="row pad_inter">
            <div class="col-md-12"><div class="col-xs-1 col-md-1"><span class="txtblanco glyphicon glyphicon-time">
             </span></div><div class="col-xs-10 col-md-10"><p class="txtblanco">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
             </div>
           </div>
           <div class="row pad_inter">
             <div class="col-md-12">
             <div class="col-md-4"></div>
                <div class="col-md-8">
                  <button class="btn btn-info" type="button">   
                Ver mas
               </button>
               <button class="btn btn-warning" type="button"> 
                Asistire <span class="badge">4</span>
               </button>
                </div>
             </div>
           </div>
        </div>
     </div>
    </div><!--row imagen-->
    </div><!--objeto-->

</div>   <!--main row-->

  

    <div class="row"><div class="col-md-12"></div></div>
    <div class="container"> 
        <div class="row addtop ">
      <div class="bgcolor4 publi2">
        <h1>PUBLICIDAD</h1>
      </div>
    </div>
    <div class="row"><center><h1 class="txtblanco">Actividad Reciente</h1></center></div>

      <div class="row">
          <div class="col-md-10">
              <div class="row">
                <div class="col-md-6  addtop">
                <div class="col-md-12 bgcolor radius"><h3 class="txtblanco">Titulo de la actividad</h3></div>
                
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                  <center><a href=""><button class="boton-activity">Leer mas</button></a></center>
                </div>
                <img src="img/actividad1.jpg" class="activity-img" >
                </div>

                <div class="col-md-6 addtop">
                <div class="col-md-12 bgcolor radius"><h3 class="txtblanco">Titulo de la actividad</h3></div>
                
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                  <center><a href=""><button class="boton-activity">Leer mas</button></a></center>
                </div>
                <img src="img/1.jpg" class="activity-img" >
                </div>

                 <div class="col-md-6  addtop">
                <div class="col-md-12 bgcolor radius"><h3 class="txtblanco">Titulo de la actividad</h3></div>
                
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                  <center><a href=""><button class="boton-activity">Leer mas</button></a></center>
                </div>
                <img src="img/2.jpg" class="activity-img" >
                </div>

                <div class="col-md-6 addtop">
                <div class="col-md-12 bgcolor radius"><h3 class="txtblanco">Titulo de la actividad</h3></div>
                
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                  <center><a href=""><button class="boton-activity">Leer mas</button></a></center>
                </div>
                <img src="img/3.jpg" class="activity-img" >
                </div>

                 <div class="col-md-6  addtop">
                <div class="col-md-12 bgcolor radius"><h3 class="txtblanco">Titulo de la actividad</h3></div>
                
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                  <center><a href=""><button class="boton-activity">Leer mas</button></a></center>
                </div>
                <img src="img/5.png" class="activity-img" >
                </div>

                <div class="col-md-6 addtop">
                <div class="col-md-12 bgcolor radius"><h3 class="txtblanco">Titulo de la actividad</h3></div>
                
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                  <center><a href=""><button class="boton-activity">Leer mas</button></a></center>
                </div>
                <img src="img/4.jpg" class="activity-img" >
                </div>
                

                <!-- FIN DE ENTRADAS -->

                <div class="col-md-12">
                  <br><br>
                   <center><h3 class="txtblanco">Invitaciones</h3></center>
                   <div class="col-md-2">
                    <img  class="img-entry" src="img/dj.jpg">
                   </div>
                   <div class="col-md-10">
                    <blockquote class="txtblanco">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate.</h5>
                    <footer class="txtcolor2" ><cite title="Source Title">Source Title</cite></footer>
                    <button class="btn btn-success add-margin" type="button"> 
                      <span class="glyphicon glyphicon-star" ></span><span class="badge">4</span>
                      </button>
                  </blockquote>
                   </div>

                </div>

                <div class="col-md-12">
                  <br>
                   <div class="col-md-2">
                    <img  class="img-entry" src="img/dj.jpg">
                   </div>
                   <div class="col-md-10">
                    <blockquote class="txtblanco">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</h5>
                    <footer class="txtcolor2" ><cite title="Source Title">Source Title</cite></footer>
                      <button class="btn btn-success add-margin" type="button"> 
                      <span class="glyphicon glyphicon-star" ></span><span class="badge">4</span>
                      </button>
                  </blockquote>
                   </div>

                </div>


                <div class="col-md-12">
                  <br>
                   <div class="col-md-2">
                    <img  class="img-entry" src="img/dj.jpg">
                   </div>
                   <div class="col-md-10">
                    <blockquote class="txtblanco">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</h5>
                    <footer class="txtcolor2" ><cite title="Source Title">Source Title</cite></footer>
                      <button class="btn btn-success add-margin" type="button"> 
                      <span class="glyphicon glyphicon-star" ></span><span class="badge">4</span>
                      </button>
                  </blockquote>
                   </div>

                </div>




              </div> 
          </div>
           <br>


      
    <div class="col-md-2">        
     <nav class="bgcolor4 menu give-top">
             <div class="publi"><h1>P<br>U<br>B<br>L<br>I<br>C<br>I<br>D<br>A<br>D</h1></div>
      </nav> 
      </div>



      </div>
    </div>
 </div>


<BR>

 </section><!--main-->
</div><!--container-->

 
<?php include('footer.php'); ?>