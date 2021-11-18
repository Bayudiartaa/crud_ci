<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold"><?= $title ?></h6>
            </div>
            <div class="card-body">
            <div class="mb-4">
                <a class="btn btn-warning" href="<?=base_url('siswa');?>"><i class="fa fa-undo"></i> Kembali</a>
            </div>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="id" value="<?=$data_siswa->id;?>">
                    <input type="text" class="form-control <?=form_error('nama') ? 'is-invalid' : null;?>" name="nama" id="nama" value="<?=$this->input->post('nama') ?? $data_siswa->nama;?>">
                    <?=form_error('nama', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label></br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-Laki"<?php if ($data_siswa->jenis_kelamin == "Laki-Laki") : echo "checked";endif; ?>>
                        <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan"<?php if ($data_siswa->jenis_kelamin == "Perempuan") : echo "checked";endif; ?>>
                        <label class="form-check-label" for="jenis_kelamin2">Perempuan</label>
                    </div>
                    <small class="text-danger">
                        <?= form_error('jenis_kelamin') ?>
                    </small>
                </div>
                <div class="form-group">
                <label>Agama</label>
                    <select id="agama" name="agama" class="form-control select2 <?=form_error('agama') ? 'is-invalid' : null;?>" name="agama" id="agama" value="<?= $this->input->post('agama') ?? $data_siswa->agama;?>">
                    <option value="" selected >Pilih</option>
                        <option value="Islam" <?php if ($data_siswa->agama == "Islam") : echo "selected";endif; ?>>Islam</option>
                        <option value="Protestan" <?php if ($data_siswa->agama == "Protestan") : echo "selected";endif; ?>>Protestan</option>
                        <option value="Katolik" <?php if ($data_siswa->agama == "Katolik") : echo "selected";endif; ?>>Katolik</option>
                        <option value="Hindu" <?php if ($data_siswa->agama == "Hindu") : echo "selected";endif; ?>>Hindu</option>
                        <option value="Buddha" <?php if ($data_siswa->agama == "Buddha") : echo "selected";endif; ?>>Buddha</option>
                        <option value="Khonghucu" <?php if ($data_siswa->agama == "Khonghucu") : echo "selected";endif; ?>>Khonghucu</option>
                    </select>
                    <?=form_error('agama', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal</label>
                    <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-control <?=form_error('sekolah_asal') ? 'is-invalid' : null;?>" name="sekolah_asal" id="sekolah_asal" value="<?=$this->input->post('sekolah_asal') ?? $data_siswa->sekolah_asal;?>">
                    <?= form_error('sekolah_asal', '<small class="text-danger pl-3 ">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                        <input type="text" class="form-control <?=form_error('alamat') ? 'is-invalid' : null;?>" name="alamat" id="alamat" style="height:150px;" value="<?=$this->input->post('alamat') ?? $data_siswa->alamat;?>" >
                        <?=form_error('alamat', '<span class="error invalid-feedback">', '</span>');?>
                </div>
                <div class="form-group text-right">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>