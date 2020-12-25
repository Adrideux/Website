<?php
    $pdo = new PDO('sqlite:'.getcwd().'/database/events.db');
    $query = $pdo->query('SELECT * FROM EVENT');
    if($query === false){
        var_dump($pdo->errorInfo());
        die('Erreur SQL');
    }
    $db = $query->fetchAll(PDO::FETCH_OBJ);

    require_once getcwd()."/static/php/sorting.php";
    return db_sorting($db);
?>
