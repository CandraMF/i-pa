<style>
  .pm-0{
    margin: 0 !important;
    padding: 0 !important;
  }

  .control-row {
    float: right;
  }

  @media screen and (max-width: 1000px) {
    .control-row {
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
    <div class="card-body ">
      <form class="form-horizontal">
        <div class="row">
          <div class="col-md-3 ">
            <div class="input-group ">
              <span class="input-group-text " id="inputGroup-sizing-lg">UPTD</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">Jenis Obat</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">Gudang</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">TA</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">Kelompok</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">Kategori</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
          </div>
          <span class="col-md-3">
            <button class="btn btn-light"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
            <a class="btn btn-success " id="add-event" data-toggle="modal" href="#modal-add-event"><i class="bi bi-filter"></i> Filter</a>
          </span>
        </div>
      </form>
	  </div>
	</div>
  <div class="card">
    <div class="card-header"> <span class="icon">

      <button class="btn btn-primary float-end" style="margin: 3px"><i class="bi bi-arrow-right-square"></i> Cetak Stok Awal</button>
	  </div>
    <div class="card-body nopadding">
      <div class="table-responsive">
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th width='50'>TA</th>
              <th>Kd. Barang</th>
              <th>Nama Barang</th>
              <th>Satuan</th>
              <th>Kelompok</th>
              <th>Kategori</th>
              <th>Ex. Date</th>
              <th>No. Batch</th>
              <th>Stok Awal</th>
              <th>Jumlah</th>
            </tr>
          </thead>
          <tbody>		  
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>