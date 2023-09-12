<?php
// Function to fetch movie/TV show details from OMDB API
function getMovieInfo($title) {
    $apiKey = 'YOUR_OMDB_API_KEY'; // Replace with your OMDB API key

    // URL to the OMDB API
    $url = "https://imdb-api.com/en/API/The Wheel of Time/k_aubvp5tl/tt1375666/FullActor,FullCast,Posters,Images,Trailer,Ratings,Wikipedia," ;

    // Send a GET request to the OMDB API
    // $response = file_get_contents($url);

    // Parse the JSON response
    $data = json_decode($url, true);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["movie_title"];

    if (!empty($searchTerm)) {
        $movieInfo = getMovieInfo($searchTerm);

        if ($movieInfo && !empty($movieInfo["title"])) {
            echo "<h1>{$movieInfo['fullTitle']}</h1>";
            echo "<p>Year: {$movieInfo['year']}</p>";
            echo "<p>Genre: {$movieInfo['genres']}</p>";
            echo "<p>Plot: {$movieInfo['plot']}</p>";
            echo "<p>IMDb Rating: {$movieInfo['imDbRating']}</p>";
            echo "<img src='{$movieInfo['image']}' alt='{$movieInfo['fullTitle']} Poster'>";
        } else {
            echo "Movie or TV show not found.";
        }
    } else {
        echo "Please enter a movie or TV show title.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>IMDb Movie/TV Show Info</title>
</head>
<body>
    <h2>Enter a Movie or TV Show Title:</h2>
    <form method="POST" action="">
        <input type="text" name="movie_title">
        <input type="submit" value="Search">
    </form>
</body>
</html>
