<?php
session_start();
require ('employeeManager.php');

// ------------------------------------------------------------------------------------------------ //
if(isset($_GET["action"]) && $_GET["action"] === "listEmployees"){
    // Dashborad first View + So that The Rest Of Statements Work
    echo getEmployeesData();
    
    }else if (isset($_GET['action']) && $_GET['action'] === 'createEmploy'){
        // 
        $newEmployee = [
            "name"          => $_POST['name'],
            "lastName"      => $_POST['lastName'],
            "email"         => $_POST['email'],
            "gender"        => $_POST['gender'],
            "city"          => $_POST['city'],
            "streetAddress" => $_POST['streetAddress'],
            "state"         => $_POST['state'],
                "age"           => $_POST['age'],
                "postalCode"    => $_POST['postalCode'],
                "phoneNumber"   => $_POST['phoneNumber'],
                ];
                addEmployee($newEmployee);

                
            } else if  (isset($_GET['action']) && $_GET['action'] === 'deleteEmployee' ){
                // Delete Fuction Statement Must Goes Before Update
                $employeeId = $_GET['id'];

                deleteEmployee($employeeId);
            } else if (isset($_GET['id'])) {
                $getID = $_GET['id'];
                $updateEmployee = array(
                    "id"            => $getID,
                    "name"          => $_POST['name'],
                    "lastName"      => $_POST['lastName'], 
                    "email"         => $_POST['email'],
                    "gender"        => $_POST['gender'],
                    "city"          => $_POST['city'],
                    "streetAddress" => $_POST['streetAddress'],
                    "state"         => $_POST['state'],
                    "age"           => $_POST['age'],
                    "postalCode"    => $_POST['postalCode'],
                    "phoneNumber"   => $_POST['phoneNumber'],
                );
                updateEmployee($updateEmployee);
                // header("Location: ./dashboard.php");

            }
    ?>

