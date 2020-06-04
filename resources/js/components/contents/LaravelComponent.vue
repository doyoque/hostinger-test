<template>
  <div class="row mt-5 mb-5">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id="1">
      <h4
        class="php-desc pb-4"
      >Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</h4>
      <ul class="list-laravel list-checkmarks pl-4">
        <li id="1">
          Install Laravel
          <strong>1 Klik</strong> dengan Softcaulous Installer.
        </li>
        <li id="2">
          Mendukung ekstensi
          <strong>PHP MCrypt, phar, mbstring, json,</strong> dan
          <strong>fileinfo</strong>
        </li>
        <li id="3">
          Tersedia
          <strong>Composer</strong> dan
          <strong>SSH</strong> untuk menginstal packages pilihan Anda.
        </li>
      </ul>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id="2">
      <img :src="'/img/svg/illustration banner support laravel hosting.svg'" />
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("laravel mounted");
  }
};
</script>