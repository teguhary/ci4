<?= $this->extend('layout/template'); ?>
    
<?= $this->section('content'); ?>

<?= $this->include('home/imageSlider');  ?> 

<?= $this->include('home/socialMedia');  ?> 

<?= $this->include('home/fitur');  ?> 

<?= $this->include('home/product');  ?> 

<?= $this->include('home/discount');  ?> 

<?= $this->endSection(); ?>