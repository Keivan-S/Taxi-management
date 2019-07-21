<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">@yield('pageTitle', 'داشبورد')</h3>
            <ol class="breadcrumb">
                @yield('breadcrump', \View::make('layouts.defaultbreadcrump'))
            </ol>
        </div>


        <div class="col-md-6 col-4 align-self-center">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm float-right ml-2"><i class="ti-settings text-white"></i></button>


            
        </div>
        
       
    </div>
    @yield('pageContent', 'Default Content')
    @include('layouts.leftsidebar')
</div>
