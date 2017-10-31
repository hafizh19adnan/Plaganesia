@extends('layouts.gov')
@section('content')
<div id="header-recomendation">
	<div class="container">
		<h3 class="light-green-text text-lighten-5">Fogging </h4>
	</div>
</div>
<div id="recomendation-content">
	<div class="container">
		
		<div class="card" style="padding: 20px;">
			<h5 class=" teal-text"><STRONG>Petunjuk Pelaksanaan</STRONG></h5>
			<p>Pelaksanaan pengasapan harus dalam kondisi yang aman jangan sampai membahayakan kesehatan. Antara lain:</p>
			<ol>
				<li>Saklar listrik dimatikan, pemanas dan peralatan masak harus dilepas ketika fogging dioperasikan.</li>
				<li>Tempat penyimpan air dan bahan makanan harus diproteksi dari asap.</li>
				<li>Orang dan binatang tetap di luar selama minimal 30 menit setelah selesai pengasapan.</li>
				<li>Diperbolehkan masuk hanya ketika setelah ventilasi terbuka.</li>
				<li>Semua jendela dan pintu harus ditutup sebelum penyemprotan serta dibiarkan tertutup minimal 30 menit setelah penyemprotan untuk efektifitas yang optimal.</li>
				<li>Mulai dari yang paling dalam, terus menjauhi asap sampai semua area terasapi.Hendaknya asap dalam keadaan kering. Seyogyanya dites dulu sebelum pelaksanaan.</li>
			</ol>
		</div>
		<div class="card" style="padding: 20px">
			<h5 class="teal-text"><strong>Progress Rekomendasi</strong></h5>
			<p>12/15 Kecamatan Berhasil Dilakukan Fogging</p>
			 <div class="progress" style="height: 21px">
      <div class="determinate" style="width: 70%;height: 20px"></div>
  			</div>
        	
		</div>
		<div class="card" style="padding: 20px">
			<h5 class="teal-text"><strong>Data Fogging Kecamatan</strong></h5>
			<table class="stripped">
				<thead>
					<tr>
						<th>Nama Kecamatan</th>
						<th>Status Fogging</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Kebayoran Baru</td>
						<td>Sudah</td>
						<td><a href="#" class="btn">Edit</a></td>
					</tr>
					<tr>
						<td>Kebayoran Lama</td>
						<td>Sudah</td>
						<td><a href="#" class="btn">Edit</a></td>
					</tr>
					<tr>
						<td>Tebet</td>
						<td>Sudah</td>
						<td><a href="#" class="btn">Edit</a></td>			
					</tr>
					<tr>
						<td>Jagakarsa</td>
						<td>Sudah</td>
						<td><a href="#" class="btn">Edit</a></td>
					</tr>
					<tr>
						<td>Cilandak</td>
						<td>Sudah</td>
						<td><a href="#" class="btn">Edit</a></td>

					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop