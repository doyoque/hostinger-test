<template>
  <div>
    <div class="row mt-5 mb-5" id="1">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center" id="1">
        <img :src="'img/svg/icon PHP Hosting_PHP Semua Versi.svg'" />
        <h4 class="php-title">PHP Semu Versi</h4>
        <p class="php-desc">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center" id="2">
        <img :src="'img/svg/icon PHP Hosting_My SQL.svg'" />
        <h4 class="php-title">MySQL Versi 5.6</h4>
        <p class="php-desc">Nikmati MySQL versi terbaru, tercepat, dan kaya akan fitur.</p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center" id="3">
        <img :src="'img/svg/icon PHP Hosting_CPanel.svg'" />
        <h4 class="php-title">Panel Hosting cPanel</h4>
        <p class="php-desc">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
      </div>
    </div>
    <div class="row" id="2">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center" id="1">
        <img :src="'img/svg/icon PHP Hosting_garansi uptime.svg'" />
        <h4 class="php-title">Garansi Uptime 99.9%</h4>
        <p class="php-desc">Data center yang mendukung kelangsungan website Anda 24/7.</p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center" id="2">
        <img :src="'img/svg/icon PHP Hosting_InnoDB.svg'" />
        <h4 class="php-title">Database InnoDB Unlimited</h4>
        <p class="php-desc">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center" id="3">
        <img :src="'img/svg/icon PHP Hosting_My SQL remote.svg'" />
        <h4 class="php-title">Wildcard Remote MySQL</h4>
        <p class="php-desc">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Hosting package mounted");
  }
};
</script>