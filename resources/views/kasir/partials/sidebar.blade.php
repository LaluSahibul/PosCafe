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
            {{-- <li class="nav-item active active-pro">
                <a class="nav-link active" href="upgrade.html">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
