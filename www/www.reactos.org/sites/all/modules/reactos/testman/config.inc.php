<?php
/*
  PROJECT:    ReactOS Web Test Manager
  LICENSE:    GNU GPLv2 or any later version as published by the Free Software Foundation
  PURPOSE:    Configuration settings for the Web Interface
  COPYRIGHT:  Copyright 2008-2011 Colin Finck <colin@reactos.org>
*/

	// HACK: TESTMAN_PATH must be absolute here, because of the way we're integrated into Drupal. Should be fixed!
	// Then INDICATORS_PATH can also depend on TESTMAN_PATH.
	define("TESTMAN_PATH", realpath(__DIR__) . "/");
	define("ROOT_PATH", TESTMAN_PATH . "../../../../../../");
	define("SHARED_PATH", ROOT_PATH . "drupal/sites/default/shared/");
	define("INDICATORS_PATH", "indicators/");

	define("DEFAULT_SEARCH_LIMIT", 10);
	define("DEFAULT_SEARCH_SOURCE", "CMake_x86_GCCLin (KVM)");
	define("MAX_COMPARE_RESULTS", 8);
	define("RESULTS_PER_PAGE", 100);

?>