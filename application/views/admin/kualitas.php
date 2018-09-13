<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kualitas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            About Kualitas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">



                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>

                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($kualitas as $u) :?>
                                    <tr class="odd gradeX">

                                        <td><?= $u['judul']?></td>
                                        <td class="center"><?= $u['deskripsi']?></td>
                                        <td>
                                          <a href="<?php echo
                                              base_url('admin/updatekualitas/'.$u['id']);?>">Edit</a>

                                        </td>
                                    </tr>
                                  <?php endforeach; ?>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
