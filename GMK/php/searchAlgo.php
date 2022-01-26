<?php
     class SearchAlgo{
        function searchUser($search) {
            $query = "SELECT * FROM `team_name` as team JOIN `team_register` as member ON team.id = member.team WHERE team.team_name LIKE '%$search%'";
            return $this->executeSearchCommand($query);
        }

        function getAllUser() {
            $query = "SELECT * FROM `team_name` as team JOIN `team_register` as member ON team.id = member.team WHERE 1"; 
            return $this->executeSearchCommand($query);
        }

        private function executeSearchCommand($query) {
            $data = RequestServices::createRequest($query);
            $responses = $data->execute();
            if ($responses->resultsNumber > 0) {
                $response = [];
                for($i=0;$i<$responses->resultsNumber;$i++){
                    $row = $responses->results[$i];
                    $member = new TeamMember($row["id"], $row["team_name"], $row["name"], $row["surname"],$row["date"],$row["phone"],$row["email"]);
                    $response[] = $member->createJson();
                }
            }
            return $response;
        }
    }
?>