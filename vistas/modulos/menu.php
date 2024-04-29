<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">

			<li class="active">
				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>
			</li>

			<?php

			if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Directivo") {

					echo '<li class="treeview">
			          <a href="#">
			            <i class="fa fa-graduation-cap"></i>
			            <span>Alumnos</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="primero"><i class="fa fa-circle-o"></i> Primer Año</a></li>
			            <li><a href="segundo"><i class="fa fa-circle-o"></i> Segundo Año</a></li>
			            <li><a href="tercero"><i class="fa fa-circle-o"></i> Tercer Año</a></li>
			            <li><a href="cuarto"><i class="fa fa-circle-o"></i> Cuarto Año</a></li>
			            <li><a href="quinto"><i class="fa fa-circle-o"></i> Quinto Año</a></li>
			          </ul>
		    	    </li>';


    			}

    		?>

    		<li class="treeview">
            
                <a href="#">
                    <i class="fa fa-calendar" aria-hidden="true"></i> <span>Informes Cualitativos</span>
                    <!-- <span class="pull-right-container badge bg-blue"> -->
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  
                </a>
               
               <?php
                 
                  if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Preceptor") {
  

             echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span>Emisión de Informes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

                  <ul class="treeview-menu">
                      <li><a href="primero"><i class="fa fa-circle-o"></i> 1er. Año</a></li>
                      <li><a href="segundo"><i class="fa fa-circle-o"></i> 2º Año</a></li>
                      <li><a href="tercero"><i class="fa fa-circle-o"></i> 3er. Año</a></li>
                      <li><a href="cuarto"><i class="fa fa-circle-o"></i> 4º Año</a></li>             
                      <li><a href="quinto"><i class="fa fa-circle-o"></i> 5º Año</a></li>             
                  </ul>           
            </li>';

            }

        ?>
 
        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Científica") {
           

 			echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Científica y Tecnológica</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">                
                  <li><a href="11tm-cientifica"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="21tm-cientifica"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="31tt-cientifica"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tt-cientifica"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="51tt-cientifica"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
              </ul>

           
            </li>';

             }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Sociales") {

            echo '<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Sociales y Humanidades</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-sociales"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="21tm-sociales"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="31tt-sociales"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tt-sociales"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="51tt-sociales"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php


        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Lengua y Literatura") {



            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Lengua y Literatura</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-literatura"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="21tm-literatura"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="31tt-literatura"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tt-literatura"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="51tt-literatura"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Matemática") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Matemática</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-matematica"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="21tm-matematica"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="31tt-matematica"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tt-matematica"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="51tt-matematica"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Segundas Lenguas") {

            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Segundas Lenguas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-ingles"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="21tm-ingles"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="31tt-ingles"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tt-ingles"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="51tt-ingles"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Educación Física") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Educación Física</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-edfisica"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="21tm-edfisica"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="31tt-edfisica"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tt-edfisica"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="51tt-edfisica"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php


        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Educación Artística") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Lenguajes Artísticos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-artistica"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="21tm-artistica"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="31tt-artistica"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tt-artistica"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
              </ul>

           
            </li>';

               }

            ?>

            <?php

            if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Modalidad Economía") {


                  echo'<li class="treeview">
                      <a href="#">
                          <i class="fa fa-graduation-cap"></i>  C.O. Economía y Admin.
                          <i class="fa fa-angle-left pull-right"></i>
                      </a>                            

                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    3er. Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>

                                <ul class="treeview-menu">
                                    <li class="treeview">
                                      <li>
                                            <a href="3-economia">
                                            <i class="fa fa-check-circle-o"></i>
                                                Economía y Admin.                          
                                            </a>
                                      </li>  
                                  </li>
                              </li>
                          </ul>
                          </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    4º Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <li>
                                          <a href="4-economia">
                                          <i class="fa fa-check-circle-o"></i>
                                          Economía y Admin.                          
                                          </a>
                                    </li>
                                </li>
                            </ul>
                            </li>
                            </li>
                            <li class="treeview">
                                  <a href="#">
                                      <i class="fa fa-circle-o"></i>
                                      5º Año
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                      <li>
                                          <a href="5-economia">
                                          <i class="fa fa-check-circle-o"></i>
                                          Economía y Admin.                          
                                          </a>
                                      </li>                                     
                              </li>
                            </ul>
                            </li>

                      </ul>   
             </li>';

             }

            ?> 

        <?php     

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "REVE") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Espacio EVE</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-eve"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="21tm-eve"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="31tt-eve"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tt-eve"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="51tt-eve"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
              </ul>

           
            </li>';

               }

            ?>


</ul>
</li>
</li>



    		<?php

	    		if ($_SESSION["perfil"] == "Administrador") {

		    	    echo '<li>
						<a href="cursos">

							<i class="fa fa-university"></i>
							<span>Cursos</span>

						</a>
					</li>';

			}

			?>

			<?php

				if ($_SESSION["perfil"] == "Administrador") {

				echo '<li>
					<a href="usuarios">

						<i class="fa fa-users"></i>
						<span>Usuarios</span>

					</a>
				</li>';

		}

		?>


		</ul>

	</section>

</aside>