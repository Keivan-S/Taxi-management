<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">@yield('pageTitle', 'داشبورد')</h3>
            <ol class="breadcrumb">
                @yield('breadcrump', \View::make('structure.defaultbreadcrump'))
            </ol>
        </div>
        @yield('pageTools')
    </div>
    @yield('pageContent', 'Default Content')
    @include('structure.leftsidebar')
</div>
