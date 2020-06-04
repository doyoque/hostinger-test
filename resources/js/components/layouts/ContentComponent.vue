<template>
  <div class="container">
    <banner-component></banner-component>
    <vendor-component></vendor-component>
    <promo-component></promo-component>
    <php-component></php-component>
    <hosting-component></hosting-component>
    <laravel-component></laravel-component>
    <modulephp-component></modulephp-component>
  </div>
</template>

<script>
import BannerComponent from "../contents/BannerComponent";
import VendorComponent from "../contents/VendorComponent";
import HostingPackComponent from "../contents/HostingPackComponent";
import PromoComponent from "../contents/PromoComponent";
import PHPComponent from "../contents/PhpComponent";
import LaravelComponent from "../contents/LaravelComponent";
import ModulePhpComponent from "../contents/ModulePhpComponent";

export default {
  components: {
    "banner-component": BannerComponent,
    "vendor-component": VendorComponent,
    "hosting-component": HostingPackComponent,
    "promo-component": PromoComponent,
    "php-component": PHPComponent,
    "laravel-component": LaravelComponent,
    "modulephp-component": ModulePhpComponent
  }
};
</script>