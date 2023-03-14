<!--begin::Card body-->
<div class="card-body py-10">
    <div class="gx-10">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-lg-8">
                <section class="mb-15">
                    <!--begin::Nomor Induk Kependudukan-->
                    <div class="form-group row mb-5">
                        <label for="nik" class="col-sm-4 col-form-label">Nomor Induk Kependudukan
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="nik" name="nik" type="text" class="form-control form-control-lg @error('nik') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('nik') }}" autofocus/>
                            @error('nik')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Nomor Induk Kependudukan-->

                    <!--begin::Nama-->
                    <div class="form-group row mb-5">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Pegawai
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="nama" name="nama" type="text" class="form-control form-control-lg @error('nama') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('nama') }}"/>
                            @error('nama')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Nama-->

                    <!--begin::Nama Panggilan-->
                    <div class="form-group row mb-5">
                        <label for="nama_panggilan" class="col-sm-4 col-form-label">Nama Panggilan
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="nama_panggilan" name="nama_panggilan" type="text" class="form-control form-control-lg @error('nama_panggilan') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('nama_panggilan') }}"/>
                            @error('nama_panggilan')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Nama Panggilan-->

                    <!--begin::Tanggal Lahir-->
                    <div class="form-group row mb-5">
                        <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control form-control-lg @error('tanggal_lahir') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('tanggal_lahir') }}"/>
                            @error('tanggal_lahir')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Tanggal Lahir-->

                    <!--begin::Jenis Kelamin-->
                    <div class="form-group row mb-5">
                        <label class="col-sm-4 col-form-label">Jenis Kelamin
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8 mt-3">
                            <div class="form-check form-check-custom form-check-inline">
                                <input class="form-check-input" type="radio" value="0" id="jenis_kelamin_p" name="jenis_kelamin" @checked(old('jenis_kelamin') == '0')/>
                                <label class="form-check-label fw-bold" for="jenis_kelamin_p"> PRIA </label>
                            </div>
                            <div class="form-check form-check-custom form-check-inline">
                                <input class="form-check-input" type="radio" value="1" id="jenis_kelamin_w" name="jenis_kelamin" @checked(old('jenis_kelamin') == '1')/>
                                <label class="form-check-label fw-bold" for="jenis_kelamin_w"> WANITA </label>
                            </div>
                            @error('jenis_kelamin')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Jenis Kelamin-->

                    <!--begin::Agama-->
                    <div class="form-group row mb-5">
                        <label for="agama" class="col-sm-4 col-form-label">Agama
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <select id="agama" name="agama" class="form-select form-select-lg @error('agama') border-danger @enderror" data-control="select2" data-placeholder="Pilih disini..." data-hide-search="true">
                                <option></option>
                                <option value="0" @selected(old('agama') == '0')>ISLAM</option>
                                <option value="1" @selected(old('agama') == '1')>KRISTEN</option>
                                <option value="2" @selected(old('agama') == '2')>KATHOLIK</option>
                                <option value="3" @selected(old('agama') == '3')>HINDU</option>
                                <option value="4" @selected(old('agama') == '4')>BUDDHA</option>
                                <option value="5" @selected(old('agama') == '5')>LAINNYA</option>
                            </select>
                            @error('agama')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Agama-->

                    <!--begin::Alamat-->
                    <div class="form-group row mb-5">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <textarea class="form-control form-control-lg @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="30" rows="4" placeholder="Ketik disini...">{{ old('alamat') }}</textarea>
                            @error('alamat')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Alamat-->

                    <!--begin::Jabatan-->
                    <div class="form-group row mb-5">
                        <label for="jabatan" class="col-sm-4 col-form-label">Jabatan
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="jabatan" name="jabatan" type="text" class="form-control form-control-lg @error('jabatan') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('jabatan') }}"/>
                            @error('jabatan')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Jabatan-->

                    <!--begin::Pendidikan Terakhir-->
                    <div class="form-group row mb-5">
                        <label for="pendidikan_terakhir" class="col-sm-4 col-form-label">Pendidikan Terakhir
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="pendidikan_terakhir" name="pendidikan_terakhir" type="text" class="form-control form-control-lg @error('pendidikan_terakhir') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('pendidikan_terakhir') }}"/>
                            @error('pendidikan_terakhir')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Pendidikan Terakhir-->

                    <!--begin::Tanggal Masuk-->
                    <div class="form-group row mb-5">
                        <label for="tanggal_masuk" class="col-sm-4 col-form-label">Tanggal Masuk
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="tanggal_masuk" name="tanggal_masuk" type="text" class="form-control form-control-lg @error('tanggal_masuk') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('tanggal_masuk') }}"/>
                            @error('tanggal_masuk')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Tanggal Masuk-->

                    <!--begin::Status Kepegawaian-->
                    <div class="form-group row mb-5">
                        <label for="status_kepegawaian" class="col-sm-4 col-form-label">Status Kepegawaian
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <select id="status_kepegawaian" name="status_kepegawaian" class="form-select form-select-lg @error('status_kepegawaian') border-danger @enderror" data-control="select2" data-placeholder="Pilih disini..." data-hide-search="true">
                                <option></option>
                                <option value="0" @selected(old('status_kepegawaian') == '0')>MAGANG</option>
                                <option value="1" @selected(old('status_kepegawaian') == '1')>KONTRAK</option>
                                <option value="2" @selected(old('status_kepegawaian') == '2')>TETAP</option>
                            </select>
                            @error('status_kepegawaian')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Status Kepegawaian-->

                    <!--begin::Bagian-->
                    <div class="form-group row mb-5">
                        <label for="bagian" class="col-sm-4 col-form-label">Bagian
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <select id="bagian" name="bagian" class="form-select form-select-lg @error('bagian') border-danger @enderror" data-control="select2" data-placeholder="Pilih disini..." data-hide-search="true">
                                <option></option>
                                <option value="0" @selected(old('bagian') == '0')>ADMINISTRASI</option>
                                <option value="1" @selected(old('bagian') == '1')>DOKTER</option>
                                <option value="2" @selected(old('bagian') == '2')>KEUANGAN</option>
                                <option value="3" @selected(old('bagian') == '3')>LOGISTIK</option>
                                <option value="4" @selected(old('bagian') == '4')>MEDIS</option>
                                <option value="5" @selected(old('bagian') == '5')>TEKNISI MEDIS</option>
                            </select>
                            @error('bagian')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Bagian-->

                    <!--begin::Nomor HP-->
                    <div class="form-group row mb-5">
                        <label for="no_hp" class="col-sm-4 col-form-label">Nomor HP
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input id="no_hp" name="no_hp" type="text" class="form-control form-control-lg @error('no_hp') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ old('no_hp') }}" autofocus/>
                            @error('no_hp')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Nomor HP-->

                    <!--begin::Masih Bekerja-->
                    <div class="form-group row mb-5">
                        <label class="col-sm-4 col-form-label">Masih Bekerja
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-4 mt-3">
                            <div class="form-check form-check-custom form-check-inline">
                                <input class="form-check-input" type="radio" value="0" id="masih_bekerja_p" name="masih_bekerja" @checked(old('masih_bekerja') == '0')/>
                                <label class="form-check-label fw-bold" for="masih_bekerja_p"> AKTIF </label>
                            </div>
                            <div class="form-check form-check-custom form-check-inline">
                                <input class="form-check-input" type="radio" value="1" id="masih_bekerja_w" name="masih_bekerja" @checked(old('masih_bekerja') == '1')/>
                                <label class="form-check-label fw-bold" for="masih_bekerja_w"> RESIGN </label>
                            </div>
                            @error('masih_bekerja')
                            <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--end::Masih Bekerja-->
                </section>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>
</div>
<!--end::Card body-->