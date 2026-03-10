<?php include 'funct.php'; ?>
<html>
<head>
    <title>User</title>
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: #ffffff;
    margin-top: 10px;
    padding: 20px;
}

header {
    background: #3366cc;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
}

header h1 {
    margin: 0;
    color: white;
}

header h1 span {
    font-size: 1.5rem;
    margin: 0 5px;
}

.container {
    max-width: 1000px;
    margin: 30px auto;
    padding: 0 15px;
}

.section-title {
    text-align: center;
    margin-bottom: 30px;
}

.section-title h2 {
    font-size: 1.5rem;
    color: #3366cc;
    font-weight: normal;
}

.movie-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.movie-card {
    background: #f9f9f9;
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    border: 1px solid #e0e0e0;
}

.movie-card:hover {
    background: #f0f0f0;
}

.movie-icon {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #3366cc;
}

.movie-card h3 {
    font-size: 1.1rem;
    margin: 10px 0;
    color: #333333;
}

.movie-info {
    margin: 10px 0;
    font-size: 0.9rem;
    color: #666666;
}

.movie-info span {
    display: inline-block;
    background: #e6e6e6;
    color: #333333;
    padding: 5px 10px;
    border-radius: 15px;
}

.btn-book {
    display: inline-block;
    background: #3366cc;
    color: white;
    text-decoration: none;
    padding: 8px 20px;
    border-radius: 20px;
    margin-top: 10px;
    font-size: 0.9rem;
}

.btn-book:hover {
    background: #2554a3;
}

.konfirmasi-box {
    background: #f9f9f9;
    border-radius: 5px;
    padding: 25px;
    text-align: center;
    max-width: 450px;
    margin: 40px auto;
    border: 1px solid #e0e0e0;
}

.konfirmasi-box h2 {
    color: #3366cc;
    margin-bottom: 20px;
    font-size: 1.4rem;
}

.ticket-details {
    background: #e6e6e6;
    padding: 15px;
    border-radius: 5px;
    margin: 15px 0;
    text-align: left;
}

.ticket-details div {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
    padding-bottom: 10px;
    border-bottom: 1px solid #cccccc;
    font-size: 0.9rem;
}

.ticket-details div:last-child {
    border-bottom: none;
}

.btn-kembali {
    display: inline-block;
    color: #3366cc;
    text-decoration: none;
    padding: 8px 20px;
    border: 1px solid #3366cc;
    border-radius: 20px;
    margin-top: 15px;
}

.btn-kembali:hover {
    background: #3366cc;
    color: white;
}

footer {
    text-align: center;
    padding: 20px;
    color: #666666;
    margin-top: 30px;
    font-size: 0.8rem;
}

/* --- Responsive Design --- */
@media (max-width: 768px) {
    header h1 {
        font-size: 1.5rem;
    }
    
    .section-title h2 {
        font-size: 1.3rem;
    }
    
    .movie-grid {
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 480px) {
    header h1 {
        font-size: 1.3rem;
    }
    
    .movie-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
</head>
<body>

<header>
    <h1><span>🎬</span> CKTC Cinema <span>🍿</span></h1>
</header>

<div class="container">
    <div class="section-title">
        <h2>Sedang Tayang</h2>
    </div>

    <div class="movie-grid">
        <?php
        $movies = getMovies();
        foreach ($movies as $movie) {

            echo "<div class='movie-card'>";
            echo "<div class='movie-icon'>🎥</div>";
            echo "<h3>{$movie['nama']}</h3>";
            echo "<div class='movie-info'>";
            echo "<span>⏰ {$movie['mulai']} - {$movie['selesai']}</span>";
            echo "</div>";
            echo "<a class='btn-book' href='konfirmasi.php?film={$movie['nama']}&jam={$movie['mulai']}-{$movie['selesai']}'>Pesan Tiket</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<footer>
    <p>&copy; 2026 Bioskop CKTC by Airin S. & Michael G.</p>
</footer>

</body>
</html>