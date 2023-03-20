<x-layout title="Data Donor Darah">
    @slot('vendorCSS')
        <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    @endslot

    @slot('vendorJS')
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    @endslot

    @slot('customJS')
        <script src="{{ asset('assets/custom/donor-darah/datatable.js') }}"></script>
    @endslot

    <!--begin::Card-->
    <div class="card card-custom card-shadow card-sticky mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative">
                    <i class="fa fa-search position-absolute ms-6"></i>
                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-lg-450px ps-14" placeholder="Ketik NIK atau Nama Akun untuk mencari..."/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <div class="card-toolbar">
                <a href="#" type="button" class="btn btn-light-success">
                    <i class="bi bi-printer-fill fs-4 me-2"></i>
                    Export ke Excel
                </a>
            </div>
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            @include('donor-darah._datatable')
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</x-layout>