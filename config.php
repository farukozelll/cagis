<?php

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "tr";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "tr")
			$_SESSION['lang'] = "tr";
			else if ($_GET['lang'] == "arb")
			$_SESSION['lang'] = "arb";
			else if ($_GET['lang'] == "fr")
			$_SESSION['lang'] = "fr";
	}

	require_once "languages/" . $_SESSION['lang'] . ".php";
?>