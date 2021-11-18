<div class="row">
    <div class="col-lg-12">
        <?=$this->session->flashdata('pesan');?>
        <div class="card">
            <div class="card-header">
                    <a href="<?= base_url('siswa/add') ?>" class="btn btn-success" ><i class="fa fa-user-plus"></i>Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Sekolah Asal</th>
                            <th style="width:100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_siswa as $siswa): ?>
                                <tr>
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $siswa->nama ?></td>
                                    <td><?= $siswa->jenis_kelamin ?></td>
                                    <td><?= $siswa->agama ?></td>
                                    <td><?= $siswa->alamat ?></td>
                                    <td><?= $siswa->sekolah_asal ?></td>
                                    <td>
                                    <a class="btn btn-outline-success btn-sm" href="<?=base_url('siswa/edit/');?><?=$siswa->id;?>"><i class="fa fa-edit"></i></a>
                                    <form action="<?= base_url('siswa/delete') ?>" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="<?= $siswa->id; ?>">
                                        <button class="btn btn-outline-danger btn-sm tombol-hapus" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    </td>    
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500,0).slideUp(500, function(){
            $(this).remove();
        });
    },5000);
</script>

