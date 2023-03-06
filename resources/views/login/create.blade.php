<x-layout-single title="">
    <!--begin::Body-->
    <body  id="kt_body"  class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat" >
{{--    @include('template.theme-mode')--}}

    <!--begin::Root-->
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


        <!--begin::Authentication - Signup Welcome Message -->
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center text-center p-10">
                <!--begin::Wrapper-->
                <div class="card card-flush w-md-650px py-5">
                    <div class="card-body py-15 py-lg-15">

                        <!--begin::Logo-->
                        <div class="mb-7">
                            <a href="#" class="">
                                <img alt="Logo" src="{{ asset('assets/images/logo_pmi.png') }}" class="h-80px"/>
                            </a>
                        </div>
                        <!--end::Logo-->

                        <div class="d-flex flex-center text-start">
                            <!--begin::Form-->
                            <form action="{{ route('login.store') }}" method="POST" class="w-md-350px" autocomplete="off">
                                @csrf

                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Unit Donor Darah</h1>
                                    <!--end::Title-->

                                    <!--begin::Subtitle-->
                                    <h3 class="text-dark fw-normal ls-1">Kabupaten Muara Enim</h3>
                                    <!--end::Subtitle--->
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Separator-->
                                <div class="separator separator-content border-danger text-danger my-15"><span class="w-250px text-uppercase ls-1">Silahkan Login</span></div>
                                <!--end::Separator-->

                                @if ($message = Session::get('success'))
                                    <x-alert type="success" :message="Session::get('success')"></x-alert>
                                @elseif($message = Session::get('error'))
                                    <x-alert type="error" :message="Session::get('error')"></x-alert>
                                @endif

                                <!--begin::Username-->
                                <div class="mb-5">
                                    <input id="username" name="username" type="text" class="form-control form-control-lg form-control-solid @error('username') is-invalid border-danger border-2 @enderror" placeholder="Username" value="{{ old('username') }}"/>
                                    @error('username')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--end::Username-->

                                <!--begin::Password-->
                                <div class="mb-10">
                                    <input id="password" name="password" type="text" class="form-control form-control-lg form-control-solid @error('password') is-invalid border-danger @enderror" placeholder="Password"/>
                                    @error('password')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--end::Password-->

                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="submit" class="btn btn-primary">
                                        Masuk
                                    </button>
                                </div>
                                <!--end::Submit button-->
                            </form>
                            <!--end::Form-->
                        </div>

                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Signup Welcome Message-->
    </div>
    <!--end::Root-->

    @include('template.javascript')

    </body>
    <!--end::Body-->
</x-layout-single>