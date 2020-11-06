 <!-- Codigo de navegacion en boostrap -->
 <div class="jumbotron">
    <!-- inicio de clase jumbotron -->
   <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <!-- La sentencia del button es con error la sintaxis es correcta solo que netbeans no lo reconoce es collapsed -->
                  <button  color="red" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
                      <span class="sr-only">Boton para Ustedes</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                <a class="navbar-brand" href="index.html"><font color="black">Sistema Educativo</font></a>  
          </div>
          <div id="navbar" class="navbar-collapse collapse">
             <!--En esta Parte se tiene que indexar los relacionados con sus funciones-->
            <!-- Fata agregar un enlace para que al mirar en el movil aparesca una pestaña que indique se haga clic ahi  -->
             <ul class="nav navbar-nav">

                 <!---<li><a href="index.html" target="blank">Index</a></li>--> 
                  <li><a href="Productos.html">Inicio</a></li>
                  <li><a href="formulario.html">Profesor</a></li>
                  <li><a href="#">Alumnado</a></li>
                  <li><a href="#">Padre Familia</a></li>
                  <li><a href="Paginas_Diseno/Videoconferencia.html">Aula Virtual</a></li>
                  <li><a href="#">Examen</a></li>
                  <li><a href="#">Material Didactico</a></li>
                  <li><a href="#">Nosotros</a></li>
              </ul>
              
              <!-- Es Una Clase abandonada de prueba a la derecha -->
              <!--<ul class="nav navbar-nav navbar-right">
                 <li><a href="#">Inicio</a></li>
                  <li><a href="#">Exit</a></li> 
              </ul>-->
          </div>  
              </div>
      </nav>
       </div>
<!-- Fin  de navegacion en boostrap -->
<!-- Fin  de navegacion en boostrap -->
<!-- division para video -->

          </div>
        </div>

<div class="container">
  <div class="jumbotron">
    <h2 align="center">Sistema Educativo</h2>


  </div>
</div>  






<script src='https://meet.jit.si/external_api.js'></script>
    <script type="text/javascript">
        const domain = 'meet.jit.si';
        const options = {
            roomName: 'ExampleRonny656454',
            width: 700,
            height: 500,
            parentNode: document.querySelector('#videocam')
        };
        const api = new JitsiMeetExternalAPI(domain, options);
    </script>

 <div id="div_cam">
        </div>

   <!-- Fin de pagina -->

	<!--  -->
<!-- Colocamos el codigo respectivo -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src = 'https://meet.jit.si/external_api.js' > </script>
