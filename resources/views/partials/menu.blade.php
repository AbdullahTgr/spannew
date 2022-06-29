<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                @include('partials.menu_sections.dashboard')
                @include('partials.menu_sections.usermanagement')
                @include('partials.menu_sections.settings') 
                @include('partials.menu_sections.speakers')
                {{-- @include('partials.menu_sections.schedule') --}}
                @include('partials.menu_sections.venues')
                {{-- @include('partials.menu_sections.hotels') --}}
                @include('partials.menu_sections.gallaries')
                @include('partials.menu_sections.sponsors')
                @include('partials.menu_sections.faqs')
                @include('partials.menu_sections.amenities')
                @include('partials.menu_sections.prices')

        
   
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">

                            </i>
                            <span>{{ trans('global.logout') }}</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>