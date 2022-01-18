<div class="container">     
	<center>         
		<table>             
			<tr>
			<td>                     
				<div class="table-responsive full-width">                         
					<table class="table table-bordered table-striped tablehover" id="table-datatable">
						<tr>                                 
						<th>No.</th>                                 
						<th>Buku</th>                                 
						<th>Penulis</th>                                 
						<th>penerbit</th>                                 
						<th>Tahun</th>                                 
						<th>Pilihan</th>                             
					</tr>                             
					<?php                             
					$no = 1;                             
					foreach ($temp as $t) {                             
						?>                                 
						<tr>                                     
							<td><?= $no; ?></td>                                     
							<td>                                         
								<img src="<?= base_url('assets/img/upload /' . $t['image']); ?>" class="rounded" alt="No Picture" width="10%">                                     
							</td>                                     
							<td nowrap><?= $t['penulis']; ?></td>                                     
							<td nowrap><?= $t['penerbit']; ?></td>                                     
							<td nowrap><?= substr($t['tahun_terbit'], 0, 4); ?></td>                                     
							<td nowrap>                                         
								<a href="<?= base_url('booking/hapusbooking/' . $t['id_buku']); ?>" onclick="return_konfirm('Yakin tidak Jadi Booking'. $t['judul_buku'])"><i class="btn btn-sm btn-outline-danger fas fw fatrash">
									<svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
										<path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
									</svg></i></a>                                     
							</td>                                 
						</tr>                             
						<?php $no++;                             
					} ?>                         
				</table>                     
			</div>                 
		</td>             
	</tr>             
	<tr>                 
		<td colspan="3">                     
			<hr>                 
		</td>             
	</tr>             
	<tr>
	<td colspan="3">                     
		<a class="btn btn-sm btn-outline-primary" href="<?php echo base_url(); ?>"><span class="fas fw faplay"><svg class="bi bi-play-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 010 1.393z"/>
</svg></span> Lanjutkan Booking Buku</a>                     
		<a class="btn btn-sm btn-outline-success" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>"><span class="fas fw fastop"><svg class="bi bi-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <rect width="16" height="16" rx="2"/>
</svg></span> Selesaikan Booking</a>                 
	</td>             
</tr>         
</table>     
</center>
</div>  