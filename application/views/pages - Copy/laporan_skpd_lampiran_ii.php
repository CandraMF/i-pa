<?php
	$data=$this->input->post();
	if(!empty($data)){
		foreach($data as $key => $value){$$key = $this->andri->clean($value);}
	}else{
		$JENIS_CPCL=$this->uri->segment(6);	
		$KDKEGUNIT=$this->uri->segment(7);	
		$UNITKEY_KEC=$this->uri->segment(8);
		$UNITKEY=$this->uri->segment(9);
	}
	

	$JENIS_CPCL=!empty($JENIS_CPCL)?$JENIS_CPCL:"1";
	$UNITKEY=!empty($UNITKEY)?$UNITKEY:"";
	$UNITKEY_KEC=!empty($UNITKEY_KEC)?$UNITKEY_KEC:"";
	$KDKEGUNIT=!empty($KDKEGUNIT)?$KDKEGUNIT:"";
	$KDTAHAP=$_tahap;

	/*
	$UNITKEY=@$this->input->post('UNITKEY');
	$UNITKEY_KEC=@$this->input->post('UNITKEY_KEC');
	$KDKEGUNIT=@$this->input->post('KDKEGUNIT');
	*/
	 
	$sty="";
	if(!empty($_idkec)){
		$UNITKEY_KEC=$_idkec;
		$sty="style='display:none;'";		
	}
	$row=$this->m_action->ambilData("select KDUNIT as KDUNIT_KEC, NMUNIT AS NMUNIT_KEC from dbsipd_".$_tahun.".mskpd where UNITKEY='{$UNITKEY_KEC}'");
	$KDUNIT_KEC=$row->KDUNIT_KEC;
	$NMUNIT_KEC=$row->NMUNIT_KEC;
	
 
	$row=$this->m_action->ambilData("select KDUNIT, NMUNIT from dbsipd_".$_tahun.".mskpd where UNITKEY='{$UNITKEY}'");
	$KDUNIT=$row->KDUNIT;
	$NMUNIT=$row->NMUNIT;
	
	$row=$this->m_action->ambilData("SELECT distinct b.KDPRGRM, b.KDKEGUNIT, concat(c.NOPRGRM,b.NOKEG) AS NOKEG, b.NMKEG FROM dbsipd_".$_tahun.".t_rpjmd_keg AS b  INNER JOIN dbsipd_".$_tahun.".t_rpjmd_pgrm AS c ON b.KDPRGRM=c.KDPRGRM WHERE  b.KDKEGUNIT='{$KDKEGUNIT}'");

	
	
	$NOKEG=$row->NOKEG;
	$NMKEG=$row->NMKEG;
	$KDKEGUNIT=!empty($KDKEGUNIT)?$KDKEGUNIT:$row->KDKEGUNIT;
	$KDPRGRM=!empty($KDPRGRM)?$KDPRGRM:$row->KDPRGRM;
	$WHKEC=!empty($UNITKEY_KEC)?" and UNITKEY='{$UNITKEY_KEC}'":"";
	$JVERIFIKASI=!empty($JVERIFIKASI)?$JVERIFIKASI:1;
?>
<form method="post" action="<?=base_url('login/pages/'.$Pr)?>" id='Fm' name='Fm'>

