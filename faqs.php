<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 


<style>
    body {
 
      background-color: #fff;
      margin: 0;
      padding: 40px;
    }

    h1 {
      text-align: center;
      font-size: 28px;
      font-weight: bold;
    }

    p.subtitle {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .faq-container {
      max-width: 800px;
      margin: 0 auto;
    }

    .faq-item {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      margin-bottom: 10px;
      border-radius: 6px;
      overflow: hidden;
    }

    .faq-question {
      padding: 20px;
      font-weight: bold;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .faq-answer {
      display: none;
      padding: 20px;
      border-top: 1px solid #ddd;
      background-color: #fff;
      color: #333;
    }

    .faq-item.active .faq-answer {
      display: block;
    }

    .arrow {
      transition: transform 0.3s ease;
    }

    .faq-item.active .arrow {
      transform: rotate(180deg);
    }
  </style>
</head>
<body>

<div class="footer2">

<section class="faq_category">
</br>
</br>
  <h1>Pertanyaan yang Sering Diajukan (FAQ)</h1>
  <p class="subtitle">Bagaimana kami dapat membantu Anda?</p>



  <div class="faq-container">
    <div class="faq-item">
      <div class="faq-question">
        Apa saja fasilitas yang CAR RENTAL berikan kepada penyewa?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Kami menyediakan layanan antar-jemput, kendaraan bersih dan terawat, layanan pelanggan 24/7, dan asuransi kendaraan.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        “Bisa minta pricelist sewa” atau “harga sewanya berapa”?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Untuk pricelist lengkap, silakan hubungi kami melalui WhatsApp atau email resmi kami.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Apakah bisa mobil premium disewa dengan jangka waktu di bawah satu tahun (di atas 3 bulan)?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Ya, mobil premium dapat disewa dengan durasi fleksibel mulai dari 3 bulan hingga satu tahun.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Apakah bisa menyewa kendaraan untuk pribadi tapi dengan masa sewa di atas 1 tahun?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Tentu, kami melayani penyewaan jangka panjang untuk keperluan pribadi maupun korporat.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Bagaimana cara menyewa di Car Rental?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Pertama anda harus mendaftar terlebih dahulu sebagai user melalui menu yang telah disediakan.
      </div>
    </div>
  </div>
</div>
</section>

  <script>
    const questions = document.querySelectorAll('.faq-question');
    questions.forEach(q => {
      q.addEventListener('click', () => {
        const item = q.parentElement;
        item.classList.toggle('active');
      });
    });
  </script>