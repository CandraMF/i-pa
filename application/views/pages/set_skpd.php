<div class="row">
	<div class="card">
	  <div class="card-header"> 
		<h5><?=$_title?></h5>
		 <span class="label label-info" <?=$_pinsert?>>
			<a href="<?=base_url('login/pages/'.$Pr.'/detail')?>"   >
				<i class="icon bi bi-plus-sign"></i> Tambah
			</a>
			
			
		 </span>
	  </div>
	  <div class="card-body nopadding">		
		<table class="table table-bordered data-table">
		  <thead>
			<tr>
			  <th width='50'>Kode</th>
			  <th>Nama</th>
			  <th>Aksi</th>
			</tr>
		  </thead>
		  <tbody>		  
			<?php
				$Qry="select Id, KdUnitKerja , NmUnitKerja from dbipa_".$_tahun.".tbl_set_skpd";
				$TdAdd="
					<td align=center style='width:100px;'>
					<p align=center>
						<a href='".base_url('login/pages/'.$Pr.'/detail/edit/[/]row->Id[\]')."'".$_pupdate."><i class='icon icon-edit'></i> Edit</a>	
						&nbsp;&nbsp;
						<a href='".base_url("login/pages/".$Pr."/detail/hapus/[!>]row->Id[<!]")."' ".$_pdelete."><i class='icon icon-remove'></i> Delete</a>
					</p>
					</td>
				";
				$ArrData=array('Id');
				echo $this->m_auth->getTable($Qry,$TdAdd,$ArrData);
			?>
		  </tbody>
		</table>		
	  </div>
	</div>
</div>