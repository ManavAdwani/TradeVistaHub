<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
      <img src="{{asset('assets/img/pngegg.png')}}" class="navbar-brand-img h-100" alt="...">
      <span class="ms-3 font-weight-bold">TradeVistaHub</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" href="{{ url('dashboard') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20"
              src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/48/000000/external-dashboard-user-interface-tanah-basah-detailed-outline-tanah-basah.png"
              alt="external-dashboard-user-interface-tanah-basah-detailed-outline-tanah-basah" />


          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Trading</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('user-profile') ? 'active' : '') }} " href="{{ url('user-profile') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20" src="https://img.icons8.com/dotty/80/stocks-growth.png" alt="stocks-growth" />
          </div>
          <span class="nav-link-text ms-1">Trade</span>
        </a>
      </li>
      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('user-management') ? 'active' : '') }}" href="{{ url('user-management') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20" src="https://img.icons8.com/ios/50/portfolio.png" alt="portfolio" />
          </div>
          <span class="nav-link-text ms-1">Portfolio</span>
        </a>
      </li>
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account Management</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('tables') ? 'active' : '') }}" href="{{ url('tables') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20" src="https://img.icons8.com/ios/50/guest-male.png" alt="guest-male" />
          </div>
          <span class="nav-link-text ms-1">Account</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('billing') ? 'active' : '') }}" href="{{ url('billing') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20" src="https://img.icons8.com/ios/50/wallet.png" alt="wallet" />
          </div>
          <span class="nav-link-text ms-1">Wallet</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('virtual-reality') ? 'active' : '') }}" href="{{ url('virtual-reality') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20" src="https://img.icons8.com/ios/50/news.png" alt="news" />
          </div>
          <span class="nav-link-text ms-1">News Feed</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('rtl') ? 'active' : '') }}" href="{{ url('rtl') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20"
              src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/24/external-bookmark-library-tanah-basah-basic-outline-tanah-basah.png"
              alt="external-bookmark-library-tanah-basah-basic-outline-tanah-basah" />
          </div>
          <span class="nav-link-text ms-1">Watchlist</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('profile') ? 'active' : '') }}" href="{{ url('profile') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20" src="https://img.icons8.com/ios/50/apple-settings.png" alt="apple-settings" />
          </div>
          <span class="nav-link-text ms-1">Settings</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link  " href="{{ url('static-sign-in') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img width="20" height="20" src="https://img.icons8.com/ios/50/exit.png" alt="exit" />
          </div>
          <span class="nav-link-text ms-1">Logout</span>
        </a>
      </li>
    </ul>
  </div>
</aside>