<div class="row-fluid">
	<div class="widget-box">
	    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
		<h5><?=$_title?></h5>			
	  </div>
		 <!-- Data List Program -->
	  <div class="widget-content form-horizontal">		
			
			
			
			<div class="control-group">
              <label class="control-label">Lampiran</label>
              <div class="controls">
                	<?=$this->m_auth->cmbQuery('JENIS_CPCL',@$JENIS_CPCL,"select JENIS_CPCL as '0', LAMPIRAN as '1' from dbsipd_".$_tahun.".t_lampiran where JENIS_CPCL in ('1','2')","onchange=\"Fm.submit();\"")?>					
              </div>
            </div>
			<div class="control-group">
			  <label class="control-label">Jenis Verifikasi</label>
			  <div class="controls">
					<?=$this->andri->cmb2D('JVERIFIKASI',@$JVERIFIKASI,array(array('1','Sudah Verifikasi'),array('2','Belum Verifikasi')),"onchange=\"Fm.submit();\"")?>			
			  </div>
			</div>
			<?php
				if($sGroup=='6'){
			?>
			<div class="control-group">
              <label class="control-label">Kecamatan</label>
              <div class="controls">
               <?=$this->m_auth->cmbQuery('UNITKEY_KEC',@$UNITKEY_KEC,"select UNITKEY as '0', concat(KDUNIT,' ',NMUNIT) as '1' from dbsipd_".$_tahun.".mskpd where JENIS_OPD='KECAMATAN' and KDSTUNIT='3'","onchange=\"Fm.submit();\"")?>					
              </div>
            </div>
			<?php }else{?>
				<div class="control-group">
				  <label class="control-label">Kecamatan <?=$sGroup?></label>
				  <div class="controls">
				   <?=$this->m_auth->cmbQuery('UNITKEY_KEC',@$UNITKEY_KEC,"select UNITKEY as '0', concat(KDUNIT,' ',NMUNIT) as '1' from dbsipd_".$_tahun.".mskpd where JENIS_OPD='KECAMATAN' and KDSTUNIT='3' $WHKEC","onchange=\"Fm.submit();\"")?>					
				  </div>
				</div>
			<?php }?>
			<div class="control-group">
				 <label class="control-label"></label>
				 <div class="controls">
				
					<button type="button" onclick="Fm.submit();" class="btn btn-primary">Reload</button>
			<?php
				if($JENIS_CPCL==1){
			?>
					<a href="<?=base_url("login/cetak/laporan_skpd_lampiran_ii/".@$JENIS_CPCL."/".@$JVERIFIKASI."/".@$UNITKEY_KEC)?>" target='_blank'><button type="button" class="btn btn-primary">Cetak</button></a>
			<?php
				}else{
			?>
					<a href="<?=base_url("login/cetak/laporan_skpd_lampiran_iii/".@$JENIS_CPCL."/".@$JVERIFIKASI."/".@$UNITKEY_KEC)?>" target='_blank'><button type="button" class="btn btn-primary">Cetak</button></a>
			<?php } ?>
				 </div>
					
			</div>	
			
	  </div>
	   <div class="widget-content">		
		  <table class="table table-bordered table-striped with-check">
		  <thead>
		   <tr>			
			 <th style='padding-bottom:10px;'>No</th>	
			  <th style='padding-bottom:10px;'>Kegiatan Prioritas</th>	  
			  <th style='padding-bottom:10px;'>Sasaran Kegiatan</th>
			  <th style='padding-bottom:10px;'>Program</th>	
			  <th style='padding-bottom:10px;'>Lokasi (Desa/Kel/Kec)	</th>
			  <th style='padding-bottom:10px;'>Volume</th>
			  <th style='padding-bottom:10px;'>Pagu</th>
			  <th>Perangkat Daerah<br>Penanggung Jawab</th>			
			  <th style='padding-bottom:10px;'>Aksi</th>	
		   </tr>
		  </thead>
		  <tbody>		   
			<?php			
				$whm=$JVERIFIKASI==1?" AND month(a.TGLVALID)>0 ":" AND (a.TGLVALID IS NULL OR a.TGLVALID='0000-00-00')";
				if($sGroup=='6'){
					$wh=!empty($UNITKEY_KEC)?"AND a.UNITKEY_KEC='{$UNITKEY_KEC}'":"";
						$qry=$this->db->query("SELECT distinct bb.KDUNIT, bb.NMUNIT,b.KDUNIT as KDUNITKEC, bbb.NMUNIT as NMKEC, a.KDCPCL, f.NMPRGRM, a.KEGIATAN_PRIORITAS, a.SASARAN_KEGIATAN, concat(a.LOKASI,' ', c.NMDESA,' ' , b.NMUNIT) as LOKASI, concat(a.TARGET, ' ',a.SATUAN) VOLUME, a.PAGU, a.PENANGGUNG_JAWAB, a.FOTO, a.TGLVALID, f.NOPRGRM, f.NMPRGRM, e.NOKEG, e.NMKEG FROM dbsipd_".$_tahun.".t_kegiatan_cpcl AS a 
						LEFT JOIN dbsipd_".$_tahun.".mskpd AS b ON a.IDKEC=b.UNITKEY 
						LEFT JOIN dbsipd_".$_tahun.".mskpd AS bbb ON a.UNITKEY_KEC=bbb.UNITKEY 
						LEFT JOIN dbsipd_".$_tahun.".mdesa AS c ON a.IDDESA=c.IDDESA 
						LEFT JOIN dbsipd_".$_tahun.".mskpd AS bb ON a.UNITKEY=bb.UNITKEY 
						INNER JOIN dbsipd_".$_tahun.".t_rpjmd_keg AS e ON a.KDKEGUNIT=e.KDKEGUNIT
						INNER JOIN dbsipd_".$_tahun.".t_rpjmd_pgrm AS f ON e.KDPRGRM=f.KDPRGRM				
						WHERE a.KDTAHAP='{$KDTAHAP}'  $wh AND a.JENIS_CPCL='{$JENIS_CPCL}' $whm ORDER BY bbb.KDUNIT, bb.KDUNIT, f.NOPRGRM, e.NOKEG");		
				}else{
					$qry=$this->db->query("SELECT distinct bb.KDUNIT, bb.NMUNIT,b.KDUNIT as KDUNITKEC, bbb.NMUNIT as NMKEC, a.KDCPCL, f.NMPRGRM, a.KEGIATAN_PRIORITAS, a.SASARAN_KEGIATAN, concat(a.LOKASI,' ', c.NMDESA,' ' , b.NMUNIT) as LOKASI, concat(a.TARGET, ' ',a.SATUAN) VOLUME, a.PAGU, a.PENANGGUNG_JAWAB, a.FOTO, a.TGLVALID, f.NOPRGRM, f.NMPRGRM, e.NOKEG, e.NMKEG FROM dbsipd_".$_tahun.".t_kegiatan_cpcl AS a 
					LEFT JOIN dbsipd_".$_tahun.".mskpd AS b ON a.IDKEC=b.UNITKEY 
					LEFT JOIN dbsipd_".$_tahun.".mskpd AS bbb ON a.UNITKEY_KEC=bbb.UNITKEY 
					LEFT JOIN dbsipd_".$_tahun.".mdesa AS c ON a.IDDESA=c.IDDESA 
					LEFT JOIN dbsipd_".$_tahun.".mskpd AS bb ON a.UNITKEY=bb.UNITKEY 
					INNER JOIN dbsipd_".$_tahun.".t_rpjmd_keg AS e ON a.KDKEGUNIT=e.KDKEGUNIT
					INNER JOIN dbsipd_".$_tahun.".t_rpjmd_pgrm AS f ON e.KDPRGRM=f.KDPRGRM				
					WHERE a.KDTAHAP='{$KDTAHAP}' AND a.UNITKEY_KEC='{$UNITKEY_KEC}' AND a.JENIS_CPCL='{$JENIS_CPCL}' $whm ORDER BY bbb.KDUNIT, bb.KDUNIT, f.NOPRGRM, e.NOKEG");				
				}
				$i=1;
				
			
				$i=1;
				foreach ($qry->result() as $row){	
					$FOTO=!empty($row->FOTO)?$row->FOTO:"assets/img-cpcl/photo.png";
					if(empty($row->TGLVALID)||($row->TGLVALID=='0000-00-00'))
					{
						$valid="";$TGLVALID="";$ArrCmbUmum=array();
						if(empty($_pupdate)){$ArrCmbUmum[]='Upload Foto';$ArrCmbUmum[]='Edit';}
						if(empty($_pdelete)){$ArrCmbUmum[]='Delete';}
						$show="";
					}else{
						$valid="style='display:none;'";
						$TGLVALID=$row->TGLVALID;
						$ArrCmbUmum=array();
						
						$show=" style='display:none;'";
					}

					if(empty($KDUNITKEC) || $KDUNITKEC!=$row->KDUNITKEC )
					{	$KDUNITKEC=$row->KDUNITKEC;						
						echo "<tr><td colspan=9 style='font-weight:bold;'>".$row->NMKEC."</td></tr>";
						$i=1;
					}

					echo "    
					<tr>					
						<td align=center>".$i.".</td>
						<td>".$row->KEGIATAN_PRIORITAS."</td>			
						<td>".$row->NOKEG." ".$row->NMKEG." (".$row->SASARAN_KEGIATAN." )</td>
						<td >".$row->NOPRGRM." ".$row->NMPRGRM."</td>						
						<td>".$row->LOKASI."</td>
						<td>".$row->VOLUME."</td>						
						<td style='text-align:right;'>".$this->andri->cetakuang($row->PAGU)."</td>
						<td>".$row->NMUNIT."</td>
						<td>
							".$TGLVALID."
							<center $show>
								<table celpadding=0 cellspacing=0>
								<tr>
									<td style='border:0px;padding:1px;'><a href='".base_url('login/pages/skpd_musren_kecamatan/cpcl/edit/'.$row->KDCPCL)."'><button type='button' class='btn btn-primary'>Edit</button></a></td>
								</tr>
								<tr>
									<td style='border:0px;padding:1px;'><a href='".base_url('login/pages/skpd_musren_kecamatan/upload-foto/edit/'.$row->KDCPCL)."'><button type='button' class='btn btn-primary'>Upload&nbsp;Foto</button></a></td>
								</tr>
								<tr>								
									<td style='border:0px;padding:1px;'><a href='".base_url('login/pages/skpd_musren_kecamatan/cpcl/hapus/'.$row->KDCPCL)."'><button type='button' class='btn btn-primary' style='background-color:#ff3300;'>Hapus</button></a></td>
								</tr>
								</table>
							<br>
							
							
							</center><br>
							
						</td>
					</tr>
					";

					$i++;
				}
			?>
		  </tbody>
		</table>
	   </div>
</div>
		
</form>

<div id="popkec" class="modal fade" >
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			
			<div class="modal-body">
				<div id="tree_kec"> </div>
			</div>
			<div class="modal-footer">
				<strong>DAFTAR KECAMATAN</strong>
			</div>
		</div>
	</div>
</div> 

<script src="<?=base_url("assets/tree/jquery/jquery.js")?>" type="text/javascript"></script>
<script src="<?=base_url("assets/tree/jquery/jquery-ui.custom.js")?>" type="text/javascript"></script>
<script src="<?=base_url("assets/tree/jquery/jquery.cookie.js")?>" type="text/javascript"></script>

<link href="<?=base_url("assets/tree/src/skin/ui.dynatree.css")?>" rel="stylesheet" type="text/css">
<script src="<?=base_url("assets/tree/src/jquery.dynatree.js")?>" type="text/javascript"></script>

<!-- Start_Exclude: This block is not part of the sample code -->
<link href="<?=base_url("assets/tree/prettify.css")?>" rel="stylesheet">
<script src="<?=base_url("assets/tree/prettify.js")?>" type="text/javascript"></script>
<link href="<?=base_url("assets/tree/sample.css")?>" rel="stylesheet" type="text/css">
<script src="<?=base_url("assets/tree/sample.js")?>" type="text/javascript"></script>
<!-- End_Exclude -->

<?php
	////////////// KEC
	$qry=$this->db->query("SELECT UNITKEY, KDUNIT, NMUNIT, KDSTUNIT FROM dbsipd_".$_tahun.".mskpd WHERE JENIS_OPD='KECAMATAN' and KDSTUNIT IN (1) AND UNITKEY!='203' ORDER BY kdunit");$title_kec="";	
	foreach($qry->result() as $row){
		$JL2=strlen(trim($row->KDUNIT));
		$qrysub=$this->db->query("SELECT UNITKEY, KDUNIT, NMUNIT, KDSTUNIT FROM dbsipd_".$_tahun.".mskpd WHERE JENIS_OPD='KECAMATAN' and  KDSTUNIT IN (2) and left(KDUNIT,".$JL2.")='".$row->KDUNIT."'  AND UNITKEY!='203' ORDER BY kdunit");$child_kec="";
		foreach($qrysub->result() as $rowsub){
			$JL3=strlen(trim($rowsub->KDUNIT));
			$qrysubsub=$this->db->query("SELECT UNITKEY, KDUNIT, NMUNIT, KDSTUNIT FROM dbsipd_".$_tahun.".mskpd WHERE JENIS_OPD='KECAMATAN' and KDSTUNIT IN (3) and left(KDUNIT,".$JL3.")='".$rowsub->KDUNIT."' AND UNITKEY ".$_qrykec." AND UNITKEY!='203' ORDER BY kdunit");$child_kecsub="";
			foreach($qrysubsub->result() as $rowsubsub){
				$child_kecsub.='{title: "'.$rowsubsub->KDUNIT.' '.$rowsubsub->NMUNIT.'", key: "'.$rowsubsub->UNITKEY.'" },';
			}
			$child_kec.='{title: "'.$rowsub->KDUNIT.' '.$rowsub->NMUNIT.'", isFolder: true,
					children: [
						'.substr($child_kecsub,0,-1).'		
					]
				},';
		}
		$title_kec.='{title: "'.$row->KDUNIT.' '.$row->NMUNIT.'", isFolder: true,
			children: [
				'.substr($child_kec,0,-1).'				
			]
		},';		
	}

	

?>

<script type="text/javascript">	
	$( document ).ready(function() {	
		
		var treeDataKec = [ <?=substr($title_kec,0,-1)?> ];
		
		////////// SKPD
		$("#tree_kec").dynatree({
			onActivate: function(node) {			
				Fm.UNITKEY_KEC.value=node.data.key;Fm.submit();
			},
			children: treeDataKec
		});

		$('#kec').click(function(){	
			$('#popkec').modal('show'); 
		});

		
	});
</script>	