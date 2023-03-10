<x-layout title="Registrasi Akun Baru">
    @slot('customJS')
        <script src="{{ asset('assets/custom/registrasi-akun/inputmask.js') }}"></script>
    @endslot

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            @if ($message = Session::get('success'))
                <x-alert type="success" :message="Session::get('success')"></x-alert>
            @elseif($message = Session::get('error'))
                <x-alert type="error" :message="Session::get('error')"></x-alert>
            @endif
        </div>
        <div class="col-lg-2"></div>
    </div>

    <!--begin::Card-->
    <div class="card card-custom card-shadow mb-5 mb-xl-10">
        <form id="form_input" method="POST" action="{{ route('registrasi-akun.store') }}" class="validate" autocomplete="off">
            @csrf
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0 text-uppercase">Informasi Akun</h3>
                </div>
                <!--begin::Card title-->

                <div class="card-toolbar">
                    <button id="form_submit" type="submit" class="btn btn-primary">
                        <i class="bi bi-save fs-4 me-2"></i>
                        Simpan Data
                    </button>
                </div>
            </div>
            <!--end::Card header-->
            @include('registrasi-akun._form')
        </form>
    </div>
    <!--end::Card-->
</x-layout>