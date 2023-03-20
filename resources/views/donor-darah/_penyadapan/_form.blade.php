<section class="mb-15">
    <h1 class="mb-15">Penyadapan</h1>

    <!--begin::Tanggal Donor-->
    <div class="form-group row mb-5">
        <label for="tanggal_donor" class="col-sm-4 col-form-label">Tanggal Donor
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="tanggal_donor" name="tanggal_donor" type="text"
                   class="form-control form-control-lg @error('tanggal_donor') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('tanggal_donor') }}"/>
            @error('tanggal_donor')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Tanggal Donor-->

    <!--begin::Tipe Donor-->
    <div class="form-group row mb-5">
        <label class="col-sm-4 col-form-label">Tipe Donor
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8 mt-3">
            <div class="form-check form-check-custom form-check-inline">
                <input class="form-check-input" type="radio" value="0" id="tipe_donor_s" name="tipe_donor" @checked(old('tipe_donor') == '0')/>
                <label class="form-check-label fw-bold" for="tipe_donor_s"> SUKARELA </label>
            </div>
            <div class="form-check form-check-custom form-check-inline">
                <input class="form-check-input" type="radio" value="1" id="tipe_donor_p" name="tipe_donor" @checked(old('tipe_donor') == '1')/>
                <label class="form-check-label fw-bold" for="tipe_donor_p"> PENGGANTI </label>
            </div>
            @error('tipe_donor')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Tipe Donor-->

    <!--begin::Berat Badan-->
    <div class="form-group row mb-5">
        <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="berat_badan" name="berat_badan" type="text"
                   class="form-control form-control-lg @error('berat_badan') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('berat_badan') }}"/>
            @error('berat_badan')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Berat Badan-->

    <!--begin::Tensi Darah-->
    <div class="form-group row mb-5">
        <label for="tensi_darah" class="col-sm-4 col-form-label">Tensi Darah
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="tensi_darah" name="tensi_darah" type="text"
                   class="form-control form-control-lg @error('tensi_darah') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('tensi_darah') }}"/>
            @error('tensi_darah')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Tensi Darah-->

    <!--begin::Kadar Hemoglobin-->
    <div class="form-group row mb-5">
        <label for="kadar_hb" class="col-sm-4 col-form-label">Kadar Hemoglobin
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="kadar_hb" name="kadar_hb" type="text"
                   class="form-control form-control-lg @error('kadar_hb') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('kadar_hb') }}"/>
            @error('kadar_hb')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Kadar Hemoglobin-->

    <!--begin::Petugas Penyadapan-->
    <div class="form-group row mb-5">
        <label for="pegawai_id" class="col-sm-4 col-form-label">Petugas
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <select id="pegawai_id" name="pegawai_id" class="form-select form-select-lg @error('pegawai_id') border-danger @enderror" data-control="select2" data-placeholder="Pilih disini..." data-hide-search="true">
                <option></option>
                @foreach($pegawai as $nama_panggilan => $id)
                    <option value="{{ $id }}" @selected(old('pegawai_id') == $id)>{{ $nama_panggilan }}</option>
                @endforeach
            </select>
            @error('pegawai_id')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Petugas Penyadapan-->
</section>