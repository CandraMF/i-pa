<?php
	$readonly="";
	switch($Aksi){
		case "edit":
			$row = new stdClass();	
			$row=$this->m_action->ambilData("select * from dbipa_".$_tahun.".t_obat where RecId='".$id."'");	
			$readonly=" readonly ";
		break;
		case "hapus":	
			$qry="delete from dbipa_".$_tahun.".t_obat where RecId='".$id."'";
			$this->db->query($qry);		
			$this->m_action->logData($qry, "DELETE", "dbipa_".$_tahun.".t_obat","RecId", $id);
			header("location:".base_url('login/pages/'.$Pr));
		break;
		default:
			if(empty($Aksi)){
				$row=$this->m_action->KosongkanData("dbipa_".$_tahun.".t_obat");		
			}
	}
	$Kelompok=$this->input->post('Kelompok');
?>
<div class="row">
	<div class="card">
	  <div class="card-header"> 
		  <h5><?=$_title?> [ FORM ]</h5>		
	  </div>
	  <div class="card-body">
		
			<form name=Fm id=Fm method=post action="#" class="form-horizontal">
        <div class="form-body">
          <div class="row">
            <input type="hidden" name="RecId" id='RecId' value='<?=@$row->RecId?>'>
            <input type="hidden"  name="Id" id="Id" value="<?=@$row->Id?>"  class='span8' <?=$readonly?>/>

            <div class="col-md-4">
              <label>Kode :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text"  name="KdObat" id="KdObat" value="<?=@$row->KdObat?>"  class='form-control'/>
            </div>

            <div class="col-md-4">
              <label>Barcode :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text"  name="Barcode" id="Barcode" value="<?=@$row->Barcode?>"  class='form-control'/>
            </div>
            
            <div class="col-md-4">
              <label>Nama Obat :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text"  name="NamaObat" id="NamaObat" value="<?=@$row->NamaObat?>"  class='form-control'/>
            </div>

            <div class="col-md-4">
              <label>Satuan :</label>
            </div>
            <div class="col-md-8 form-group">
              <?=$this->m_auth->cmbQuery('Satuan',@$row->Satuan,"SELECT Satuan as '0', Satuan as '1' FROM dbipa_".$_tahun.".t_satuan ORDER BY Satuan")?>
            </div>

            <div class="col-md-4">
              <label>Kelompok :</label>
            </div>
            <div class="col-md-8 form-group">
              <?=$this->m_auth->cmbQuery('Kelompok',@$row->Kelompok,"SELECT Kelompok as '0', Kelompok as '1' FROM dbipa_".$_tahun.".t_kelompok ORDER BY Kelompok","onchange='Fm.submit();'")?>
            </div>

            <div class="col-md-4">
              <label>Kategori :</label>
            </div>
            <div class="col-md-8 form-group">
              <?=$this->m_auth->cmbQuery('Kategori',@$row->Kategori,"SELECT Kategori as '0', Kategori as '1' FROM dbipa_".$_tahun.".t_kategori where  Kelompok='".$Kelompok."' ORDER BY Kategori")?>
            </div>

            <div class="col-md-4">
              <label>Harga Beli :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text"  name="HargaBeli" id="HargaBeli" value="<?=@$row->HargaBeli?>"  class='form-control'/>
            </div>
            
            <div class="col-md-4">
              <label>Gudang :</label>
            </div>
            <div class="col-md-8 form-group">
              <?=$this->m_auth->cmbQuery('IdGudang',@$row->IdGudang,"SELECT IdGudang as '0', NmGudang as '1' FROM dbipa_".$_tahun.".t_gudang ORDER BY IdGudang")?>
            </div>
            
            <div class="col-md-4">
              <label>Kd RO :</label>
            </div>
            <div class="col-md-8 form-group">
              <?=$this->m_auth->cmbQuery('KdRO',@$row->KdRO,"SELECT KdRO as '0', NmRO as '1' FROM dbipa_".$_tahun.".t_ro ORDER BY KdRO")?>
            </div>
            
            <div class="col-md-4">
              <label>KdElog :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text"  name="KdElog" id="KdElog" value="<?=@$row->KdElog?>"  class='form-control'/>
            </div>
            
            <div class="col-md-4">
              <label>NmElog :</label>
            </div>
            <div class="col-md-8 form-group">
              <input type="text"  name="NmElog" id="NmElog" value="<?=@$row->NmElog?>"  class='form-control'/>
            </div>

            <div class="col-md-4">
              <label>O20 :</label>
            </div>
            <div class="col-md-8 form-group">
              <?=$this->andri->cmb2D('O20',@$row->O20,array(array('1','Y'),array('0','N')))?>
            </div>
            
            <div class="col-md-4">
              <label>o150 :</label>
            </div>
            <div class="col-md-8 form-group">
              <?=$this->andri->cmb2D('o150',@$row->o150,array(array('1','Y'),array('0','N')))?>
            </div>
            
            <div class="form-body">
              <label class="control-label"></label>
              <div class="controls">
              <button type="button" id='btnsimpan' class="btn btn-primary">Simpan</button>
              <button type="button" class="btn btn-primary" onclick="parent.location='<?=base_url('login/pages/'.$Pr)?>'">Kembali</button>
              </div>
            </div>
          </div>
        </div>
			</form>	
	  </div>
	</div>
</div>
  
 

<script>	
	$( document ).ready(function() {		
		/*script grid*/		
		$('#btnsimpan').click(function(){	
		
			var RecId=$('#RecId').val();
			var KdObat=$('#KdObat').val();
			var Barcode=$('#Barcode').val();
			var NamaObat=$('#NamaObat').val();
			var Satuan=$('#Satuan').val();
			var Kelompok=$('#Kelompok').val();

			var Kategori=$('#Kategori').val();
			var HargaBeli=$('#HargaBeli').val();
			var IdGudang=$('#IdGudang').val();
			var GolBrg=$('#GolBrg').val();
			var KdRO=$('#KdRO').val();
			var KdElog=$('#KdElog').val();
			var NmElog=$('#NmElog').val();
			var O20=$('#O20').val();
			var o150=$('#o150').val();
			  
			var dataPost={RecId:RecId, KdObat:KdObat, Barcode:Barcode, NamaObat:NamaObat, Satuan:Satuan, Kelompok:Kelompok, Kategori:Kategori, HargaBeli:HargaBeli, IdGudang:IdGudang, GolBrg:GolBrg, KdRO:KdRO, KdElog:KdElog, NmElog:NmElog, O20:O20, o150:o150};
			$.post("<?=base_url('setting/'.$Pr.'/simpan')?>",dataPost,
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