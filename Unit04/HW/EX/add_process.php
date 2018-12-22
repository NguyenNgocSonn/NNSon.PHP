<?php 
session_start();

function getAllStudents() {
	return isset($_SESSION['data_arr']) ? $_SESSION['data_arr'] : array();
}

function getStudent($student_id) {

	$data_arr = getAllStudents();
	$data = array();

	foreach ($data_arr as $item) {
		if ($item['student_id'] == $student_id) {
			$data[] = $item;
		}
	}

	return $data;
}

function deleteStudent($student_id) {

	$data_arr = getAllStudents();

	foreach ($data_arr as $key => $item) {
		if ($item['student_id'] == $student_id) {
			unset($data_arr[$key]);
		}
	}

	$_SESSION['data_arr'] = $data_arr;

	return $data_arr;
}

function updateStudent($student_id,$student_name,$student_email,$student_gender,$student_address) {

	$data_arr = getAllStudents();

	$new_student = array(
		'student_id' => $student_id,
		'student_name' => $student_name,
		'student_email' => $student_email,
		'student_gender' => $student_gender,
		'student_address' => $student_address
	);

	$is_update_action = false;
	foreach ($data_arr as $key => $item) {
		if ($item['student_id'] == $student_id) {
			$data_arr[$key] = $new_student;
			$is_update_action = true;
		}
	}

	if (!$is_update_action) {
		$data_arr[] = $new_student;
	}

	$_SESSION['data_arr'] = $data_arr;


	return $data_arr;
}
?>