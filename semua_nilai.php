<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Administrator | Ubharajaya</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link rel='shortcut icon' href='favicon.ico' />
	<link rel='stylesheet' href='dist/bootstrap/css/bootstrap.min.css' />

	<link rel='stylesheet' href='plugins/fontawesome/css/all.css' />
	<link rel='stylesheet' href='plugins/select2/select2.min.css' />
	<link rel='stylesheet' href='dist/css/AdminLTE.css' />
	<link rel='stylesheet' href='dist/css/skins/skin-green-light.min.css' />
	<link rel='stylesheet' href='plugins/jQueryUI/jquery-ui.css'>
	<link rel='stylesheet' href='plugins/iCheck/square/green.css' />
	<link rel='stylesheet' href='plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'>
	<link rel='stylesheet' href='plugins/datatables/dataTables.bootstrap.css' />
	<link rel='stylesheet' href='plugins/datatables/extensions/Responsive/css/dataTables.responsive.css' />
	<link rel='stylesheet' href='plugins/datatables/extensions/Select/css/select.bootstrap.css' />
	<link rel='stylesheet' href='plugins/animate/animate.min.css'>
	<link rel='stylesheet' href='plugins/datetimepicker/jquery.datetimepicker.css' />
	<link rel='stylesheet' href='plugins/notify/css/notify-flat.css' />
	<link rel='stylesheet' href='plugins/sweetalert2/dist/sweetalert2.min.css'>
	<link rel='stylesheet' href='plugins/toastr/toastr.min.css'>
	<link rel='stylesheet' href='dist/css/costum.css' />
	<script src='plugins/tinymce/tinymce.min.js'></script>
	<script src='plugins/jQuery/jquery-3.1.1.min.js'></script>
	<script src='plugins/datatables/jquery.dataTables.min.js'></script>
	<script src='plugins/datatables/dataTables.bootstrap.min.js'></script>
	<script src='plugins/datatables/extensions/Select/js/dataTables.select.min.js'></script>
	<script src='plugins/datatables/extensions/Select/js/select.bootstrap.min.js'></script>

	<!-- <style type='text/css' media='print'>
		.page {
			-webkit-transform: rotate(-90deg);
			-moz-transform: rotate(-90deg);
			filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=3)';
		}
	</style> -->
</head>

