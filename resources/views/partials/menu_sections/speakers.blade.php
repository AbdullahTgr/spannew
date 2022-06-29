@can('speaker_access')
<li class="nav-item">
    <a href="{{ route("admin.speakers.index") }}" class="nav-link {{ request()->is('admin/speakers') || request()->is('admin/speakers/*') ? 'active' : '' }}">
        <i class="fa-fw fas fa-users">

        </i>
        <p>
            <span>{{ trans('cruds.speaker.title') }}</span>
        </p>
    </a>
</li>
@endcan