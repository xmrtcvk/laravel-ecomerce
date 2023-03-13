
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Dashboard User Page</title>

    <link rel="stylesheet" href="{{asset("build/assets/app-37892e52.css")}}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Laravel E-Commerce</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Çıkış</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
               #Yönetim Paneli
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url("users")}}">
              <span data-feather="home" class="align-text-bottom"></span>
               #Kullanıcılar
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kullanıcılar</h1>
      </div>

      <div class="d-flex justify-content-end align-items-end">
        <a href="/users/create" class="btn btn-success">Yeni Ekle</a>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Sıra No</th>
              <th scope="col">Ad Soyad</th>
              <th scope="col">Eposta</th>
              <th scope="col">Durum</th>
              <th scope="col" class="text-center">İşlemler</th>
            </tr>
          </thead>
          <tbody>
            @if (count($users) > 0)
                @foreach ($users as $user)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if ($user->is_active)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-danger">Pasif</span>
                        @endif
                    </td>
                    <td class="d-flex justify-content-around">
                        <a class="nav-link text-black" href="{{url("/users/$user->id/edit")}}">
                            <span class="badge bg-warning">Güncelle</span>
                        </a>
                        <a class="nav-link list-item-delete" href="{{url("/users/$user->id")}}">
                            <span class="badge bg-danger">Sil</span>
                        </a>
                        <a class="nav-link" href="/">
                            <span class="badge bg-primary">Şifre Değiştir</span>
                        </a>
                    </td>
                  </tr>
                @endforeach
              @else
              <td colspan="5" class="text-center" style="padding:20px">HERHANGİ BİR KULLANICI BULUNAMADI !</td>
            @endif

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

  </body>
</html>
