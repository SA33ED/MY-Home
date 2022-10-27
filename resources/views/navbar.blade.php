<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid" style="width: 1250px">
      <a class="navbar-brand" href="#"><img src="{{ asset('logo.png') }}" style="width: 100px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">الصفحة الرئيسية</a>
                </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        عقارات
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">شقة</a></li>
                        <li><a class="dropdown-item" href="#">فيلا</a></li>
                        <li><a class="dropdown-item" href="#">محل</a></li>
                        <li><a class="dropdown-item" href="#">مكتب اداري</a></li>
                        <li><a class="dropdown-item" href="#">جراج</a></li>
                        <li><a class="dropdown-item" href="#">ارض</a></li>
                        <li><a class="dropdown-item" href="#">مول</a></li>
                        <li><a class="dropdown-item" href="#">مبني</a></li>

                        </ul>
                    </li>

            </ul>
      </div> --}}
      <div>
        <a href="{{ route('login') }}"><button class="btn btn-primary me-auto mb-2 mb-lg-0" style="margin: 10px" type="submit">Login</button></a>

        <a href="{{ route('register') }}"><button class="btn btn-primary me-auto mb-2 mb-lg-0" style="margin: 10px" type="submit">Register</button></a>

      </div>


    </div>
  </nav>
