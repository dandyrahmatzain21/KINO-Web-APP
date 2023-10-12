<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a style="text-align: center" class="navbar-brand m-0" href="" target="_blank">
            <img src="{{ asset('template') }}/assets/img/logo-1.png" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-auto w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="{{ request()->is('/') || request()->is('home') ? 'nav-link active bg-dark' : 'nav-link' }}"
                    href="/">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i
                            class="{{ request()->is('/') || request()->is('home') ? 'fa-solid fa-gauge text-sm mb-1' : 'fa-solid fa-gauge  text-dark text-sm mb-1' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-sm"
                        style="color: {{ request()->is('/') || request()->is('home') ? 'white' : '' }}">Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->level == 1)
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master Data</h6>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Hr') ? 'nav-link active bg-dark' : 'nav-link' }}" href="/Hr">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Hr') ? 'fa-solid fa-user mb-1 text-sm' : 'fa-solid fa-user mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1" style="color: {{ request()->is('Hr') ? 'white' : '' }}">Human
                            Resource</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Karyawan') ? 'nav-link active bg-dark' : 'nav-link' }} "
                        href="/Karyawan">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Karyawan') ? 'fa-solid fa-users mb-1 text-sm' : 'fa-solid fa-users mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Karyawan') ? 'white' : '' }}">Karyawan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Kriteria') ? 'nav-link active bg-dark' : 'nav-link' }}"
                        href="/Kriteria">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Kriteria') ? 'fa-solid fa-star mb-1' : 'fa-solid fa-star mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Kriteria') ? 'white' : '' }}">Krteria</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Divisi') ? 'nav-link active bg-dark' : 'nav-link' }} " href="/Divisi">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Divisi') ? 'fa-solid fa-briefcase mb-1 text-sm' : 'fa-solid fa-briefcase mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Divisi') ? 'white' : '' }}">Divisi</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Penilaian</h6>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Hasil-Penilaian*') ? 'nav-link active bg-dark' : 'nav-link' }} "
                        href="/Hasil-Penilaian">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Hasil-Penilaian*') ? 'fa-solid fa-book mb-1 text-sm' : 'fa-solid fa-book mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Hasil-Penilaian*') ? 'white' : '' }}">Hasil
                            Penilaian</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Laporan</h6>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Laporan') ? 'nav-link active bg-dark' : 'nav-link' }} "
                        href="/Laporan">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Laporan') ? 'fa-solid fa-folder mb-1 text-sm' : 'fa-solid fa-folder mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Laporan') ? 'white' : '' }}">Laporan</span>
                    </a>
                </li>
            @else
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master Data</h6>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Karyawan') ? 'nav-link active bg-dark' : 'nav-link' }} "
                        href="/Karyawan">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Karyawan') ? 'fa-solid fa-users mb-1' : 'fa-solid fa-users mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Karyawan') ? 'white' : '' }}">Karyawan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Kriteria') ? 'nav-link active bg-dark' : 'nav-link' }} "
                        href="/Kriteria">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Kriteria') ? 'fa-solid fa-star mb-1 text-sm' : 'fa-solid fa-star mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Kriteria') ? 'white' : '' }}">Krteria</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Penilaian</h6>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Periode*') ? 'nav-link active bg-dark' : 'nav-link' }} "
                        href="/Periode">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Periode*') ? 'fa-solid fa-user-pen mb-1 text-sm' : 'fa-solid fa-user-pen mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Periode*') ? 'white' : '' }}">Nilai Karyawan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Hasil-Penilaian*') ? 'nav-link active bg-dark' : 'nav-link' }} "
                        href="/Hasil-Penilaian">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Hasil-Penilaian*') ? 'fa-solid fa-book mb-1 text-sm' : 'fa-solid fa-book mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Hasil-Penilaian*') ? 'white' : '' }}">Hasil
                            Penilaian</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Laporan</h6>
                </li>

                <li class="nav-item">
                    <a class="{{ request()->is('Laporan') ? 'nav-link active bg-dark' : 'nav-link' }} "
                        href="/Laporan">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="{{ request()->is('Laporan') ? 'fa-solid fa-folder mb-1 text-sm' : 'fa-solid fa-folder mb-1  text-dark text-sm' }}"></i>
                        </div>
                        <span class="nav-link-text ms-1"
                            style="color: {{ request()->is('Laporan') ? 'white' : '' }}">Laporan</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>
