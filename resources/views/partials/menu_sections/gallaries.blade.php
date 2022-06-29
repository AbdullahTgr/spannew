@can('gallery_access')
<li class="nav-item">
    <a href="{{ route("admin.galleries.index") }}" class="nav-link {{ request()->is('admin/galleries') || request()->is('admin/galleries/*') ? 'active' : '' }}">
        <i class="fa-fw fas fa-images">

        </i>
        <p>
            <span>{{ trans('cruds.gallery.title') }}</span>
        </p>
    </a>
</li>
@endcan