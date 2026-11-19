<?php
$taches = [
    [
        'id' => 1,
        'titre' => 'Créer la structure HTML',
        'description' => 'Réaliser la structure HTML de la page d’accueil.',
        'date_limite' => '2026-11-15',
        'priorite' => 'Haute',
        'terminee' => true
    ],
    [
        'id' => 2,
        'titre' => 'Intégrer les styles CSS',
        'description' => 'Appliquer les couleurs et les espacements.',
        'date_limite' => '2026-11-17',
        'priorite' => 'Moyenne',
        'terminee' => false
    ],
    [
        'id' => 3,
        'titre' => 'Créer les fonctions PHP',
        'description' => 'Organiser les traitements de la Todo List.',
        'date_limite' => '2026-11-10',
        'priorite' => 'Haute',
        'terminee' => true
    ],
    [
        'id' => 4,
        'titre' => 'Tester l’application',
        'description' => 'Vérifier le bon fonctionnement et corriger les erreurs.',
        'date_limite' => '2026-11-20',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 5,
        'titre' => 'Préparer la collection des tâches',
        'description' => 'Créer un tableau multidimensionnel avec 8 tâches.',
        'date_limite' => '2026-11-12',
        'priorite' => 'Moyenne',
        'terminee' => true
    ],
    [
        'id' => 6,
        'titre' => 'Afficher les statistiques',
        'description' => 'Calculer et afficher le total, les tâches terminées et non terminées.',
        'date_limite' => '2026-11-21',
        'priorite' => 'Haute',
        'terminee' => false
    ],
    [
        'id' => 7,
        'titre' => 'Organiser les fichiers du projet',
        'description' => 'Créer un dossier pour le projet et y placer les fichiers (index.php, style.css).',
        'date_limite' => '2026-11-22',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 8,
        'titre' => 'Vérifier l’affichage des tâches',
        'description' => 'Tester tous les cas (terminée et non terminée) et corriger le style.',
        'date_limite' => '2026-11-24',
        'priorite' => 'Moyenne',
        'terminee' => false
    ]
];

// 3. Les statistiques
$total = count($taches);
$terminees = 0;

foreach ($taches as $tache) {
    if ($tache['terminee'] == true) {
        $terminees = $terminees + 1;
    }
}

$restantes = $total - $terminees;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ma Todo List</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
  <div class="container">

    <h1>Ma Todo List</h1>
    <p class="sous-titre">Gérez et suivez vos tâches quotidiennes</p>

    <!-- Statistiques -->
    <div class="stats">
      <div class="stat">
        <div class="texte">Total</div>
        <div class="nombre"><?php echo $total; ?></div>
        <div class="texte">tâches</div>
      </div>
      <div class="stat">
        <div class="texte">Terminées</div>
        <div class="nombre"><?php echo $terminees; ?></div>
        <div class="texte">tâches</div>
      </div>
      <div class="stat">
        <div class="texte">Non terminées</div>
        <div class="nombre"><?php echo $restantes; ?></div>
        <div class="texte">tâches</div>
      </div>
    </div>

    <h2 class="titre-liste">Liste des tâches</h2>

    <!-- 2. Affichage des tâches avec foreach -->
    <?php foreach ($taches as $tache) { ?>

      <?php
        // Description limitée à 80 caractères
        $description = $tache['description'];
        if (mb_strlen($description) > 80) {
            $description = mb_substr($description, 0, 80) . '...';
        }

        // Date au format dd/mm/yyyy
        $date = date('d/m/Y', strtotime($tache['date_limite']));

        // Classe CSS de la priorité (haute, moyenne, basse)
        $classe_priorite = strtolower($tache['priorite']);

        // État de la tâche
        if ($tache['terminee']) {
            $classe_carte = 'carte terminee';
            $etat = 'Terminée';
            $classe_etat = 'etat-terminee';
            $icone = 'square-check';
        } else {
            $classe_carte = 'carte';
            $etat = 'À faire';
            $classe_etat = 'etat-afaire';
            $icone = 'square';
        }
      ?>

      <div class="<?php echo $classe_carte; ?>">
        <i data-lucide="<?php echo $icone; ?>"></i>
        <div class="infos">
          <h3><?php echo $tache['titre']; ?></h3>
          <p><?php echo $description; ?></p>
        </div>
        <span class="badge <?php echo $classe_priorite; ?>"><?php echo $tache['priorite']; ?></span>
        <span class="badge <?php echo $classe_etat; ?>"><?php echo $etat; ?></span>
        <span class="date"><i data-lucide="calendar"></i> <?php echo $date; ?></span>
      </div>

    <?php } ?>

  </div>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>