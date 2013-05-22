<?php
	$total = 238;
	$baru = 17;
	$antri = 51;
	$lk	= 14;
	$pr = $antri - $lk;
	$blm_dpgl = 24;
	$selesai = $total - $blm_dpgl;
?>
            	<!-- Statistics Button Container -->
            	<div class="mws-report-container clearfix">
                	
                    <!-- Statistic Item -->
                	<a class="mws-report" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-report-icon mws-ic ic-group"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-report-content">
                        	<span class="mws-report-title">Total Pasien</span>
                            <span class="mws-report-value"><?php echo $total; ?></span>
                        </span>
                    </a>

                	<a class="mws-report" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-report-icon mws-ic ic-group-go"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-report-content">
                        	<span class="mws-report-title">Baru Masuk</span>
                            <span class="mws-report-value down"><?php echo $baru; ?></span>
                        </span>
                    </a>

                	<a class="mws-report" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-report-icon mws-ic ic-user"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-report-content">
                        	<span class="mws-report-title">Pasien Laki-laki</span>
                            <span class="mws-report-value"><?php echo $lk; ?></span>
                        </span>
                    </a>
					
					<a class="mws-report" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-report-icon mws-ic ic-user-female"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-report-content">
                        	<span class="mws-report-title">Pasien Perempuan</span>
                            <span class="mws-report-value"><?php echo $pr; ?></span>
                        </span>
                    </a>
                    
                	<a class="mws-report" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-report-icon mws-ic ic-walk"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-report-content">
                        	<span class="mws-report-title">Selesai Berobat</span>
                            <span class="mws-report-value up"><?php echo $selesai; ?></span>
                        </span>
                    </a>
                </div>
                
                <!-- Panels Start -->
                
            	<div class="mws-panel grid_5">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-graph">Statistik Rekam Medik</span>
                    </div>
                    <div class="mws-panel-body">
                    	<div class="mws-panel-content">
	                    	<div id="mws-dashboard-chart" style="width:100%; height:219px;"></div>
                        </div>
                    </div>
                </div>
                
            	<div class="mws-panel grid_3">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-books-2">Data Pasien Hari Ini</span>
                    </div>
                    <div class="mws-panel-body">
                        <ul class="mws-summary">
                        
                            <li>
                                <span><?php echo $total; ?></span> Pasien Hari Ini
                            </li>
                            <li>
                                <span><?php echo $antri; ?></span> Antrian</li>
                            <li>
                                <span><?php echo $blm_dpgl; ?></span> Belum Dipanggil
                            </li>
                            <li>
                                <span><?php echo $selesai; ?></span> Sudah Selesai Berobat
                            </li>
                        </ul>
                    </div>
                </div>