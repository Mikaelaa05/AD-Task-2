<?php require_once __DIR__ . '/../init.php'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>

<div class="card kita-card">
    <h2>Ikuyo Kita</h2>
    <div class="character-image-container">
        <button class="image-nav left" onclick="changeImage('left')">←</button>
        <img src="<?php echo BASE_URL; ?>assets/img/ikuyo_kita_1.jpg" alt="Kita Ikuyo" id="character-image">
        <button class="image-nav right" onclick="changeImage('right')">→</button>
    </div>
    <p>Ikuyo Kita is a member of the Kessoku Band and plays the guitar. She is known for her cheerful personality and
        love for music.</p>
</div>

<div class="navigation-buttons">
    <a href="hitori.php" class="nav-button">← Previous</a>
    <a href="nijika.php" class="nav-button">Next →</a>
</div>

<?php include __DIR__ . '/../components/back_button.php'; ?>
<?php include __DIR__ . '/../components/footer.php'; ?>