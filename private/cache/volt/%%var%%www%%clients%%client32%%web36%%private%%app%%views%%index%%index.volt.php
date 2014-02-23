<div class="row">
      <div class="col-lg-12">
        <h1>Growbuddy <small>your little helper</small></h1>

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
<?php if (isSet($_SESSION['auth']['id'])) { ?>
    <div class="row">
      <div class="col-lg-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-dashboard fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">3 m³</p>
                <p class="announcement-text">Room!</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Room Settings
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-check fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">12</p>
                <p class="announcement-text">Sensors</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  edit sensors
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">4</p>
                <p class="announcement-text">Warnings</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  view details
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-comments fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">56</p>
                <p class="announcement-text">New History Entries!</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  View History
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Temperature Log: February 15, 2013 - February 23, 2013</h3>
          </div>
          <div class="panel-body">
            <div id="morris-chart-area"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Estimated Power Consumption: October 1, 2013 - October 31, 2013</h3>
          </div>
          <div class="panel-body">
            <div id="morris-chart-donut"></div>
            <div class="text-right">
              <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-clock-o"></i> Recent Activity</h3>
          </div>
          <div class="panel-body">
            <div class="list-group">

              <a href="#" class="list-group-item">
                <span class="badge">2 hours ago</span>
                <i class="fa fa-check"></i> Completed task: "pump run #1323"
              </a>
              <a href="#" class="list-group-item">
                <span class="badge">2 hours ago</span>
                <i class="fa fa-check"></i> Completed task: "pump run #1322"
              </a>
              <a href="#" class="list-group-item">
                <span class="badge">2 hours ago</span>
                <i class="fa fa-check"></i> Completed task: "light off #134 | light #1 | light #2"
              </a>
              <a href="#" class="list-group-item">
                <span class="badge">2 hours ago</span>
                <i class="fa fa-check"></i> Completed task: "pump run #1321"
              </a>
            </div>
            <div class="text-right">
              <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-clock-o"></i> Nutrients Log</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>Dose ID# <i class="fa fa-sort"></i></th>
                    <th>Dose Start <i class="fa fa-sort"></i></th>
                    <th>Dose End <i class="fa fa-sort"></i></th>
                    <th>Dose Size <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>3326</td>
                    <td>10/21/2013</td>
                    <td>3:29 PM</td>
                    <td>321.33 ml</td>
                  </tr>
                  <tr>
                    <td>3325</td>
                    <td>10/21/2013</td>
                    <td>3:20 PM</td>
                    <td>234.34 ml</td>
                  </tr>
                  <tr>
                    <td>3324</td>
                    <td>10/21/2013</td>
                    <td>3:03 PM</td>
                    <td>724.17 ml</td>
                  </tr>
                  <tr>
                    <td>3323</td>
                    <td>10/21/2013</td>
                    <td>3:00 PM</td>
                    <td>23.71 ml</td>
                  </tr>
                  <tr>
                    <td>3322</td>
                    <td>10/21/2013</td>
                    <td>2:49 PM</td>
                    <td>8345.23 ml</td>
                  </tr>
                  <tr>
                    <td>3321</td>
                    <td>10/21/2013</td>
                    <td>2:23 PM</td>
                    <td>245.12 ml</td>
                  </tr>
                  <tr>
                    <td>3320</td>
                    <td>10/21/2013</td>
                    <td>2:15 PM</td>
                    <td>5663.54 ml</td>
                  </tr>
                  <tr>
                    <td>3319</td>
                    <td>10/21/2013</td>
                    <td>2:13 PM</td>
                    <td>943.45 ml</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-right">
              <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
    <?php } ?>