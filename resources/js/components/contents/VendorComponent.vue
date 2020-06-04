<template>
  <div class="row justify-content-center mt-5 mb-5">
    <div class="text-center col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="1">
      <embed :src="'/img/svg/icon PHP Hosting_zendguard.svg'" />
    </div>
    <div class="text-center col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="2">
      <embed :src="'/img/svg/icon PHP Hosting_composer.svg'" />
    </div>
    <div class="text-center col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="3">
      <embed :src="'/img/svg/icon PHP Hosting_ioncube.svg'" />
    </div>
  </div>
</template>
<script>
export default {
  mounted() {
    console.log("vendor mounted");
  }
};
</script>