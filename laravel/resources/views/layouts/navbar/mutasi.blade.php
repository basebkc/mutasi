{{-- MULAI MENU --}}

<ul id="js-nav-menu" class="nav-menu">
    <li>
        <a href="{{ url('mutasi/dashboard')}}" title="Package Info" data-filter-tags="package info"  disabled="">
            <i class="fal fa-chart-pie"></i>
            <span class="nav-link-text" data-i18n="nav.package_info">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{ url('mutasi') }}" title="Package Info" data-filter-tags="package info">
            <i class="fal fa-address-book"></i>
            <span class="nav-link-text" data-i18n="nav.package_info">Mutasi Pegawai</span>
        </a>
    </li>
    <li>
        <a href="{{ url('mutasi/master/cetak') }}" title="Package Info" data-filter-tags="package info">
            <i class="fal fa-print"></i>
            <span class="nav-link-text" data-i18n="nav.package_info">Cetak Sk Mutasi Pegawai</span>
        </a>
    </li>
    <li>
        <a href="{{ url('mutasi/master') }}"  title="Package Info" data-filter-tags="package info"  disabled="">
            <i class="fal fa-file-word"></i>
            <span class="nav-link-text" data-i18n="nav.package_info">Master Dokument</span>
        </a>
    </li>
    <li>
        <a href="{{ url('mutasi/parameter') }}" title="Package Info" data-filter-tags="package info"  disabled="">
            <i class="fal fa-cog"></i>
            <span class="nav-link-text" data-i18n="nav.package_info">Parameter</span>
        </a>
    </li>
   
</ul>
