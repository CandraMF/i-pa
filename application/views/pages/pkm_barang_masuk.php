<style>
  .pm-0{
    margin: 0 !important;
    padding: 0 !important;
  }

  .row {
    float: left;
  }

  .row-right{
    float: right;
    
  }

  @media screen and (max-width: 1000px) {
    .row {
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

<form action="#" method="get" class="form-horizontal" id='Fm'>  
<div class="col-md-12">
  <div class="card col-md-12">
    <div class="card-header"> 
      <h5><?=$_title?></h5>
    </div>
    <div class="card-body">
      <div class="bg-primary rounded-3" style="padding: 5px">
        <button class="btn btn-light"><i class="bi bi-plus me-2"></i> Baru</button>
        <button class="btn btn-light"><i class="bi bi-pencil me-2"></i> Edit</button>
        <button class="btn btn-light" id='btnsimpan'><i class="bi bi-save me-2"></i> Simpan</button>
        <button class="btn btn-light" style="margin-right: 20px;"><i class="bi bi-trash me-2"></i> Hapus</button>
        <button class="btn btn-primary" disabled style="opacity: 0"><i class="bi bi-plus me-2"></i> Baru</button>

        <div class="row-right " style="min-width: 350px;">
          <div class="col-md-12">
              <select class="form-control">
                <option>Cari Nomor Surat</option>
                <option>First option</option>
                <option>Second option</option>
                <option>Third option</option>
                <option>Fourth option</option>
                <option>Fifth option</option>
                <option>Sixth option</option>
                <option>Seventh option</option>
                <option>Eighth option</option>
            </select>
          </div>
        </div>
            
      </div>
    </div>
  </div>
</div>
      

<div class="row" >
  <div class="col-md-4">
    <div class="card col-md-12">
      <div class="card-body ">
       
          <div class="form-body">
            <div class="row">
              <div class="col-md-4">
                <label>ID Masuk</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" class="form-control">
              </div>
              
              <div class="col-md-4">
                <label>No Faktur</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" class="form-control" id='NoFaktur' name='NoFaktur'>
              </div>

              <div class="col-md-4">
                <label>Tanggal</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="date" class="form-control">
              </div>

              <div class="col-md-4">
                <label>Kd.Distributor</label>
              </div>
              <div class="col-md-8 form-group">
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>
              
              <div class="col-md-4">
                <label>Nama Distributor</label>
              </div>
              <div class="col-md-8 form-group">
                <textarea type="text" class="form-control">
                </textarea>
              </div>

              <div class="col-md-4">
                <label>Pengirim</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" class="form-control">
              </div>

              <hr>

              <div class="col-md-4">
                <label>Tahun Stok</label>
              </div>
              <div class="col-md-8 form-group">
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>

              <div class="col-md-4">
                <label>Ket. Masuk</label>
              </div>
              <div class="col-md-8 form-group">
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>

              <div class="col-md-4">
                <label>Ket. Obat</label>
              </div>
              <div class="col-md-8 form-group">
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>

              <hr>

              <div class="col-md-4">
                <label>Program</label>
              </div>
              <div class="col-md-8 form-group">
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>

              <div class="col-md-4">
                <label>Nomor PO</label>
              </div>
              <div class="col-md-8 form-group">
                <select name="" id="" class="form-control">
                  <option value="a">a</option>
                  <option value="b">b</option>
                </select>
              </div>

              <div class="col-md-4">
                <label>Tgl. PO</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" class="form-control">
              </div>

              <div class="col-md-4">
                <label>Nomor Kontrak</label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" class="form-control">
              </div>

              <hr>
            </div>
            <div class="col-md-12 ">
              <div class="form-body">
                
                  <button class="btn btn-light my-1"><i class=" bi bi-arrow-right-square" ></i> Cetak Tanda Terima</button>

                  <button class="btn btn-light"><i class=" bi bi-arrow-right-square" ></i> Cetak Lembar Pengecekan Barang</button>

              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  
  <div class="col-md-8">  
    <div class="card p-0 bg-primary" >
      <div class="card-body p-2">
        <button class="btn btn-light"><span><i class="bi bi-plus"></i></span> Tambah Barang</button>
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
        <div class="table-responsive">
          <table class="table table-bordered data-table ">
            <thead>
              <tr>
                <th width='50'>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Kelompok</th>
                <th>Kategori</th>
                <th>Gudang</th>
                <th>Kode RO</th>
                <th>Aksi</th>
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


<script>	
	$( document ).ready(function() {		
		/*script grid*/		
		$('#btnsimpan').click(function(){	
		
			var dataPost=$("#Fm").serialize();
			$.post("<?=base_url('penerimaan/'.$Pr.'/simpan')?>",dataPost,
			function(data){	
				var data = $.parseJSON( data );		
				$('#InfoConfirm').modal('show'); 
				if(data.status=='success')
				{$('#txtinfo').html('Berhasil di simpan');}
				else
				{$('#txtinfo').html('Gagal di simpan');}
				setTimeout(function(){ parent.location="<?=base_url('login/pages/'.$Pr)?>"; }, 1000);
			});
		});
	});	
</script>
