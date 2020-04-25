<nav class="navbar is-success" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{asset('uploads/siteImages/logo.png')}}" alt="DevMarketer logo">
      </a>
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          Home
        </a>
        <a class="navbar-item">
          Learn
        </a>
        
        <a class="navbar-item">
          Share
        </a>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          @if (Auth::guest())
            <div class="buttons">
              <a class="button is-primary" href="{{route('register')}}">
                <strong>Sign up</strong>
              </a>
              <a class="button is-light" href="{{route('login')}}">
                Log in
              </a>
            </div>
          @else
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Hey {{ Auth::user()->name }}
              </a>

              <div class="navbar-dropdown">
                <a href="#" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                  </span>Profile
                </a>
                <a href="#" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-bell m-r-5"></i>
                  </span>Notifications
                </a>
                <a href="{{route('manage.dashboard')}}" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-cog m-r-5"></i>
                  </span>Manage
                </a>
                <hr class="navbar-divider">
                <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        <span class="icon">
                          <i class="fa fa-fw fa-sign-out m-r-5"></i>
                        </span>
                        Logout
                      </a>
                      @include('_includes.forms.logout')
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>
