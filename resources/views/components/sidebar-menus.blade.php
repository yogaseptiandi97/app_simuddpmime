@foreach($sidebar_menus as $heading => $items)
    <!--begin::Separator-->
    <div class="separator"></div>
    <!--end::Separator-->
    <!--begin::Heading-->
    <div class="menu-item">
        <div class="menu-content menu-heading text-uppercase fs-7">
            {{ $heading }}
        </div>
    </div>
    <!--end::Heading-->
    @foreach($items as $item => $attr)
        <!--begin::Menu Item-->
        <div class="menu-item">
            <!--begin::Menu link-->
            <a href="{{ $attr['url'] }}" class="menu-link">
                <!--begin::Icon-->
                <span class="menu-icon"><i class="{{ $attr['icon'] }}"></i></span>
                <!--end::Icon-->

                <!--begin::Title-->
                <span class="menu-title">
                    {{ $item }}
                </span>
                <!--end::Title-->
            </a>
            <!--end:::Menu link-->
        </div>
        <!--end::Menu Item-->
    @endforeach
@endforeach