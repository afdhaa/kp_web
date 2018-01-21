<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Quiz
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
              <h3 class="box-title">Quiz</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
							<form class="form control" action="<?php echo base_url('Quiz/ceknilaibesar') ?>" method="post">

									<table class="table table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>No</th>
											<th>Soal</th>
											<th>Jawaban</th>
		                </tr>
		                </thead>
		                <tbody>
											<?php for ($i=0; $i < count($quiz); $i++) { ?>
											<tr>
												<input type="hidden" name="kode[]" value="<?php echo $quiz[$i]->kd_quiz ?>">
												<td ><?php echo $i+1;?></td>
												<td>
													<?php echo $quiz[$i]->soal; ?></br>
													a. <?php echo $quiz[$i]->pil_a; ?></br>
													b. <?php echo $quiz[$i]->pil_b; ?></br>
													c. <?php echo $quiz[$i]->pil_c; ?></br>
													d. <?php echo $quiz[$i]->pil_d; ?></br>
												</td>
												<td align="center"><input type="text" name="jawaban[]"></td>
											</tr>
											<?php } ?>
		                </tfoot>
		              </table>

									<input class="btn btn-success" type="submit" name="" value="Selesai">
							</form>
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
