<template>
	<div class="row mt-5">
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 linux-section-desc" id="1">
			<h4 class="content-title mb-3">Linux Hosting yang Stabil dengan Teknologi LVE</h4>
			<p class="linux-desc">SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan <strong>RAM 128 GB</strong> dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.</p>
			<div class="centered-btn">
				<button class="btn btn-primary btn-lg btn-laravel">Pilih Hosting Anda</button>
			</div>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id="2">
			<img :src="'/img/Image support.png'" class="img-fluid" alt="Image Support">
		</div>
	</div>
</template>

<script>
	export default {
		mounted() {
			console.log("linux loaded");
		}
	}
</script>