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
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h5>Informasi SO Terakhir</h5>
      </div>
      
      <div class="card-body nopadding ">
        <form class="form-horizontal" >
          <div class="row">
            <div class="col-md-4">
              <label >UPTD</label>
            </div>
            <div class="col-md-8 form-group">
              <select name="" id="" class="form-control">
                <option value="a">a</option>
                <option value="b">b</option>
              </select>
            </div>

            <div class="col-md-4">
              <label >ID/Periode Stok</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text" name="" id="" class="form-control">
            </div>

            <div class="col-md-4">
              <label >Dari</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="date" name="" id="" class="form-control">
            </div>

            <div class="col-md-4">
              <label >Sampai</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="date" name="" id="" class="form-control">
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h5>Filter Data</h5>
      </div>
      
      <div class="card-body nopadding ">
        <form class="form-horizontal">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <label >Dari</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="date" name="" id="" class="form-control">
                </div>
                <div class="col-md-4">
                  <label >Sampai</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="date" name="" id="" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <label >Jenis Obat</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label >Tahun</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label >Gudang</label>
                </div>
                <div class="col-md-8 form-group">
                  <select name="" id="" class="form-control form-control">
                    <option value="a">a</option>
                    <option value="b">b</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 ">
            <button class="btn "><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
            <a class="btn btn-success" ><i class="bi bi-filter"></i> Filter</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card">
      <div class="card-header">
        <h5>Cetak</h5>
      </div>
      
      <div class="card-body nopadding ">
        <div class="row">
          <button class="btn btn-light" style="margin: 3px"><i class="bi bi-arrow-right-square"></i> Stok Akumulasi</button>
          <button class="btn btn-light" style="margin: 3px"><i class="bi bi-arrow-right-square"></i> Stok Rinci</button>
          <button class="btn btn-light" style="margin: 3px"><i class="bi bi-arrow-right-square"></i> Distribusi/Bulan</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>Data</h5>
      </div>
      
      <div class="card-body nopadding ">
        <div class="table-responsive">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Awal</th>
                <th>Masuk SB</th>
                <th>Distrubsi SB</th>
                <th>So+ SB</th>
                <th>So- SB</th>
                <th>ED SB</th>
                <th>Sisa SB</th>
                <th>Masuk</th>
                <th>D...</th>
              </tr>
            </thead>
            <tbody>		  
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-body nopadding ">
        <button class="btn btn-light" style="margin: 3px"><i class="bi  bi-file-earmark-arrow-down"></i> Lap. Stok Obat dan BMHP</button>
        <button class="btn btn-light" style="margin: 3px"><i class="bi  bi-file-earmark-arrow-down"></i> Lap. Stok Obat O20</button>
        <button class="btn btn-light" style="margin: 3px"><i class="bi  bi-file-earmark-arrow-down"></i> Lap. Stok Obat O150</button>
      </div>
    </div>
  </div>


</div>
