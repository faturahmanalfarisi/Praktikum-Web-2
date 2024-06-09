<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai</title>
</head>

<body>
    <?php
        $nama = 'Faturahman Alfarisi';
        $nilai = 99.99;
    ?>
    
    <?php if($nilai >= 60): ?>
        <?php $ket = "Lulus"; ?>
    <?php else: ?>
        <?php $ket = "Gagal"; ?>
    <?php endif; ?>
    <h1>Siswa <?php echo e($nama); ?> dengan nilai <?php echo e($nilai); ?> dinyatakan <?php echo e($ket); ?></h1>
</body>

</html><?php /**PATH C:\xampp\htdocs\Praktikum Web 2\praktikum09\resources\views/nilai.blade.php ENDPATH**/ ?>