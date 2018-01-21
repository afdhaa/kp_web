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
              <form class="" action="<?php echo base_url('inputmateri/prosesedit') ?>" method="post" enctype="multipart/form-data">
                <?php
                  if ($this->session->flashdata('sukses')) {
                    echo "<div class='msg alert bg-success'>".$this->session->flashdata('sukses')."</div>";
                  }
                ?>
                <div class="form-group">
									<input type="hidden" class="form-control" name="kd_materi" value="<?php echo $materi[0]->kd_materi; ?>" hidden>
                  <label>Judul</label>

                  <input type="text" class="form-control" name="judul" value="<?php echo $materi[0]->judul; ?>" required>
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kategori">
										<option  value="<?php echo $materi[0]->kd_kategori ?>"><?php echo $materi[0]->kategori ?></option>
                    <?php foreach ($kategori as $key => $value): ?>
                      <option  value="<?php echo $value->kd_kategori ?>"><?php echo $value->kategori ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <textarea id="editor1" name="materi" rows="10" cols="80" required><?php echo $materi[0]->materi ?></textarea>
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
