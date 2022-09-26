<?php

// EXTRAE LOS DATOS DE JSON
function getEmployeesData() {
	return file_get_contents("../../resources/employees.json");
	
}

function addEmployee(array $newEmployee) {
	$employeeArray = json_decode(file_get_contents("../../resources/employees.json"), true);
	$newArray = array();
	$id = array();
	
    foreach($employeeArray as $employee) {
        // ID vacío para almacenar los ids del json
		$id[] = $employee["id"];
	}
    echo $id;
    
    // El valor máximo id + 1(para incrementarlo)
	$newId = max($id) + 1;
	$newArray = array(
		"id" => $newId,
		"name" => $newEmployee["name"],
		"email" => $newEmployee["email"],
		"age" => $newEmployee["age"],
		"streetAddress" => $newEmployee["streetAddress"],
		"city" => $newEmployee["city"],
		"state" => $newEmployee["state"],
		"postalCode" => $newEmployee["postalCode"],
		"phoneNumber" => $newEmployee["phoneNumber"],
	);

	array_push($employeeArray, $newArray);

	file_put_contents("../../resources/employees.json", json_encode($employeeArray));
// TODO implement it
}



function updateEmployee(array $updateEmployee, $id)
{
// TODO implement it
$employeData  = json_decode(file_get_contents('../resources/employees.json'), true);

	// for($i = 0; $i < count($employeData); $i++){
	// 	if($employeData[$i]['id'] ==  $updateEmployee['id']){
	// 		    $employeData[$i]['name']           = $updateEmployee['name'];
    //             $employeData[$i]['lastName']       = $updateEmployee['lastName'];
    //             $employeData[$i]['email']          = $updateEmployee['email'];
    //             $employeData[$i]['gender']         = $updateEmployee['gender'];
    //             $employeData[$i]['city']           = $updateEmployee['city'];
    //             $employeData[$i]['streetAddress']  = $updateEmployee['streetAddress'];
    //             $employeData[$i]['state']          = $updateEmployee['state'];
    //             $employeData[$i]['age']            = $updateEmployee['age'];
    //             $employeData[$i]['postalCode']     = $updateEmployee['postalCode'];
    //             $employeData[$i]['phoneNumber']    = $updateEmployee['phoneNumber'];
	// 	}

	// 	file_put_contents('../../resources/employees.json', json_encode($employeData));
	// }


	foreach($employeData as $i => $employeDataObj){
		
		if($employeDataObj['id'] == $id){
			// display current employ
			$employeDataObj[$i] = array_merge($employeDataObj, $updateEmployee);
		}
			file_put_contents('../../resources/employees.json', json_encode($employeData));
			
	}

  	
}






function deleteEmployee(string $id){
        $employees = json_decode(file_get_contents('../../resources/employees.json'), true);
        for ($i = 0; $i < count($employees); $i++){
            if ($employees[$i]['id'] == $id){
            array_splice($employees, $i , 1);
            }
        }
        file_put_contents('../../resources/employees.json', json_encode($employees));
        echo json_encode($employees);
}



function getEmployee(string $id){

$employeData  = json_decode(file_get_contents('../resources/employees.json'), true);

	foreach($employeData as $employeDataObj){
		// Si el $employeObj == al parametro Id
		if($employeDataObj['id'] == $id){
			// display current employ
			return $employeDataObj;
		}
	}
	return null;

}








function removeAvatar($id)
{
// TODO implement it
}


// function getQueryStringParameters(): array
{
// TODO implement it
}

// function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}