<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            

                <!-- KOnten -->
                <form action="<?= base_url('buku/ubahkategori') ?>" method='post'>
                    <div class='form-group'>
                        <input type='hidden' name='id_kategori' id='id_kategori' value='<?php $k['id_kategori']; ?>'>
                        <input type='text' class='form-control' id='nama_kategori' name='nama_kategori' placeholder='Masukkan Kategori Buku' value='<?= $k['nama_kategori']; ?>'>
                        <?= form_error('nama_kategori'); ?>
                    </div>
                    <div class="form-group row justify-content-left mt-2">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btnprimary">Ubah</button>
                            <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
                        </div>
                    </div>
                </form>


        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->