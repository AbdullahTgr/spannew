     
  
                @can('sponsor_access')
                <li class="nav-item">
                    <a href="{{ route("admin.sponsors.index") }}" class="nav-link {{ request()->is('admin/sponsors') || request()->is('admin/sponsors/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-hand-holding-usd">

                        </i>
                        <p>
                            <span>{{ trans('cruds.sponsor.title') }}</span>
                        </p>
                    </a>
                </li>
            @endcan