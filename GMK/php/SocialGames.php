<?php
    require_once '../loginphp.php';

    class SocialGames {
        function addTeamToGame($teamsId, $gameId) {
           $query = "INSERT INTO `team_games`(`gra`, `team_id`) VALUES ('$gameId', '$teamsId')";
           $data = RequestServices::createRequest($query);
           $responses = $data->insert();
        }

        function createGame($name) {
           $query = "INSERT INTO `name_of_game`(`name`) VALUES ('$name')";
           echo $query;
           $data = RequestServices::createRequest($query);
           return $data->insert();
        }
    }
    $socialGames = new SocialGames();
    $socialGames->createGame("Gra miejska 2");
    $socialGames->addTeamToGame(24, 2);
?>

