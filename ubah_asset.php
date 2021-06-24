<?php
	include('tema/header.php');
	include('koneksi.php');
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
								<li class="breadcrumb-item active" aria-current="page">Ubah Data Asset</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5 class="mb-0 text-info">Ubah Data Asset</h5>
									</div>
									<hr/>
									<?php 
										include "koneksi.php";
										$id = $_GET['id'];
										$query = "select asset.id, kategori.kategori, nama_barang, serial_number, nomor_asset, nama_user, divisi.divisi, status from asset INNER JOIN kategori on asset.id_kategori = kategori.id INNER JOIN divisi ON asset.id_divisi = divisi.id WHERE asset.id='$id'" or die(mysql_error());
										$result = mysqli_query($link, $query);
										$nomor = 1;
										while($data = mysqli_fetch_array($result)){
									?>
									<form action="aksi\asset\ubah.php" method="POST">
										<div class="row mb-3">
											<label for="inputEnterYourName" class="col-sm-3 col-form-label">Kategori</label>
											<div class="col-sm-9">
												<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
												<input type="text" name="id_kategori" class="form-control" id="inputPhoneNo2" value="<?php echo $data['kategori'] ?>" readonly>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Nama Barang</label>
											<div class="col-sm-9">
												<input type="text" name="nama_barang" class="form-control" id="inputPhoneNo2" value="<?php echo $data['nama_barang'] ?>" readonly>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Serial Number</label>
											<div class="col-sm-9">
												<input type="text" name="serial_number" class="form-control" id="inputEmailAddress2" value="<?php echo $data['serial_number'] ?>" readonly>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Nomor Asset</label>
											<div class="col-sm-9">
												<input type="text" name="nomor_asset" class="form-control" id="inputChoosePassword2" value="<?php echo $data['nomor_asset'] ?>" readonly>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Nama User</label>
											<div class="col-sm-9">
												<input type="text" name="nama_user" class="form-control" id="inputConfirmPassword2" value="<?php echo $data['nama_user'] ?>" readonly>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputAddress4" class="col-sm-3 col-form-label">Divisi User</label>
											<div class="col-sm-9">
												<input type="text" name="id_divisi" class="form-control" id="inputConfirmPassword2" value="<?php echo $data['divisi'] ?>" readonly>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
											<div class="col-sm-9">
												<select name="status" class="form-control" required>
													<option value="<?php echo $data['status'] ?>"> <?php echo $data['status'] ?> </option>
													<option value="Tidak Aktif">Tidak Aktif</option>
													<option value="Rusak">Rusak</option>
													<option value="Kadaluarsa">Kadaluarsa</option>
												</select>
											</div>
										</div>
										<div class="row">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<button type="submit" name="submit" class="btn btn-outline-primary px-5">Simpan</button>
											</div>
										</div>
									</form>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

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