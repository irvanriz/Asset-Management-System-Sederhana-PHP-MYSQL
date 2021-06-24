<?php
	include('tema/header.php');
?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Asset</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="col">
					<a href="tambah_asset.php">
						<button type="button" class="btn btn-outline-primary px-5">Tambah Data</button>
					</a>
				</div>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Kategori</th>
										<th>Nama Barang</th>
										<th>Serial Number</th>
										<th>No Asset</th>
										<th>Nama User</th>
										<th>Divisi</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										include 'koneksi.php';
										$halaman = 25;
										$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
										$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
										//$query = mysqli_query("SELECT * FROM kategori LIMIT $mulai, $halaman");

										$sql1 = "SELECT * FROM asset group by id desc";
										$result = mysqli_query($link, $sql1);
										$total = mysqli_num_rows($result);

										$pages = ceil($total/$halaman);       

										$sql2 = "select asset.id, kategori.kategori, nama_barang, serial_number, nomor_asset, nama_user, divisi.divisi, status from asset INNER JOIN kategori on asset.id_kategori = kategori.id INNER JOIN divisi ON asset.id_divisi = divisi.id group by asset.id desc LIMIT $mulai, $halaman";
										$query = mysqli_query($link, $sql2);
										$no =$mulai+1;


										while ($mas = mysqli_fetch_array($query)) {
									?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $mas['kategori'] ?></td>
										<td><?php echo $mas['nama_barang'] ?></td>
										<td><?php echo $mas['serial_number'] ?></td>
										<td><?php echo $mas['nomor_asset'] ?></td>
										<td><?php echo $mas['nama_user'] ?></td>
										<td><?php echo $mas['divisi'] ?></td>
										<td><?php echo $mas['status'] ?></td>
										<td width="10%">
						                    <div class="col">
						                    	<a href="ubah_asset.php?id=<?php echo $mas['id'] ?>">
													<button type="button" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ubah Data"><i class='bx bx-message-edit me-0'></i></button>
												</a>
												<a href="transfer_asset.php?id=<?php echo $mas['id'] ?>">
													<button type="button" class="btn btn-outline-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Transfer Data"><i class='bx bx-transfer me-0'></i></button>
												</a>
												<a href="history_asset.php?nomor_asset=<?php echo $mas['nomor_asset'] ?>">
													<button type="button" class="btn btn-outline-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="History Data"><i class='bx bx-history me-0'></i></button>
												</a>
											</div>
					                  	</td>
									</tr>
									<?php               
										} 
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
<?php
	include('tema/footer.php');
?>