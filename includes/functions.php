

<?php


function fetchProjects($conn){
    include_once "models/constants.php";

    $query = "SELECT * FROM projects";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error fetching projects: " . mysqli_error($conn));
    }

    $projects = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $projects[] = $row;
    }

    return $projects;
}




