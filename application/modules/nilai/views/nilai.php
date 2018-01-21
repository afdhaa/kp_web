<script src="https://code.jquery.com/jquery-1.12.4.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#example').DataTable();
} );
</script>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Input Quiz
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-book"></i> Admin</a></li>
			<li class="active">Input Soal</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<section class="col-lg-12">
				<div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-info"></i>
              <h3 class="box-title">Nilai</h3>
            </div>
						<div class="box-header with-border">
              <a class="btn btn-success" href=<?php echo base_url('inputquiz/tambah'); ?> >Tambah Soal</a>
            </div>


            <!-- /.box-header -->

            <div class="box-body">
							<table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
									<th>Kode Siswa</th>
                  <th>Nilai</th>
                </tr>
                </thead>
                <tbody>

									<?php $no=1; ?>
									<?php foreach ($nilai as $key => $value): ?>
										<tr>
											<td><?php echo $no;?></td>
											<td><?php echo $value->kd_siswa; ?></td>
											<td><?php echo $value->nilai; ?></td>

										</tr>
									<?php $no++; endforeach; ?>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
			</section>
		</div>
	</section>
	<!-- /.content -->
