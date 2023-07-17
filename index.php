<?php include 'conf.php';?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fina IoT</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://fina.njugjug.my.id/res/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://fina.njugjug.my.id/res/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title ">Node 1</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 20px">Suhu</th>
                      <th style="width: 30px">Lembap</th>
                      <th style="width: 40px">Cahaya</th>
                      <th>Waktu</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?  if ($res_node1->num_rows > 0) {
                  // output data of each row
                  while($row = $res_node1->fetch_assoc()) { ?>
                    <tr>
                      <td><?echo $row["no"];?></td>
                      <td><?echo $row["suhu"];?></td>
                      <td><?echo $row["kelembapan"];?></td>
                      <td><?echo $row["cahaya"];?></td>
                      <td><?echo $row["waktu"];?></td>
                    </tr>
                     <?
                          }
                        } else {
                          echo "0 results";
                        }
                        $conn->close();
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
          </div>
        <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-warning">
                <h3 class="card-title ">Node 2</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 20px">Suhu</th>
                      <th style="width: 30px">Lembap</th>
                      <th style="width: 40px">Cahaya</th>
                      <th>Waktu</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?  if ($res_node2->num_rows > 0) {
                  // output data of each row
                  while($row = $res_node2->fetch_assoc()) { ?>
                    <tr>
                      <td><?echo $row["no"];?></td>
                      <td><?echo $row["suhu"];?></td>
                      <td><?echo $row["kelembapan"];?></td>
                      <td><?echo $row["cahaya"];?></td>
                      <td><?echo $row["waktu"];?></td>
                    </tr>
                     <?
                          }
                        } else {
                          echo "0 results";
                        }
                        $conn->close();
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
          </div>
        <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-danger">
                <h3 class="card-title ">Node 3</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 20px">Suhu</th>
                      <th style="width: 30px">Lembap</th>
                      <th style="width: 40px">Cahaya</th>
                      <th>Waktu</th>
                    </tr>
                  </thead>
                   <tbody>
                  <?  if ($res_node3->num_rows > 0) {
                  // output data of each row
                  while($row = $res_node3->fetch_assoc()) { ?>
                    <tr>
                      <td><?echo $row["no"];?></td>
                      <td><?echo $row["suhu"];?></td>
                      <td><?echo $row["kelembapan"];?></td>
                      <td><?echo $row["cahaya"];?></td>
                      <td><?echo $row["waktu"];?></td>
                    </tr>
                     <?
                          }
                        } else {
                          echo "0 results";
                        }
                        $conn->close();
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
       <div class="row">
          <div class="col-md-12">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Grafik suhu pada 3 node
                </h3>

               
              </div>
              <div class="card-body">
                <? require_once 'linechart.php';?>
                </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright © 2023 <a href="http://fina.njugjug.my.id">Me</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- jQuery -->
<script src="http://fina.njugjug.my.id/res/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="http://fina.njugjug.my.id/res/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src=".http://fina.njugjug.my.id/res/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://fina.njugjug.my.id/res/adminlte.min.js"></script>
<!-- FLOT CHARTS -->
<script src="http://fina.njugjug.my.id/res/jquery.flot.js"></script>
<!-- Page script -->

</body>
</html>