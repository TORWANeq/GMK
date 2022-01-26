<?php
    class UserManagment {
        function removeUser($id) {
            $query = "DELETE FROM `team_register` WHERE `id`=$id";
            $data = RequestServices::createRequest($query);
            $responses = $data->update();
        }

        function addUserToTeam($team, $fName, $lName, $mobile, $birthday, $emailAddress) {
            $query = "SELECT team FROM `team_name` as team JOIN `team_register` as member ON team.id = member.team WHERE team.team_name = '$team'";
            $data = RequestServices::createRequest($query);
            $responses = $data->execute();
            if($responses->resultsNumber < 8) {
                $date = date('Y-m-d', strtotime($birthday));
                $team = $responses->results[0]["team"];
                $query = "Insert into `team_register` (`team`, `name`, `surname`, `phone`, `date`, `email`) 
                    values('$team','$fName','$lName','$mobile','$date','$emailAddress')";
                $data = RequestServices::createRequest($query);
                $responses = $data->update();

                $responseArr = [];
                $responseArr["success"] = "201";
                $responseArr["msg"] = "Added successfully $fName $lName member to $team";
                
                echo json_encode($responseArr);
            } else {
                $responseArr = [];
                $responseArr["success"] = "101";
                $responseArr["msg"] = "Team $team is completely filled";
                
                echo json_encode($responseArr);
            }
        }

        function changeUser($fName, $lName, $mobile, $birthday, $emailAddress, $id) {
            $query = "UPDATE `team_register` SET `name` = '$fName', `surname`='$lName', `phone`='$mobile',`date`='$birthday',`email`='$emailAddress' WHERE `id`=$id";
             $data = RequestServices::createRequest($query);
            $responses = $data->update();
        }
    }
?>