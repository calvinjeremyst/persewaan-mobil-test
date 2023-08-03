<!doctype html>
<html lang="en">
  <head>
    <title>App - @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 py-3 bg-primary">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/detail">
                        <div class="media">
                            <img class="align-self-center mr-3" src="https://png.pngitem.com/pimgs/s/24-248235_user-profile-avatar-login-account-fa-user-circle.png" height="50" width="50" alt="Profile Picture">
                            <div class="media-body">
                              <h5 class="mt-0">{{ Auth::user()->nama ?? '' }}</h5>
                              <small><p class="mb-8"><i class="bi bi-envelope"></i> {{ Auth::user()->email ?? '' }}</p></small>
                            </div>
                          </div>
                        </a>
                      <a class="dropdown-item" href="/list"><i class="bi bi-file-earmark-text"></i> Daftar Sewa</a>
                      <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 mt-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link {{ ($key == 'home') ? 'active':'' }}" href="/home" role="tab">Home</a>
                    <a class="nav-link {{ ($key == 'management') ? 'active':'' }}" href="/management" role="tab">Manajemen</a>
                    <a class="nav-link {{ ($key == 'borrow') ? 'active':'' }}" href="/borrow" role="tab">Peminjaman</a>
                    <a class="nav-link {{ ($key == 'return') ? 'active':'' }}" href="/return" role="tab">Pengembalian</a>
                  </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card mt-4 vh-100">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>