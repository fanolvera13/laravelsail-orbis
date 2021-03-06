<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        logo
    </a>
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
               image
            </div>
            <div class="info">
                <a href="#" class="d-block">{{session()->get('nombre_usuario', 'Inivitado')}}</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @foreach ($menusComposer as $key => $item)
                @if ($item["menu_id"] != 0)
                    @break
                @endif
                @include("theme.$theme.menu-item", ["item" => $item])
            @endforeach
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
