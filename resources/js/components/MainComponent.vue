<template>
  <div>
    <!-- header -->
    <!-- <header-component></header-component> -->

    <!-- navigation -->
    <navbar-component></navbar-component>

    <!-- content -->
    <content-component></content-component>
    <footer-component></footer-component>
  </div>
</template>

<script>
import NavbarComponent from "../components/layouts/NavbarComponent";
import HeaderComponent from "../components/layouts/HeaderComponent";
import ContentComponent from "../components/layouts/ContentComponent";
import FooterComponent from "../components/layouts/FooterComponent";

export default {
  components: {
    "navbar-component": NavbarComponent,
    "header-component": HeaderComponent,
    "content-component": ContentComponent,
    "footer-component": FooterComponent
  }
};
</script>
