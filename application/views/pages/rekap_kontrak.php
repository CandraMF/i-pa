<style>
  .pm-0{
    margin: 0 !important;
    padding: 0 !important;
  }

  button:focus { outline: none; }

  .active{
    background-color: white !important;
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
    
	  <div class="card-body nopadding ">
      
      <form class="col-md-12 form-horizontal">
        <div class="row">
          <div class="col-md-4 ">
            <div class="row">
              <div class="col-md-4">
                <label>SKPD :</label>
              </div>
              <div class="col-md-8 form-group">
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-4 ">
            <div class="row">
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
          <div class="col-md-4">
            <button class="btn btn-light"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
            <a class="btn btn-primary" id="add-event" data-toggle="modal" href="#modal-add-event"><i class="bi bi-plus"></i> Tambah Kontrak</a>
          </div>
        </div>
      </form>
      
	  </div>
  </div>

  <nav class="px-0">
    <div class="nav nav-tabs mb-1 " id="nav-tab" role="tablist">
      <button class="nav-link active border-0 bg-transparent" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Daftar Kontrak dan PO</button>
      <button class="nav-link border-0 bg-transparent" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Rekap Pembayaran Kontrak</button>
    </div>
  </nav>
  <div class="tab-content px-0" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
      <div class="card">
        <div class="card-body ">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th width='50'>#</th>
              <th>Daftar Kontrak</th>
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
          <div class="row-right">
            <div class="input-group ">
              <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">TOTAL</span>
              <input type="text" value="12.500.000" disabled class="form-control"  style="background: white !important;">
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
      <div class="card ">
        <div class="card-body ">
          Tab-2
        </div>
      </div>
    </div>
    
  </div>

  <div class="card">
    <div class="card-body">
      <form action="#" method="get" class="form-horizontal">
        <div class="form-body">
          <div class="row">

            <div class="col-md-8 input-group mb-md-2">
              <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">Pilih Kontrak</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <div   class="col-md-4 input-group ">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">Nilai Kontrak</span>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="col-md-4 input-group ">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">Total PO</span>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="col-md-4 input-group ">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">Sisa</span>
                <input type="text" class="form-control">
              </div>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
  
  <div class="card pm-0" >
    <div class="card-header"> 
      <h5>Daftar PO Per Kontrak</h5>
    </div>
    <div class="card-body nopadding" >

      <table class="table table-bordered data-table">
        <thead>
        <tr>
          <th>Nomor PO</th>
          <th>Tanggal PO</th>
          <th>Nama Paket</th>
          <th>Jenis PO</th>
          <th>Nama Supplier</th>
          <th>Alamat Supplier</th>
          <th>Nama Distributor</th>
          <th>Alamat Distributor</th>
          <th>Jumlah PO</th>
        </tr>
        </thead>
        <tbody>		  
        
        </tbody>
      </table>
          
    </div>
  </div>

  <div class="modal hide" id="modal-add-event">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3>Baru Kontrak</h3>
    </div>
    <div class="modal-body">
      <p>Nama Kontrak:</p>
      <p>
        <input id="event-name" type="text" />
      </p>
    </div>
    <div class="modal-footer"> <a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a> <a href="#" id="add-event-submit" class="btn btn-primary">Baru Kontrak</a> </div>
  </div>

</div>