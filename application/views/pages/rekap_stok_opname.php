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
          <div class=" col-md-3">
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">Unit</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
          </div>
          <div class=" col-md-3">
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">Status</span>
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>
          </div>
          <span class="row-right mt-3">
            <a class="btn btn-success float-end m-1" id="add-event" data-toggle="modal" href="#modal-add-event"><i class="bi bi-filter"></i> Filter</a>
            <button class="btn btn-light float-end m-1"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
          </span>
        </div>
      </form>
    </div>
  </div>

  <nav class="px-0">
    <div class="nav nav-tabs mb-1 " id="nav-tab" role="tablist">
      <button class="nav-link active border-0 bg-transparent" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Daftar SO</button>
      <button class="nav-link border-0 bg-transparent" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Daftar Obat SO</button>
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
                  <th>Id SO</th>
                  <th>Tanggal</th>
                  <th>No. SO</th>
                  <th>Kd. Unit</th>
                  <th>Nama Unit</th>
                  <th>Penanggungjawab</th>
                  <th>Catatan</th>
                  <th>Jumlah +</th>
                  <th>Jumlah -</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>		  
                
              </tbody>
            </table>
            <div class="mt-3 ">
              <div class="row-right">
                <div class="input-group ">
                  <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">TOTAL -</span>
                  <input type="text" value="12.500.000" disabled class="form-control"  style="background: white !important;">
                </div>
              </div>
              <div class="row-right">
                <div class="input-group ">
                  <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">TOTAL +</span>
                  <input type="text" value="12.500.000" disabled class="form-control"  style="background: white !important;">
                </div>
              </div>
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
</div>
