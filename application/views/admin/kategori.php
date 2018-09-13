<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Table Data Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-sm-5">

                        </div>

                        <div class="col-sm-4">
                              <a href="<?php echo base_url ("admin/ckategori");?>"><button type="submit" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Tambah Kategori</button> </a>
                        </div>


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php foreach ($ktgr as $kt) :?>
                                    <tr class="odd gradeX">


                                        <td><?php echo $kt['nama']; ?></td>

                                        <td>
                                          <a href="<?php echo
                                              base_url('admin/ukategori/'.$kt['id']);?>">Edit</a> |
                                          <a href="<?php echo
                                              site_url('admin/dkategori/'.$kt['id']);?>" onclick="if (!confirm('yakin ingin dihapus?')) return false;">Hapus</a>
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
