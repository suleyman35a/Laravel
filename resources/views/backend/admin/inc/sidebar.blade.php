<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Sayfayı Görüntüle</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Sayfalar</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Nasıl Çalışır</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Hakkımızda</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Uzmanlar</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">S.S.S</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">İletişim</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">Kategoriler</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Kurumsal Terapi</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Yetişkin Terapi</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Çift Terapi</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Ergen Terapi</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Çocuk Terapi</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
          <i class="icon-contract menu-icon"></i>
          <span class="menu-title">Danışmanlar</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('advisors.index') }}">Danışmanlar</a></li>
            <li class="nav-item"> <a class="nav-link" href={{ route('advisors.create') }}>Danışman Ekle</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/documentation/documentation.html">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Yazılar</span>
        </a>
      </li>
    </ul>
  </nav>
