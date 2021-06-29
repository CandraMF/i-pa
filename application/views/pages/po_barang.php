<style>
  .x{
    margin: 0 !important;
    padding: 0 !important;
  }

  .control-row {
    float: left;
  }

  .row-right{
    float: right;
    
  }

  @media screen and (max-width: 1000px) {
    .control-row {
      float: none;
    }

    .row-right {
      float: none;
    }
    
    .span-space{
      margin: 0 !important;
    } 

  }

</style>

<div class="row-fluid">
	<div class="card">
	  <div class="card-header"> 
		  <h5><?=$_title?></h5>
	  </div>
	  <div class="card-body nopadding">
      <div class="bg-primary rounded-top p-3 " >
        <div>
          <button class="btn btn-light"><i class="bi bi-plus me-2"></i> Baru</button>
          <button class="btn btn-light"><i class="bi bi-pencil me-2"></i> Edit</button>
          <button class="btn btn-light"><i class="bi bi-save me-2"></i> Simpan</button>
          <button class="btn btn-light" style="margin-right: 20px;"><i class="bi bi-trash me-2"></i> Hapus</button>
          
          <div class="row-right mt-sm-1">
            <button class="btn btn-light"><i class=" bi bi-arrow-right-square" ></i> Cetak PO</button>
            <button class="btn btn-light"><i class=" bi bi-arrow-right-square" ></i> Rekap PO</button>
          </div>
        </div>
      </div>

      <form action="#" method="get" class="form-horizontal bg-primary p-3 mb-3 rounded-bottom" >
        <div class="">
          <div class="form-group has-icon-left">
              <div class="position-relative">
                <select class="form-control">
                  <option>Cari Nomor PO</option>
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
                <div class="form-control-icon">
                    <i class="bi bi-search"></i>
                </div>
              </div>
          </div>
        </div>
      </form>

      <form action="#" method="get" class="form-horizontal">
        <div class="form-body">
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-4">
                  <label >Nomor PO</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" >
                </div>
                <div class="col-md-4">
                  <label >Tanggal PO</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" >
                </div>
              </div>
            </div>
            <div class="col-md-4 span-space">
              <div class="row">
                <div class="col-md-4">
                  <label >Jenis PO</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label >No Kontrak</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4 span-space">
              <div class="row">
                <div class="col-md-4">
                  <label >Nama Paket</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <hr class="divider">
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-4">
                  <label >Pemesan</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label >Tlp Pemesan</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" >
                </div>
                <div class="col-md-4">
                  <label >Tlp Pemesan</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" >
                </div>
                <div class="col-md-4">
                  <label >Email Pemesan</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" >
                </div>
              </div>
            </div>
            <div class="col-md-4 span-space">
              <div class="row">
                <div class="col-md-4">
                  <label >Nama Supplier</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label >KD Suppier</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                  <label >Alamat</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                  <label >No. Tlp</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                  <label >E-mail</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-4 span-space">
              <div class="row">
                <div class="col-md-4">
                  <label >Nama Distributor</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label >KD Distributor</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                  <label >Alamat</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                  <label >No. Tlp</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                  <label >E-mail</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>

              </div>
            </div>
          </div>
        </div>
      </form>
      
      	
    
	  </div>

	</div>
  
  <div class="card">
    <div class="card-header">
      <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#inlineForm">Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered data-table" >
          <thead>
            <tr>
              <th>Kd Barang</th>
              <th>Nama Barang</th>
              <th>Satuan</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Ongkos</th>
              <th>Jumlah</th>
              <th>Catatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-left" id="inlineForm" tabindex="-1"
  role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
  <div class="modal-dialog"
      role="document">
      <div class="modal-content">
          <div class="modal-header bg-primary">
              <h4 class="modal-title text-white" id="myModalLabel33">Input Data </h4>
              <button type="button" class="close" data-bs-dismiss="modal"
                  aria-label="Close">
                  <i data-feather="x"></i>
              </button>
          </div>
          <form action="#">
              <div class="modal-body">
                  <label>Kode Barang: </label>
                  <div class="form-group">
                      <input type="text" class="form-control">
                  </div>
                  <label>Nama Barang: </label>
                  <div class="form-group">
                      <input type="text" class="form-control">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-light-secondary"
                      data-bs-dismiss="modal">
                      <i class="bx bx-x d-block d-sm-none"></i>
                      <span class="d-none d-sm-block">Close</span>
                  </button>
                  <button type="button" class="btn btn-primary ml-1"
                      data-bs-dismiss="modal">
                      <i class="bx bx-check d-block d-sm-none"></i>
                      <span class="d-none d-sm-block">login</span>
                  </button>
              </div>
          </form>
      </div>
  </div>
