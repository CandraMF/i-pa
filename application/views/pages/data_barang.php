<div class="row">
	<div class="card">
	  <div class="card-header"> 
		  <div class="row">
        <div class="col-md-4">
          <h5><?=$_title?></h5>
        </div>
        <div class="col-md-8">
          <span class="label label-info float-end" <?=$_pinsert?>>
            <a href="<?=base_url('login/pages/'.$Pr.'/detail')?>" class="btn btn-primary">
              <i class="icon bi bi-plus-sign"></i> Baru
            </a>
          </span>
        </div>
		  </div>
	  </div>
	  <div class="card-body nopadding">		
		<div class="table-responsive">
			<table class="table table-bordered data-table display dt-responsive">
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
				<?php
					$Qry="SELECT a.RecId, a.KdObat, a.Barcode, a.NamaObat, a.Satuan, a.Kelompok, a.Kategori, a.HargaBeli, b.NmGudang, a.KdRO, a.KdElog, a.NmElog, a.O20, a.o150 FROM dbipa_".$_tahun.".t_obat AS a LEFT JOIN dbipa_".$_tahun.".t_gudang AS b ON  a.IdGudang=b.IdGudang ORDER BY a.KdObat";
					$query=$this->db->query($Qry);
					foreach($query->result() as $row){
						echo "
							<tr>
								<td>{$row->KdObat}</td>
								<td>{$row->NamaObat}</td>
								<td>{$row->Satuan}</td>
								<td>{$row->Kelompok}</td>
								<td>{$row->Kategori}</td>
								<td>{$row->NmGudang}</td>
								<td>{$row->KdRO}</td>
								<td align=center style='width:100px;'>
								<p align=center>
									<a href='".base_url('login/pages/'.$Pr.'/detail/edit/'.$row->RecId)."'".$_pupdate."><i class='icon icon-edit'></i> Edit</a>	
									&nbsp;&nbsp;
									<a href='".base_url("login/pages/".$Pr."/detail/hapus/".$row->RecId)."' ".$_pdelete."><i class='icon icon-remove'></i> Delete</a>
								</p>
								</td>
							</tr>
						";
					}
					
				?>
			</tbody>
			</table>
		</div>		
	  </div>
	</div>
</div>