<section class="mb-15">
    <h1 class="mb-15">Kantong Darah</h1>

    <!--begin::Merk Kantong-->
    <div class="form-group row mb-5">
        <label for="merk" class="col-sm-4 col-form-label">Merk Kantong
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="merk" name="merk" type="text"
                   class="form-control form-control-lg @error('merk') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('merk') }}"/>
            @error('merk')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Merk Kantong-->

    <!--begin::Jenis Kantong-->
    <div class="form-group row mb-5">
        <label class="col-sm-4 col-form-label">Jenis Kantong
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8 mt-3">
            <div class="form-check form-check-custom form-check-inline">
                <input class="form-check-input" type="radio" value="0" id="jenis_s" name="jenis" @checked(old('jenis') == '0')/>
                <label class="form-check-label fw-bold" for="jenis_s"> SINGLE </label>
            </div>
            <div class="form-check form-check-custom form-check-inline">
                <input class="form-check-input" type="radio" value="1" id="jenis_d" name="jenis" @checked(old('jenis') == '1')/>
                <label class="form-check-label fw-bold" for="jenis_d"> DOUBLE </label>
            </div>
            <div class="form-check form-check-custom form-check-inline">
                <input class="form-check-input" type="radio" value="2" id="jenis_t" name="jenis" @checked(old('jenis') == '2')/>
                <label class="form-check-label fw-bold" for="jenis_t"> TRIPLE </label>
            </div>
            @error('jenis')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Jenis Kantong-->

    <!--begin::Volume Kantong-->
    <div class="form-group row mb-5">
        <label class="col-sm-4 col-form-label">Volume Kantong
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8 mt-3">
            <div class="form-check form-check-custom form-check-inline">
                <input class="form-check-input" type="radio" value="0" id="volume_2" name="volume" @checked(old('volume') == '0')/>
                <label class="form-check-label fw-bold" for="volume_2"> 250 cc </label>
            </div>
            <div class="form-check form-check-custom form-check-inline">
                <input class="form-check-input" type="radio" value="1" id="volume_3" name="volume" @checked(old('volume') == '1')/>
                <label class="form-check-label fw-bold" for="volume_3"> 350 cc </label>
            </div>
            <div class="form-check form-check-custom form-check-inline">
                <input class="form-check-input" type="radio" value="2" id="volume_4" name="volume" @checked(old('volume') == '2')/>
                <label class="form-check-label fw-bold" for="volume_4"> 450 cc </label>
            </div>
            @error('volume')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Volume Kantong-->

    <!--begin::Nomor Kantong-->
    <div class="form-group row mb-5">
        <label for="no_kantong" class="col-sm-4 col-form-label">Nomor Kantong
            <span class="text-danger">*</span>
        </label>
        <div class="col-sm-8">
            <input id="no_kantong" name="no_kantong" type="text"
                   class="form-control form-control-lg @error('no_kantong') is-invalid border-danger @enderror"
                   placeholder="Ketik disini..." value="{{ old('no_kantong') }}"/>
            @error('no_kantong')
            <div class="text-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--end::Nomor Kantong-->
</section>