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
								<li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="col">
					<a href="tambah_kategori.php">
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
										<th>Nama Kategori</th>
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

										$sql1 = "SELECT * FROM kategori group by id desc";
										$result = mysqli_query($link, $sql1);
										$total = mysqli_num_rows($result);

										$pages = ceil($total/$halaman);       

										$sql2 = "select * from kategori group by id desc LIMIT $mulai, $halaman";
										$query = mysqli_query($link, $sql2);
										$no =$mulai+1;


										while ($mas = mysqli_fetch_array($query)) {
									?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $mas['kategori'] ?></td>
										<td>
						                    <a onclick="return confirm('Anda Yakin Menghapus Data Ini?')" href="aksi/kategori/hapus.php?id=<?php echo $mas['id'] ?>">
						                    <button type="button" class="btn btn-danger" name=""> <i class="fa fa-trash"></i> Hapus</button></a>
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