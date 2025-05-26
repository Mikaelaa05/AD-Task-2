<?php require_once __DIR__ . '/../init.php'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>

<div class="card">
    <h2>Meet Kessoku Band!</h2>
    <div class="character-list">
        <figure class="character-item">
            <img src="<?php echo BASE_URL; ?>assets/img/gotoh_hitori_1.jpg" alt="Gotoh Hitori">
            <figcaption><a href="hitori.php">Gotoh Hitori</a></figcaption>
        </figure>
        <figure class="character-item">
            <img src="<?php echo BASE_URL; ?>assets/img/ikuyo_kita_1.jpg" alt="Ikuyo Kita">
            <figcaption><a href="kita.php">Kita Ikuyo</a></figcaption>
        </figure>
        <figure class="character-item">
            <img src="<?php echo BASE_URL; ?>assets/img/ichiji_nijika_1.jpg" alt="Ichiji Nijika">
            <figcaption><a href="nijika.php">Ichiji Nijika</a></figcaption>
        </figure>
        <figure class="character-item">
            <img src="<?php echo BASE_URL; ?>assets/img/yamada_ryo_1.jpg" alt="Yamada Ryo">
            <figcaption><a href="ryo.php">Yamada Ryo</a></figcaption>
        </figure>
    </div>
</div>

<?php include __DIR__ . '/../components/back_button.php'; ?>
<?php include __DIR__ . '/../components/footer.php'; ?>