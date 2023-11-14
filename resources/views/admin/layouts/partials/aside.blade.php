<div data-active-color="white" data-background-color="black" data-image="../app-assets/img/sidebar-bg/01.jpg"
     class="app-sidebar">
    <div class="sidebar-header">
        <div class="logo clearfix"><a href="index-2.html" class="logo-text float-right">
                <div class="logo-img"><img src="../app-assets/img/logo.png" alt="Convex Logo" /></div><span
                    class="text align-middle">CONVEX</span>
            </a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
                    data-toggle="expanded" class="ft-disc toggle-icon"></i></a><a id="sidebarClose" href="javascript:;"
                                                                                  class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-circle"></i></a></div>
    </div>
    <div class="sidebar-content">
        <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                <li class="nav-item active"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i><span data-i18n=""
                                                                                                   class="menu-title">داشبورد</span></a>
                </li>

                <li class="has-sub nav-item"><a href="#"><i class="icon-users"></i><span data-i18n=""
                                                                                                  class="menu-title">کاربران</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('admin.user.index') }}" class="menu-item">لیست کاربران</a>
                        </li>
                        <li><a href="#" class="menu-item">نظرات</a>
                        </li>
                        <li><a href="#" class="menu-item">دسترسی ها</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item"><a href="#"><i class="icon-docs"></i><span data-i18n=""
                                                                                          class="menu-title">مطالب</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('admin.post.index') }}" class="menu-item">لیست مطالب</a>
                        </li>
                        <li><a href="#" class="menu-item">نظرات</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="{{ route('admin.setting.index') }}"><i class="icon-settings"></i><span data-i18n=""
                                                                                              class="menu-title">تنظیمات</span></a>
                </li>

                <li class=" nav-item"><a href="{{ route('admin.ticket.index') }}"><i class="icon-support"></i><span data-i18n=""
                                                                                                                class="menu-title">پشتیبانی</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
