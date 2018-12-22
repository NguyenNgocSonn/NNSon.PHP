<?php 
session_start();

function getListStudent() {
	return isset($_SESSION['data_arr']) ? $_SESSION['data_arr'] : array();
}

function getStudent($student_id) {

	$data_arr = getListStudent();
	$data = array();

	foreach ($data_arr as $item) {
		if ($item['student_id'] == $student_id) {
			$data[] = $item;
		}
	}

	return $data;
}

function deleteStudent($student_id) {

	$data_arr = getListStudent();

	foreach ($data_arr as $key => $item) {
		if ($item['student_id'] == $student_id) {
			unset($data_arr[$key]);
		}
	}

	$_SESSION['data_arr'] = $data_arr;

	return $data_arr;
}

function updateStudent($student_id,$student_name,$student_gender,$student_mobile,$student_email,$student_address) {

	$data_arr = getListStudent();

	$new_student = array(
		'student_id' => $student_id,
		'student_name' => $student_name,
		'student_gender' => $student_gender,
		'student_mobile' => $student_mobile,
		'student_email' => $student_email,
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