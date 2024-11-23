<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <img src="{{ asset('img/Logo-kemas-white.png') }}" class="img-fluid p-2">
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link class="c-sidebar-nav-link" :href="route('admin.dashboard')" :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer" :text="__('Dashboard')" />
        </li>

        <li class="c-sidebar-nav-dropdown">
            <x-utils.link href="#" icon="c-sidebar-nav-icon cil-list" class="c-sidebar-nav-dropdown-toggle"
                :text="__('Gambar-gambar')" />

            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <x-utils.link :href="route('images.index_slideshow')" class="c-sidebar-nav-link" :text="__('Slideshow')" />
                </li>
                <li class="c-sidebar-nav-item">
                    <x-utils.link :href="route('images.index_gallery')" class="c-sidebar-nav-link" :text="__('Galeri')" />
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.index_news') }}"
                class="c-sidebar-nav-link {{ request()->segment(1) === 'admin' && request()->segment(2) === 'news' ? 'c-active' : '' }}">
                <i class="c-sidebar-nav-icon fas fa-newspaper"></i> Berita </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.index_announce') }}"
                class="c-sidebar-nav-link {{ request()->segment(1) === 'admin' && request()->segment(2) === 'announce' ? 'c-active' : '' }}">
                <i class="c-sidebar-nav-icon fas fa-scroll"></i> Pengumuman </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.index_approval') }}"
                class="c-sidebar-nav-link {{ request()->segment(1) === 'admin' && request()->segment(2) === 'approval' ? 'c-active' : '' }}">
                <i class="c-sidebar-nav-icon fas fa-check"></i> Persetujuan</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.index_warga') }}"
                class="c-sidebar-nav-link {{ request()->segment(1) === 'admin' && request()->segment(2) === 'warga' ? 'c-active' : '' }}">
                <i class="c-sidebar-nav-icon fas fa-users"></i> Data Warga</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.index_inbox') }}"
                class="c-sidebar-nav-link {{ request()->segment(1) === 'admin' && request()->segment(2) === 'inbox' ? 'c-active' : '' }}">
                <i class="c-sidebar-nav-icon fas fa-envelope"></i> Kotak Saran</a>
        </li>
        @if (
            $logged_in_user->hasAllAccess() ||
                ($logged_in_user->can('admin.access.user.list') ||
                    $logged_in_user->can('admin.access.user.deactivate') ||
                    $logged_in_user->can('admin.access.user.reactivate') ||
                    $logged_in_user->can('admin.access.user.clear-session') ||
                    $logged_in_user->can('admin.access.user.impersonate') ||
                    $logged_in_user->can('admin.access.user.change-password')))
            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li
                class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link href="#" icon="c-sidebar-nav-icon cil-user" class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Access')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if (
                        $logged_in_user->hasAllAccess() ||
                            ($logged_in_user->can('admin.access.user.list') ||
                                $logged_in_user->can('admin.access.user.deactivate') ||
                                $logged_in_user->can('admin.access.user.reactivate') ||
                                $logged_in_user->can('admin.access.user.clear-session') ||
                                $logged_in_user->can('admin.access.user.impersonate') ||
                                $logged_in_user->can('admin.access.user.change-password')))
                        <li class="c-sidebar-nav-item">
                            <x-utils.link :href="route('admin.auth.user.index')" class="c-sidebar-nav-link" :text="__('User Management')"
                                :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item">
                            <x-utils.link :href="route('admin.auth.role.index')" class="c-sidebar-nav-link" :text="__('Role Management')"
                                :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        @if ($logged_in_user->hasAllAccess())
            <li class="c-sidebar-nav-dropdown">
                <x-utils.link href="#" icon="c-sidebar-nav-icon cil-list" class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Logs')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <x-utils.link :href="route('log-viewer::dashboard')" class="c-sidebar-nav-link" :text="__('Dashboard')" />
                    </li>
                    <li class="c-sidebar-nav-item">
                        <x-utils.link :href="route('log-viewer::logs.list')" class="c-sidebar-nav-link" :text="__('Logs')" />
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
