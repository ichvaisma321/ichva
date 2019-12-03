<html>
	<head>
		<title>Form Detail - CRUD Codeigniter</title>
	</head>
	<body>
		<h1>Biodata Siswa UMBandung</h1>
		<div style="color: red;"><?php echo validation_errors(); ?></div>>
		<?php echo form_open("siswa/detail"); ?>
        <table cellpadding="8">
        <div class="card">
                <div class="card-body">
                    <h7 class="card-title"><?= $siswa['nama'] ?></h7>
                    <p class="card-text"><?= $siswa['nis']; ?></p>
                    <a href="<?= base_url(); ?>siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>
	</body>
</html>
