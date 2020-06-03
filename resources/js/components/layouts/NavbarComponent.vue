<template>
  <nav class="navbar navbar-expand-md bg-light navbar-light">
    <a class="navbar-brand" href="#">
      <img :src="'/img/logo2.png'" />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#collapsibleNavbar"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Hosting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Domain</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Server</a>
        </li>
        <li class="nav-item1">
          <a href="#" class="nav-link" id>Website</a>
        </li>
        <li class="nav-item2">
          <a href="#" class="nav-link" id>Afiliasi</a>
        </li>
        <li class="nav-item3">
          <a href="#" class="nav-link" id>Promo</a>
        </li>
        <li class="nav-item4">
          <a href="#" class="nav-link" id>Pembayaran</a>
        </li>
        <li class="nav-item5">
          <a href="#" class="nav-link" id>Review</a>
        </li>
        <li class="nav-item6">
          <a href="#" class="nav-link" id>Kontak</a>
        </li>
        <li class="nav-item7">
          <a href="#" class="nav-link" id>Blog</a>
        </li>
      </ul>
    </div>
  </nav>
</template>
<script>
export default {
  mounted() {
    console.log("nav mounted");
  }
};
</script>
