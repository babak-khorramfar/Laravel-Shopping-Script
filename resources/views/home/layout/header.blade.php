<header class="header_section">
   <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
         <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class=""> </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
               </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="about.html">About</a></li>
                     <li><a href="testimonial.html">Testimonial</a></li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="product.html">Products</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="blog_list.html">Blog</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
               </li>
               <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
               </form>

               @if (Route::has('login'))
                     <div class="">
                        @auth
                              <div class="hidden sm:flex sm:items-center sm:ml-6">
                                 <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                       <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                             <div>{{ Auth::user()->name }}</div>
               
                                             <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                   <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                             </div>
                                       </button>
                                    </x-slot>
               
                                    <x-slot name="content">
                                       <x-dropdown-link :href="route('profile.edit')">
                                             {{ __('Profile') }}
                                       </x-dropdown-link>
               
                                       <!-- Authentication -->
                                       <form method="POST" action="{{ route('logout') }}">
                                             @csrf
               
                                             <x-dropdown-link :href="route('logout')"
                                                   onclick="event.preventDefault();
                                                               this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                             </x-dropdown-link>
                                       </form>
                                    </x-slot>
                                 </x-dropdown>
                              </div>
                           @else
                              <div class="flex">
                                 <li class="nav-item">
                                    <a class="btn btn-info ml-3" href="{{ route('login') }}">Login</a>
                                 </li>

                                 @if (Route::has('register'))
                                 <li class="nav-item">
                                    <a class="btn btn-info ml-1" href="{{ route('register') }}">Register</a>
                                 </li>
                              </div>
                        @endif
                     @endauth
                   </div>
               @endif

            </ul>
         </div>
      </nav>
   </div>
</header>