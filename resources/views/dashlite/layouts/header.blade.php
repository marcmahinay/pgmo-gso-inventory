<!-- main header @s -->
<div class="nk-header is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger me-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu ms-auto" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <ul class="nk-menu nk-menu-main ui-s2">
                    <li class="nk-menu-item">
                        <a href="/dashboard" class="nk-menu-link">
                            <span class="nk-menu-text">Dashboards</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="/po" class="nk-menu-link">
                            <span class="nk-menu-text">Purchase Order</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="/inventory" class="nk-menu-link">
                            <span class="nk-menu-text">Inventory</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Transactions</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/receive" class="nk-menu-link"><span class="nk-menu-text">Receive</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/issue" class="nk-menu-link"><span class="nk-menu-text">Issue</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Reports</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/reports/ssmi" class="nk-menu-link"><span class="nk-menu-text">SSMI</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/reports/rpci" class="nk-menu-link"><span class="nk-menu-text">RPCI</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/reports/monthly" class="nk-menu-link"><span class="nk-menu-text">Issued Monthly</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/reports/quarterly" class="nk-menu-link"><span class="nk-menu-text">Issued Quarterly</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Manage</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/uom" class="nk-menu-link">
                                    <span class="nk-menu-text">UOM</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/category" class="nk-menu-link">
                                    <span class="nk-menu-text">Categories</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/item" class="nk-menu-link">
                                    <span class="nk-menu-text">Items</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/supplier" class="nk-menu-link">
                                    <span class="nk-menu-text">Suppliers</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/office" class="nk-menu-link">
                                    <span class="nk-menu-text">Offices</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/user" class="nk-menu-link">
                                    <span class="nk-menu-text">Users</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown chats-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-na"><em class="icon ni ni-chat"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                <a href="#">Setting</a>
                            </div>
                            <div class="dropdown-body">
                                <ul class="chat-list">
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar">
                                                <span>IH</span>
                                                <span class="status dot dot-lg dot-gray"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Iliash Hossain</div>
                                                    <span class="time">Now</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                    <div class="status delivered">
                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    <li class="chat-item is-unread">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar bg-pink">
                                                <span>AB</span>
                                                <span class="status dot dot-lg dot-success"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                    <span class="time">4:49 AM</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                    <div class="status unread">
                                                        <em class="icon ni ni-bullet-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar">
                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">George Philips</div>
                                                    <span class="time">6 Apr</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                <div class="user-avatar">
                                                    <img src="./images/avatar/c-sm.jpg" alt="">
                                                </div>
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Softnio Group</div>
                                                    <span class="time">27 Mar</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                    <div class="status sent">
                                                        <em class="icon ni ni-check-circle"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar">
                                                <img src="./images/avatar/a-sm.jpg" alt="">
                                                <span class="status dot dot-lg dot-success"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Larry Hughes</div>
                                                    <span class="time">3 Apr</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="html/apps-chats.html">
                                            <div class="chat-media user-avatar bg-purple">
                                                <span>TW</span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Tammy Wilson</div>
                                                    <span class="time">27 Mar</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                    <div class="status sent">
                                                        <em class="icon ni ni-check-circle"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                </ul><!-- .chat-list -->
                            </div><!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="html/apps-chats.html">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                        <span class="sub-text">info@softnio.com</span>
                                    </div>
                                    <div class="user-action">
                                        <a class="btn btn-icon me-n2" href="html/user-profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner user-account-info">
                                <h6 class="overline-title-alt">Account Balance</h6>
                                <div class="user-balance">1,494.23 <small class="currency currency-usd">USD</small></div>
                                <div class="user-balance-sub">Locked <span>15,495.39 <span class="currency currency-usd">USD</span></span></div>
                                <a href="#" class="link"><span>Withdraw Balance</span> <em class="icon ni ni-wallet-out"></em></a>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                    <li><a class="dark-mode-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();"><em class="icon ni ni-signout"></em><span> {{ __('Log Out') }}</span></a></li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->
