<template>
  <div class="row mb-5">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="1">
      <h4 class="content-title text-center mb-5">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h4>
      <div class="row">
        <div
          v-for="(module, index) in php_modules"
          :key="index"
          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6"
        >{{module.module_name}}</div>
      </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-5" id="2">
      <button class="btn btn-outline-dark btn-lg btn-php-modules">Selengkapnya</button>
    </div>
  </div>
</template>
<script>
import services from "../../services/PromoService";

export default {
  data() {
    return {
      php_modules: {}
    };
  },
  created() {
    services
      .getPhpModules()
      .then(res => (this.php_modules = res.data))
      .catch(err => {
        console.log(err);
      });
  }
};
</script>