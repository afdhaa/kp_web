<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Input Materi
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-book"></i> Admin</a></li>
			<li class="active">Materi</li>
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
              <h3 class="box-title">Input</h3>
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
							<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
									<th>Judul</th>
                  <th>Kategori</th>
									<th>Action</th>
                </tr>
                </thead>
                <tbody>

									<?php $no=1; ?>
									<?php foreach ($materi as $key => $value): ?>
										<tr>
											<td><?php echo $no;?></td>
											<td><?php echo $value->judul; ?></td>
											<!-- <td><?php echo substr(strip_tags($value->materi), 0, 120) . '...';?></td> -->
											<td><?php echo $value->kategori; ?></td>
											<td><a class="btn btn-success" href="<?php echo base_url('Materi/baca/'.$value->kd_materi.'"') ?>">Baca</a></td>
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
