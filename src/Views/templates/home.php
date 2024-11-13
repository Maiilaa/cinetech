<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./public/style.css?t=<?php echo time(); ?>">
</head>
<body>
    <main>
        <h1><?php echo $title; ?></h1>
        <div class="movies-grid">
            <?php foreach ($movies as $movie): ?>
            <div class="movie-card">
                <img src="https://image.tmdb.org/t/p/w200<?= $movie['poster_path'] ?>" alt="<?= htmlspecialchars($movie['title']) ?>">
                <h3><?= htmlspecialchars(string: $movie['title']) ?></h3>
            </div>
            <?php endforeach; ?>
        </div>
    </main> 
</body>
</html>