<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title><?= $title . $data;	 ?></title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/style/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/style/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<style>
		.popi {
			font-family: "poppins", Arial, Helvetica, sans-serif;
			text-decoration: none;
			color: #035755;
		}

		.popi:hover {
			color: #fb4c47;
			backface-visibility: hidden;
			font-weight: bold;
			position: relative;
		}

		.popi:hover::after {
			content: "";
			width: 8px;
			height: 8px;
			position: absolute;
			top: 100%;
			left: 50%;
			border-radius: 50%;
			background-color: #fb4c47;
			transition: 0.5s ease;
		}
	</style>
</head>
