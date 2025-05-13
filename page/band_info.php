<?php include '..components/header.php'; ?>

<div class="card">
    <h2>Kessoku Band Members</h2>
    <?php
    $band_members = [
        [
            'name' => 'Gotoh Hitori',
            "role" => "Guitarist",
            "description" => "A shy and introverted girl who dreams of becoming a rock star.",
            'image' => 'gotoh_hitori_1.jpg',
            'link' => 'hitori.php'
        ],
        [
            'name' => 'Ikuyo Kita',
            "role" => "Vocalist",
            "description" => "A cheerful and outgoing member who loves music.",
            'image' => 'ikuyo_kita_1.jpg',
            'link' => 'kita.php'
        ],
        [
            'name' => 'Ichiji Nijika',
            "role" => "Drummer",
            "description" => "An energetic drummer who keeps the band together.",
            'image' => 'ichiji_nijika_1.jpg',
            'link' => 'nijika.php'
        ],
        [
            'name' => 'Yamada Ryo',
            "role" => "Bassist",
            "description" => "A cool and mysterious bassist with a quirky attitude.",
            'image' => 'yamada_ryo_1.jpg',
            'link' => 'ryo.php'
        ]
    ];

    function displayMember($member)
    {
        global $theme, $BASE_URL;
        echo "<div class='band-member'>";
        echo "<img src='{$BASE_URL}assets/img/{$member['image']}' alt='{$member['name']}'>";
        echo "<h3>{$member['name']}</h3>";
        echo "<p><strong>Role:</strong> {$member['role']}</p>";
        echo "<p>{$member['description']}</p>";
        echo "<a href='{$member['link']}' class='button'>Learn More</a>";
        echo "</div>";
    }
    ?>
</div>