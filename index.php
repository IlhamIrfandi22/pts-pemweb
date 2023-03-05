<?php 
include 'header.php'; 

?>
<!-- button triger -->
<button type="button" class="btn btn-primary mb-3">Tambah Data</button>
<!-- button triger -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Angkatan</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<!-- Tabel data untuk menanmpilkan data hasil query database beserta tombol edit dan delete-->
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>

<!-- Modal untuk tambah data-->
<div class="modal fade" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				
			</div>
    </div>
  </div>
</div>

<!-- Modal untuk edit data-->
<div class="modal fade" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">
				<!-- form edit data dipisah ke dalam file view.php -->
			</div>
    </div>
  </div>
</div>

<script>
//script ajax
</script>

<?php 
//Proses tambah data ke dalam tabel database


//Proses hapus data pada tabel database


//Proses update data pada tabel database

?>