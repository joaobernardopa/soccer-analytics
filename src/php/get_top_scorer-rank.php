<?php

require "/src/php/database_connection.php";

function get_top_scorer_rank(){

    $conn = create_db_connection();
    $sql = $conn->prepare("SELECT PLAYER, SUM(GOALS) FROM PLAYER_GOALS GROUP BY PLAYER;");
    $sql->execute();

    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    

    $conn = close_db_connection($conn);
}

?>