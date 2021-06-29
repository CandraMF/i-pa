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

  .myinput{
    margin: 2px 0px 2px 0px;
    padding: 4px 0px 0px 4px;
  }

  .mylabel{
    padding: 5px 0px 0px 10px;
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
    
	  <div class="card-body ">
      <form class="form-horizontal">
        <div class="row">
          <div class="col-md-4 ">
            <div class="input-group ">
              <span class="input-group-text " id="inputGroup-sizing-lg">Kadaluarsa s/d</span>
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">Jenis Obat</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
          </div>
          <span class="col-md-4">
            <a class="btn btn-success float-end m-1" id="add-event" data-toggle="modal" href="#modal-add-event"><i class="bi bi-filter"></i> Filter</a>
            <button class="btn btn-light float-end m-1"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
          </span>
        </div>
      </form>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
		  <h5>Obat Kadaluarsa</h5>
	  </div>
    <div class="card-body nopadding">
      <div class="table-responsive">
        <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th width='10'>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Jns Obat</th>
            <th>Exp. Date</th>
            <th>J Hari</th>
            <th>No Batch</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Sisa</th>
          </tr>
          </thead>
          <tbody>		  
          </tbody>
        </table>
      </div>
    
    </div>
  </div>
</div>

