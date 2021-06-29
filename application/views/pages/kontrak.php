<style>
  .pm-0{
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

<div class="row">
	<div class="card">
	  <div class="card-header"> 
		  <h5><?=$_title?></h5>
	  </div>
	  <div class="card-body nopadding">
      <div class="bg-primary p-1 rounded">
        <div>
          <button class="btn btn-light"><i class="bi bi-plus me-2"></i> Baru</button>
          <button class="btn btn-light"><i class="bi bi-pencil me-2"></i> Edit</button>
          <button class="btn btn-light"><i class="bi bi-save me-2"></i> Simpan</button>
          <button class="btn btn-light" style="margin-right: 20px;"><i class="bi bi-trash me-2"></i> Hapus</button>
        </div>
      </div>
      <form action="#" method="get" class="form-horizontal mt-3 ">
        <div class="form-body">
          <div class="row">
            <div class="col-md-4">
              <label>Tahun Anggaran :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control">
            </div>

            <div class="col-md-4">
              <label>SKPD :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label>Nomor Kontrak :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Tanggal SPK :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Nama Perusahaan :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Nama Pimpinan :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Alamat :</label>
            </div>
            <div class="col-md-8 form-group">
              <textarea type="text" class="form-control" style="width: fixed">
              </textarea>
            </div>

            <div class="col-md-4">
              <label>Kode Program :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label>Kode Kegiatan :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label>Nilai Kontrak :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Sumber Dana :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
            
          </div>
        </div>
      </form>
	  </div>
  </div>
</div>