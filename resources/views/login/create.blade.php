<x-layout-single title="Login">
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
                <form action="{{ route('login.store') }}" method="POST" class="w-md-350px validate" autocomplete="off">
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
                    <div class="separator separator-content text-danger my-15"><span class="w-250px text-uppercase ls-1">Silahkan Login</span></div>
                    <!--end::Separator-->

                    @if ($message = Session::get('success'))
                        <x-alert type="success" :message="Session::get('success')"></x-alert>
                    @elseif($message = Session::get('error'))
                        <x-alert type="error" :message="Session::get('error')"></x-alert>
                    @endif

                    <!--begin::Username-->
                    <div class="mb-5">
                        <input id="username" name="username" type="text" class="mask alphanum nospace lower req form-control form-control-lg @error('username') is-invalid border-danger border-2 @enderror" placeholder="Ketik Username..." value="{{ old('username') }}"/>
                        @error('username')
                        <div class="text-danger mt-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Username-->

                    <!--begin::Password-->
                    <div class="mb-10">
                        <input id="password" name="password" type="text" class="form-control form-control-lg @error('password') is-invalid border-danger @enderror" placeholder="Ketik Password..."/>
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
</x-layout-single>