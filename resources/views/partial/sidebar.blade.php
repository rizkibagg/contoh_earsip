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
        </li><!-- End Captcha Nav -->
            <ul id="tables-nav" class="nav-content collapse {{ ($dropdown == "Tables") ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href="/tables-data" class="{{ ($title == "Data Tables") ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($dropdown == "Surat") ? '' : 'collapsed' }}" data-bs-target="#surat-nav" data-bs-toggle="collapse" href="#">
                <i class="fa-regular fa-envelope"></i><span>Surat</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="surat-nav" class="nav-content collapse {{ ($dropdown == "Surat") ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/surat-ktm" class="{{ ($title == "Surat Keterangan Tidak Mampu") ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Keterangan Tidak Mampu</span>
                    </a>
                </li>
                <li>
                    <a href="/surat-kbm" class="{{ ($title == "Surat Keterangan Belum Menikah") ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Keterangan Belum Menikah</span>
                    </a>
                </li>
                <li>
                    <a href="/surat-kematian" class="{{ ($title == "Surat Kematian") ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Kematian</span>
                    </a>
                </li>
                <li>
                    <a href="/surat-kelahiran" class="{{ ($title == "Surat Kelahiran") ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Kelahiran</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside>
