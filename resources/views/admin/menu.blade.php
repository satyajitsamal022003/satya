<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="app-menu navbar-menu" style="background-color: #022b50;">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{url('/')}}/images/admin/admin_logo.png" alt="" height="22" style="height: 45px;">
                    </span>
                    <span class="logo-lg">
                        <img src="{{url('/')}}/images/admin/admin_logo.png" alt="" height="17" style="height: 45px;">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{url('/')}}/images/admin/admin_logo.png" alt="" height="22" style="height: 45px;">
                    </span>
                    <span class="logo-lg">
                        <img src="{{url('/')}}/images/admin/admin_logo.png" alt="" height="17" style="height: 45px;">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    @if(Auth::user()->role_id != 1)
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('admin.admin_dashboard')}}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->

                        <!-- roles and perm codes -->
                        @php($userdetail=App\Models\Role::where('id',Auth::user()->role_id)->first())
                        @if($userdetail)
                        @php($array_data=json_decode($userdetail['modules']))
                        @else
                        @php($array_data=[])
                        @endif

                        @if(in_array('acservices',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#acmanagemnet" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="acmanagemnet">
                            <i class="fa fa-book" style="font-size:20px"></i><span data-key="t-dashboards">Ac Services</span>
                            </a>
                            <div class="collapse menu-dropdown" id="acmanagemnet">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.acserviceentry')}}" class="nav-link" data-key="t-analytics">Entry</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.acservicelist')}}" class="nav-link" data-key="t-crm">List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif

                        @if(in_array('otherservices',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#otherservices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="otherservices">
                            <i class="fa fa-book" style="font-size:20px"></i><span data-key="t-dashboards">Other Services</span>
                            </a>
                            <div class="collapse menu-dropdown" id="otherservices">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.serviceentry')}}" class="nav-link" data-key="t-analytics">Entry</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.servicelist')}}" class="nav-link" data-key="t-crm">List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif

                        @if(in_array('callmanagement',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#callmanagement" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="callmanagement">
                             <i class="fa fa-phone" aria-hidden="true"></i> <span data-key="t-dashboards">Call Management</span>
                            </a>
                            <div class="collapse menu-dropdown" id="callmanagement">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.callinoutentry')}}" class="nav-link" data-key="t-analytics"> Call (in/out)-Entry </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.callinoutreport')}}" class="nav-link" data-key="t-crm"> Call (in/out)-Report </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.callinoutlist')}}" class="nav-link" data-key="t-crm"> Call List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif


                        @if(in_array('accounts',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#accounts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="accounts">
                            <i class="fa fa-home" aria-hidden="true"></i><span data-key="t-dashboards">Accounts</span>
                            </a>
                            <div class="collapse menu-dropdown" id="accounts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_account')}}" class="nav-link" data-key="t-analytics"> Entry Form </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.accounts_list')}}" class="nav-link" data-key="t-crm"> Pending List </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.accountreport')}}" class="nav-link" data-key="t-crm"> Report </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif

                        @if(in_array('inventory',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#inventory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="inventory">
                            <i class="fa fa-building" aria-hidden="true"></i> <span data-key="t-dashboards">Inventory</span>
                            </a>
                            <div class="collapse menu-dropdown" id="inventory">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_product')}}" class="nav-link" data-key="t-analytics"> Add Product </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.product_list')}}" class="nav-link" data-key="t-crm"> Product-List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif

                        @if(in_array('expense',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#expense" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="expense">
                            <i class="fa fa-money" aria-hidden="true"></i> <span data-key="t-dashboards">Expense</span>
                            </a>
                            <div class="collapse menu-dropdown" id="expense">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_expense')}}" class="nav-link" data-key="t-analytics"> Add Daily Expense </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.expense_list')}}" class="nav-link" data-key="t-crm"> Daily Expense Report </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif

                        @if(in_array('engineer',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#engineer" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="engineer">
                            <i class="fa fa-user" aria-hidden="true"></i><span data-key="t-dashboards">Engineers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="engineer">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_engineer')}}" class="nav-link" data-key="t-analytics">Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.engineer_list')}}" class="nav-link" data-key="t-crm">List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif

                        @if(in_array('dealers',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#dealer" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="dealer">
                            <i class="fa fa-industry" aria-hidden="true"></i><span data-key="t-dashboards">Dealers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="dealer">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_dealer')}}" class="nav-link" data-key="t-analytics">Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.dealer_list')}}" class="nav-link" data-key="t-crm">List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif

                        @if(in_array('producttypes',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#prodtypes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="prodtypes">
                            <i class="fa fa-industry" aria-hidden="true"></i><span data-key="t-dashboards">Product Types</span>
                            </a>
                            <div class="collapse menu-dropdown" id="prodtypes">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_producttype')}}" class="nav-link" data-key="t-analytics">Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.product_listtype')}}" class="nav-link" data-key="t-crm">List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif

                        @if(in_array('usermanagement',$array_data))
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#mr" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="mr">
                            <i class="fa fa-building" aria-hidden="true"></i> <span data-key="t-dashboards">User Management</span>
                            </a>
                            <div class="collapse menu-dropdown" id="mr">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.role_list')}}" class="nav-link" data-key="t-analytics">Roles & Permissions</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="" class="nav-link" data-key="t-analytics"></a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="{{route('admin.user_list')}}" class="nav-link" data-key="t-crm">User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                     

                    </ul>
                    @else
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('admin.admin_dashboard')}}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#acmanagemnet" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="acmanagemnet">
                            <i class="fa fa-book" style="font-size:20px"></i><span data-key="t-dashboards">Ac Services</span>
                            </a>
                            <div class="collapse menu-dropdown" id="acmanagemnet">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.acserviceentry')}}" class="nav-link" data-key="t-analytics">Entry</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.acservicelist')}}" class="nav-link" data-key="t-crm">List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#otherservices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="otherservices">
                            <i class="fa fa-book" style="font-size:20px"></i><span data-key="t-dashboards">Other Services</span>
                            </a>
                            <div class="collapse menu-dropdown" id="otherservices">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.serviceentry')}}" class="nav-link" data-key="t-analytics">Entry</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.servicelist')}}" class="nav-link" data-key="t-crm">List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#callmanagement" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="callmanagement">
                             <i class="fa fa-phone" aria-hidden="true"></i> <span data-key="t-dashboards">Call Management</span>
                            </a>
                            <div class="collapse menu-dropdown" id="callmanagement">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.callinoutentry')}}" class="nav-link" data-key="t-analytics"> Call (in/out)-Entry </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.callinoutreport')}}" class="nav-link" data-key="t-crm"> Call (in/out)-Report </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.callinoutlist')}}" class="nav-link" data-key="t-crm"> Call List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#accounts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="accounts">
                            <i class="fa fa-home" aria-hidden="true"></i><span data-key="t-dashboards">Accounts</span>
                            </a>
                            <div class="collapse menu-dropdown" id="accounts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_account')}}" class="nav-link" data-key="t-analytics"> Entry Form </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.accounts_list')}}" class="nav-link" data-key="t-crm"> Pending List </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.accountreport')}}" class="nav-link" data-key="t-crm"> Report </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#inventory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="inventory">
                            <i class="fa fa-building" aria-hidden="true"></i> <span data-key="t-dashboards">Inventory</span>
                            </a>
                            <div class="collapse menu-dropdown" id="inventory">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_product')}}" class="nav-link" data-key="t-analytics"> Add Product </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.product_list')}}" class="nav-link" data-key="t-crm"> Product-List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#expense" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="expense">
                            <i class="fa fa-money" aria-hidden="true"></i> <span data-key="t-dashboards">Expense</span>
                            </a>
                            <div class="collapse menu-dropdown" id="expense">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_expense')}}" class="nav-link" data-key="t-analytics"> Add Daily Expense </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.expense_list')}}" class="nav-link" data-key="t-crm"> Daily Expense Report </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#engineer" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="engineer">
                            <i class="fa fa-user" aria-hidden="true"></i><span data-key="t-dashboards">Engineers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="engineer">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_engineer')}}" class="nav-link" data-key="t-analytics">Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.engineer_list')}}" class="nav-link" data-key="t-crm">List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#dealer" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="dealer">
                            <i class="fa fa-industry" aria-hidden="true"></i><span data-key="t-dashboards">Dealers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="dealer">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_dealer')}}" class="nav-link" data-key="t-analytics">Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.dealer_list')}}" class="nav-link" data-key="t-crm">List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#prodtypes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="prodtypes">
                            <i class="fa fa-industry" aria-hidden="true"></i><span data-key="t-dashboards">Product Types</span>
                            </a>
                            <div class="collapse menu-dropdown" id="prodtypes">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.add_producttype')}}" class="nav-link" data-key="t-analytics">Add</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('admin.product_listtype')}}" class="nav-link" data-key="t-crm">List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#mr" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="mr">
                            <i class="fa fa-building" aria-hidden="true"></i> <span data-key="t-dashboards">User Management</span>
                            </a>
                            <div class="collapse menu-dropdown" id="mr">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.role_list')}}" class="nav-link" data-key="t-analytics">Roles & Permissions</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="" class="nav-link" data-key="t-analytics"></a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="{{route('admin.user_list')}}" class="nav-link" data-key="t-crm">User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                     

                    </ul>
                    @endif
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>