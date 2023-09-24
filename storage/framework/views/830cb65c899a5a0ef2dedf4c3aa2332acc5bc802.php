<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/css/user/payment-confirmation.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/>
    <title>Bake & Take | <?php echo e($title); ?></title>
</head>
<body>
    <div class="main-container">
        <div class="head-text">Transaction Detail</div>
        <div class="inner-container">
            <img src="<?php echo e(Storage::url($transactionDetail->obat->obat_photo)); ?>" alt="Gambar Kue" width="303px" height="255px" class="img-kue">
            <div class="payment-detail">
                <div class="display-kanan">
                    <div><b>Medicine Name: <?php echo e($transactionDetail->obat->obat_name); ?></b></div>
                </div>
                <div class="display-kanan">
                    <div>Subtotal Product: <?php echo e($transactionDetail->quantity * $transactionDetail->obat->obat_price); ?></div>
                </div>
                <div class="display-kanan">
                    <div>Handling Fee: 1.000</div>
                </div>
                <div class="display-kanan">
                    <div>Service Fee: 1.500</div>
                </div>
                <div class="total-harga">
                    <div>Total Payment: <?php echo e(($transactionDetail->quantity * $transactionDetail->obat->obat_price) + 2500); ?></div>
                </div>
                <div class="metode-pembayaran">
                    <div>Payment Method: Transfer</div>
                </div>
            </div>
        </div>
        <div class="btn-container">
            <div class="btn-konfirmasi">
                <a href="/user/transaction"><button>Back</button></a>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Kuliah\Software Engineering\Project\Sehatin\resources\views/user/transaction-detail.blade.php ENDPATH**/ ?>