<?php include_once "includes/database.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="seprator"></div>
    <h1 class="title">
        Projects
    </h1>
    <div class="seprator"></div>

    <div class="projects-container">
        <div>List Project</div>
        <div class="projects-list">
            <?php
            include_once "includes/functions.php";
            $projects = fetchProjects($conn);
            foreach ($projects as $project) {
                echo "<div class='project-item'>";
                echo "<h2>" . htmlspecialchars($project['title']) . "</h2>";
                echo "<p>" . htmlspecialchars($project['description']) . "</p>";
                echo "<img src='" . htmlspecialchars($project['image_path']) . "' alt='Project Image'>";
                echo "</div>";
            }
            ?>

    </div>
</body>

</html>