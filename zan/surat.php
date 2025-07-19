<?php
$nama = strtolower(trim($_POST['nama']));

if ($nama === 'risky ayu nadien') {
  echo "<!DOCTYPE html>
  <html lang='id'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Untuk Risky Ayu Nadien 💖</title>
    <style>
      body {
        background-color: #fff0f3;
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        padding: 20px;
      }
      .surat {
        background: white;
        padding: 25px 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        max-width: 400px;
        width: 100%;
      }
      h2 {
        color: #e75480;
        margin-bottom: 18px;
        font-size: 1.3em;
      }
      p {
        font-size: 1em;
        color: #333;
        line-height: 1.6;
        margin-bottom: 15px;
      }
      .footer {
        margin-top: 20px;
        font-style: italic;
        color: #888;
        font-size: 0.9em;
      }
    </style>
  </head>
  <body>
    <div class='surat'>
      <h2>Hai Risky Ayu Nadien 💌</h2>
      <p>Aku nggak akan bohong, waktu kamu bilang nyaman tapi belum suka, aku sempat diam sebentar.</p>
      <p>Tapi setelah aku pikir-pikir, aku malah bersyukur. Karena nyaman itu bukan perasaan yang kecil. 
      Nggak semua orang bisa kasih rasa nyaman ke orang lain. Dan kalau kamu bisa bilang kamu nyaman sama aku, 
      itu tandanya aku udah jadi bagian dari hidupmu — meski kecil.</p>
      <p>Aku nggak mau maksa kamu buat langsung suka. Aku paham, hati itu nggak bisa dipaksa apalagi diburu-buruin.
      Aku cuma mau terus ada di sampingmu, jadi tempat pulang yang kamu tahu nggak akan pergi.</p>
      <p>Dan kalau suatu saat nanti rasa nyaman itu tumbuh jadi sayang, atau bahkan cinta… aku akan bersyukur luar biasa.</p>
      <p>Tapi kalaupun nggak, aku akan terus berusaha dan terus mengejar agar aku disukai kamu.</p>
      <p>Jadi, tenang aja. Nggak perlu ada tekanan. Aku di sini bukan buat nuntut apa-apa. 
      Cuma pengen bersamamu, sebisa dan semampuku. 🌸</p>
      <p>Dan semoga... aku bisa jadi orang yang pantas buat kamu sayangi, bukan cuma kamu nyamanin. 🌷</p>
      <div class='footer'>— Fauzan Rizky N.P</div>
    </div>
  </body>
  </html>";
} else {
  echo "<!DOCTYPE html>
  <html lang='id'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Akses Ditolak 😔</title>
    <style>
      body {
        background-color: #fff0f3;
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        padding: 20px;
      }
      .pesan {
        background: white;
        padding: 25px 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        max-width: 400px;
        width: 100%;
      }
      h2 {
        color: #e75480;
        margin-bottom: 10px;
      }
      p {
        font-size: 1em;
        color: #333;
      }
    </style>
  </head>
  <body>
    <div class='pesan'>
      <h2>😅 Ups, kamu bukan orangnya!</h2>
      <p>Maaf ya... Surat ini cuma untuk <strong>Risky Ayu Nadien</strong>. ❤️</p>
    </div>
  </body>
  </html>";
}
?>
