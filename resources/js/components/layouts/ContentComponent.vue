<template>
  <div class="container">
    <first-component></first-component>
    <vendor-component></vendor-component>
  </div>
</template>

<script>
import FirstContentComponent from "../contents/FirstContentComponent";
import VendorComponent from "../contents/VendorComponent";

export default {
  components: {
    "first-component": FirstContentComponent,
    "vendor-component": VendorComponent
  },
  mounted() {
    console.log("ContentComponent Mounted");
  }
};
</script>