

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehatqu Apotik Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #95dafa;
        }
        .navbar .navbar-expand-lg {
            background-color: #e6f2ff;
        }
        .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
        padding: 20px;
        }

        .table {
        margin-bottom: 20px;
        }

        .table th,.table td {
        padding: 10px;
        border: 1px solid #ddd;
        }

        .form-control,.form-select {
        height: 40px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

        .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }

        .btn-primary:hover {
        background-color: #0069d9;
        }
            </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
          <a class="navbar-brand" href="#">Sehatqu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ 'tentang' }}">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kelayakan</a>
              </li>
              <li class="nav-item">
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
              </li>
            </ul>
          </div>
            @auth
                 <p style="font-size: 23px;">Selamat datang, {{ Auth::user()->name }}!</p>
            @else
                @if (session('user_name'))
                    <p>Selamat datang, {{ session('user_name') }}!</p>
                @endif
            @endauth
      </nav>
<button><a href="{{ url()->previous() }}">Kembali ke halaman sebelumnya</a></button>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-15">
        <div class="card">
            <form method="POST" action="{{ route('pasien.store') }}">
                @csrf
                <div class="container py-5">
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                      <div class="card shadow-sm">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Tambah Pasien</h5>
                          <table class="table table-bordered">
                            <tr>
                              <th>Nama Pasien</th>
                              <td>
                                <input type="text" name="nama_pasien" class="form-control" />
                              </td>
                            </tr>
                            <tr>
                              <th>Alamat</th>
                              <td>
                                <input type="text" name="alamat" class="form-control" />
                              </td>
                            </tr>
                            <tr>
                              <th>Usia</th>
                              <td>
                                <input type="number" name="usia" class="form-control" />
                              </td>
                            </tr>
                            <tr>
                              <th>Jenis Kelamin</th>
                              <td>
                                <select name="jenis_kelamin" class="form-select">
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <th>Keluhan</th>
                              <td>
                                <textarea name="keluhan" class="form-control" rows="5"></textarea>
                              </td>
                            </tr>
                          </table>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>