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
          <div class="col-md-3">
            <div class="input-group ">
              <span class="input-group-text" id="inputGroup-sizing-lg">s/d</span>
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="col-md-3 ">
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

  <div class="card"> 
    <div class="card-body nopadding">
      <div class="table-responsive">
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th>Id Trx</th>
              <th>Tanggal</th>
              <th>No. Input</th>
              <th>Jenis</th>
              <th>Kd. Unit</th>
              <th>Nama Uunit</th>
              <th>Catatan</th>
              <th>No. Tlp/Hp</th>
              <th>Jumlah</th>
            </tr>
          </thead>
          <tbody>		  
            
          </tbody>
        </table>
      </div>
    
    </div>
    <div class="card-header pm-0">
      <div class="row-right mb-3">
        <div class="input-group ">
          <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">TOTAL</span>
          <input type="text" value="12.500.000" disabled class="form-control"  style="background: white !important;">
        </div>
      </div>
    </div>
  </div>

</div>
