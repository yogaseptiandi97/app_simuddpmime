<table class="table align-middle table-row-dashed fs-6 gy-5" id="datatable">
    <!--begin::Table head-->
    <thead>
    <!--begin::Table row-->
    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
        <th class="w-10px pe-2">#</th>
        <th class="min-w-125px">Nama Pegawai</th>
        <th class="min-w-100px">Tanggal Lahir</th>
        <th class="min-w-100px">Gender</th>
        <th class="min-w-100px">Masa Kerja</th>
        <th class="min-w-80px">Bagian</th>
        <th class="min-w-80px">Status</th>
        <th class="min-w-80px">Aktif</th>
        <th></th>
    </tr>
    <!--end::Table row-->
    </thead>
    <!--end::Table head-->

    <!--begin::Table body-->
    <tbody class="text-gray-600 fw-semibold">
    @inject('carbon', 'Carbon\Carbon')
    @foreach($pegawai as $p)
        <tr>
            <td class="fw-bolder">
                {{ $loop->iteration }}
            </td>
            <td class="d-flex align-items-center">
                <div class="d-flex flex-column">
                    <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $p['nama'] }}</a>
                    <span>{{ $p['nik'] }}</span>
                </div>
            </td>
            <td>
                <h6>{{ $carbon::parse($p['tanggal_lahir'])->age }} thn.</h6>
                {{ $p['tanggal_lahir'] }}
            </td>
            <td>{{ $p['jenis_kelamin']->getText() }}</td>
            <td>
                <h6>{{ $carbon::parse($p->tanggal_masuk)->diff($carbon::now())->format('%y thn %m bln.') }}</h6>
                {{ $p['tanggal_masuk'] }}
            </td>
            <td>{{ $p['bagian']->getText() }}</td>
            <td>{!! $p['status_kepegawaian']->getHTML() !!}</td>
            <td>{!! $p['masih_bekerja']->getHTML() !!}</td>
            <td class="text-end">
                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    Actions
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                    <span class="svg-icon svg-icon-5 m-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            Update
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">
                            Delete
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
        </tr>
    @endforeach
    <!--end::Table row-->
    </tbody>
    <!--end::Table body-->
</table>