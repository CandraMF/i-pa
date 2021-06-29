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

<div class="row">
	<div class="card">
	  <div class="card-header"> 
		  <h5><?=$_title?></h5>
	  </div>
	  <div class="card-body nopadding">
      <div class="bg-primary rounded-3 p-1">
        <div>
          <button class="btn btn-light"><i class="bi bi-plus me-2"></i> Baru</button>
          <button class="btn btn-light"><i class="bi bi-pencil me-2"></i> Edit</button>
          <button class="btn btn-light"><i class="bi bi-save me-2"></i> Simpan</button>
          <button class="btn btn-light"><i class="bi bi-trash me-2"></i> Hapus</button>
          
          <div class="row-right">
            <button class="btn btn-light m-xs-2"><i class=" bi bi-arrow-right-square" ></i> Rekap DPA</button>
          </div>
        </div>
      </div>

      <form action="#" method="get" class="form-horizontal mt-3 ">
        <div class="form-body">
          <div class="row" style="padding: 10px">
            <div class="col-md-4">
              <label>Tahun Anggaran :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label  >Periode :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label >Urusan :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
            <div class="col-md-4">
              <label >Kode SKPD :</label> 
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
            <div class="col-md-4">
              <label >Nama SKPD</label>
            </div>
            <div class="col-md-8 form-group">
              <textarea type="text" class="form-control" style="width: fixed"></textarea>
            </div>

            <div class="col-md-4">
              <label >Kode Unit :</label>
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
              <textarea type="text" class="form-control" style="width: fixed">
              </textarea>
            </div>

            <div class="col-md-4">
              <label >Kode Urusan :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >Kode Program :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >Nama Program</label>
            </div>
            <div class="col-md-8 form-group">
              <textarea type="text" class="form-control" style="width: fixed">
              </textarea>
            </div>

            <div class="col-md-4">
              <label >Kode Kegiatan :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >Nama Kegiatan</label>
            </div>
            <div class="col-md-8 form-group">
              <textarea type="text" class="form-control" style="width: fixed">
              </textarea>
            </div>

            <div class="col-md-4">
              <label >Kode Akun :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >Kode Kelompok :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
            
            <div class="col-md-4">
              <label >Kode Jenis :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >Kode Objek :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >Kode Rincian Objek :</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >Uraian Rincian Objek</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >Jumlah Anggaran :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" class="form-control" >
            </div>

            <div class="col-md-4">
              <label >SDana :</label>
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