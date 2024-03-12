<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-0"
                style="text-transform: capitalize; font-size: 22px;">Workshop
                App</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ url('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Basic">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('myProfile') ? 'active' : '' }}">
            <a href="{{ url('myProfile') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-circle'></i>
                <div data-i18n="Basic">My Profile</div>
            </a>
        </li>

        @php
            $activeRoutesMaster = [
                'master/kategori',
                'master/satuan',
                'master/barang',
                'master/serialBarang',
                'master/generateBarcode',
                'master/customer',
                'master/kendaraan',
                'master/supplier',
                'master/kategoriServis',
                'master/hargaServis',
                'master/kategoriPembayaran',
                'master/subPembayaran',
            ];
        @endphp
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Transaksi Toko</span>
        </li>

        @php
            $activeRoutePurchase = ['purchase/kasir', 'purchase/penjualan', 'purchase/belumLunas', 'purchase/lunas'];
        @endphp
        <li
            class="menu-item {{ collect($activeRoutePurchase)->contains(function ($route) {
                return request()->is($route) || str_starts_with(request()->url(), url($route));
            })
                ? 'active'
                : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="Penjualan">Penjualan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('purchase/kasir') ? 'active' : '' }}">
                    <a href="{{ url('purchase/kasir') }}" class="menu-link">
                        <div data-i18n="Kasir">Kasir</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('purchase/penjualan') ? 'active' : '' }}">
                    <a href="{{ url('purchase/penjualan') }}" class="menu-link">
                        <div data-i18n="Invoice Penjualan">Invoice Penjualan</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('purchase/belumLunas') ? 'active' : '' }}">
                    <a href="{{ url('purchase/belumLunas') }}" class="menu-link">
                        <div data-i18n="Belum Lunas">Invoice Hutang</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('purchase/lunas') ? 'active' : '' }}">
                    <a href="{{ url('purchase/lunas') }}" class="menu-link">
                        <div data-i18n="Invoice Lunas">Invoice Lunas</div>
                    </a>
                </li>
            </ul>
        </li>

        @php
            $activeRoutesMaster = [
                'master/kategori',
                'master/satuan',
                'master/barang',
                'master/serialBarang',
                'master/generateBarcode',
                'master/customer',
                'master/kendaraan',
                'master/supplier',
                'master/kategoriServis',
                'master/hargaServis',
                'master/kategoriPembayaran',
                'master/subPembayaran',
            ];
        @endphp
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Data Master</span>
        </li>
        <li
            class="menu-item {{ collect($activeRoutesMaster)->contains(function ($route) {
                return request()->is($route) || str_starts_with(request()->url(), url($route));
            })
                ? 'active'
                : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Data Master">Data Master</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('master/kategori') ? 'active' : '' }}">
                    <a href="{{ url('master/kategori') }}" class="menu-link">
                        <div data-i18n="Kategori">Kategori</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/satuan') ? 'active' : '' }}">
                    <a href="{{ url('master/satuan') }}" class="menu-link">
                        <div data-i18n="Satuan">Satuan</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/barang') ? 'active' : '' }}">
                    <a href="{{ url('master/barang') }}" class="menu-link">
                        <div data-i18n="Barang">Barang</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/customer') ? 'active' : '' }}">
                    <a href="{{ url('master/customer') }}" class="menu-link">
                        <div data-i18n="Customer">Customer</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/kendaraan') ? 'active' : '' }}">
                    <a href="{{ url('master/kendaraan') }}" class="menu-link">
                        <div data-i18n="Kendaraan">Kendaraan</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/supplier') ? 'active' : '' }}">
                    <a href="{{ url('master/supplier') }}" class="menu-link">
                        <div data-i18n="Supplier">Supplier</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/kategoriServis') ? 'active' : '' }}">
                    <a href="{{ url('master/kategoriServis') }}" class="menu-link">
                        <div data-i18n="Kategori Servis">Kategori Servis</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/hargaServis') ? 'active' : '' }}">
                    <a href="{{ url('master/hargaServis') }}" class="menu-link">
                        <div data-i18n="Harga Servis">Harga Servis</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/kategoriPembayaran') ? 'active' : '' }}">
                    <a href="{{ url('master/kategoriPembayaran') }}" class="menu-link">
                        <div data-i18n="Kategori Pembayaran">Kategori Pembayaran</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('master/subPembayaran') ? 'active' : '' }}">
                    <a href="{{ url('master/subPembayaran') }}" class="menu-link">
                        <div data-i18n="Sub Pembayaran">Sub Pembayaran</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Laporan</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-report"></i>
                <div data-i18n="Laba Bersih">Laba Bersih</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('master/kategori') ? 'active' : '' }}">
                    <a href="{{ url('master/kategori') }}" class="menu-link">
                        <div data-i18n="Kategori">Kategori</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-report"></i>
                <div data-i18n="Laporan Toko">Laporan Toko</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('master/kategori') ? 'active' : '' }}">
                    <a href="{{ url('master/kategori') }}" class="menu-link">
                        <div data-i18n="Kategori">Kategori</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-report"></i>
                <div data-i18n="Laporan Servis">Laporan Servis</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('master/kategori') ? 'active' : '' }}">
                    <a href="{{ url('master/kategori') }}" class="menu-link">
                        <div data-i18n="Kategori">Kategori</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Konfigurasi</span></li>
        <li class="menu-item {{ request()->is('setting/user') ? 'active' : '' }}">
            <a href="{{ url('setting/user') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-circle'></i>
                <div data-i18n="User">User</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('setting/roles') ? 'active' : '' }}">
            <a href="{{ url('setting/roles') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-account'></i>
                <div data-i18n="Role">Role</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('setting/cabang') ? 'active' : '' }}">
            <a href="{{ url('setting/cabang') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-building-house'></i>
                <div data-i18n="Cabang">Cabang</div>
            </a>
        </li>
        @php
            $activeRoutesBackupRestore = ['setting/backup', 'setting/restore'];
        @endphp
        <li
            class="menu-item {{ collect($activeRoutesBackupRestore)->contains(function ($route) {
                return request()->is($route) || str_starts_with(request()->url(), url($route));
            })
                ? 'active'
                : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-data"></i>
                <div data-i18n="Backup & Restore">Backup & Restore</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('setting/backup') ? 'active' : '' }}">
                    <a href="{{ url('setting/backup') }}" class="menu-link">
                        <div data-i18n="Backup">Backup</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('setting/restore') ? 'active' : '' }}">
                    <a href="{{ url('setting/restore') }}" class="menu-link">
                        <div data-i18n="Restore">Restore</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ request()->is('setting/logout') ? 'active' : '' }}">
            <a href="{{ url('setting/logout') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-log-out'></i>
                <div data-i18n="Logout">Logout</div>
            </a>
        </li>
    </ul>
</aside>
