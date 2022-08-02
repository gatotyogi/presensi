<div class="vertical-menu z-50 overflow-auto">
    <div class="h-100">
        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{ asset('/images/user.svg') }}" alt="" class="avatar-lg mx-auto rounded-circle"
                    style="object-fit: cover;">

            </div>
            <div class="mt-3">
                <a href="#" class="text-dark font-weight-medium font-size-16">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('home') }}" class="waves-effect" title="Dashboard">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Master</li>
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="mdi mdi-database"></i>
                        <span>Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('kelas.index') }}" class="waves-effect" title="Kelas">
                                <i class="mdi mdi-apps"></i>
                                <span>Kelas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mapel.index') }}" class="waves-effect" title="Mapel">
                                <i class="mdi mdi-more"></i>
                                <span>Mata Pelajaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('guru.index') }}" class="waves-effect" title="Guru">
                                <i class="mdi mdi-account-box-outline"></i>
                                <span>Guru</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('siswa.index') }}" class="waves-effect" title="Siswa">
                                <i class="mdi mdi-account-card-details"></i>
                                <span>Siswa</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">Aplikasi</li>
                <li>
                    <a href="{{ route('jadwal.index') }}" class="waves-effect" title="Jadwal">
                        <i class="mdi mdi-calendar"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('jadwal.index') }}" class="waves-effect" title="Absensi">
                        <i class="mdi mdi-clipboard-outline"></i>
                        <span>Absensi</span>
                    </a>
                </li>
                <li class="menu-title">Report</li>
                <li>
                    <a href="{{ route('report.index') }}" class="waves-effect" title="Laporan">
                        <i class="mdi mdi-printer"></i>
                        <span>Laporan</span>
                    </a>
                </li>

                <li class="menu-title">Sistem</li>
                <li>
                    <a href="{{ route('report.index') }}" class="waves-effect" title="User Managemen">
                        <i class="mdi mdi-account-key"></i>
                        <span>User Managemen</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('setting.index') }}" class="waves-effect" title="Laporan">
                        <i class="mdi mdi-wrench"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" class="waves-effect" title="Logout"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-power"></i>
                        <span>{{ __('Logout') }}</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
