<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FitPro - Home</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="nano">

        <header class="home-header">

            <div>
                <p>Good evening</p>
                <h1>anas</h1>
            </div>

            <div class="user-info">
                <span class="bot">Beginner</span>
                <span class="coin">🪙 0</span>
            </div>

        </header>

        <section class="activity-card">

            <div class="activity-title">
                <h2>Today's Activity</h2>
                <span>Today</span>
            </div>

            <div class="activity-stats">

                <div>
                    <strong>👣</strong>
                    <b>0</b>
                    <span>Steps</span>
                </div>

                <div>
                    <strong>🔥</strong>
                    <b>0</b>
                    <span>Calories</span>
                </div>

                <div>
                    <strong>💧</strong>
                    <b>0/8</b>
                    <span>Water</span>
                </div>

            </div>

            <div class="activity-progress"></div>

            <p class="activity-message">
                🔴 Get moving! Start your activity today.
            </p>

        </section>

        <h2 class="section-title">
            Quick Start
        </h2>

        <section class="quick-start">

            <a href="/workouts" class="quick-card workout">

                <?php foreach ( $articles as $article ): ?>

                <span><?=$article['image']?></span>

                <strong class="tit-card"><?=$article['titre']?></strong>

                <small><?=['contenu']?></small>

                <?php endforeach ;?>

            </a>


        </section>

        <section class="today-goal">

            <div>
                <small>Today's Goal</small>
                <h3>Keep moving 💪</h3>
            </div>

            <div class="goal-circle">
                0%
            </div>

        </section>

    </div>

    <nav class="bottom-nav">

        <a href="/dashboard" class="active">
            <span>⌂</span>
            Home
        </a>

        <a href="/workouts">
            <span>🏋️</span>
            Workout
        </a>

        <a href="#">
            <span>🥗</span>
            Nutrition
        </a>

        <a href="#">
            <span>🏃</span>
            Run
        </a>

        <a href="#">
            <span>👤</span>
            Profile
        </a>

    </nav>

</body>

</html>