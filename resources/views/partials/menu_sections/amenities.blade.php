@can('amenity_access')
<li class="nav-item">
    <a href="{{ route("admin.amenities.index") }}" class="nav-link {{ request()->is('admin/amenities') || request()->is('admin/amenities/*') ? 'active' : '' }}">
        <i class="fa-fw fas fa-check">

        </i>
        <p>
            <span>{{ trans('cruds.amenity.title') }}</span>
        </p>
    </a>
</li>
@endcan