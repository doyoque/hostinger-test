<template>
  <div>
    <!-- header -->
    <!-- <header-component></header-component> -->

    <!-- navigation -->
    <navbar-component></navbar-component>

    <!-- content -->
    <content-component></content-component>
  </div>
</template>

<script>
import NavbarComponent from "../components/layouts/NavbarComponent";
import HeaderComponent from "../components/layouts/HeaderComponent";
import ContentComponent from "../components/layouts/ContentComponent";

export default {
  components: {
    "navbar-component": NavbarComponent,
    "header-component": HeaderComponent,
    "content-component": ContentComponent
  }
};
</script>
