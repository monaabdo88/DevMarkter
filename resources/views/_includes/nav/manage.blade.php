<aside class="menu menu-item-radius p-r-50">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
    </ul>
      <p class="menu-label">
        Administration
      </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}">Users</a></li>
      <li>
        <a href="{{route('permissions.index')}}">Roles & Permssions</a>
        <ul>
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>