<body class='hold-transition skin-green-light sidebar-mini fixed '>
	<div id='pesan'></div>
	<div class='loader'></div>
	<div class='wrapper'>
		<header class='main-header'>
			<a href='?' class='logo' style='background-color:#f9fafc'>
				<span class='animated bounce logo-mini'>
					<img src="dist//img/logoaplikasi.png" height="30px">
				</span>
				<span class='animated bounce logo-lg'>
					<img src="dist//img/logoaplikasi.png" height="40px"> Ubharajaya</span>
			</a>
			<nav class='navbar navbar-static-top' style='background-color:#778899;box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.1)' role='navigation'>
				<a href='#' class='sidebar-baru' data-toggle='offcanvas' role='button'>
					<i class="fa fa-bars fa-lg fa-fw"></i>
				</a>
				<div class='navbar-custom-menu'>
					<ul class='nav navbar-nav'>
						<li class='dropdown user user-menu'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
								<img src='dist/img/avatar-6.png' class='user-image' alt='+'>
								<span class='hidden-xs'>Administrator &nbsp; <i class='fa fa-caret-down'></i></span>
							</a>
							<ul class='dropdown-menu'>
								<li class='user-header'>
									<img src='dist/img/avatar-6.png' class='img-circle' alt='User Image'>									<p>Administrator<small>NIP. -</small>
									</p>
								</li>
								<li class='user-footer'>
									<div class='pull-left'>
										<a href='?pg=pengaturan' class='btn btn-sm btn-default btn-flat'><i class='fa fa-gear'></i> Pengaturan</a>									</div>
									<div class='pull-right'>
										<a href='logout.php' class='btn btn-sm btn-default btn-flat'><i class='fa fa-sign-out'></i> Keluar</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
		</header>

		<aside class='main-sidebar'>
			<section class='sidebar'>

				<hr style="margin:0px">
				<div class="user-panel" style="text-align:center">
					<span>APLIKASI UJIAN ONLINE</span><br>
				</div>
				<hr style="margin:0px">
				<ul class=' sidebar-menu tree data-widget=' tree>

					<li class="header">MENU UTAMA</li>
					<li><a href='beranda.php'><i class="fas fa-home fa-2x fa-fw    "></i> <span>Beranda</span></a></li>
																							<li class=' treeview'>
								<a href='#'>
									<i class="fas fa-2x fa-fw fa-toolbox    "></i>
									<span>Data Master</span>
									<span class='pull-right-container'>
										<i class='fa fa-angle-down pull-right'></i>
									</span>
								</a>
								<ul class='treeview-menu'>
									<li><a href='data_mata_pelajaran.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Mata Pelajaran</span></a></li>
									<li><a href='Data_Guru.php'><i class='fas fa-dot-circle fa-fw'></i> <span>Data Guru</span></a></li>
									<li><a href='data_kelas.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Kelas</span></a></li>
									<li><a href='data_siswa.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Siswa</span></a></li>
								</ul>
							</li>
						<li class='treeview'>
							<a href='#'><i class="fas fa-file-signature   fa-2x fa-fw"></i><span> Nilai Siswa </span><span class='pull-right-container'> <i class='fa fa-angle-down pull-right'></i> </span></a>
							<ul class='treeview-menu'>
								<!-- <li><a href='?pg=nilai'><i class='fas fa-dot-circle fa-fw'></i> <span> Hasil Nilai</span></a></li> -->
								<li><a href='semua_nilai.php'><i class='fas fa-dot-circle fa-fw'></i> <span>Semua Nilai</span></a></li>
								<li><a href='data_ujian.php'><i class='fas fa-dot-circle fa-fw'></i> <span>Data Ujian</span></a></li>
							</ul>
						</li>
						<li class='treeview'>
							<a href='#'><i class="fas fa-print   fa-2x fa-fw"></i><span> Cetak </span><span class='pull-right-container'> <i class='fa fa-angle-down pull-right'></i> </span></a>
							<ul class='treeview-menu'>
								<li><a href='?pg=kartu'><i class='fas fa-dot-circle fa-fw'></i> <span> Cetak Nilai</span></a></li>
							</ul>
						</li>
                    <hr style="margin:0px">
				    </ul><!-- /.sidebar-menu -->
			</section>
		</aside>

		<div class='content-wrapper' style='background-image: url(backgroun.jpg);background-size: cover;Background-color:#808080;'>
			<section class='content-header' style="height:102px;z-index:0;background:#778899">
				<h1 style='text-shadow: 2px 2px 4px #827e7e;color:#fff'>
					&nbsp;
				</h1>
				<div style='float:right; margin-top:-37px'>
					<button class='btn  btn-flat  bg-purple'><i class='fa fa-calendar'></i> Senin, 13 April 2020</button>
					<button class='btn  btn-flat  bg-maroon'><span id='waktu'>18:08:08</span></button>
				</div>
				<div class='breadcrumb'></div>
			</section>
			<section class='content' style="margin-top:-65px">
														<div class='row'>
						<div class='col-md-12'></div>
						<div class='col-md-12'>
							<div class='box box-solid'>
								<div class='box-header with-border'>
									<h3 class='box-title'>Data Siswa</h3>
									<div class='box-tools pull-right '>
										<button class='btn btn-sm btn-flat btn-success' data-toggle='modal' data-target='#tambahmapel'><i class='fa fa-check'></i> Tambah Data Siswa</button>
										<button class='btn btn-sm btn-flat btn-success' data-toggle='modal' data-target='#importmapel'><i class='fa fa-upload'></i> Import Data Siswa</button>
									</div>
								</div><!-- /.box-header -->
								<div class='box-body'>
									<div class='table-responsive'>
										<table id='tablenilai' class='table table-bordered table-striped'>
										<tr style="background-color:#778899;">
											<th>No</th>
											<th>ID nilai</th>
											<th>Nis</th>
											<th>ID Matpel</th>
											<th>ID Kelas</th>
											<th>ID Guru</th>
											<th>Tahun ajaran</th>
											<th>Semester</th>
											<th>Nilai Harian 1</th>
											<th>Nilai Harian 2</th>
											<th>Nilai Harian 3</th>
											<th>Nilai Tugas 1</th>
											<th>Nilai Tugas 2</th>
											<th>Nilai Uts</th>
											<th>Nilai Uas</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Tanggal Diubah</th>
										</tr>
										<?php
										include 'koneksi.php';
										include './Connetion/post_semuanilai.php';
										$no = 1;
										$matpel = mysqli_query($koneksi, "SELECT * FROM mmatpel");
										$siswa = mysqli_query($koneksi, "SELECT * FROM msiswa");
										$kelas = mysqli_query($koneksi, "SELECT * FROM mkelas");
										$guru = mysqli_query($koneksi, "SELECT * FROM mguru");
										$tajar = mysqli_query($koneksi, "SELECT * FROM mtahun_ajaran");
										$semester = mysqli_query($koneksi, "SELECT * FROM msemester");
										$data = mysqli_query($koneksi,"select * from tnilai_siswa");
										while($d = mysqli_fetch_array($data)){
											?>
										<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $d['id_nilai_siswa']; ?></td>
										<td><?php echo $d['nis']; ?></td>
										<td><?php echo $d['id_matpel']; ?></td>
										<td><?php echo $d['id_kelas']; ?></td>
										<td><?php echo $d['id_guru']; ?></td>
										<td><?php echo $d['id_tahun_ajaran']; ?></td>
										<td><?php echo $d['id_semester']; ?></td>
										<td><?php echo $d['nilai_harian1']; ?></td>
										<td><?php echo $d['nilaiharian2']; ?></td>
										<td><?php echo $d['nilaiharian3'];?></td>
										<td><?php echo $d['nilai_tugas1']; ?></td>
										<td><?php echo $d['nilai_tugas2']; ?></td>
										<td><?php echo $d['nilai_uts']; ?></td>
										<td><?php echo $d['nilai_uas']; ?></td>
										<td hidden><?php echo $d['id_nilai_siswa'];?></td>
										<td hidden><?php echo $d['id_nilai_siswa'];?></td>
										<td><?php echo $d['created_at']; ?></td>
										<td><?php echo $d['updated_at']; ?></td>
											</tr>
											<?php
										}
										?>
									</table>
									</div>
								</div><!-- /.box-body -->
							</div><!-- /.box -->
						</div>
						<div class='modal fade' id='tambahmapel' style='display: none;'>
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header bg-red'>
										<button class='close' data-dismiss='modal'><span aria-hidden='true'><i class='glyphicon glyphicon-remove'></i></span></button>
										<h3 class='modal-title'>Tambah Data Siswa</h3>
									</div>
									<div class='modal-body'>
										<form action='' method='post'>
											<div class='form-group'>
												<label>Nis</label>
												<select name="nis" id="nis" class="form-control" required='true'>
													<?php 
														while($s = mysqli_fetch_array($siswa)){
													 ?>
														<option value="<?php echo $s['nis']; ?>"><?php echo $s['nama_siswa']; ?></option>
													 <?php 
													 	};
													 ?>
												</select>
											</div>
                                            <div class='form-group'>
												<label>ID Matpel</label>
												<select name="idmatpel" id="" class="form-control" required='true'>
													<?php 
														while($m = mysqli_fetch_array($matpel)){
													 ?>
														<option value="<?php echo $m['id_matpel']; ?>"><?php echo $m['nama_matpel']; ?></option>
													 <?php 
													 	};
													 ?>
												</select>
											</div>
											<div class='form-group'>
												<label>ID Kelas</label>
												<select name="idkelas" id="idkelas" class="form-control" required='true'>
													<?php 
														while($k = mysqli_fetch_array($kelas)){
													 ?>
														<option value="<?php echo $k['id_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
													 <?php 
													 	};
													 ?>
												</select>
											</div>
											<div class='form-group'>
												<label>ID Guru</label>
												<select name="idguru" id="idguru" class="form-control" required='true'>
													<?php 
														while($g = mysqli_fetch_array($guru)){
													 ?>
														<option value="<?php echo $g['id_guru']; ?>"><?php echo $g['nama_guru']; ?></option>
													 <?php 
													 	};
													 ?>
												</select>
											</div>
											<div class='form-group'>
												<label>Tahun Ajaran</label>
												<select name="tajar" id="tajar" class="form-control" required='true'>
													<?php 
														while($s = mysqli_fetch_array($tajar)){
													 ?>
														<option value="<?php echo $s['id_tahun_ajaran']; ?>"><?php echo $s['nama_tahun_ajaran']; ?></option>
													 <?php 
													 	};
													 ?>
												</select>
											</div>
											<div class='form-group'>
												<label>Semester</label>
												<select name="semester" id="semester" class="form-control" required='true'>
													<?php 
														while($s = mysqli_fetch_array($semester)){
													 ?>
														<option value="<?php echo $s['id_semester']; ?>"><?php echo $s['nama_semester']; ?></option>
													 <?php 
													 	};
													 ?>
												</select>
											</div>
                                            <div class='form-group'>
												<label>Nilai Harian 1</label>
												<input type='text' name='nharian1' class='form-control' required='true' />
											</div>
											<div class='form-group'>
												<label>Nilai Harian 2</label>
												<input type="text" name='nharian2' class='form-control' required='true' />
											</div>
											<div class='form-group'>
												<label>Nilai Harian 3</label>
												<input type='text' name='nharian3' class='form-control' required='true' />
											</div>
											<div class='form-group'>
												<label>Nilai Tugas 1</label>
												<input type='text' name='ntugas1' class='form-control' required='true' />
											</div>
											<div class='form-group'>
												<label>Nilai Tugas 2</label>
												<input type='text' name='ntugas2' class='form-control' required='true' />
											</div>
											<div class='form-group'>
												<label>Nilai Uts</label>
												<input type='text' name='nuts' class='form-control' required='true' />
											</div>
											<div class='form-group'>
												<label>Nilai Uas</label>
												<input type='text' name='nuas' class='form-control' required='true' />
											</div>           
											<div class='modal-footer'>
												<div class='box-tools pull-right'>
													<button type='submit' name='simpannilai' class='btn btn-sm btn-flat btn-success'><i class='fa fa-check'></i> Simpan</button>
													<button type='button' class='btn btn-default btn-sm pull-left' data-dismiss='modal'>Close</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class='modal fade' id='importmapel' style='display: none;'>
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header bg-red'>
										<button class='close' data-dismiss='modal'><span aria-hidden='true'><i class='glyphicon glyphicon-remove'></i></span></button>
										<h3 class='modal-title'>Tambah Data Siswa</h3>
									</div>
									<div class='modal-body'>
										<form action='' method='post' enctype='multipart/form-data'>
											<div class='form-group'>
												<label>Pilih File</label>
												<input type='file' name='file' class='form-control' required='true' />
											</div>
											<p>
												Sebelum meng-import pastikan file yang akan anda import sudah dalam bentuk Ms. Excel 97-2003 Workbook (.xls) dan format penulisan harus sesuai dengan yang telah ditentukan. <br />
											</p>

											<a href='importdatamapel.xls'><i class='fa fa-file-excel-o'></i> Download Format</a>

											<div class='modal-footer'>
												<div class='box-tools pull-right '>
													<button type='submit' name='importmapel' class='btn btn-sm btn-flat btn-success'><i class='fa fa-upload'></i> Simpan</button>
													<button type='button' class='btn btn-default btn-sm pull-left' data-dismiss='modal'>Close</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
							</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		<footer class='main-footer hidden-xs'></footer>
			<div class='container'>
				<div class='pull-left hidden-xs'>
					<strong>
						<span id='end-sidebar'>
							&copy; 2021 UBHARA JAYA 2021</span>
					</strong>
				</div>
	</div><!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->
	<script src='dist/bootstrap/js/bootstrap.min.js'></script>
	<script src='plugins/fastclick/fastclick.js'></script>
	<script src='dist/js/adminlte.min.js'></script>
	<script src='dist/js/app.min.js'></script>
	<script src='plugins/datetimepicker/build/jquery.datetimepicker.full.min.js'></script>

	<script src='plugins/slimScroll/jquery.slimscroll.min.js'></script>


	<script src='plugins/iCheck/icheck.min.js'></script>
	<script src='plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'></script>
	<script src='plugins/select2/select2.min.js'></script>
	<script src='plugins/tableedit/jquery.tabledit.js'></script>
	<script src='plugins/toastr/toastr.min.js'></script>
	<script src='plugins/notify/js/notify.js'></script>
	<script src='plugins/sweetalert2/dist/sweetalert2.min.js'></script>
	<script src='plugins/MathJax-2.7.3/MathJax.js?config=TeX-AMS_HTML-full'></script>

	<script>
		// edit####
			$(document).ready(function() {
				$('#tablenilai').Tabledit({
					url: './Connetion/updel_semuanilai.php',
					dataType: "json",
					restoreButton: false,
					columns: {
						identifier:[16, 'identifier'],
						editable: [
							[1, 'id_nilai_siswa'],
							[2, 'nis'],
							[3, 'idmatpel'],
							[4, 'idkelas'],
							[5, 'idguru'],
							[6, 'tajar'],
							[7, 'semester'],
							[8, 'nharian1'],
							[9, 'nharian2'],
							[10, 'nharian3'],
							[11, 'ntugas1'],
							[12, 'ntugas2'],
							[13, 'nuts'],
							[14, 'nuas'],
							[15, 'identifier']
						]
					},
					onSuccess: function (data, textStatus, jqXHR) {
						if (data.action == "delete") {
							$("#" + data.id).remove();
							$("#tablenilai").DataTable().ajax.reload();
						}
                    }
				});
			  });
	</script>

	<script>
		$('.loader').fadeOut('slow');
		$(function() {
			$('#textarea').wysihtml5()
		});
		var autoRefresh = setInterval(
			function() {
				// $('#waktu').load('admin/_load.php?pg=waktu');
				$('#log-list').load('admin/_load.php?pg=log');
				$('#pengumuman').load('admin/_load.php?pg=pengumuman');
			}, 1000
		);
				var autoRefresh = setInterval(
			function() {
				$('#isi_token').load('admin/_load.php?pg=token');
			}, 900000
		);

		$('.datepicker').datetimepicker({
			timepicker: false,
			format: 'Y-m-d'
		});
		$('.tgl').datetimepicker();
		$('.timer').datetimepicker({
			datepicker: false,
			format: 'H:i'
		});

		$(function() {
			$('#jenis').change(function() {
				if ($('#jenis').val() == '2') {
					$('#jawabanpg').hide();
					$('input:radio[name=jawaban]').attr('disabled', true);
				} else {
					$('#jawabanpg').show();
					$('input:radio[name=jawaban]').attr('disabled', false);
				}
			});
		});

		function printkartu(idkelas, judul) {
			$('#loadframe').attr('src', 'kartu.php?id_kelas=' + idkelas);
		}

		function printabsen() {
			var idsesi = $('#absensesi option:selected').val();
			var idmapel = $('#absenmapel option:selected').val();
			var idruang = $('#absenruang option:selected').val();
			var idkelas = $('#absenkelas option:selected').val();
			$('#loadabsen').attr('src', 'absen.php?id_sesi=' + idsesi + '&id_ruang=' + idruang + '&id_mapel=' + idmapel + '&id_kelas=' + idkelas);
		}

		function iCheckform() {
			$('input[type=checkbox].flat-check, input[type=radio].flat-check').iCheck({
				checkboxClass: 'icheckbox_square-green',
				radioClass: 'iradio_square-green',
				increaseArea: '20%' // optional
			});
		}

		$(document).ready(function() {
			$('#example1').DataTable({
				select: true
			});
			$('#soalpg').keyup(function() {
				$('#tampilpg').val(this.value);
			});
			$('#soalesai').keyup(function() {
				$('#tampilesai').val(this.value);
			});
			$('#formsoal').submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: 'POST',
					url: 'simpansoal.php',
					enctype: 'multipart/form-data',
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {

					},
					success: function(data) {
						toastr.success('soal berhasil disimpan');
					}
				})
				return false;
			});
			$('#ceksemua').change(function() {
				$(this).parents('#tablereset:eq(0)').
				find(':checkbox').attr('checked', this.checked);
			});

			$('.idkel').change(function() {
				var thisval = $(this).val();
				var txt_id = $(this).attr('id').replace('me', 'txt');
				var idm = $('#' + txt_id).val();
				var idu = $('#iduj').val();
				console.log(thisval + idm);
				$('.linknilai').attr('href', '?pg=nilai&ac=lihat&idu=' + idu + '&idm=' + idm + '&idk=' + thisval);
			});
			$('.alert-dismissible').fadeTo(2000, 500).slideUp(500, function() {
				$('.alert-dismissible').alert('close');
			});
			$('.select2').select2();

			$('input:checkbox[name=masuksemua]').click(function() {
				if ($(this).is(':checked'))
					$('input:radio.absensi').attr('checked', 'checked');
				else
					$('input:radio.absensi').removeAttr('checked');
			});
			iCheckform()
			$('#btnbackup').click(function() {
				$('.notif').load('backup.php');
				console.log('sukses');
			});
			$('#mastersoal').click(function() {
				var mapel_id = $('#mapel_id').val();
				$('.notif_mapel').load('backup_excel.php?mapel_id=' + mapel_id);
				console.log('sukses');
			});
		});
	</script>
	<script>
		function kirim_form() {
			var homeurl;
			homeurl = 'http://localhost:8080/soal_UAS_namakamu2021genap';
			var jawab = $('#headerkartu').val();
			$.ajax({
				type: 'POST',
				url: 'simpanheader.php',
				data: 'jawab=' + jawab,
				success: function(response) {
					location.reload();
				}
			});
		}
	</script>

	<script type="text/javascript">
		var url = window.location;
		// for sidebar menu entirely but not cover treeview
		$('ul.sidebar-menu a').filter(function() {
			return this.href == url;
		}).parent().addClass('active');

		// for treeview
		$('ul.treeview-menu a').filter(function() {
			return this.href == url;
		}).closest('.treeview').addClass('active');
	</script>

	<script>
		$(function() {
			$("#btnresetlogin").click(function() {
				id_array = new Array();
				i = 0;
				$("input.cekpilih:checked").each(function() {
					id_array[i] = $(this).val();
					i++;
				});
				$.ajax({
					url: "resetlogin.php",
					data: "kode=" + id_array,
					type: "POST",
					success: function(respon) {
						if (respon == 1) {
							$("input.cekpilih:checked").each(function() {
								$(this).parent().parent().remove('.cekpilih').animate({
									opacity: "hide"
								}, "slow");
							})
						}
					}
				});
				return false;
			})
		});
		$(function() {
			$("#btnhapusbank").click(function() {
				i = 0;
				id_array = new Array();
				$("input.cekpilih:checked").each(function() {
					id_array[i] = $(this).val();
					i++;
				});
				swal({
					title: 'Bank Soal Terpilih ' + i,
					text: 'Apakah kamu yakin akan menghapus data bank soal yang sudah dipilih  ini ??',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Hapus!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: 'hapusbanksoal.php',
							data: "kode=" + id_array,
							type: "POST",
							success: function(respon) {
								if (respon == 1) {
									$("input.cekpilih:checked").each(function() {
										$(this).parent().parent().remove('.cekpilih').animate({
											opacity: "hide"
										}, "slow");
									})
								}
							}
						})
					}
				});
				return false;
			})
		});
		$(function() {
			$("#btnhapusjadwal").click(function() {
				id_array = new Array();
				i = 0;
				$("input.cekpilih:checked").each(function() {
					id_array[i] = $(this).val();
					i++;
				})
				swal({
					title: 'Jadwal Terpilih ' + i,
					text: 'Apakah kamu yakin akan menghapus data jadwal yang sudah dipilih ini ??',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Hapus!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: 'hapusjadwal.php',
							data: "kode=" + id_array,
							type: "POST",
							success: function(respon) {
								if (respon == 1) {
									$("input.cekpilih:checked").each(function() {
										$(this).parent().parent().remove('.cekpilih').animate({
											opacity: "hide"
										}, "slow");
									})
								}
							}
						})
					}
				});
				return false;
			})

			$("#btnserver").click(function() {

				swal({
					title: 'Ganti Status Server ',
					text: 'Apakah kamu yakin akan mengganti status server ini ??',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Ganti'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: 'gantiserver.php',
							type: "POST",
							success: function(respon) {
								location.reload();
							}
						})
					}
				});
				return false;
			})
		});
	</script>

	<script>
		$(function() {
			$("#buatberita").click(function() {
				swal({
					title: 'Generate Berita Acara',
					text: 'Pastikan pembuatan jadwal sudah fix ??',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Buat!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: 'buatberita.php',
							type: "POST",
							beforeSend: function() {
								$('.loader').css('display', 'block');
							},
							success: function(respon) {
								$('.loader').css('display', 'none');
								location.reload();
							}
						})
					}
				});
				return false;
			})
		});

		$(document).ready(function() {
			var messages = $('#pesan').notify({
				type: 'messages',
				removeIcon: '<i class="icon icon-remove"></i>'
			});
			$('#formreset').submit(function(e) {
				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: $(this).attr('action'),
					data: $(this).serialize(),
					success: function(data) {
						if (data == "ok") {
							messages.show("Reset Login Peserta Berhasil", {
								type: 'success',
								title: 'Berhasil',
								icon: '<i class="icon icon-check-sign"></i>'
							});
						}
						if (data == "pilihdulu") {
							swal({
								position: 'top-end',
								type: 'success',
								title: 'Data Berhasil disimpan',
								showConfirmButton: true
							});
						}
					}
				});
				return false;
			});

		});
	</script>
	<script>
		$('#formsiswa').on('submit', function(e) {
			e.preventDefault();
			$.ajax({
				type: 'post',
				url: 'import_siswa.php',
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				beforeSend: function() {
					$('#progressbox').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
					$('.progress-bar').animate({
						width: "30%"
					}, 100);
				},
				success: function(response) {
					setTimeout(function() {
						$('.progress-bar').css({
							width: "100%"
						});
						setTimeout(function() {
							$('#hasilimport').html(response);
						}, 100);
					}, 500);
				}
			});
		});
	</script>

	<script>
		$(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
			$("#absenmapel").change(function() {
				var mapel_id = $(this).val();
				console.log(mapel_id);
				$.ajax({
					type: "POST", // Method pengiriman data bisa dengan GET atau POST
					url: "dataabsen_ruang.php", // Isi dengan url/path file php yang dituju
					data: "mapel_id=" + mapel_id, // data yang akan dikirim ke file yang dituju
					success: function(response) { // Ketika proses pengiriman berhasil
						$("#absenruang").html(response);
						console.log(response);
					},
					error: function(xhr, status, error) {
						console.log(error);
					}
				});
			});

			$("#absensesi").change(function() {
				var sesi = $(this).val();
				var mapel_id = $("#absenmapel").val();
				var ruang = $("#absenruang").val();
				$.ajax({
					type: "POST", // Method pengiriman data bisa dengan GET atau POST
					url: "dataabsen_kelas.php", // Isi dengan url/path file php yang dituju
					data: "mapel_id=" + mapel_id + '&sesi=' + sesi + '&ruang=' + ruang, // data yang akan dikirim ke file yang dituju
					success: function(response) { // Ketika proses pengiriman berhasil
						$("#absenkelas").html(response);
						console.log(response);
					},
					error: function(xhr, status, error) {
						console.log(error);
					}
				});
			});

			$("#absenruang").change(function() {

				var ruang = $(this).val();
				console.log(ruang);
				$.ajax({
					type: "POST", // Method pengiriman data bisa dengan GET atau POST
					url: "dataabsen_sesi.php", // Isi dengan url/path file php yang dituju
					data: "ruang=" + ruang, // data yang akan dikirim ke file yang dituju
					success: function(response) { // Ketika proses pengiriman berhasil
						$("#absensesi").html(response);
						console.log(response);
					},
					error: function(xhr, status, error) {
						console.log(error);
					}
				});
			});

			$("#soallevel").change(function() {
				var level = $(this).val();
				console.log(level);
				$.ajax({
					type: "POST", // Method pengiriman data bisa dengan GET atau POST
					url: "datakelas.php", // Isi dengan url/path file php yang dituju
					data: "level=" + level, // data yang akan dikirim ke file yang dituju
					success: function(response) { // Ketika proses pengiriman berhasil
						$("#soalkelas").html(response);
					}
				});
			});
			$(document).on('click', '.ambiljawaban', function() {
				var idmapel = $(this).data('id');
				console.log(idmapel);
				swal({
					title: 'Are you sure?',
					text: 'Fungsi ini akan memindahkan data jawaban dari temp_jawaban ke hasil jawaban',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Ambil!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: 'POST',
							url: 'ambiljawaban.php',
							data: 'id=' + idmapel,
							beforeSend: function() {
								swal({
									text: 'Proses memindahkan',
									timer: 1000,
									onOpen: () => {
										swal.showLoading()
									}
								});
							},
							success: function(response) {
								$(this).attr('disabled', 'disabled');
								swal({
									position: 'top-end',
									type: 'success',
									title: 'Data Berhasil diambil',
									showConfirmButton: false,
									timer: 1500
								});
							}
						});
					}
				})
			});
			$(document).on('click', '.btnresetacak', function() {
				var idacak = $(this).data('id');
				var idu = $(this).data('idu');
				console.log(idacak);
				swal({
					title: 'Are you sure?',
					text: 'Fungsi ini akan mengacak kembali soal dan opsi soal',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Ambil!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: 'POST',
							url: 'resetacak.php',
							data: 'id=' + idacak + '&idu=' + idu,
							beforeSend: function() {
								swal({
									text: 'Proses memindahkan',
									timer: 1000,
									onOpen: () => {
										swal.showLoading()
									}
								});
							},
							success: function(response) {
								location.reload();

							}
						});
					}
				})
			});
		});
	</script>
</body>

</html>