</div>

<script src="https://unpkg.com/jquery.appendgrid@2.0.0/dist/AppendGrid.js"></script>

<script>
  window.myAppendGrid = new AppendGrid({
  element: document.getElementById("tblAppendGrid"),
  uiFramework: "bootstrap4", // ui framework
  iconFramework: "", // iconic font
  columns: [
  {
    name: "kd_barang",
    display: "Kd Barang" 
  },
  {
    name: "nama_barang",
    display: "Nama Barang" 
  },
  {
    name: "satuan",
    display: "Satuan",
    type: "select",
    ctrlOptions: [
      "",
      "Germany",
      "Hong Kong",
      "Japan",
      "Malaysia",
      "Taiwan",
      "United Kingdom",
      "United States"
    ] 
  },
  {
    name: "qty",
    display: "Qty",
    type: "number",
    ctrlAttr: {
      min: 0,
      max: 10000 
    }
  },
  {
    name: "harga",
    display: "Harga",
    type: "number",
    ctrlAttr: {
      min: 0,
      max: 10000 
    } 
  },
  {
    name: "ongkos",
    display: "Ongkos",
    type: "number",
    ctrlAttr: {
      min: 0,
      max: 10000 
    } 
  },
  {
    name: "jumlah",
    display: "Jumlah",
    type: "number",
    value: 1000,

    ctrlAttr: {
      min: 0,
      max: 10000 
    } 
  },
  {
    name: "catatan",
    display: "Catatan",
    type: "textarea",

  },

  {
    name: "id",
    type: "hidden",
    value: "0" 
  }
],

  sectionClasses: {
    table: 'is-narrow is-fullwidth' } 
    
});

// myAppendGrid.load([
//   {
//     id: "d4c74a61-a24e-429f-9db0-3cf3aaa22425",
//     kd_barang: "Monique Zebedee",
//     nama_barang: "Welch LLC",
//     satuan: "Japan",
//     qty: "20",
//     harga: 1500000,
//     ongkos: 1500000,
//     jumlah: 1500000,
//     catatan: "Bronze",
//   },
//   {
//     id: "d4c74a61-a24e-429f-9db0-3cf3aaa22425",
//     kd_barang: "Monique Zebedee",
//     nama_barang: "Welch LLC",
//     satuan: "Japan",
//     qty: "20",
//     harga: 1500000,
//     ongkos: 1500000,
//     jumlah: 1500000,
//     catatan: "Bronze",
//   },
//   {
//     id: "d4c74a61-a24e-429f-9db0-3cf3aaa22425",
//     kd_barang: "Monique Zebedee",
//     nama_barang: "Welch LLC",
//     satuan: "Japan",
//     qty: "20",
//     harga: 1500000,
//     ongkos: 1500000,
//     jumlah: 1500000,
//     catatan: "Bronze",
//   },
//   {
//     id: "d4c74a61-a24e-429f-9db0-3cf3aaa22425",
//     kd_barang: "Monique Zebedee",
//     nama_barang: "Welch LLC",
//     satuan: "Japan",
//     qty: "20",
//     harga: 1500000,
//     ongkos: 1500000,
//     jumlah: 1500000,
//     catatan: "Bronze",
//   },
// ]);
</script>

