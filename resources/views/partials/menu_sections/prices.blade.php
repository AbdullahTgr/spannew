@can('price_access')
<li class="nav-item">
    <a href="{{ route("admin.prices.index") }}" class="nav-link {{ request()->is('admin/prices') || request()->is('admin/prices/*') ? 'active' : '' }}">
        <i class="fa-fw fas fa-money-bill">

        </i>
        <p>
            <span>{{ trans('cruds.price.title') }}</span>
        </p>
    </a>
</li>
@endcan