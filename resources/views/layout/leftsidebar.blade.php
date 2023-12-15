<div class="left-side-menu">

    <div class="h-100" data-simplebar>


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                {{-- <li>
                    <a href="#sidebarDashboards" data-bs-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">4</span>
                        <span> Dashboards </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="dashboard-2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="dashboard-3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="dashboard-4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- <li class="menu-title mt-2">Navigation</li> --}}

                <li>
                    <a href="/">
                        <i class="mdi mdi-apps"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href={{ route('add.product') }}>
                        <i class="mdi mdi-television-guide"></i>
                        <span> Add Product </span>
                    </a>
                </li>

                <li>
                    <a href={{ route('add.sale') }}>
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Sell Product</span>
                    </a>
                </li>

                <li>
                    <a href="/update_price">
                        <i class="mdi mdi-clipboard-check"></i>
                        <span> Upadate Price</span>
                    </a>
                </li>

                <li>
                    <a href={{ route('all.sale') }}>
                        <i class="mdi mdi-chart-line"></i>
                        <span>Sale Transaction</span>
                    </a>
                </li>





            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
