   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <ul class="nav">
           <li class="nav-item {{ request()->is('*/') ? 'active' : '' }}">
               <a class="nav-link " href="{{ url('/') }}">
                   <i class="icon-grid menu-icon"></i>
                   <span class="menu-title">Dashboard</span>
               </a>
           </li>
           <li class="nav-item {{ request()->is('*kriteria*') ? 'active' : '' }}">
               <a class="nav-link {{ request()->is('*kriteria*') ? 'active' : '' }}" href="{{ route('kriteria') }}">
                   <i class="icon-layout menu-icon"></i>
                   <span class="menu-title">Kriteria</span>
               </a>
           </li>
           <li class="nav-item {{ request()->is('*hewan*') ? 'active' : '' }}">
               <a class="nav-link" href="{{ route('animals')}}">
                   <i class="mdi mdi-cow menu-icon"></i>
                   <span class="menu-title">Daftar Hewan</span>
               </a>
           </li>
           
           <li class="nav-item  {{ request()->is('*analisa*') ? 'active' : '' }}">
               <a class="nav-link" data-toggle="collapse" href="#analisa" aria-expanded="false" aria-controls="analisa">
                   <i class="icon-paper menu-icon"></i>
                   <span class="menu-title">Hasil Analisa</span>
                   <i class="menu-arrow"></i>
               </a>
               <div class="collapse {{ request()->is('*analisa*') ? 'show' : '' }}" id="analisa">
                   <ul class="nav flex-column sub-menu">
                       @foreach(\App\Models\AnimalType::all() as $type)
                           <li class="nav-item"> <a class="nav-link" href="{{ url('/analisa/'.$type->id) }}"> {{ $type->name }} </a></li>
                       @endforeach
                   </ul>
               </div>
           </li>
           <li class="nav-item {{ request()->is('*perankingan*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#perankingan" aria-expanded="false" aria-controls="perankingan">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Perankingan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('*perankingan*') ? 'show' : '' }}" id="perankingan">
              <ul class="nav flex-column sub-menu">
                  @foreach(\App\Models\AnimalType::all() as $type)
                      <li class="nav-item"> <a class="nav-link" href="{{ url('/perankingan/'.$type->id) }}"> {{ $type->name }} </a></li>
                  @endforeach
              </ul>
            </div>
          </li>
       </ul>
   </nav>
   <!-- partial -->
