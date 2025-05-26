<?php require_once __DIR__ . '/../init.php'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>

<div class="card hitori-card">
    <h2>Gotoh Hitori</h2>
    <div class="character-image-container">
        <button class="image-nav left" onclick="changeImage('left')">←</button>
        <img src="<?php echo BASE_URL; ?>assets/img/gotoh_hitori_1.jpg" alt="Gotoh Hitori" id="character-image">
        <button class="image-nav right" onclick="changeImage('right')">→</button>
    </div>
    <p>Gotoh Hitori, also known as Bocchi-chan, is the main character of the <?php echo $theme ?>. She is a shy and
        introverted girl who dreams of becoming a rock star.</p>
</div>

<div class="navigation-buttons">
    <a href="ryo.php" class="nav-button">← Previous</a>
    <a href="kita.php" class="nav-button">Next →</a>
</div>

<?php include __DIR__ . '/../components/back_button.php'; ?>
<?php include __DIR__ . '/../components/footer.php'; ?>