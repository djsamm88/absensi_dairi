<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Form Ijin
        
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
      
	  
        <!-- /.box-header -->
        <div class="box-body">
		
		
		
		
		
		
		
			<form id="go_absen">
			
			
			
			
			<div class="col-sm-6">
			
					<input type="hidden" class="form-control" id="FID" readonly placeholder="FID" value="<?php echo $this->session->userdata('FID');?>">
				
					NIP
					<input type="text" class="form-control" id="NIK" readonly placeholder="NIK" value="<?php echo $this->session->userdata('NIK');?>">
					
					<br>
					Tanggal
					<input type="text" class="form-control" id="tanggal" required placeholder="tanggal">
					<br>
					Masuk / Pulang
					<select type="text" class="form-control" id="masuk_pulang" required>
						<option value="">--- Pilih ---</option>
						<option value="masuk">Masuk</option>
						<option value="pulang">Pulang</option>
					</select>
					<small>Hanya bisa mewakili salah satu</small>
					<br>
					Keterangan
					<textarea class="form-control" name="keterangan" required id="keterangan" placeholder="Keterangan"></textarea>
				
					<br>
					
					<button class="btn btn-info btn-block" type="submit">Go!</button>
			   
			</div>
			</form>
        </div>
		
        <!-- /.box-body -->
        <div class="box-footer">
          Required harus diisi.
        </div>
		
      </div>
      <!-- /.box -->
	  
	  
	  
	</section>


<script>
	 $(function () {
		//$('#tanggal').datepicker({format: 'Y-m-d'});
		$('#tanggal').datepicker({
			format: 'yyyy-mm-dd',
			maxDate: '0'
		}).on('changeDate', function(e){
			$(this).datepicker('hide');
		});
	});

	$("#go_absen").submit(function(){
		var tanggal 	= $("#tanggal").val();
		var keterangan 	= $("#keterangan").val();
		var NIK 		= $("#NIK").val();
		var masuk_pulang 		= $("#masuk_pulang").val();
		var FID 		= $("#FID").val();
		//eksekusi_controller('absensi/absen_by_nik/'+nik);
		
		$.post("<?php echo base_url()?>index.php/absensi/set_form_ijin_keterangan/",{FID:FID,NIK:NIK,tanggal:tanggal,masuk_pulang:masuk_pulang,keterangan:keterangan},function(e){
			//alert(e);
			
			//$(".content-wrapper").html(e);
			eksekusi_controller('index.php/absensi/data_ijin_keterangan_by_nik');
		});
		
		return false;
		
	})
	
	
</script>