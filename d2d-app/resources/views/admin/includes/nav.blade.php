                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>

                            <li class="sidebar-search-wrapper">

                                <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <li class="nav-item start ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Home</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start ">
                                        <a href="{{url('la-admin/item')}}" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Users</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start ">
                                        <a href="{{url('la-admin/user')}}" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">List Users</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">Functions</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Category</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{ url('la-admin/category/create') }}" class="nav-link ">
                                            <span class="title">Add Category</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ url('la-admin/category') }}" class="nav-link ">
                                            <span class="title">View Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Item</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{ url('la-admin/item/create') }}" class="nav-link ">
                                            <span class="title">Add Item</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ url('la-admin/item') }}" class="nav-link ">
                                            <span class="title">View Item</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->