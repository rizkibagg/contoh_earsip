<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ ($title == "Dashboard") ? '' : 'collapsed' }}" href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($dropdown1 == "Surat Keluar") ? '' : 'collapsed' }}" data-bs-target="#surat-nav" data-bs-toggle="collapse" href="#">
                <i class="fa-regular fa-envelope"></i><span>Surat Keluar</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="surat-nav" class="nav-content collapse {{ ($dropdown1 == "Surat Keluar") ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($dropdown2 == "Kemasyarakatan") ? '' : 'collapsed' }}" data-bs-target="#kemasyarakatan-nav" data-bs-toggle="collapse" href="#">
                        <span>Kemasyarakatan</span><i class="bi bi-chevron-down ms-auto dropdown-dua"></i>
                    </a>
                    <ul id="kemasyarakatan-nav" class="nav-content collapse {{ ($dropdown2 == "Kemasyarakatan" && $dropdown1 == "Surat Keluar") ? 'show' : '' }}" data-bs-parent="#surat-nav">
                        <li>
                            <a href="/surat-ktm" class="{{ ($title == "Surat Keterangan Tidak Mampu") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Keterangan Tidak Mampu</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-pbm" class="{{ ($title == "Surat Pernyataan Belum Menikah") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Pernyataan Belum Menikah</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-kbm" class="{{ ($title == "Surat Keterangan Belum Menikah") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Keterangan  Belum Menikah</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-belum-bekerja" class="{{ ($title == "Surat Pernyataan Belum Bekerja") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Pernyataan Belum Bekerja</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-ket-hasil" class="{{ ($title == "Surat Keterangan Penghasilan") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Keterangan Penghasilan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-pektp" class="{{ ($title == "Surat Pengantar E-KTP") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Pengantar E-KTP</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-pskck" class="{{ ($title == "Surat Pengantar SKCK") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Pengantar SKCK</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($dropdown2 == "Pemerintahan") ? '' : 'collapsed' }}" data-bs-target="#pemerintahan-nav" data-bs-toggle="collapse" href="#">
                        <span>Pemerintahan</span><i class="bi bi-chevron-down ms-auto dropdown-dua"></i>
                    </a>
                    <ul id="pemerintahan-nav" class="nav-content collapse {{ ($dropdown2 == "Pemerintahan" && $dropdown1 == "Surat Keluar") ? 'show' : '' }}" data-bs-parent="#surat-nav">
                        <li>
                            <a href="/surat-domisili" class="{{ ($title == "Surat Keterangan Domisili") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Keterangan Domisili</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-kduda" class="{{ ($title == "Surat Keterangan Duda / Janda") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Keterangan Duda / Janda</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-tidak-bekerja" class="{{ ($title == "Surat Tidak Bekerja") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Keterangan Tidak Bekerja</span>
                            </a>
                        </li>
                        <li>
                            <a href="/surat-kkematian" class="{{ ($title == "Surat Keterangan Kematian") ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Keterangan Kematian</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li><!-- End Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title == "Surat Masuk") ? '' : 'collapsed' }}" href="/surat-masuk">
                <i class="fa-regular fa-envelope-open"></i>
                <span>Surat Masuk</span>
            </a>
        </li><!-- End Surat Masuk Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title == "Captcha") ? '' : 'collapsed' }}" href="/komentar">
                <i class="bi bi-grid"></i>
                <span>Captcha</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ ($title == "Test 1") ? '' : 'collapsed' }}" href="#">
                <i class="bi bi-grid"></i>
                <span>Test 1</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ ($title == "Test 2") ? '' : 'collapsed' }}" href="#">
                <i class="bi bi-grid"></i>
                <span>Test 2</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ ($title == "Test 3") ? '' : 'collapsed' }}" href="#">
                <i class="bi bi-grid"></i>
                <span>Test 3</span>
            </a>
        </li>

    </ul>

</aside>
