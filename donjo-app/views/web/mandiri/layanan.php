<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script>
	$(document).ready(function() {
		$('#list-rekam').DataTable({
			'pageLength' : 10,
			'language': {
				'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
				}
		});
	})
</script>
<div class="box-header with-border">
	<span style="font-size: x-large"><strong>DAFTAR REKAM CETAK SURAT</strong></span>
</div>
<div class="box-body">
	<table class="table table-striped" id="list-rekam">
		<thead>
			<tr>
				<th>No</th>
				<th align="left">Nomor Surat</th>
				<th align="left">Jenis Surat</th>
				<th align="left">Nama Staf</th>
				<th align="left">Tanggal</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($surat_keluar as $data): ?>
				<tr>
					<td align="center" width="2"><?php echo $data['no']?></td>
					<td><?php echo $data['no_surat']?></td>
					<td><?php echo $data['format']?></td>
					<td><?php echo $data['pamong']?></td>
					<td><?php echo tgl_indo2($data['tanggal'])?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<div class="teks">
		<?php //$this->load->view('surat/signature.php');?>
	</div>
</div>