     
                @can('schedule_access')
                <li class="nav-item">
                    <a href="{{ route("admin.schedules.index") }}" class="nav-link {{ request()->is('admin/schedules') || request()->is('admin/schedules/*') ? 'active' : '' }}">
                        <i class="fa-fw far fa-clock">

                        </i>
                        <p>
                            <span>{{ trans('cruds.schedule.title') }}</span>
                        </p>
                    </a>
                </li>
            @endcan