<template>
  <div class="container">
    <banner-component></banner-component>
    <vendor-component></vendor-component>
    <promo-component></promo-component>
    <hosting-component></hosting-component>
  </div>
</template>

<script>
import BannerComponent from "../contents/BannerComponent";
import VendorComponent from "../contents/VendorComponent";
import HostingPackComponent from "../contents/HostingPackComponent";
import PromoComponent from "../contents/PromoComponent";

export default {
  components: {
    "banner-component": BannerComponent,
    "vendor-component": VendorComponent,
    "hosting-component": HostingPackComponent,
    "promo-component": PromoComponent
  },
  mounted() {
    console.log("ContentComponent Mounted");
  }
};
</script>