<style>
  .pm-0{
    margin: 0 !important;
    padding: 0 !important;
  }

  .row {
    float: right;
  }

  .row-right{
    float: right;
  }

  @media screen and (max-width: 1000px) {
    .row {
      float: none;
    }
    
    .row-right{
      float: none;
      margin-top: 5px;
    }

    .span-space{
      margin: 0 !important;
    } 

  }
  
</style>

<div class="row">
	<div class="card">
	  <div class="card-header"> 
		  <h5><?=$_title?></h5>
	  </div>
	  <div class="card-body nopadding">		
      <div class="bg-primary rounded-3 p-1 mb-4">
        <div>
          <button class="btn btn-light"><i class="bi bi-plus me-2"></i> Baru</button>
          <button class="btn btn-light"><i class="bi bi-pencil me-2"></i> Edit</button>
          <button class="btn btn-light"><i class="bi bi-save me-2"></i> Simpan</button>
          <button class="btn btn-light"><i class="bi bi-trash me-2"></i> Hapus</button>
          
          <div class="row-right">
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg"><i class="bi bi-search"></i></span>
              
              <select class="form-control">
                <option>Cari Nomor PO</option>
                <option>First option</option>
                <option>Second option</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <form action="#" method="get" class="form-horizontal">
        <div class="form-body">
          <div class="row ">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4">
                      <label >ID LPLPO</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" class="form-control" >
                    </div>
                    <div class="col-md-4">
                      <label >Tanggal</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="date" class="form-control" >
                    </div>

                    <div class="col-md-4">
                      <label >No. LPLPO</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" class="form-control" >
                    </div>

                    <div class="col-md-4">
                      <label >Jenis Keluar</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select name="" id="" class="form-control">
                        <option value="a">a</option>
                        <option value="b">b</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <label >Ket Obat</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select name="" id="" class="form-control">
                        <option value="a">a</option>
                        <option value="b">b</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <label >Program</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select name="" id="" class="form-control">
                        <option value="a">a</option>
                        <option value="b">b</option>
                      </select>
                    </div>

                    
                    <div class="col-md-4">
                      <label >Nomor LPLPO</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select name="" id="" class="form-control">
                        <option value="a">a</option>
                        <option value="b">b</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">

                  <div class="row">
                    <div class="col-md-4">
                      <label >Kode/Akronim</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select name="" id="" class="form-control">
                        <option value="a">a</option>
                        <option value="b">b</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <label >Nama Unit</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" class="form-control" >
                    </div>

                    <div class="col-md-4">
                      <label >Alamat</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <textarea type="text" class="form-control" style="width: fixed">
                      </textarea>
                    </div>

                    <div class="col-md-4">
                      <label >Telp</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" class="form-control" >
                    </div>

                    <div class="col-md-4">
                      <label >Status Kirim</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select name="" id="" class="form-control">
                        <option value="a">a</option>
                        <option value="b">b</option>
                      </select>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-3 ">
              <div class="form-body">
                <div style="margin: 5px">
                  <button class="btn btn-light"><i class=" bi bi-arrow-right-square" ></i> Cetak LPLPO</button>
                </div>
                <div style="margin: 5px">
                  <button class="btn btn-light"><i class=" bi bi-arrow-right-square" ></i> Rekap LPLPO</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
	</div>

  <div class="card p-0 bg-primary" >
    <div class="card-body p-2">
      <button class="btn btn-light"><span><i class="bi bi-plus"></i></span> Tambah Barang</button>
      <div class="row-right">
        <div class="input-group ">
          <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">TOTAL</span>
          <input type="text" value="12.500.000" disabled class="form-control"  style="background: white !important;">
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header"> 
	  </div>
    <div class="card-body nopadding">
      <div class="table-responsive">
        <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th width='50'>Kode</th>
            <th>Uraian</th>
            <th>Satuan</th>
            <th>Qty PO</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Exp Data</th>
            <th>No Batch</th>
            <th>Manufaktur</th>
          </tr>
          </thead>
          <tbody>		  
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>