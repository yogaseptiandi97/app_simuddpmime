<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    @include('layouts.barebone.head.main-head')
    @include('layouts.barebone.head.fonts')
    @include('layouts.barebone.head.vendor-css')
    @include('layouts.barebone.head.global-css')
    @include('layouts.barebone.head.custom-css')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" class="app-default">
@include('layouts.barebone.theme-mode')
{{--@include('layouts.barebone.page-loader')--}}
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        @include('layouts.sidebar-page.header')
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            @include('layouts.sidebar-page.toolbar')
            @include('layouts.sidebar-page.sidebar')
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content  flex-column-fluid " >
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container  container-fluid ">
                            {{ $slot }}
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                @include('layouts.sidebar-page.footer')
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
@include('layouts.barebone.foot.global-js')
@include('layouts.barebone.foot.vendor-js')
@include('layouts.barebone.foot.custom-js')
</body>
<!--end::Body-->
</html>