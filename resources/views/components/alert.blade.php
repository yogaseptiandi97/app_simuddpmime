<div class="alert alert-{{ $typeColorClass }} d-flex align-items-center p-5 mb-10">
    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
    <span class="svg-icon svg-icon-2hx svg-icon-{{ $typeColorClass }} me-4">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"/>
            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
        </svg>
    </span>
    <!--end::Svg Icon-->
    <div class="d-flex flex-column">
        <h5 class="mb-0 text-{{ $typeColorClass }}">{{ $message }}</h5>
    </div>
</div>