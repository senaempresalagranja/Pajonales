      <header class="main-header hidden-print">
      <!-- <div class="logo" >

      <img class="logoimg" src="../../../assets/img/SIE.png" alt="">
      <h1 class="logoa">Sistema</h1 > 
      </div > -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- User Menu-->
              <li><a href="cerrar.php"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="../../assets/img/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <?php 
                echo "$usu";
               ?>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu"> <!-- colorcar la clase "active" cuando sea necesario --> 
            <li class=""><a href="index.php"><i class="fa fa-home"></i><span>Inicio</span></a></li>
            <li class=""><a href="Mapa/kml.php"><i class="fa fa-map"></i><span>Mapa</span></a></li>
            
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Registrar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Vegetativa</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="frm_preparacionSuelo.php"><i class="fa fa-"></i> <span>Preracion Suelos</span></a></li>
                    <li><a href="frm_siembraS0.php"><i class="fa fa-"></i><span>Siembra S0</span></a></li>
                    <!-- <li><a href=""><i class="fa fa-"></i> </a></li> -->
                    <li><a href="frm_emergenciaS3.php"><i class="fa fa-"></i><span> Emeregencia S3</span></a></li>

                    <li><a href="frm_v3-v5.php"><i class="fa fa-"></i><span> V3-V5</span></a></li>

                    <li><a href="frm_v6-v9.php"><i class="fa fa-"></i><span> V6-V9</span></a></li>


                  </ul>

                </li>

                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Productiva</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="frm_r0-r1.php"><i class="fa fa-"></i> <span>R0-R1</span></a></li>
                    <li><a href="frm_r2-r3.php"><i class="fa fa-"></i><span> R2-R3</span></a></li>
                    <li><a href="frm_r4-r5.php"><i class="fa fa-"></i> <span> R4-R5</span></a></li>

                  </ul>

                </li>

                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Maduracion</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">

                    <li><a href="frm_r6-r8.php"><i class="fa fa-"></i><span> R6-R8</span></a></li>

                    <li><a href="frm_r9.php"><i class="fa fa-"></i><span> R9</span></a></li>

                  </ul>

                </li>

              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Consultar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Vegetativa</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="cons_preparacionSuelo.php"><i class="fa fa-"></i> <span>Preracion Suelos</span></a></li>
                    <li><a href="cons_siembraS0.php"><i class="fa fa-"></i><span>Siembra S0</span></a></li>
                    <!-- <li><a href=""><i class="fa fa-"></i> </a></li> -->
                    <li><a href="cons_emergenciaS3.php"><i class="fa fa-"></i><span> Emeregencia S3</span></a></li>

                    <li><a href="cons_v3-v5.php"><i class="fa fa-"></i><span> V3-V5</span></a></li>

                    <li><a href="cons_v6-v9.php"><i class="fa fa-"></i><span> V6-V9</span></a></li>


                  </ul>

                </li>

                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Productiva</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="cons_r0-r1.php"><i class="fa fa-"></i> <span>R0-R1</span></a></li>
                    <li><a href="cons_r2-r3.php"><i class="fa fa-"></i><span> R2-R3</span></a></li>
                    <li><a href="cons_r4-r5.php"><i class="fa fa-"></i> <span> R4-R5</span></a></li>

                  </ul>

                </li>

                <li class="treeview"><a href="#"><i class="fa fa-"></i><span>Fase Maduracion</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">

                    <li><a href="cons_r6-r8.php"><i class="fa fa-"></i><span> R6-R8</span></a></li>

                    <li><a href="cons_r9.php"><i class="fa fa-"></i><span> R9</span></a></li>

                  </ul>

                </li>

              </ul>
            </li>
          </ul>
        </section>
      </aside><!-- <li class="treeview"><a href="#"><i class="fa fa-"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-"></i> Level Two</a></li>
                    <li><a href="#"><i class="fa fa-"></i><span> Level Two</span></a></li>

                  </ul>

                </li> -->