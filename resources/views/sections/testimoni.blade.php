{{--
|--------------------------------------------------------------------------
| Section: Testimoni
| File: resources/views/sections/testimoni.blade.php
|--------------------------------------------------------------------------
--}}

<section id="reviews" class="reviews-section scroll-reveal">
  <div class="container">
    <div class="section-header-row">
      <div>
        <div class="section-label">Testimoni</div>
        <h2 class="section-title">Kata Pelanggan Kami</h2>
      </div>
      <div class="review-tabs">
        <button class="tab-btn active" id="tabTenda" data-cat="tenda" onclick="filterUlasan('tenda',this)">Tenda</button>
        <button class="tab-btn" id="tabKost" data-cat="kost" onclick="filterUlasan('kost',this)">Kost</button>
      </div>
    </div>

    {{-- Rating Summary --}}
    <div class="rating-summary">
      <div style="text-align:center;padding-right:1.5rem;border-right:1px solid rgba(255,255,255,0.08)">
        <div class="rating-big" id="ratingAngka">0.0</div>
        <div class="rating-stars" id="ratingBintang">☆☆☆☆☆</div>
        <div class="rating-count" id="ratingCount">0 ulasan Google</div>
      </div>
      <div class="rating-bars" style="flex:1;padding-left:.5rem" id="ratingBars">
        <div class="rating-bar-row"><span class="bar-label">5</span><div class="bar-track"><div class="bar-fill" id="bar5" style="width:0%"></div></div><span class="bar-pct" id="pct5">0%</span></div>
        <div class="rating-bar-row"><span class="bar-label">4</span><div class="bar-track"><div class="bar-fill" id="bar4" style="width:0%"></div></div><span class="bar-pct" id="pct4">0%</span></div>
        <div class="rating-bar-row"><span class="bar-label">3</span><div class="bar-track"><div class="bar-fill" id="bar3" style="width:0%"></div></div><span class="bar-pct" id="pct3">0%</span></div>
        <div class="rating-bar-row"><span class="bar-label">2</span><div class="bar-track"><div class="bar-fill" id="bar2" style="width:0%"></div></div><span class="bar-pct" id="pct2">0%</span></div>
        <div class="rating-bar-row"><span class="bar-label">1</span><div class="bar-track"><div class="bar-fill" id="bar1" style="width:0%"></div></div><span class="bar-pct" id="pct1">0%</span></div>
      </div>
    </div>

    <div class="reviews-carousel">
      <div class="carousel-header">
        <div class="carousel-nav">
          <button class="carousel-arrow carousel-prev" type="button" onclick="scrollReview(-1)" aria-label="Sebelumnya"><i data-lucide="chevron-left"></i></button>
          <button class="carousel-arrow carousel-next" type="button" onclick="scrollReview(1)" aria-label="Berikutnya"><i data-lucide="chevron-right"></i></button>
        </div>
      </div>
      <div class="reviews-scroll" id="reviewsScroll">
        <div class="reviews-track" id="reviewsTrack">
      {{-- Ulasan Tenda --}}
      <div class="review-card" data-cat="tenda">
        <div class="review-header">
          <div class="reviewer-info"><div class="avatar">TDF</div><div><div class="reviewer-name">Tedy Dwi Fani</div><div class="reviewer-role">Local Guide <span class="review-verified" title="Ulasan Terverifikasi"><i data-lucide="check-circle"></i></span></div></div></div>
          <span class="review-badge badge-tenda">Tenda</span>
        </div>
        <div class="stars-row">★★★★★</div>
        <p class="review-text">Tenda Dan kostnya menarik</p>
        <div class="review-time">5 years ago</div>
      </div>
      <div class="review-card" data-cat="tenda">
        <div class="review-header">
          <div class="reviewer-info"><div class="avatar">AS</div><div><div class="reviewer-name">Ahmad Syobirin</div><div class="reviewer-role">Local Guide <span class="review-verified" title="Ulasan Terverifikasi"><i data-lucide="check-circle"></i></span></div></div></div>
          <span class="review-badge badge-tenda">Tenda</span>
        </div>
        <div class="stars-row">★★★★★</div>
        <p class="review-text">Lumayan Bagus!</p>
        <div class="review-time">5 years ago</div>
      </div>
      <div class="review-card" data-cat="tenda">
        <div class="review-header">
          <div class="reviewer-info"><div class="avatar">IA</div><div><div class="reviewer-name">Ikhlassul Amaliah</div><div class="reviewer-role">Local Guide <span class="review-verified" title="Ulasan Terverifikasi"><i data-lucide="check-circle"></i></span></div></div></div>
          <span class="review-badge badge-tenda">Tenda</span>
        </div>
        <div class="stars-row">★★★★★</div>
        <p class="review-text">Sip</p>
        <div class="review-time">6 years ago</div>
      </div>
      <div class="review-card" data-cat="tenda">
        <div class="review-header">
          <div class="reviewer-info"><div class="avatar">DCR</div><div><div class="reviewer-name">DICKA CHAIDAR RAHMAN</div><div class="reviewer-role">Local Guide <span class="review-verified" title="Ulasan Terverifikasi"><i data-lucide="check-circle"></i></span></div></div></div>
          <span class="review-badge badge-tenda">Tenda</span>
        </div>
        <div class="stars-row">★★★★★</div>
        <p class="review-text">Sip</p>
        <div class="review-time">5 years ago</div>
      </div>

      {{-- Ulasan Kost --}}
      <div class="review-card" data-cat="kost" style="display:none">
        <div class="review-header">
          <div class="reviewer-info"><div class="avatar">JKSR</div><div><div class="reviewer-name">Java King Saget Ramadhan</div><div class="reviewer-role">Local Guide <span class="review-verified" title="Ulasan Terverifikasi"><i data-lucide="check-circle"></i></span></div></div></div>
          <span class="review-badge badge-kost">Kost</span>
        </div>
        <div class="stars-row">★★★★★</div>
        <p class="review-text">Bagus sekali, semua nya ada disini, PS ada, studio ada, dapur ada, WiFi ada, mushola ada, bengkel ada, pokok nya selagi ada pak Asep dan Koko semua nya ada, terimakasih gurau kost</p>
        <div class="review-time">4 years ago</div>
      </div>
      <div class="review-card" data-cat="kost" style="display:none">
        <div class="review-header">
          <div class="reviewer-info"><div class="avatar">TEA</div><div><div class="reviewer-name">Taufik Erwin April</div><div class="reviewer-role">Local Guide <span class="review-verified" title="Ulasan Terverifikasi"><i data-lucide="check-circle"></i></span></div></div></div>
          <span class="review-badge badge-kost">Kost</span>
        </div>
        <div class="stars-row">★★★★★</div>
        <p class="review-text">Ini tempat kost yang cukup luas fasilitas lengkap</p>
        <div class="review-time">2 years ago</div>
      </div>
      <div class="review-card" data-cat="kost" style="display:none">
        <div class="review-header">
          <div class="reviewer-info"><div class="avatar">A</div><div><div class="reviewer-name">Adiansyah</div><div class="reviewer-role">Local Guide <span class="review-verified" title="Ulasan Terverifikasi"><i data-lucide="check-circle"></i></span></div></div></div>
          <span class="review-badge badge-kost">Kost</span>
        </div>
        <div class="stars-row">★★★★★</div>
        <p class="review-text">Kumpulan budak tanjung Enim 😄</p>
        <div class="review-time">3 years ago</div>
      </div>
      <div class="review-card" data-cat="kost" style="display:none">
        <div class="review-header">
          <div class="reviewer-info"><div class="avatar">NS</div><div><div class="reviewer-name">Napisah Sari</div><div class="reviewer-role">Local Guide <span class="review-verified" title="Ulasan Terverifikasi"><i data-lucide="check-circle"></i></span></div></div></div>
          <span class="review-badge badge-kost">Kost</span>
        </div>
        <div class="stars-row">★★★★★</div>
        <p class="review-text">Kost-kost an strategis 👌🏻</p>
        <div class="review-time">7 years ago</div>
      </div>
    </div>
      </div>
      <div class="carousel-dots" id="carouselDots"></div>
  </div>
</section>