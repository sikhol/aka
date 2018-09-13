<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Kategori</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Kategori
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                              <?php echo validation_errors(); ?>

                              <?php echo form_open_multipart('admin/ckategori', ['role'=>'form']);?>

                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>


                                <button type="submit" class="btn btn-default">Tambah</button>
                                <?php echo form_close(); ?>

                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
