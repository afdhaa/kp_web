<body class="login-page">
  <div class="login-box">
      <div class="logo">
          <a href="javascript:void(0);"><b>Login</b></a>
      </div>
      <div class="msg">Sign in to start your session</div>
      <div class="card">
          <div class="body">

              <form id="sign_in" action="<?php echo base_url('login/proses') ?>" method="POST">
                  <?php
                    if ($this->session->flashdata('error')) {
                      echo "<div class='msg alert bg-red'>".$this->session->flashdata('error')."</div>";
                    }
                  ?>

                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">person</i>
                      </span>
                      <div class="form-line">
                          <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">lock</i>
                      </span>
                      <div class="form-line">
                          <input type="password" class="form-control" name="password" placeholder="Password" required>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-4">
                          <button class="btn btn-block bg-green waves-effect" type="submit">SIGN IN</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
