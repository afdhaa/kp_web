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
              <h3 class="box-title">Input Soal</h3>
            </div>
						<div class="box-header with-border">
              <a class="btn btn-success" href=<?php echo base_url('inputquiz/tambah'); ?> >Tambah Soal</a>
            </div>

							<?php
								if ($this->session->flashdata('hapus')) {
									echo "<div class='box-header with-border'>";
									echo "<div class='msg alert bg-danger'>".$this->session->flashdata('hapus')."</div>";
									echo "</div>";
								}
								if ($this->session->flashdata('sukses')) {
									echo "<div class='box-header with-border'>";
									echo "<div class='msg alert bg-success'>".$this->session->flashdata('sukses')."</div>";
									echo "</div>";
								}
								if ($this->session->flashdata('edit')) {
									echo "<div class='box-header with-border'>";
									echo "<div class='msg alert bg-success'>".$this->session->flashdata('edit')."</div>";
									echo "</div>";
								}
							?>


            <!-- /.box-header -->

            <div class="box-body">
							<table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
									<th>Soal</th>
                  <th>Pil A</th>
									<th>Pil B</th>
									<th>Piln C</th>
									<th>Pil D</th>
                  <th>Kategori</th>
									<th>Jawaban</th>
									<th>Action</th>
									<th>Action</th>
                </tr>
                </thead>
                <tbody>

									<?php $no=1; ?>
									<?php foreach ($quiz as $key => $value): ?>
										<tr>
											<td><?php echo $no;?></td>
											<td><?php echo $value->soal; ?></td>
											<td><?php echo $value->pil_a; ?></td>
											<td><?php echo $value->pil_b; ?></td>
											<td><?php echo $value->pil_c; ?></td>
											<td><?php echo $value->pil_d; ?></td>
											<td><?php echo $value->kategori; ?></td>
											<td><?php echo $value->jawaban; ?></td>
											<td><a class="btn btn-success" href="<?php echo base_url('inputquiz/edit/'.$value->kd_quiz) ?>">Edit</a></td>
											<td><a class="btn btn-danger" href="<?php echo base_url('inputquiz/hapus/'.$value->kd_quiz) ?>" onclick="return confirm('Are you sure?')">Hapus</a></td>
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
