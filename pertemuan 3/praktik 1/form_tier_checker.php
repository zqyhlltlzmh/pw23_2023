<?php
    include_once 'atas.php';
?>

<div class="container my-5">
	        <h1 class="text-center mb-4">Mobile Legend Tier Checker</h1>
	        <form action="" method="post">
	    <div class="form-floating mb-3">
	        <label for="nickname">Nickname</label>
	        <input type="text" class="form-control" id="nickname" name="nickname" required>
	    </div>
	    <div class="form-floating mb-3">
	        <label for="jumlahMenang">Jumlah Menang</label>
	        <input type="number" class="form-control" id="jumlahMenang" name="jumlahMenang" required>
	    </div>
	    <div class="form-floating mb-3">
	        <label for="jumlahKalah">Jumlah Kalah</label>
	        <input type="number" class="form-control" id="jumlahKalah" name="jumlahKalah" required>
        </div>
	    <button name="submit" type="submit" class="btn btn-primary">Check Tier</button>
	 </form>
</div>
        
<?php
    require_once 'libfungsi.php';
    if(isset($_POST['submit'])){
        $nickname = $_POST['nickname'];
        $menang = $_POST['jumlahMenang'];
        $kalah = $_POST['jumlahKalah'];
    
        $wr = winRate($menang, $kalah);
        $tier = cekTier($wr);
        $predikat = predikat($wr);
    
    
    
?>

<div class="mt-4">
    <h2>hasil:</h2>
    <p>Nickname: <?= $nickname; ?></p>
    <p>Win Rate: <?= number_format($wr * 100, 2) ?>%</p>
    <p>Tier: <?= $tier; ?></p>
    <p>Predikat: <?=$predikat; ?></p>

</div>


<?php
}
    include_once 'bawah.php';
?>
				