<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah-barang">
        <i class="fas fa-sm fa-plus"></i>Tambah Barang
        </button>

    <table class="table table-sm table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php 
        $no = 1;
        foreach($barang as $brg) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $brg->nm_brg ?></td>
            <td><?= $brg->ket_brg ?></td>
            <td><?= $brg->ktg_brg ?></td>
            <td><?= $brg->hrg_brg ?></td>
            <td><?= $brg->stok_brg ?></td>
            <td><button class="btn btn-sm btn-success"><i class="fa fa-search-plus"></i></button></td>
            <td><button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah-barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore accusamus libero qui dolorum quaerat et! Iure, explicabo! Asperiores, architecto quasi. Distinctio perferendis quae nemo amet veniam eligendi quisquam animi unde?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>