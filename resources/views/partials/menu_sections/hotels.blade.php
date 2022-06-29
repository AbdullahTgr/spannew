
      
                @can('hotel_access')
                <li class="nav-item">
                    <a href="{{ route("admin.hotels.index") }}" class="nav-link {{ request()->is('admin/hotels') || request()->is('admin/hotels/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-hotel">

                        </i>
                        <p>
                            <span>{{ trans('cruds.hotel.title') }}</span>
                        </p>
                    </a>
                </li>
            @endcan