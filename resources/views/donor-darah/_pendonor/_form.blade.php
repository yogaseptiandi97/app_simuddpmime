<section class="mb-15">
    <h1 class="mb-15">Pendonor</h1>

    <!--begin::UUID-->
    <div class="form-group row mb-5" hidden>
        <label for="pendonor_id" class="col-sm-4 col-form-label">UUID
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="pendonor_id" name="pendonor_id" type="text" class="form-control form-control-lg @error('pendonor_id') is-invalid border-danger @enderror" placeholder="Ketik disini..." value="{{ $uuid['pendonor'] }}" readonly/>
            @error('pendonor_id')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::UUID-->
    <!--begin::Nomor Induk Kependudukan-->
    <div class="form-group row mb-5">
        <label for="nik" class="col-sm-4 col-form-label">Nomor Induk Kependudukan
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="nik" name="nik" type="text"
                   class="form-control form-control-lg @error('nik') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('nik') }}" autofocus/>
            @error('nik')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Nomor Induk Kependudukan-->

    <!--begin::Nama-->
    <div class="form-group row mb-5">
        <label for="nama" class="col-sm-4 col-form-label">Nama Pendonor
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="nama" name="nama" type="text"
                   class="form-control form-control-lg @error('nama') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('nama') }}"/>
            @error('nama')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Nama-->

    <!--begin::Tanggal Lahir-->
    <div class="form-group row mb-5">
        <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="tanggal_lahir" name="tanggal_lahir" type="text"
                   class="form-control form-control-lg @error('tanggal_lahir') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('tanggal_lahir') }}"/>
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

    <!--begin::Pekerjaan-->
    <div class="form-group row mb-5">
        <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="pekerjaan" name="pekerjaan" type="text"
                   class="form-control form-control-lg @error('pekerjaan') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('pekerjaan') }}"/>
            @error('pekerjaan')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Pekerjaan-->

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

    <!--begin::Golongan Darah-->
    <div class="form-group row mb-5">
        <label for="golongan_darah" class="col-sm-4 col-form-label">Golongan Darah
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <select id="golongan_darah" name="golongan_darah" class="form-select form-select-lg @error('golongan_darah') border-danger @enderror" data-control="select2" data-placeholder="Pilih disini..." data-hide-search="true">
                <option></option>
                <option value="0" @selected(old('golongan_darah') == '0')>A</option>
                <option value="1" @selected(old('golongan_darah') == '1')>B</option>
                <option value="2" @selected(old('golongan_darah') == '2')>O</option>
                <option value="3" @selected(old('golongan_darah') == '3')>AB</option>
            </select>
            @error('golongan_darah')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Golongan Darah-->

    <!--begin::Rhesus-->
    <div class="form-group row mb-5">
        <label for="rhesus" class="col-sm-4 col-form-label">Rhesus
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <select id="rhesus" name="rhesus" class="form-select form-select-lg @error('rhesus') border-danger @enderror" data-control="select2" data-placeholder="Pilih disini..." data-hide-search="true">
                <option></option>
                <option value="0" @selected(old('rhesus') == '0')>POSITIF</option>
                <option value="1" @selected(old('rhesus') == '1')>NEGATIF</option>
            </select>
            @error('rhesus')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Rhesus-->
</section>