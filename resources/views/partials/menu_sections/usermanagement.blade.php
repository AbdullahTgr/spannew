@can('user_management_access')
<li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="fa-fw fas fa-users">

        </i>
        <p>
            <span>{{ trans('cruds.userManagement.title') }}</span>
            <i class="right fa fa-fw fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('permission_access')
            <li class="nav-item">
                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-unlock-alt">

                    </i>
                    <p>
                        <span>{{ trans('cruds.permission.title') }}</span>
                    </p>
                </a>
            </li>
        @endcan
        @can('role_access')
            <li class="nav-item">
                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-briefcase">

                    </i>
                    <p>
                        <span>{{ trans('cruds.role.title') }}</span>
                    </p>
                </a>
            </li>
        @endcan
        @can('user_access')
            <li class="nav-item">
                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-user">

                    </i>
                    <p>
                        <span>{{ trans('cruds.user.title') }}</span>
                    </p>
                </a>
            </li>
        @endcan
    </ul>
</li>
@endcan