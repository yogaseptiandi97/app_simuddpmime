<!--begin::Card body-->
<div class="card-body py-10">
    <div class="gx-10">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-lg-8">
                <section class="mb-15">
                    <!--begin::Nama Akun-->
                    <div class="form-group row mb-5">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Pemilik
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="nama" name="nama" type="text" class="form-control form-control-lg @error('nama') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('nama') }}" autofocus/>
                            @error('nama')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Nama Akun-->

                    <!--begin::Username-->
                    <div class="form-group row mb-5">
                        <label for="username" class="col-sm-4 col-form-label">Username
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="username" name="username" type="text" class="form-control form-control-lg @error('username') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('username') }}"/>
                            @error('username')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Username-->

                    <!--begin::Password-->
                    <div class="form-group row mb-5">
                        <label for="password" class="col-sm-4 col-form-label">Password
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="password" name="password" type="text" class="form-control form-control-lg @error('password') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('password') }}"/>
                            @error('password')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Password-->

                    <!--begin::Role-->
                    <div class="form-group row mb-5">
                        <label for="role" class="col-sm-4 col-form-label">Role Akun
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <select id="role" name="role" class="form-select form-select-lg @error('role') border-danger @enderror" data-control="select2" data-placeholder="Pilih disini..." data-hide-search="true">
                                <option></option>
                                <option value="0" @selected(old('role') == '0')>ADMIN</option>
                                <option value="1" @selected(old('role') == '1')>AFTAP</option>
                                <option value="2" @selected(old('role') == '2')>KEUANGAN</option>
                                <option value="3" @selected(old('role') == '3')>LABOR</option>
                                <option value="4" @selected(old('role') == '4')>LOGISTIK</option>
                                <option value="5" @selected(old('role') == '5')>PMI</option>
                            </select>
                            @error('role')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Role-->
                </section>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>
</div>
<!--end::Card body-->
