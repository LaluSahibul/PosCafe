<div class="sidebar" data-image="assets/img/sidebar-5.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/dashboard" class="simple-text">
                Untuknya Semangatt
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('menu*') ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/menu">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>Daftar Menu</p>
                </a>
            </li>
            <li class="{{ Request::is('kategori*') ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/kategori">
                    <i class="nc-icon nc-app"></i>
                    <p>Kategori Menu</p>
                </a>
            </li>
            <li class="{{ Request::is('kasir*') ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/kasir">
                    <i class="nc-icon nc-badge"></i>
                    <p>Kasir</p>
                </a>
            </li>
            <li class="{{ Request::is('transaksi*') ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/transaksi">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>Transaksi</p>
                </a>
            </li>
            <li class="{{ Request::is('laporan*') ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/laporan">
                    <i class="nc-icon nc-notes"></i>
                    <p>Laporan</p>
                </a>
            </li>
            {{-- <li class="nav-item active active-pro">
                <a class="nav-link active" href="upgrade.html">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
