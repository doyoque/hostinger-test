<template>
  <div class="row justify-content-center mt-5 mb-5">
    <div class="text-center col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
      <h2 class="content-head-title">Paket Hosting Singapura yang Tepat</h2>
      <h3 class="content-title">Diskon 40%+ Domain dan SSL Gratis untuk Anda</h3>
    </div>
    <div
      v-for="(item, index) in promo"
      :key="index"
      class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-3"
    >
      <!-- <div v-for="(item, index) in promo" :key="index">{{item}}</div> -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center mb-0">{{item.promo_name}}</h5>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item pricing">{{item.price}}/bln</li>
          <li class="list-group-item user-number">{{item.user_registered}} Pengguna Terdaftar</li>
        </ul>
        <div class="card-body text-center">
          <ul
            v-for="(feature, fx) in item.list_feature"
            :key="fx"
            class="list-features pl-0"
          >
            <li>{{feature}}</li>
          </ul>
          <button type="button" class="btn btn-primary btn-promo">Pilih Sekarang</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import services from "../../services/PromoService";

export default {
  data() {
    return {
      promo: {}
    };
  },
  created() {
    services
      .getPromo()
      .then(res => this.parseListFeature(res.data))
      .catch(err => {
        console.log(err);
      });
  },
  methods: {
    parseListFeature(data) {
      data.forEach(item => {
        item.list_feature = JSON.parse(item.list_feature);
      });

      this.promo = data;
    }
  }
};
</script>