
<!DOCTYPE html>
<html lang="en" >
<!--begin::Head-->
<head><base href=""/>
    <title>Login | Sistem Informasi Unit Donor Darah Kabupaten Muara Enim</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="http://127.0.0.1:8000/assets/media/logos/favicon.ico"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->

    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="http://127.0.0.1:8000/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="http://127.0.0.1:8000/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <!--begin::Custom Stylesheets(used for this page only)-->

    <!--end::Custom Stylesheets-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body  id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"  class="app-default" >
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;
    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if ( localStorage.getItem("data-bs-theme") !== null ) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load--><!--begin::Loader-->
<div class="page-loader flex-column">
    <img alt="Logo" class="theme-light-show max-h-50px" src="http://127.0.0.1:8000/assets/media/logos/keenthemes.svg"/>
    <img alt="Logo" class="theme-dark-show max-h-50px" src="http://127.0.0.1:8000/assets/media/logos/keenthemes-dark.svg"/>
    <div class="d-flex align-items-center mt-5">
        <span class="spinner-border text-primary" role="status"></span>
        <span class="text-muted fs-6 fw-semibold ms-5">Memuat halaman...</span>
    </div>
</div>
<!--end::Loader--><!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header ">
            <!--begin::Header container-->
            <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                <!--begin::Sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-md-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"/>
                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                </div>
                <!--end::Sidebar mobile toggle-->
                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="?page=index" class="d-lg-none">
                        <img alt="Logo" src="http://127.0.0.1:8000/assets/media/logos/default-small.svg" class="h-30px"/>
                    </a>
                </div>
                <!--end::Mobile logo-->
                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}" class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Multipurpose </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="?page=index" class="text-muted text-hover-primary"> Home </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                Dashboards
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div><!--end::Page title-->            <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">
                        <!--begin::Theme mode-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
                                <span class="svg-icon theme-light-show svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor"/>
                                        <path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor"/>
                                        <path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor"/>
                                        <path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor"/>
                                        <path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor"/>
                                        <path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor"/>
                                        <path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor"/>
                                        <path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor"/>
                                        <path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->    <!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
                                <span class="svg-icon theme-dark-show svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"/>
                                        <path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"/>
                                        <path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"/>
                                        <path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                            <!--begin::Menu toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor"/>
                                                    <path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor"/>
                                                    <path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor"/>
                                                    <path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor"/>
                                                    <path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor"/>
                                                    <path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor"/>
                                                    <path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor"/>
                                                    <path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor"/>
                                                    <path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->            </span>
                                        <span class="menu-title">
                                            Light
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"/>
                                                    <path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"/>
                                                    <path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"/>
                                                    <path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->            </span>
                                        <span class="menu-title">
                                            Dark
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">
                                            System
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Theme mode-->
                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="user"/>
                            </div>
                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">
                                                Max Smith
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                            </div>
                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"> max@kt.com </a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="?page=authentication/layouts/corporate/sign-in" class="menu-link px-5"> Sign Out </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->
                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                            <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" id="kt_app_header_menu_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-md-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor"/>
                                        <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Header menu toggle-->
                    </div><!--end::Navbar-->        </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="?page=index">
                        <img alt="Logo" src="http://127.0.0.1:8000/assets/media/logos/default-dark.svg" class="h-25px app-sidebar-logo-default"/>
                        <img alt="Logo" src="http://127.0.0.1:8000/assets/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize"/>
                    </a>
                    <!--end::Logo image-->
                </div>
                <!--end::Logo-->    <!--begin::sidebar menu-->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!--begin::Menu wrapper-->
                    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-grid fs-3"></i></span>
                                    <span class="menu-title">Dashboards</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link active" href="?page=index">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Default</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=dashboards/ecommerce">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">eCommerce</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/projects">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Projects</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/online-courses">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Online Courses</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=dashboards/marketing">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Marketing</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item-->
                                    <div class="menu-inner flex-column collapse " id="kt_app_sidebar_menu_dashboards_collapse">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/bidding">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Bidding</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/pos">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">POS System</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/call-center">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Call Center</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/logistics">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Logistics</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/website-analytics">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Website Analytics</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/finance-performance">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Finance Performance</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/store-analytics">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Store Analytics</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/social">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Social</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/delivery">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Delivery</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/crypto">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Crypto</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/school">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">School</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/podcast">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Podcast</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=landing">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Landing</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--></div>
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
                                                <span data-kt-toggle-text-target="true">Show 12 More</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                <span class="svg-icon toggle-on svg-icon-2 me-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--><!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2 me-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"/>
                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item pt-5"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                                </div>
                                                        <!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-person-lines-fill fs-3"></i></span>
                                    <span class="menu-title">User Profile</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/overview">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/projects">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Projects</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/campaigns">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Campaigns</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/documents">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Documents</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/followers">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Followers</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/activity">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activity</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-person fs-2"></i></span>
                                    <span class="menu-title">Account</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/overview">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/security">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Security</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/activity">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activity</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/billing">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Billing</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/statements">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Statements</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/referrals">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Referrals</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/api-keys">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">API Keys</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/logs">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Logs</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-sticky fs-3"></i></span>
                                    <span class="menu-title">Authentication</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Corporate Layout</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/sign-in">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/sign-up">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/two-steps">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two-steps</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/new-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">New Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overlay Layout</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/sign-in">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/sign-up">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/two-steps">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two-steps</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/new-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">New Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Creative Layout</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/sign-in">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/sign-up">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/two-steps">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two-steps</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/new-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">New Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Fancy Layout</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/sign-in">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/sign-up">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/two-steps">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two-steps</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/new-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">New Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Email Templates</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/welcome-message">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Welcome Message</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/subscription-confirmed">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Subscription Confirmed</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/card-declined">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Credit Card Declined</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/promo-1">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Promo 1</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/promo-2">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Promo 2</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/promo-3">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Promo 3</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/extended/multi-steps-sign-up">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Multi-steps Sign-up</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/extended/two-factor-auth">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Two Factor Auth</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/welcome">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Welcome Message</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/verify-email">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Verify Email</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/coming-soon">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Coming Soon</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/password-confirmation">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Password Confirmation</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/account-deactivated">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Account Deactivation</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/error-404">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Error 404</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/error-500">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Error 500</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-journal-richtext fs-3"></i></span>
                                    <span class="menu-title">Corporate</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/about">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">About</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/team">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Our Team</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/licenses">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Licenses</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/sitemap">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sitemap</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-globe fs-3"></i></span>
                                    <span class="menu-title">Social</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/social/feeds">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Feeds</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/social/activity">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activty</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/social/followers">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Followers</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/social/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-file-earmark-richtext fs-3"></i></span>
                                    <span class="menu-title">Blog</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/blog/home">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Blog Home</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/blog/post">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Blog Post</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-patch-check fs-3"></i></span>
                                    <span class="menu-title">FAQ</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/faq/classic">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FAQ Classic</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/faq/extended">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FAQ Extended</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-tags fs-3"></i></span>
                                    <span class="menu-title">Pricing</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=pages/pricing/column">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Column Pricing</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/pricing/table">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Table Pricing</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-vector-pen fs-3"></i></span>
                                    <span class="menu-title">Careers</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/careers/list">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Careers List</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/careers/apply">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Careers Apply</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-shield-check fs-3"></i></span>
                                    <span class="menu-title">Utilities</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Modals</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">General</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/invite-friends">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Invite Friends</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/view-users">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">View Users</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/select-users">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Select Users</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/upgrade-plan">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Upgrade Plan</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/share-earn">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Share & Earn</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                                 <!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Forms</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/new-target">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">New Target</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/new-card">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">New Card</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/new-address">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">New Address</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/create-api-key">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create API Key</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/bidding">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Bidding</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                                 <!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Wizards</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/create-app">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create App</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/create-campaign">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create Campaign</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/create-account">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create Business Acc</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/create-project">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create Project</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/top-up-wallet">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Top Up Wallet</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/offer-a-deal">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Offer a Deal</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/two-factor-authentication">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Two Factor Auth</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                                 <!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Search</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/search/users">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Users</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/search/select-location">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Select Location</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                                 <!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Search</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/search/horizontal">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Horizontal</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/search/vertical">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Vertical</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/search/users">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Users</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/search/select-location">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Location</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Wizards</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/horizontal">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Horizontal</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/vertical">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Vertical</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/two-factor-authentication">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two Factor Auth</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/create-app">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Create App</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/create-campaign">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Create Campaign</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/create-account">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Create Account</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/create-project">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Create Project</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/top-up-wallet">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Top Up Wallet</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/offer-a-deal">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Offer a Deal</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-person fs-2"></i></span>
                                    <span class="menu-title">Widgets</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/lists">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Lists</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/statistics">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Statistics</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/charts">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Charts</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/mixed">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Mixed</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/tables">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tables</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/feeds">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Feeds</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item pt-5"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
                                </div>
                                                        <!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-bar-chart-line fs-3"></i></span>
                                    <span class="menu-title">Projects</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/list">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">My Projects</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/project">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Project</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/targets">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Targets</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/budget">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Budget</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/users">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/files">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Files</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/activity">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activity</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-cart fs-3"></i></span>
                                    <span class="menu-title">eCommerce</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Catalog</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/products">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Products</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/categories">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Categories</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/add-product">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Product</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/edit-product">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Product</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/add-category">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Category</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/edit-category">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Category</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sales</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/sales/listing">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Orders Listing</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/sales/details">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Order Details</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/sales/add-order">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Order</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/sales/edit-order">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Order</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customers</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/customers/listing">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customer Listing</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/customers/details">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customer Details</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reports</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/view">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Products Viewed</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/sales">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sales</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/returns">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Returns</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/customer-orders">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customer Orders</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/shipping">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Shipping</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-telephone-fill fs-3"></i></span>
                                    <span class="menu-title">Contacts</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/contacts/getting-started">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/contacts/add-contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Add Contact</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/contacts/edit-contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Edit Contact</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/contacts/view-contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Contact</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-person-check fs-3"></i></span>
                                    <span class="menu-title">Support Center</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/overview">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tickets</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/tickets/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tickets List</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/tickets/view">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View Ticket</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tutorials</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/tutorials/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tutorials List</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/tutorials/post">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tutorial Post</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/faq">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FAQ</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/licenses">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Licenses</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-people fs-3"></i></span>
                                    <span class="menu-title">User Management</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/users/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Users List</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/users/view">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View User</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Roles</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/roles/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Roles List</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/roles/view">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View Role</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/permissions">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Permissions</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-printer fs-3"></i></span>
                                    <span class="menu-title">Customers</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/customers/getting-started">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/customers/list">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customer Listing</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/customers/view">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customer Details</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-cart fs-3"></i></span>
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/subscriptions/getting-started">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/subscriptions/list">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Subscription List</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/subscriptions/add">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Add Subscription</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/subscriptions/view">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Subscription</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-hr fs-3"></i></span>
                                    <span class="menu-title">Invoice Manager</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Invoices</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/invoices/view/invoice-1">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 1</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/invoices/view/invoice-2">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 2</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/invoices/view/invoice-3">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 3</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=apps/invoices/create">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Create Invoice</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-card-checklist fs-3"></i></span>
                                    <span class="menu-title">File Manager</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/file-manager/folders">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Folders</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/file-manager/files">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Files</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/file-manager/blank">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Blank Directory</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/file-manager/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-envelope fs-3"></i></span>
                                    <span class="menu-title">Inbox</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/inbox/listing">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Messages</span>
                                            <span class="menu-badge">
                                                <span class="badge badge-success">3</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/inbox/compose">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Compose</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/inbox/reply">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View & Reply</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi-chat-left fs-3"></i></span>
                                    <span class="menu-title">Chat</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/chat/private">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Private Chat</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/chat/group">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Group Chat</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/chat/drawer">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Drawer Chat</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/calendar">
                                    <span class="menu-icon"><i class="bi bi-calendar3-event fs-3"></i></span>
                                    <span class="menu-title">Calendar</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item pt-5"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span>
                                </div>
                                                        <!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-columns-gap fs-3"></i></span>
                                    <span class="menu-title">Layout Options</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=layouts/light-sidebar">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Light Sidebar</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=layouts/dark-sidebar">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Dark Sidebar</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=layouts/light-header">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Light Header</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=layouts/dark-header">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Dark Header</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-gear fs-3"></i></span>
                                    <span class="menu-title">Toolbars</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/classic">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Classic</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/saas">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">SaaS</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/accounting">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Accounting</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/extended">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Extended</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/reports">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reports</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="?page=layout-builder">
                                    <span class="menu-icon"><i class="bi bi-sliders fs-3"></i></span>
                                    <span class="menu-title">Layout Builder</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item pt-5"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
                                </div>
                                                        <!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank">
                                    <span class="menu-icon"><i class="bi bi-briefcase fs-3"></i></span>
                                    <span class="menu-title">Components</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">
                                    <span class="menu-icon"><i class="bi bi-box fs-3"></i></span>
                                    <span class="menu-title">Documentation</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
                                    <span class="menu-icon"><i class="bi bi-diagram-3 fs-3"></i></span>
                                    <span class="menu-title">Changelog v8.1.7</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item-->        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div><!--end::sidebar menu-->    <!--begin::Footer-->
                <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                    <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
                        <span class="btn-label">
                            Docs & Components
                        </span>
                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                        <span class="svg-icon btn-icon svg-icon-2 m-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor"/>
                                <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor"/>
                                <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor"/>
                                <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor"/>
                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </div><!--end::Footer--></div>
            <!--end::Sidebar-->            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content  flex-column-fluid " >
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container  container-fluid ">

                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer " >
                    <!--begin::Footer container-->
                    <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>
                            <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>
                            <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
                        </ul>
                        <!--end::Menu-->        </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="http://127.0.0.1:8000/assets/plugins/global/plugins.bundle.js"></script>
