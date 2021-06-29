<style>
  .{
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
      position: relative;
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
      <div class="card-body nopadding ">
        <div class="bg-primary rounded-3 p-1">
          <div>
            <button class="btn btn-light"><i class="bi bi-plus me-2"></i> Baru</button>
            <button class="btn btn-light"><i class="bi bi-pencil me-2"></i> Edit</button>
            <button class="btn btn-light"><i class="bi bi-save me-2"></i> Simpan</button>
            <button class="btn btn-light"><i class="bi bi-trash me-2"></i> Hapus</button>
            
            <div class="row-right">
              <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="bi bi-search"></i></span>
                
                <select class="form-control">
                  <option>Cari Nomor Pemusnahan</option>
                  <option>First option</option>
                  <option>Second option</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div class="col-md-12">
    
    <div class="card ">
      <div class="card-body nopadding ">
        <div class="row ">
          <div class="col-md-7">
            <form action="#" method="get" class="form-horizontal" id="form_id">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-4">
                    <label >Id Pemusnahan</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="text" class="form-control" >
                  </div>
                  <div class="col-md-4">
                    <label >Tanggal Input</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="date" class="form-control" >
                  </div>
                  <div class="col-md-4">
                    <label >No. Pemusnahan</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <select name="" id="" class="form-control">
                      <option value="a">a</option>
                      <option value="b">b</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label >Tanggal Pemusnahan</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="date" class="form-control" >
                  </div>

                </div>
              </div>
            </form>
          </div>
          
          <div class="col-md-5">
            <div class="row-right" style="bottom: 0; right: 0;">
              <div class="input-group ">
                <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">TOTAL</span>
                <input type="text" value="12.500.000" disabled class="form-control"  style="background: white !important;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>

  <div class="col-md-12">
    <nav class="px-0">
      <div class="nav nav-tabs mb-1 " id="nav-tab" role="tablist">
        <button class="nav-link active border-0 bg-transparent" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Daftar Kadaluarsa</button>
        <button class="nav-link border-0 bg-transparent" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Daftar Obat Kadaluarsa</button>
      </div>
    </nav>
    <div class="tab-content px-0" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
        <div class="card">
          <div class="card-body ">
            <div class="table-responsive">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Nomor Input</th>
                    <th>Tgl Input</th>
                    <th>Exp Date</th>
                    <th>Kd Unit</th>
                    <th>Nama Unit</th>
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
      <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
        <div class="card ">
          <div class="card-body ">
            Tab-2
          </div>
        </div>
      </div>
      
    </div>
  </div>


</div>