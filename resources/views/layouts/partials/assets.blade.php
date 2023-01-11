<div class="modal fade" id="tambahAssets" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class=" modal-content p-3">
            <div class="modal-header p-2 align-items-start">
                <div class="d-flex flex-column align-items-left" style="padding: 0px;">
                    <p>Daftar Aset</p>
                    <h6>Tambah Aset</h6>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama Aset</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="col-form-label">Jenis Aset</label>
                        <select class="form-select" id="jenis">
                            <option selected style="color: grey;" disabled>Pilih jenis aset</option>
                            <option value="Kursi">Kursi</option>
                            <option value="Meja">Meja</option>
                            <option value="Lemari">Lemari</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="col-form-label">Harga Satuan</label>
                        <input type="text" class="form-control" id="harga" placeholder="Masukkan harga">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="col-form-label">Status Aset</label>
                        <select class="form-select" id="jenis">
                            <option selected style="color: grey;" disabled>Pilih status</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-left">
                <button type="button" class="btn bg-white w-40 text-primary py-2 mt-3">Batal</button>
                <button type="button" class="btn bg-primary w-40 text-white py-2 mt-3">Simpan</button>
            </div>
        </div>
    </div>
</div>