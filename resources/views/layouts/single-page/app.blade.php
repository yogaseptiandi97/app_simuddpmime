<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    @include('layouts.barebone.head.main-head')
    @include('layouts.barebone.head.fonts')
    @include('layouts.barebone.head.global-css')
</head>
<!--end::Head-->
<!--begin::Body-->
<body  id="kt_body"  class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
@include('layouts.barebone.theme-mode')
@include('layouts.barebone.page-loader')
<!--begin::App-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>
        body {
            background-image: url('{{ asset('assets/media/auth/bg2.jpg') }}');
        }

        [data-bs-theme="dark"] body {
            background-image: url('{{ asset('assets/media/auth/bg2-dark.jpg') }}');
        }
    </style>
    <!--end::Page bg image-->

    <!--begin::Content Wrapper -->
    <div class="d-flex flex-column flex-center flex-column-fluid">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center text-center p-10">
            <!--begin::Wrapper-->
            {{ $slot }}
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content Wrapper-->
</div>
<!--end::App-->
@include('layouts.barebone.foot.global-js')
<script src="https://cdn.jsdelivr.net/gh/innercodetech/innerformvalidation@master/InnerFormValidation.js"></script>
</body>
<!--end::Body-->
</html>