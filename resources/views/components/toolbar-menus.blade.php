@foreach($toolbar_menus as $toolbar => $items)
    @if(Request::segment(1) === $toolbar)
        @foreach($items as $item => $url)
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 {{ url()->current() == $url ? 'active' : '' }}" href="{{ $url }}"> {{ $item }} </a>
            </li>
            <!--end::Nav item-->
        @endforeach
    @endif
@endforeach