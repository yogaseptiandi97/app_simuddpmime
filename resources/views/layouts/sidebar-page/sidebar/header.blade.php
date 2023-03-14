<!--begin::Header-->
<div class="app-sidebar-header d-flex flex-column px-10 pt-8" id="kt_app_sidebar_header">
    <!--begin::Brand-->
    <div class="d-flex flex-stack mb-10">
        <!--begin::User-->
        <div class="">
            <!--begin::User info-->
            <div class="d-flex align-items-center">
                <!--begin::Username-->
                <span class="text-white fs-4 fw-bold ms-3">{{ Auth::user()->nama ?? '' }}</span>
                <!--end::Username-->
            </div>
            <!--end::User info-->
        </div>
        <!--end::User-->
        <!--begin::Logout-->
        <button class="btn btn-custom btn-icon w-25px h-25px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
            <span class="svg-icon svg-icon-6">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor"/>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </button>
        <!--end::Logout-->
    </div>
    <!--end::Brand-->
</div><!--end::Header-->