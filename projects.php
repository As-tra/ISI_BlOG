<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Main Template Css File-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Render All Elements Normally-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Work+Sans:wght@100..900&display=swap" rel="stylesheet">
    <title>ISI_BlOG</title>
</head>

<body>
    <?php include_once "includes/header.php"; ?>
    <?php include_once "includes/database.php"; ?>
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
                $tags = json_decode($project['tags']);
                echo "<url>";
                foreach ($tags as $tag) {
                    echo "<li>" . $tag . "</li>";
                }
                echo "</ul>";
                echo "</div>";
            }
            ?>

        </div>
</body>

</html>