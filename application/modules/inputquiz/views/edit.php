<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tambah Materi
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-book"></i> Input Materi</a></li>
			<li class="active">Tambah Materi</li>
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
            <!-- /.box-header -->

            <div class="box-body">
              <form class="" action="<?php echo base_url('inputquiz/prosesedit') ?>" method="post" enctype="multipart/form-data">
                <?php

                ?>
                <div class="form-group">
                  <label>Soal</label>
                  <input type="text" class="form-control" name="soal" placeholder="Masukkan soal" value="<?php echo $quiz[0]->soal ?>" required>
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kategori">
                    <?php foreach ($kategori as $key => $value): ?>
                      <option  value="<?php echo $value->kd_kategori ?>"><?php echo $value->kategori ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
								<div class="form-group">
                  <label>Pilihan A</label>
									<input type="hidden" class="form-control" name="kd_quiz" placeholder="Masukkan pilhan" value="<?php echo $quiz[0]->kd_quiz ?>" required>
                  <input type="text" class="form-control" name="a" placeholder="Masukkan pilhan" value="<?php echo $quiz[0]->pil_a ?>" required>
                </div>
								<div class="form-group">
                  <label>Pilihan B</label>
                  <input type="text" class="form-control" name="b" placeholder="Masukkan pilhan" value="<?php echo $quiz[0]->pil_b ?>" required>
                </div>
								<div class="form-group">
                  <label>Pilihan C</label>
                  <input type="text" class="form-control" name="c" placeholder="Masukkan pilhan" value="<?php echo $quiz[0]->pil_c ?>" required>
                </div>
								<div class="form-group">
                  <label>Pilihan D</label>
                  <input type="text" class="form-control" name="d" placeholder="Masukkan pilhan" value="<?php echo $quiz[0]->pil_d ?>" required>
                </div>
								<div class="form-group">
                  <label>Jawaban</label>
                  <input type="text" class="form-control" name="jawaban" placeholder="Masukkan Jawaban" value="<?php echo $quiz[0]->jawaban ?>" required>
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Simpan">
                  </input>
                </div>
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
