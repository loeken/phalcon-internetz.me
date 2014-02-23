<div class="row">
  <div class="col-lg-12">
    <h1>*.internetz.me <small>example #1</small></h1>

    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
    </ol>
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?php
      if ($this->flashSession->output() == NULL ) {
        if (!isSet($_SESSION['auth']['id'])) {
            echo '<h4>in order to fully access the site please login first</h4> <a href="/session/start" class="btn btn-success">login</a>';
        }
      }
      else {
        echo $this->flashSession->output();
      }
      ?>
    </div>
  </div>
</div><!-- /.row -->