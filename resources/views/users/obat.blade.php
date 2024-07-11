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
            width: 500px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease; 
        }
        .card:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
            transform: translateY(-1px);  
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
            margin-right: 20px;
        }
        .doctor-imagee {
            width: 350px;
            height: 150px;
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
            <div class="name">Obat Batuk</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/cap.png" alt="Doctor image" class="doctor-image">
            <p>OBAT BATUK CAP IBU DAN ANAK SIRUP merupakan obat herbal yang digunakan membantu
                meredakan batuk berdahak dan membantu melegakan tenggorokan, serta membantu memlihara
                kesehatan paru-paru.</p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 Tahun</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button onclick="location.href='{{ url('/konsultasi') }}'">+keranjang</button>
            <span class="price">Rp 32.900</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Pereda Nyeri dan Demam</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/pan.png" alt="Doctor image" class="doctor-imagee">
            <p>PANADOL EXTRA merupakan obat dengan kandungan Paracetamol dan 
                Caffeine. Obat ini dapat digunakan untuk meringankan sakit 
                kepala dan sakit gigi. Paracetamol sebagai analgetik, bekerja dengan
                meningkatkan ambang rasa sakit.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 Tahun</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 13.900</span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Pereda Nyeri dan Demam</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/sic.png" alt="Doctor image" class="doctor-image">
            <p>SUMAGESIC TABLET merupakan obat dengan kandungan Paracetamol
                600 mg. Obat ini dapat digunakan untuk meringankan rasa sakit
                kepala,gigi, dan menurunkan demam.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 3.000</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Pereda Nyeri dan Demam</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/para.png" alt="Doctor image" class="doctor-imagee">
            <p>SANMOL merupakan obat dengan kandungan Paracetamol 500 mg.
                Obat ini digunakan untuk meringankan rasa sakit pada
                keadaan sakit kepala,gigi dan menurunkan demam.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 Tahun</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 2.400</span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Pencernaan</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/1.png" alt="Doctor image" class="doctor-image">
            <p>LANSOPRAZOL merupakan obat golongan proton pump inhibitor
                yang digunakan untuk tukak duodenum dan tukak lambung ringan,
                tukak peptik, refluks esofagitis, sindrom zollinger-ellison dan 
                eradikasi.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa, Dengan petunjuk dokter</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 16.000</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Diare</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/3.png" alt="Doctor image" class="doctor-image">
            <p>ORALITE sachet merupakan obat dengan kandungan Natrium 
                Klorida, Kalium Klorida, Trisodium sitrat dihidrat,Glukosa anhidrat
                dalam bentuk serbuk. Obat ini digunakan untuk mencegah dan mengobati
                kurang cairan dehidrasi akibat diare dan muntah.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dibawah 1 tahun</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 1.100</span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Pencernaan</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/2.png" alt="Doctor image" class="doctor-image">
            <p>GERDILIUM memiliki kandungan Domperdone dalam bentuk tablet.
                Obat ini merupakan antagonis dopamin yang mempunyai kerja anti-emerik 
                yang digunakan untuk dispesia fungsional, mual mmuntah.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 Tahun</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 64.000</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Pencernaan</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/3.png" alt="Doctor image" class="doctor-imagee">
            <p>NEW DIATABS merupakan obat antidiare dengan kandungan Attapulgit 600 mg. 
                Obat ini dapat digunakan untuk pengobatan simtomatik pada diare non-spesifik, 
                yaitu diare yang tidak di ketahui dengan jelas.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 Tahun</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 3.200</span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Batuk</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/4.png" alt="Doctor image" class="doctor-image">
            <p>OBAT BATUK CAP IBU DAN ANAK SIRUP merupakan obat herbal yang digunakan membantu
                meredakan batuk berdahak dan membantu melegakan tenggorokan, serta membantu memlihara
                kesehatan paru-paru.</p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 Tahun</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 32.900</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Alergi</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/5.png" alt="Doctor image" class="doctor-image">
            <p>LERZIN DROPS 15 ML mengandung zat aktif Cetirizine HCI yang merupakan antihistamin
                yang secara kompetitif dan selektif menghambat reseptor
                H1 di saluran pencernaan, pembuluh darah,
                dan saluran pernapasan. 
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 Tahun</div>
              <div><i class="fas fa-thumbs-up"></i> </div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 38.400</span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Flu</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/6.png" alt="Doctor image" class="doctor-image">
            <p>RHINOS NEO DROPS merupakan obat dengan kandungan Pseudoephendrine
                HCI. Obat ini dapat digunakan untuk meringankan gejala hidung tersumbat karena flu.

            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Anak 2-5tahun </div>
              <div><i class="fas fa-thumbs-up"></i></div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 79.100</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Batuk dan Flu</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/7.png" alt="Doctor image" class="doctor-image">
            <p>OBH COMBI ANAK BATUK PLUS FLU MADU  adalah obat batuk dengan rasa madu.
                Mengandung Paracetamol, yang bekerja sebagai pereda demam sekaligus
                mengurangi rasa nyeri di kepala.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>2-5tahun</div>
              <div><i class="fas fa-thumbs-up"></i></div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 19.700</span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Flu</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/8.png" alt="Doctor image" class="doctor-image">
            <p>TRIFEDRIN merupakan obat dengan kandungan Triprolidine HCI dan Pseudoephedrine
                HCI dalam bentuk sirup. Obat ini digunakan sebagai antihistamin dan
                dekongestan hidung.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 tahun</div>
              <div><i class="fas fa-thumbs-up"></i></div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 34.400</span>
          </div>
        </div>    
        <div class="card">
          <div class="card-header">
            <div class="name">Obat Nyeri</div>
            <div class="status">
              <i class="fas fa-user-md"></i>
              <span></span>
            </div>
          </div>
          <div class="card-body">
            <img src="img/9.png" alt="Doctor image" class="doctor-image">
            <p>PARAMEX merupakan obat dengan kandungan Paracetamol,Propyhenazone,
                Caffeine Dexchlorpheniramine maleate. Obat ini dapat digunakan untuk meringankan
                sakit kepala dan sakit gigi.
            </p>
            <div class="info">
              <div><i class="far fa-clock"></i>Dewasa dan anak >12 tahun</div>
              <div><i class="fas fa-thumbs-up"></i></div>
            </div>
          </div>
          <div class="card-footer">
            <button>+keranjang</button>
            <span class="price">Rp 2.800</span>
          </div>
        </div>
      </div>
      
</body>
</html>
      

