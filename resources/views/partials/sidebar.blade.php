   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <ul class="nav">
           <li class="nav-item">
               <a class="nav-link" href="{{ url('dashboard') }}">
                   <i class="icon-grid menu-icon"></i>
                   <span class="menu-title">Dashboard</span>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="{{ route('kriteria') }}">
                   <i class="icon-layout menu-icon"></i>
                   <span class="menu-title">Kriteria</span>
               </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="{{ route('animals')}}">
                   <i class="mdi mdi-cow menu-icon"></i>
                   <span class="menu-title">Daftar Hewan</span>
               </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#perankingan" aria-expanded="false" aria-controls="perankingan">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Perankingan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="perankingan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/1/perankingan') }}"> Sapi </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/2/perankingan') }}"> Kambing </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/3/perankingan') }}"> Domba </a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
               <a class="nav-link" href="#">
                   <i class="icon-paper menu-icon"></i>
                   <span class="menu-title">Hasil Analisa</span>
               </a>
           </li>
       </ul>
   </nav>
   <!-- partial -->