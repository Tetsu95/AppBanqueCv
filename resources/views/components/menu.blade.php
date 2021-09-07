<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Acceuil
              </p>  
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gestion Banque de Cv
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('creation')}}" class="nav-link">
                  <i class="far "></i>
                  <p>Creer un cv</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('liste')}}" class="nav-link">
                  <i class="far "></i>
                  <p>Consulter son cv</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('home.search')}}" class="nav-link">
                  <i class="far "></i>
                  <p>Modifier son Cv</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>