<script src="http://127.0.0.1:8000/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->

<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->

<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
<!DOCTYPE html>
<html lang="en" >
<!--begin::Head-->
<head><base href=""/>
    <title>Login | Sistem Informasi Unit Donor Darah Kabupaten Muara Enim</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="http://127.0.0.1:8000/assets/media/logos/favicon.ico"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->

    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="http://127.0.0.1:8000/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="http://127.0.0.1:8000/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <!--begin::Custom Stylesheets(used for this page only)-->

    <!--end::Custom Stylesheets-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body  id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"  class="app-default" >
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;
    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if ( localStorage.getItem("data-bs-theme") !== null ) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load--><!--begin::Loader-->
<div class="page-loader flex-column">
    <img alt="Logo" class="theme-light-show max-h-50px" src="http://127.0.0.1:8000/assets/media/logos/keenthemes.svg"/>
    <img alt="Logo" class="theme-dark-show max-h-50px" src="http://127.0.0.1:8000/assets/media/logos/keenthemes-dark.svg"/>
    <div class="d-flex align-items-center mt-5">
        <span class="spinner-border text-primary" role="status"></span>
        <span class="text-muted fs-6 fw-semibold ms-5">Memuat halaman...</span>
    </div>
</div>
<!--end::Loader--><!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header ">
            <!--begin::Header container-->
            <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                <!--begin::Sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-md-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"/>
                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                </div>
                <!--end::Sidebar mobile toggle-->
                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="?page=index" class="d-lg-none">
                        <img alt="Logo" src="http://127.0.0.1:8000/assets/media/logos/default-small.svg" class="h-30px"/>
                    </a>
                </div>
                <!--end::Mobile logo-->
                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}" class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Multipurpose </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="?page=index" class="text-muted text-hover-primary"> Home </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                Dashboards
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div><!--end::Page title-->            <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">
                        <!--begin::Theme mode-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
                                <span class="svg-icon theme-light-show svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor"/>
                                        <path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor"/>
                                        <path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor"/>
                                        <path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor"/>
                                        <path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor"/>
                                        <path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor"/>
                                        <path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor"/>
                                        <path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor"/>
                                        <path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->    <!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
                                <span class="svg-icon theme-dark-show svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"/>
                                        <path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"/>
                                        <path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"/>
                                        <path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                            <!--begin::Menu toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor"/>
                                                    <path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor"/>
                                                    <path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor"/>
                                                    <path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor"/>
                                                    <path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor"/>
                                                    <path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor"/>
                                                    <path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor"/>
                                                    <path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor"/>
                                                    <path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->            </span>
                                        <span class="menu-title">
                                            Light
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"/>
                                                    <path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"/>
                                                    <path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"/>
                                                    <path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->            </span>
                                        <span class="menu-title">
                                            Dark
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">
                                            System
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Theme mode-->
                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="user"/>
                            </div>
                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">
                                                Max Smith
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                            </div>
                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"> max@kt.com </a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="?page=authentication/layouts/corporate/sign-in" class="menu-link px-5"> Sign Out </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->
                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                            <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" id="kt_app_header_menu_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-md-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor"/>
                                        <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Header menu toggle-->
                    </div><!--end::Navbar-->        </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="?page=index">
                        <img alt="Logo" src="http://127.0.0.1:8000/assets/media/logos/default-dark.svg" class="h-25px app-sidebar-logo-default"/>
                        <img alt="Logo" src="http://127.0.0.1:8000/assets/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize"/>
                    </a>
                    <!--end::Logo image-->
                </div>
                <!--end::Logo-->    <!--begin::sidebar menu-->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!--begin::Menu wrapper-->
                    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-grid fs-3"></i></span>
                                    <span class="menu-title">Dashboards</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link active" href="?page=index">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Default</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=dashboards/ecommerce">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">eCommerce</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/projects">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Projects</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/online-courses">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Online Courses</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=dashboards/marketing">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Marketing</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item-->
                                    <div class="menu-inner flex-column collapse " id="kt_app_sidebar_menu_dashboards_collapse">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/bidding">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Bidding</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/pos">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">POS System</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/call-center">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Call Center</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/logistics">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Logistics</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/website-analytics">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Website Analytics</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/finance-performance">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Finance Performance</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/store-analytics">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Store Analytics</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/social">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Social</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/delivery">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Delivery</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/crypto">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Crypto</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/school">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">School</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=dashboards/podcast">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Podcast</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link" href="?page=landing">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Landing</span>
                                            </a>
                                            <!--end:Menu link--></div><!--end:Menu item--></div>
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
                                                <span data-kt-toggle-text-target="true">Show 12 More</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                <span class="svg-icon toggle-on svg-icon-2 me-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--><!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                <span class="svg-icon toggle-off svg-icon-2 me-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"/>
                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item pt-5"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                                </div>
                                                        <!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-person-lines-fill fs-3"></i></span>
                                    <span class="menu-title">User Profile</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/overview">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/projects">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Projects</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/campaigns">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Campaigns</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/documents">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Documents</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/followers">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Followers</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/user-profile/activity">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activity</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-person fs-2"></i></span>
                                    <span class="menu-title">Account</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/overview">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/security">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Security</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/activity">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activity</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/billing">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Billing</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/statements">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Statements</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/referrals">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Referrals</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/api-keys">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">API Keys</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=account/logs">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Logs</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-sticky fs-3"></i></span>
                                    <span class="menu-title">Authentication</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Corporate Layout</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/sign-in">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/sign-up">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/two-steps">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two-steps</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/corporate/new-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">New Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overlay Layout</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/sign-in">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/sign-up">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/two-steps">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two-steps</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/overlay/new-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">New Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Creative Layout</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/sign-in">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/sign-up">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/two-steps">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two-steps</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/creative/new-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">New Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Fancy Layout</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/sign-in">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/sign-up">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/two-steps">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two-steps</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/layouts/fancy/new-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">New Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Email Templates</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/welcome-message">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Welcome Message</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/reset-password">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Reset Password</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/subscription-confirmed">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Subscription Confirmed</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/card-declined">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Credit Card Declined</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/promo-1">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Promo 1</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/promo-2">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Promo 2</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=authentication/email/promo-3">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Promo 3</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/extended/multi-steps-sign-up">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Multi-steps Sign-up</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/extended/two-factor-auth">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Two Factor Auth</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/welcome">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Welcome Message</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/verify-email">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Verify Email</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/coming-soon">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Coming Soon</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/password-confirmation">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Password Confirmation</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/account-deactivated">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Account Deactivation</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/error-404">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Error 404</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=authentication/general/error-500">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Error 500</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-journal-richtext fs-3"></i></span>
                                    <span class="menu-title">Corporate</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/about">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">About</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/team">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Our Team</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/licenses">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Licenses</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/sitemap">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sitemap</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-globe fs-3"></i></span>
                                    <span class="menu-title">Social</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/social/feeds">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Feeds</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/social/activity">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activty</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/social/followers">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Followers</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/social/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-file-earmark-richtext fs-3"></i></span>
                                    <span class="menu-title">Blog</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/blog/home">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Blog Home</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/blog/post">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Blog Post</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-patch-check fs-3"></i></span>
                                    <span class="menu-title">FAQ</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/faq/classic">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FAQ Classic</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/faq/extended">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FAQ Extended</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-tags fs-3"></i></span>
                                    <span class="menu-title">Pricing</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=pages/pricing/column">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Column Pricing</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/pricing/table">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Table Pricing</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-vector-pen fs-3"></i></span>
                                    <span class="menu-title">Careers</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/careers/list">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Careers List</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=pages/careers/apply">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Careers Apply</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-shield-check fs-3"></i></span>
                                    <span class="menu-title">Utilities</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Modals</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">General</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/invite-friends">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Invite Friends</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/view-users">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">View Users</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/select-users">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Select Users</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/upgrade-plan">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Upgrade Plan</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/general/share-earn">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Share & Earn</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                                 <!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Forms</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/new-target">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">New Target</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/new-card">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">New Card</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/new-address">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">New Address</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/create-api-key">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create API Key</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/forms/bidding">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Bidding</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                                 <!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Wizards</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/create-app">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create App</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/create-campaign">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create Campaign</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/create-account">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create Business Acc</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/create-project">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Create Project</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/top-up-wallet">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Top Up Wallet</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/offer-a-deal">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Offer a Deal</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/two-factor-authentication">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Two Factor Auth</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                                 <!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Search</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/search/users">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Users</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/search/select-location">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Select Location</span>
                                                        </a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                                 <!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Search</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/search/horizontal">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Horizontal</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/search/vertical">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Vertical</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/search/users">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Users</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/search/select-location">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Location</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Wizards</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/horizontal">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Horizontal</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/vertical">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Vertical</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/two-factor-authentication">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Two Factor Auth</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/create-app">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Create App</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/create-campaign">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Create Campaign</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/create-account">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Create Account</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/create-project">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Create Project</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/modals/wizards/top-up-wallet">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Top Up Wallet</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=utilities/wizards/offer-a-deal">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Offer a Deal</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-person fs-2"></i></span>
                                    <span class="menu-title">Widgets</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/lists">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Lists</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/statistics">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Statistics</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/charts">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Charts</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/mixed">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Mixed</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/tables">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tables</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=widgets/feeds">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Feeds</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item pt-5"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
                                </div>
                                                        <!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-bar-chart-line fs-3"></i></span>
                                    <span class="menu-title">Projects</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/list">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">My Projects</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/project">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Project</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/targets">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Targets</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/budget">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Budget</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/users">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/files">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Files</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/activity">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activity</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/projects/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-cart fs-3"></i></span>
                                    <span class="menu-title">eCommerce</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Catalog</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/products">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Products</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/categories">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Categories</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/add-product">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Product</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/edit-product">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Product</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/add-category">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Category</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/catalog/edit-category">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Category</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sales</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/sales/listing">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Orders Listing</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/sales/details">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Order Details</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/sales/add-order">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Order</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/sales/edit-order">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Order</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customers</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/customers/listing">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customer Listing</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/customers/details">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customer Details</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reports</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/view">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Products Viewed</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/sales">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sales</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/returns">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Returns</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/customer-orders">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customer Orders</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/reports/shipping">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Shipping</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/ecommerce/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-telephone-fill fs-3"></i></span>
                                    <span class="menu-title">Contacts</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/contacts/getting-started">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/contacts/add-contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Add Contact</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/contacts/edit-contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Edit Contact</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/contacts/view-contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Contact</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-person-check fs-3"></i></span>
                                    <span class="menu-title">Support Center</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/overview">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tickets</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/tickets/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tickets List</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/tickets/view">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View Ticket</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tutorials</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/tutorials/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tutorials List</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/tutorials/post">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tutorial Post</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/faq">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FAQ</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/licenses">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Licenses</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/support-center/contact">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-people fs-3"></i></span>
                                    <span class="menu-title">User Management</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/users/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Users List</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/users/view">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View User</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Roles</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/roles/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Roles List</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/roles/view">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View Role</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/user-management/permissions">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Permissions</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-printer fs-3"></i></span>
                                    <span class="menu-title">Customers</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/customers/getting-started">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/customers/list">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customer Listing</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/customers/view">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customer Details</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-cart fs-3"></i></span>
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/subscriptions/getting-started">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/subscriptions/list">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Subscription List</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/subscriptions/add">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Add Subscription</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/subscriptions/view">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Subscription</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-hr fs-3"></i></span>
                                    <span class="menu-title">Invoice Manager</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Invoices</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/invoices/view/invoice-1">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 1</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/invoices/view/invoice-2">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 2</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/invoices/view/invoice-3">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 3</span>
                                                </a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                                                         <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=apps/invoices/create">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Create Invoice</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-card-checklist fs-3"></i></span>
                                    <span class="menu-title">File Manager</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/file-manager/folders">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Folders</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/file-manager/files">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Files</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/file-manager/blank">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Blank Directory</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/file-manager/settings">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-envelope fs-3"></i></span>
                                    <span class="menu-title">Inbox</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/inbox/listing">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Messages</span>
                                            <span class="menu-badge">
                                                <span class="badge badge-success">3</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/inbox/compose">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Compose</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/inbox/reply">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View & Reply</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi-chat-left fs-3"></i></span>
                                    <span class="menu-title">Chat</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/chat/private">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Private Chat</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/chat/group">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Group Chat</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=apps/chat/drawer">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Drawer Chat</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="?page=apps/calendar">
                                    <span class="menu-icon"><i class="bi bi-calendar3-event fs-3"></i></span>
                                    <span class="menu-title">Calendar</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item pt-5"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span>
                                </div>
                                                        <!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-columns-gap fs-3"></i></span>
                                    <span class="menu-title">Layout Options</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=layouts/light-sidebar">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Light Sidebar</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=layouts/dark-sidebar">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Dark Sidebar</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="?page=layouts/light-header">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Light Header</span>
                                        </a>
                                                           <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=layouts/dark-header">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Dark Header</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon"><i class="bi bi-gear fs-3"></i></span>
                                    <span class="menu-title">Toolbars</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/classic">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Classic</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/saas">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">SaaS</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/accounting">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Accounting</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/extended">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Extended</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link--><a class="menu-link" href="?page=toolbars/reports">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reports</span>
                                        </a>
                                        <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="?page=layout-builder">
                                    <span class="menu-icon"><i class="bi bi-sliders fs-3"></i></span>
                                    <span class="menu-title">Layout Builder</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item pt-5"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
                                </div>
                                                        <!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank">
                                    <span class="menu-icon"><i class="bi bi-briefcase fs-3"></i></span>
                                    <span class="menu-title">Components</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">
                                    <span class="menu-icon"><i class="bi bi-box fs-3"></i></span>
                                    <span class="menu-title">Documentation</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
                                    <span class="menu-icon"><i class="bi bi-diagram-3 fs-3"></i></span>
                                    <span class="menu-title">Changelog v8.1.7</span>
                                </a>
                                <!--end:Menu link--></div><!--end:Menu item-->        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div><!--end::sidebar menu-->    <!--begin::Footer-->
                <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                    <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
                        <span class="btn-label">
                            Docs & Components
                        </span>
                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                        <span class="svg-icon btn-icon svg-icon-2 m-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor"/>
                                <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor"/>
                                <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor"/>
                                <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor"/>
                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </div><!--end::Footer--></div>
            <!--end::Sidebar-->            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content  flex-column-fluid " >
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container  container-fluid ">

                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer " >
                    <!--begin::Footer container-->
                    <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>
                            <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>
                            <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
                        </ul>
                        <!--end::Menu-->        </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
</body>
<!--end::App-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="http://127.0.0.1:8000/assets/plugins/global/plugins.bundle.js"></script>
<script src="http://127.0.0.1:8000/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->

<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->

<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>