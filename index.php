<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Anime Store</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background: #111;
      color: white;
    }

    .search-bar {
      padding: 15px;
      background-color: #222;
      text-align: center;
    }

    .search-bar input {
      width: 90%;
      padding: 10px;
      border-radius: 8px;
      border: none;
    }

    .slider {
      width: 100%;
      overflow: hidden;
      height: 200px;
      position: relative;
    }

    .slides {
      display: flex;
      transition: transform 0.5s ease-in-out;
      width: 200%;
    }

    .slides img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .category-title {
      text-align: center;
      font-size: 24px;
      margin-top: 20px;
    }

    .store {
      display: flex;
      flex-direction: row-reverse;
      justify-content: space-around;
      padding: 20px;
    }

    .product {
      width: 30%;
      background: #222;
      padding: 10px;
      border-radius: 10px;
      cursor: pointer;
      position: relative;
      text-align: center;
    }

    .product img {
      width: 100%;
      border-radius: 10px;
    }

    .product-title {
      margin: 10px 0;
      font-weight: bold;
      font-size: 16px;
    }

    .buy-section {
      display: none;
      margin-top: 20px;
    }

    .price {
      margin-bottom: 10px;
      margin-top: 10px;
      font-size: 16px;
      color: #ffd700;
    }

    .buy-btn {
      padding: 10px 20px;
      background-color: #0f0;
      color: black;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="search-wrapper">
  <input type="text" id="search" placeholder="serch produk...">
  <button onclick="searchProduct()">🔍 Cari</button>
</div>

  <div class="slider">
    <div class="slides" id="slider">
      <img src="https://files.catbox.moe/ex0fqx.jpg?text=Iklan+1" />
      <img src="https://o.uguu.se/AZEipETi.jpg?text=Iklan+2" />
    </div>
  </div>

  <div class="category-title">Kategori: SC BUG BAILA</div>

  <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk1">
      <img src="https://files.catbox.moe/8g1gey.jpg?text=Produk+1">
      <div class="product-title">SC BAILA V3</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>

    <div class="product" onclick="toggleBuy(this)" id="produk2">
      <img src="https://files.catbox.moe/zqeify.jpg?text=Produk+2">
      <div class="product-title">SC PRIVATE</div>
      <div class="buy-section">
        <div class="price">Rp 20.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>

    <div class="product" onclick="toggleBuy(this)" id="produk3">
      <img src="https://img1.pixhost.to/images/7034/619492877_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">SC PUBLIC V2</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  </div>

  <script>
    // Slider otomatis
    let currentIndex = 0;
    setInterval(() => {
      currentIndex = currentIndex === 0 ? 1 : 0;
      document.getElementById('slider').style.transform = `translateX(-${currentIndex * 100}%)`;
    }, 8000);

    // Toggle tombol Buy
    function toggleBuy(product) {
      document.querySelectorAll('.buy-section').forEach(section => {
        section.style.display = 'none';
      });
      product.querySelector('.buy-section').style.display = 'block';
    }

    

    // Fungsi cari produk
    function searchProduct() {
      const query = document.getElementById("search").value.toLowerCase();
      const products = document.querySelectorAll(".product");

      products.forEach(product => {
        const title = product.querySelector(".product-title").innerText.toLowerCase();
        if (title.includes(query)) {
          product.scrollIntoView({ behavior: "smooth", block: "center" });
        }
      });
    }
  </script>
</body>
</html>





  <div class="category-title">Kategori: PANEL BOT WA</div>

  <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk1">
      <img src="https://img1.pixhost.to/images/7037/619561024_yunilovejoo.jpg?text=Produk+1">
      <div class="product-title">PANEL 5GB</div>
      <div class="buy-section">
        <div class="price">Rp 1.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>

    <div class="product" onclick="toggleBuy(this)" id="produk2">
      <img src="https://img1.pixhost.to/images/7040/619632873_yunilovejoo.jpg?text=Produk+2">
      <div class="product-title">PANEL 10GB</div>
      <div class="buy-section">
        <div class="price">Rp 2.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>

    <div class="product" onclick="toggleBuy(this)" id="produk3">
      <img src="https://img1.pixhost.to/images/7037/619561533_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">PANEL UNLI</div>
      <div class="buy-section">
        <div class="price">Rp 3.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  </div>


  <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk3">
      <img src="https://img1.pixhost.to/images/7037/619562149_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">ADMIN PANEL</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  </div>
  
  <script>
    // Slider otomatis
    let currentIndex = 0;
    setInterval(() => {
      currentIndex = currentIndex === 0 ? 1 : 0;
      document.getElementById('slider').style.transform = `translateX(-${currentIndex * 100}%)`;
    }, 8000);

    // Toggle tombol Buy
    function toggleBuy(product) {
      document.querySelectorAll('.buy-section').forEach(section => {
        section.style.display = 'none';
      });
      product.querySelector('.buy-section').style.display = 'block';
    }

    

    // Fungsi cari produk
    function searchProduct() {
      const query = document.getElementById("search").value.toLowerCase();
      const products = document.querySelectorAll(".product");

      products.forEach(product => {
        const title = product.querySelector(".product-title").innerText.toLowerCase();
        if (title.includes(query)) {
          product.scrollIntoView({ behavior: "smooth", block: "center" });
        }
      });
    }
  </script>
</body>
</html>


  <div class="category-title">Kategori: NOMOR KOSONG WA</div>

  <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk1">
      <img src="https://img1.pixhost.to/images/7037/619564100_yunilovejoo.jpg?text=Produk+1">
      <div class="product-title">NOKOS FILIPINA</div>
      <div class="buy-section">
        <div class="price">Rp 6.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>

    <div class="product" onclick="toggleBuy(this)" id="produk2">
      <img src="https://img1.pixhost.to/images/7037/619567251_yunilovejoo.jpg?text=Produk+2">
      <div class="product-title">NOKOS INDO</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  
    <div class="product" onclick="toggleBuy(this)" id="produk3">
      <img src="https://img1.pixhost.to/images/7037/619569683_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">NOKOS AFRIKA</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  </div>


  
  <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7037/619570862_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">NOKOS KENYA</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  
      <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7037/619571416_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">NOKOS TELE</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  </div>
  
  <script>
    // Slider otomatis
    let currentIndex = 0;
    setInterval(() => {
      currentIndex = currentIndex === 0 ? 1 : 0;
      document.getElementById('slider').style.transform = `translateX(-${currentIndex * 100}%)`;
    }, 8000);

    // Toggle tombol Buy
    function toggleBuy(product) {
      document.querySelectorAll('.buy-section').forEach(section => {
        section.style.display = 'none';
      });
      product.querySelector('.buy-section').style.display = 'block';
    }

    

    // Fungsi cari produk
    function searchProduct() {
      const query = document.getElementById("search").value.toLowerCase();
      const products = document.querySelectorAll(".product");

      products.forEach(product => {
        const title = product.querySelector(".product-title").innerText.toLowerCase();
        if (title.includes(query)) {
          product.scrollIntoView({ behavior: "smooth", block: "center" });
        }
      });
    }
  </script>
</body>
</html>


  <div class="category-title">Kategori: APP PREMIUM</div>

  <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7038/619592863_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">SPOTIFY PREMIUM</div>
      <div class="buy-section">
        <div class="price">Rp 2.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  
      <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7038/619593957_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">NETVILIX PREMIUM</div>
      <div class="buy-section">
        <div class="price">Rp 2.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>

      <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7037/619571416_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">TELE PREMIUM</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  </div>



  <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7038/619595991_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">DRAMA BOX PREMIUM</div>
      <div class="buy-section">
        <div class="price">Rp 2.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  
      <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7038/619596648_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">CAPCUT PREMIUM</div>
      <div class="buy-section">
        <div class="price">Rp 2.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>

      <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7039/619597728_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">AGLIHMATION PREMIUM</div>
      <div class="buy-section">
        <div class="price">Rp 2.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
   </div>
  
     <div class="store">
        <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7039/619601203_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">CANVA PREMIUM</div>
      <div class="buy-section">
        <div class="price">Rp 2.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  </div>
  

<div class="category-title">Kategori: PRODUK MEMTIKAN</div>

  <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7039/619603623_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">APK SADAP/SURXRAT</div>
      <div class="buy-section">
        <div class="price">Rp 20.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  
      <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7039/619604530_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">JASBUG</div>
      <div class="buy-section">
        <div class="price">Rp 1.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>

      <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7039/619604530_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">MURBUG</div>
      <div class="buy-section">
        <div class="price">Rp 5.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  </div>
  
    <div class="store">
    <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7039/619604530_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">OWNBUG</div>
      <div class="buy-section">
        <div class="price">Rp 10.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
  
  <div class="product" onclick="toggleBuy(this)" id="produk8">
      <img src="https://img1.pixhost.to/images/7039/619608994_yunilovejoo.jpg?text=Produk+3">
      <div class="product-title">TUTOR KENON</div>
      <div class="buy-section">
        <div class="price">Rp 10.000</div>
        <button class="buy-btn" onclick="buy(event)">BUY</button>
      </div>
    </div>
   </div>
   
   <!-- Modal QR & Timer -->
<div id="qrModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:#000000cc; color:white; text-align:center; padding-top:50px; z-index:9999;">
  <h2>Silakan Bayar</h2>
  <img id="qrImage" src="" width="200"/>
  <p id="timer">Sisa waktu: 5:00</p>
  <input type="email" id="emailPembeli" placeholder="Masukkan Email Kamu" style="padding:10px; margin-top:10px;">
  <input type="file" id="buktiBayar" accept="image/*" style="margin-top:10px;">
  <br>
  <button onclick="kirimBukti()">Kirim Bukti</button>
  <p id="status"></p>
</div>

</body>.
<!-- Modal QR & Timer -->
<div id="qrModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:#000000cc; color:white; text-align:center; padding-top:50px; z-index:9999;">
  <h2>Silakan Bayar</h2>
  <img id="qrImage" src="" width="200"/>
  <p id="timer">Sisa waktu: 5:00</p>
  <input type="email" id="emailPembeli" placeholder="Masukkan Email Kamu" style="padding:10px; margin-top:10px;">
  <input type="file" id="buktiBayar" accept="image/*" style="margin-top:10px;">
  <br>
  <button onclick="kirimBukti()">Kirim Bukti</button>
  <p id="status"></p>
</div>

   
  <script>
    // Slider otomatis
    let currentIndex = 0;
    setInterval(() => {
      currentIndex = currentIndex === 0 ? 1 : 0;
      document.getElementById('slider').style.transform = `translateX(-${currentIndex * 100}%)`;
    }, 8000);

    // Toggle tombol Buy
    function toggleBuy(product) {
      document.querySelectorAll('.buy-section').forEach(section => {
        section.style.display = 'none';
      });
      product.querySelector('.buy-section').style.display = 'block';
    }

    let countdown;
function buy(event) {
  event.stopPropagation();

  // Tampilkan QR Modal
  const modal = document.getElementById("qrModal");
  modal.style.display = "block";

  // Ganti dengan link pembayaran atau kode QR
  document.getElementById("qrImage").src = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://link.bayar/kode123";

  // Timer mundur 5 menit
  let time = 5 * 60;
  clearInterval(countdown);
  countdown = setInterval(() => {
    const m = Math.floor(time / 60);
    const s = time % 60;
    document.getElementById("timer").innerText = `Sisa waktu: ${m}:${s < 10 ? '0' : ''}${s}`;
    if (time <= 0) {
      clearInterval(countdown);
      document.getElementById("status").innerText = "❌ Transaksi gagal. Waktu habis.";
    }
    time--;
  }, 1000);
}

function kirimBukti() {
  const email = document.getElementById("emailPembeli").value;
  const file = document.getElementById("buktiBayar").files[0];

  if (!file || !email) {
    alert("Lengkapi email dan bukti pembayaran.");
    return;
  }

  const formData = new FormData();
  formData.append("email", email);
  formData.append("bukti", file);

  fetch("kirim_bukti.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(res => {
    document.getElementById("status").innerText = res;
  });
}


    // Fungsi cari produk
    function searchProduct() {
      const query = document.getElementById("search").value.toLowerCase();
      const products = document.querySelectorAll(".product");

      products.forEach(product => {
        const title = product.querySelector(".product-title").innerText.toLowerCase();
        if (title.includes(query)) {
          product.scrollIntoView({ behavior: "smooth", block: "center" });
        }
      });
    }
  </script>
</body>
</html>
