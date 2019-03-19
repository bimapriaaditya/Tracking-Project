<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<div>&nbsp;</div>
    <h1 id="tentang_perusahaan">TENTANG PERUSAHAAN</h1>
    <hr>
    <div id="text_panjang">
	    <p>
	        Ditengah arus globalisasi yang semakin deras, Bentang Inspira Teknologi (BIT) hadir untuk memfasilitasi kebutuhan masyarakat akan teknologi informasi. Perusahaan yang baru berevolusi pada tahun 2008 ini bercita-cita untuk terus melakukan inovasi kreatif di bidang Information and Communication Technology.
	    </p>
	    <div>&nbsp;</div>
	    <p>
			Kami sadar, seiring berkembangnya kebutuhan masyarakat akan teknologi informasi, tantangan yang akan kami hadapi pun semakin berat dan kompleks. Akan tetapi itu semua tidak menghalangi kami untuk terus memberikan pelayanan profesional untuk hasil yang maksimal. Oleh karena itu, perusahaan kami di kelola oleh profesional-profesional muda yang ahli dan berpengalaman di bidangnya. Bentang Inspira Teknologi di dukung oleh infrastruktur yang sangat baik dengan sumber daya manusia yang profesional, berpengalaman dan handal. Dengan berbekal semangat, inovatif, kreatifitas serta jaringan yang luas, Bentang Inspira Teknologi sanggup bersaing di bisnis teknologi informasi.
		</p>
		<div>&nbsp;</div>
		<p>
			Bentang Inspira Teknologi selalu mengutamakan hubungan baik dengan klien. Sebagai bentuk komitmen perusahaan dalam melayani klien dan memberikan pelayanan yang terbaik dan profesional.Demi melaksanakan komitmen tersebut, Bentang Inspira Teknologi bekerja secara sistematis, terstruktur dan tepat waktu, sehingga dapat menghasilkan produk yang berkulitas dan memuaskan klien. Layanan dan solusi terintegrasi merupakan modal utama yang kami miliki untuk mengantarkan institusi usaha menjadi lebih tangguh dan siap bersaing di era globalisasi.
	    </p>
	</div>






    <!-- *Untuk Para Penerus Kami, Silahkan membuat "Easter Egg" masing-masing, namun harap di kondisikan  --> 
    <!-- "Easter Egg" Sederhana Dan Mudah Ketahuan -->

    <div id="tulisan">
    	<div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <p style="text-align: right;"><b>V.0.0.1 Dibuat Oleh : </b> <br> 
	    	Bima Pria Aditya & Risman Taufik Rohendi <br>
	    	PKL SMK Negeri 2 Bandung <br>
	    	<b>07/04/2019</b>
	    </p>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tulisan'). hide();
	 	$("#tentang_perusahaan").click(function(){
	   		$('#tulisan'). toggle('fast');
	 	});
	});
</script>