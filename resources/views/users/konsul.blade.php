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
        .container {
            display: flex;
            justify-content: space-around;
            padding: 5px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .card-header .name {
            font-size: 18px;
            font-weight: bold;
        }
        .card-header .status {
            display: flex;
            align-items: center;
        }
        .card-header .status i {
            margin-right: 5px;
        }
        .card-body {
           margin-bottom: 20px;
        }
        .card-body p {
            margin: 0;
            padding: 10px;
        }
        .card-body .info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-footer button {
            background-color: #ff5733;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .card-footer .price {
            font-size: 18px;
            font-weight: bold;
        }
        .doctor-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">Sehatqu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/tentang">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kelayakan</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                @auth
                 <p style="font-size: 23px;">Selamat datang, {{ Auth::user()->name }}!</p>
            @else
                @if (session('user_name'))
                    <p>Selamat datang, {{ session('user_name') }}!</p>
                @endif
            @endauth
              </li>
            </ul>
          </div>
      </nav>
      <button><a href="{{ url()->previous() }}">Kembali ke halaman sebelumnya</a></button>
      <h1 style="align-items: center; display: flex; justify-content: space-around; padding: 10px;">Pilih Dokter</h1>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Dr. Muhammad Fardhan</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span>Dokter Umum</span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/doc1.jpeg" alt="Doctor image" class="doctor-image">
            <p>Dr. Muhammad Fardhan adalah dokter umum,Ia fokus pada diagnosis akurat, perawatan optimal, dan pencegahan penyakit untuk meningkatkan kualitas hidup pasien.</p>
            <div class="info">
              <div><i class="far fa-clock"></i> 35 tahun</div>
              <div><i class="fas fa-thumbs-up"></i> 99%</div>
            </div>
          </div>
          <div class="card-footer">
            <button onclick="location.href='{{ url('/konsultasi') }}'">Konsultasi</button>
            <span class="price">Rp 45.000</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Dr. Henri</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span>Dokter Anak</span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/doc.jpeg" alt="Doctor image" class="doctor-image">
            <p>Dr. Henri adalah dokter anak berdedikasi,Ia fokus pada diagnosis akurat, perawatan tepat, dan pencegahan penyakit untuk mendukung perkembangan optimal anak-anak.</p>
            <div class="info">
              <div><i class="far fa-clock"></i> 25 tahun</div>
              <div><i class="fas fa-thumbs-up"></i> 100%</div>
            </div>
          </div>
          <div class="card-footer">
            <button onclick="location.href='{{ url('/konsultasi') }}'">Konsultasi</button>
            <span class="price">Rp 100.000</span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Dr. Daffa</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span>Dokter Gigi</span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/doc2.jpeg" alt="Doctor image" class="doctor-image">
            <p>Dr. Daffa adalah seorang dokter gigi,Ia fokus pada diagnosis akurat, perawatan tepat, dan pencegahan masalah gigi untuk memastikan kesehatan gigi dan mulut yang optimal bagi pasien.</p>
            <div class="info">
              <div><i class="far fa-clock"></i> 16 tahun</div>
              <div><i class="fas fa-thumbs-up"></i> 99%</div>
            </div>
          </div>
          <div class="card-footer">
            <button onclick="location.href='{{ url('/konsultasi') }}'">Konsultasi</button>
            <span class="price">Rp 45.000</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Dr. Erik</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span>Dokter Jantung</span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/doc3.jpeg" alt="Doctor image" class="doctor-image">
            <p>Dr. Erik adalah seorang dokter jantung berdedikasi yang memberikan perawatan kardiovaskular dengan keahlian dan ketelitian tinggi. Ia fokus pada diagnosis akurat, perawatan tepat, dan pencegahan penyakit jantung untuk memastikan kesehatan jantung yang optimal bagi pasien.</p>
            <div class="info">
              <div><i class="far fa-clock"></i> 25 tahun</div>
              <div><i class="fas fa-thumbs-up"></i> 100%</div>
            </div>
          </div>
          <div class="card-footer">
            <button onclick="location.href='{{ url('/konsultasi') }}'">Konsultasi</button>
            <span class="price">Rp 100.000</span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Dr. Saiful Galuh</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span>Dokter Ginjal</span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/doc4.jpeg" alt="Doctor image" class="doctor-image">
            <p>Dr. Saiful Galuh adalah seorang dokter ginjal berdedikasi yang memberikan perawatan nefrologi dengan keahlian tinggi. Ia fokus pada diagnosis akurat, perawatan tepat, dan pencegahan penyakit ginjal untuk memastikan kesehatan ginjal yang optimal bagi pasien.</p>
            <div class="info">
              <div><i class="far fa-clock"></i> 16 tahun</div>
              <div><i class="fas fa-thumbs-up"></i> 99%</div>
            </div>
          </div>
          <div class="card-footer">
            <button onclick="location.href='{{ url('/konsultasi') }}'">Konsultasi</button>
            <span class="price">Rp 45.000</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Dr. Amelia</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span>Dokter Kandungan</span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/doc5.jpeg" alt="Doctor image" class="doctor-image">
            <p>Dr. Amelia adalah seorang dokter kandungan berdedikasi yang memberikan perawatan kesehatan reproduksi dengan keahlian dan perhatian tinggi. Ia fokus pada diagnosis akurat, perawatan tepat, dan pencegahan masalah kesehatan reproduksi untuk memastikan kesejahteraan optimal bagi pasien.</p>
            <div class="info">
              <div><i class="far fa-clock"></i> 25 tahun</div>
              <div><i class="fas fa-thumbs-up"></i> 100%</div>
            </div>
          </div>
          <div class="card-footer">
            <button onclick="location.href='{{ url('/konsultasi') }}'">Konsultasi</button>
            <span class="price">Rp 100.000</span>
          </div>
        </div>
      </div>
      
</body>
</html>
      

