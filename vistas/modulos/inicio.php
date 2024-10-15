<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Tablero
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Dashboard</li>
    
    </ol>

  </section>

  <section class="content">


    <div class="row">

<!--        ACTUALIZACIONES   -->
        <div class="row" style="padding-left: 10px;">
                <div class="col-md-12">
                    <h1><b><span class="text-success">Actualizaciones 2024-10-14</span></b></h1>
                    <ul>
                        <li><i><span style="font-size: 22px">Proveedores agregados</span></i></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <h1><b><span class="text-success">Próximamente...</span></b></h1>
                    <ul>
                        <li><i><span style="font-size: 22px">Emisión de Facturas (NCF)</span></i></li>
                    </ul>
                </div>
        </div>

      
    <?php

    if($_SESSION["perfil"] =="Administrador"){

      include "inicio/cajas-superiores.php";

    }

    ?>

    </div> 

     <div class="row">
       
        <div class="col-lg-12">

          <?php

          if($_SESSION["perfil"] =="Administrador"){
          
           include "reportes/grafico-ventas.php";

          }

          ?>

        </div>

        <div class="col-lg-6">

          <?php

          if($_SESSION["perfil"] =="Administrador"){
          
           include "reportes/productos-mas-vendidos.php";

         }

          ?>

        </div>

         <div class="col-lg-6">

          <?php

          if($_SESSION["perfil"] =="Administrador"){
          
           include "inicio/productos-recientes.php";

         }

          ?>

        </div>

         <div class="col-lg-12">
           
          <?php

          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

         </div>

     </div>

  </section>
 
</div>
