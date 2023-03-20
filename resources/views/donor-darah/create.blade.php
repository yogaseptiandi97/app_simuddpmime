<x-layout title="Pegawai Baru">
    @slot('customJS')
        <script src="{{ asset('assets/custom/donor-darah/inputmask.js') }}"></script>
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
        <form id="form_input" method="POST" action="{{ route('donor-darah.store') }}" autocomplete="off">
            @csrf
            <!--begin::Card header-->
            <div class="card-header sticky-top bg-white">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0 text-uppercase">Informasi Donor Darah</h3>
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
            @include('donor-darah._form')
        </form>
    </div>
    <!--end::Card-->
</x-layout>