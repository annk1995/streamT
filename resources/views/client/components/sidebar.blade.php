   <ul class="sidebar navbar-nav">
       <li class="nav-item active">
           <a class="nav-link" href="{{ route('home') }}">
               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
           </a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ route('channels') }}">
               <i class="fas fa-fw fa-users"></i>
               <span>Channels</span>
           </a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ route('recommended') }}">
               <i class="fas fa-fw fa-user-alt"></i>
               <span>Recommended</span>
           </a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="{{ route('clientregistration') }}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Register</span>
        </a>
    </li>
       <li class="nav-item">
           <a class="nav-link" href="video-page.html">
               <i class="fas fa-fw fa-video"></i>
               <span>My Favorites</span>
           </a>
       </li>
       {{-- <li class="nav-item">
                <a class="nav-link" href="upload-video.html">
                    <i class="fas fa-fw fa-cloud-upload-alt"></i>
                    <span>Watch History</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="login.html">Login</a>
                    <a class="dropdown-item" href="register.html">Register</a>
                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                    <a class="dropdown-item" href="404.html">404 Page</a>
                    <a class="dropdown-item" href="contact.html">Contact</a>
                </div>
            </li> --}}
       <li class="nav-item">
           <a class="nav-link" href="{{ route('history') }}">
               <i class="fas fa-fw fa-history"></i>
               <span>Watch History</span>
           </a>
       </li>
       {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Categories</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="categories.html">Movie</a>
                    <a class="dropdown-item" href="categories.html">Music</a>
                    <a class="dropdown-item" href="categories.html">Television</a>
                </div>
            </li> --}}


       <li class="nav-item  channel-sidebar-list">
           <h6 class="toggle-list">Body Type </h6>
           <ul class="type-list">
               @foreach ($types as $type)
                   <li>
                       <a href="#">
                           {{ $type->name }} &emsp;<span>0</span>
                       </a>
                   </li>
               @endforeach

           </ul>

        </li>
       <li class="nav-item  channel-sidebar-list">
           <h6 class="toggle-list">Preferences </h6>
           <ul class="type-list">
               @foreach ($preferences as $preference)
                   <li>
                       <a href="#">
                           {{ $preference->name }} &emsp;<span>0</span>
                       </a>
                   </li>
               @endforeach

           </ul>

       </li>

       <li class="nav-item channel-sidebar-list">
           <h6 class="toggle-list">Country</h6>
           <ul class="type-list">
               @foreach ($countries as $country)
                   <li>
                       <a href="#">
                           <img class="img-fluid" alt src="{{ $country->flag }}"> {{ $country->name }}
                       </a>
                   </li>
               @endforeach
           </ul>

       </li>
       <li class="nav-item  channel-sidebar-list">
        <h6 class="toggle-list">Ethnicity </h6>
        <ul class="type-list">
            @foreach ($ethnicities as $ethnicity)
                <li>
                    <a href="#">
                        {{ $ethnicity->name }} &emsp;<span>0</span>
                    </a>
                </li>
            @endforeach

        </ul>

    </li>
    <li class="nav-item  channel-sidebar-list">
        <h6 class="toggle-list">Ages </h6>
        <ul class="type-list">
            @foreach ($ages as $age)
                <li>
                    <a href="#">
                        {{ $age->label .$age->age}} &emsp;<span>0</span>
                    </a>
                </li>
            @endforeach

        </ul>

    </li>

       <li class="nav-item channel-sidebar-list">
           <h6 class="toggle-list">Fetishes</h6>
           <ul class="type-list">
               @foreach ($fetishes as $fetish)
                   <li>
                       <a href="#">
                           {{ $fetish->name }}
                   </li>
               @endforeach
           </ul>

        </li>

    </li>













   </li>
   </ul>
