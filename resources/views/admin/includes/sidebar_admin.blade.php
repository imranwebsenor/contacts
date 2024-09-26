<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky pt-3">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        @hasanyrole('Super Admin|Admin')
                            <li class="nav-item">
                                <a href="{{ route('admin.contacts.index') }}"
                                    class="nav-link d-flex  p-2  {{ request()->is('admin/contacts*') ? 'active' : '' }}" style="gap:10px">
                                    <i class="nav-icon material-icons">account_circle</i>
                                    <p class="m-0">{{ __('Contacts') }}</p>
                                </a>
                            </li>
                
                        @endhasanyrole
                    </ul>
        </nav>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
            @yield('content')
        </main>
    </div>
</div>