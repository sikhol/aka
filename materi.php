<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Table Materi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Materi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-sm-5">

                        </div>

                        <div class="col-sm-4">
                              <a href="<?php echo base_url ("admin/post");?>"><button type="submit" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Tambah Materi</button> </a>
                        </div>


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>

                                        <th>Nama Materi</th>
                                        <th>Keterangan</th>
                                        <th>video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($batik as $u) :?>
                                    <tr class="odd gradeX">

                                        <td><?= $u['nm_materi']?></td>
                                        <td class="center"><?= $u['keterangan']?></td>
                                        <td><?= $u['video']?></td>
                                        <td>
                                          <a href="<?php echo
                                              base_url('admin/update/'.$u['id']);?>">Edit</a> |
                                          <a href="<?php echo
                                              site_url('admin/delete/'.$u['id']);?>">Hapus</a>
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
