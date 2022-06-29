

                @can('faq_access')
                <li class="nav-item">
                    <a href="{{ route("admin.faqs.index") }}" class="nav-link {{ request()->is('admin/faqs') || request()->is('admin/faqs/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-question">

                        </i>
                        <p>
                            <span>{{ trans('cruds.faq.title') }}</span>
                        </p>
                    </a>
                </li>
            @endcan