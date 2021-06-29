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
<div class="card col-md-12">
  <div class="card-body rounded-3 p-4 pb-3"> 
    <h5><?=$_title?></h5>
  </div>
</div>
  
  <div class="row">
    <div class="col-md-4 ">
      <div class="card col-md-12">
        <div class="card-body nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="form-body">
              <div class="row">
                <div class="col-md-4">
                  <label>TA :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Periode :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
                
                <div class="col-md-4">
                  <label>Tanggal DPA :</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>

                <div class="col-md-4">
                  <label>Nomor DPA :</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control">
                </div>
              
                <button class="btn btn-primary col-md-12 mt-2">INPUT DPA</button>

              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card col-md-12">
        <div class="card-header" >
          <h5><i class="bi bi-filter"></i> Filter Data</h5>
        </div>
        <div class="card-body">
          <form action="#" method="get" class="form-horizontal">
            <div class="form-body">
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

                <div class="col-md-4">
                  <label>Unit :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Urusan :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Akun :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Program :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Kegiatan :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Kelompok :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Jenis :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Objek :</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
                <button class="btn col-md-12 btn-success"><i class="bi bi-arrow-counterclockwise"></i> RESET FILTER</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card ">
        <div class="card-body">
          <form action="#" method="get" class="form-horizontal">
            <div class="form-body">
              <div class="row" style="padding: 10px">
                <div class="col-md-4">
                  <label>Estimasi Pendapatan :</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control ">
                </div>

                <div class="col-md-4">
                  <label>Estimasi Penerimaan Pembiayaan :</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control ">
                </div>

                <div class="col-md-4">
                  <label>Apropiasi Belanja :</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control ">
                </div>

                <div class="col-md-4">
                  <label>Apropiasi Pengeluaran Pembiayaan :</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control ">
                </div>
                <hr>
                <div class="col-md-4">
                  <label>Estimasi Perubahan SAL :</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control ">
                </div>
                
                
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-8" >
      <div class="card " >
        <div class="card-header" >
          
          <h5>Rincian Objek DPA</h5>
        </div>
        <div class="card-body nopadding">

          <table class="table table-bordered data-table ">
            <thead>
              <tr>
                <th width='50'>SKPD</th>
                <th>Kd. Rincian Objek</th>
                <th>Uraian Rincian Objek</th>
                <th>Jumlah Anggaran</th>
                <th>Nama Unit</th>
              </tr>
            </thead>
            <tbody>		  
            
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="card" >
        <div class="card-body bg-primary rounded-3" style="padding: 5px 5px 5px 5px;">
          <div class="row-right">
            <div class="input-group ">
              <span class="input-group-text bg-danger text-white" id="inputGroup-sizing-lg">TOTAL</span>
              <input type="text" value="12.500.000" disabled class="form-control"  style="background: white !important;">
            </div>
          </div>
        </div>
      </div>

      <div class="card" >
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group col-md-12">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">Program</span>
                <input type="text" class="form-control"  style="background: white !important;">
              </div>
              <div class="input-group col-md-12">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">Kegiatan</span>
                <input type="text" class="form-control"  style="background: white !important;">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group col-md-12">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">𝝨 DPA</span>
                <input type="text" class="form-control"  style="background: white !important;">
              </div>
              <div class="input-group col-md-12">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">𝝨 Kontrak</span>
                <input type="text" class="form-control"  style="background: white !important;">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group col-md-12">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">Sisa DPA</span>
                <input type="text" class="form-control"  style="background: white !important;">
              </div>
              <div class="input-group col-md-12">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-lg">% Realisasi</span>
                <input type="text" class="form-control"  style="background: white !important;">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card " >
        <div class="card-header" >
          
          <h5>Rincian Kontrak</h5>
        </div>
        <div class="card-body nopadding">

          <table class="table table-bordered data-table ">
            <thead>
              <tr>
                <th>No Kontrak</th>
                <th>Tgl SPK</th>
                <th>Nama CV</th>
                <th>Id Sumber</th>
                <th>Nilai</th>
              </tr>
            </thead>
            <tbody>		  
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    
</div>