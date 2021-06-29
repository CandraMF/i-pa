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
  <div class="col-md-12">
    <div class="card">
      <div class="card-header"> 
        <h5><?=$_title?></h5>
      </div>
      
      <div class="card-body ">
        <form class="form-horizontal">
          <div class="row">
            <div class="col-md-3 ">
              <div class="input-group ">
                <span class="input-group-text " id="inputGroup-sizing-lg">Dari</span>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="input-group ">
                <span class="input-group-text" id="inputGroup-sizing-lg">s/d</span>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-md-3 ">
              <div class="input-group ">
                <span class="input-group-text" id="inputGroup-sizing-lg">Supplier</span>
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="input-group ">
                <span class="input-group-text" id="inputGroup-sizing-lg">Jenis</span>
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>
            </div>
            <span class="col-md-12">
              <a class="btn btn-success float-end m-1" id="add-event" data-toggle="modal" href="#modal-add-event"><i class="bi bi-filter"></i> Filter</a>
              <button class="btn btn-light float-end m-1"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
            </span>
          </div>
        </form>
        
      </div>
    </div>
  </div>
  
</div>

<div class="row">
  <div class="col-md-4">

    <div class="card">
      <div class="card-body nopadding">
        <div class="table-responsive">
          <table class="table table-bordered ">
            <thead>
            <tr>
              <th width='10'>#</th>
              <th>Daftar PO</th>
            </tr>
            </thead>
            <tbody>		  
              <tr>
                <td>a</td>
                <td>a</td>
              </tr>
              <tr>
                <td>a</td>
                <td>a</td>
          
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-8 ">
    
    <div class="card ">
      <div class="card-body">
        <form class="form">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group mb-1">
                <span class="input-group-text " id="inputGroup-sizing-lg">No PO</span>
                <input type="text" class="form-control">
              </div>
              <div class="input-group mb-1">
                <span class="input-group-text " id="inputGroup-sizing-lg">Tgl.PO</span>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="input-group mb-1">
                <span class="input-group-text " id="inputGroup-sizing-lg">Jenis</span>
                <input type="text" class="form-control">
              </div>
              <div class="input-group mb-1">
                <span class="input-group-text " id="inputGroup-sizing-lg">No.Kontrak</span>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="input-group mb-1">
                <span class="input-group-text " id="inputGroup-sizing-lg">Paket</span>
                <input type="text" class="form-control">
              </div>
              <div class="input-group mb-1">
                <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">%</span>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <div class="card ">
      <div class="card-header"> 
        <h5>Rincian PO Barang</h5>
      </div>
      <div class="card-body nopadding">
        <div class="table-responsive">
          <table class="table table-bordered data-table">
            <thead>
            <tr>
              <th width='10'>Kd Barang</th>
              <th>Nama Barang</th>
              <th>Satuan</th>
              <th>Harga</th>
              <th>Qty PO</th>
              <th>Qty Kirim</th>
              <th>Jumlah PO</th>
              <th>Jumlah Kirim</th>
              <th>Jumlah Sisa</th>
              <th>%</th>
            </tr>
            </thead>
            <tbody>		  
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card ">
      <div class="card-header"> 
        <h5>Daftar Surat Pengiriman Barang</h5>
      </div>
      <div class="card-body nopadding">
        
        <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th width='10'>No Surat</th>
            <th>Tanggal</th>
            <th>Nama Distributor</th>
            <th>Pengirim</th>
            <th>Total</th>
          </tr>
          </thead>
          <tbody>		  
            
          </tbody>
        </table>
      
      </div>
    </div>
  </div>
</div>
