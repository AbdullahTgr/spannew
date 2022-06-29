          
         
                @can('venue_access')
                <li class="nav-item">
                    <a href="{{ route("admin.venues.index") }}" class="nav-link {{ request()->is('admin/venues') || request()->is('admin/venues/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-map-marker-alt">

                        </i>
                        <p>
                            <span>{{ trans('cruds.venue.title') }}</span>
                        </p>
                    </a>
                </li>
            @endcan