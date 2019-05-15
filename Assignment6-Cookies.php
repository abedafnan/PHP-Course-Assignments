<?php
/**
 * Created by PhpStorm.
 * User: Afnan A. Abed
 * Date: 5/15/2019
 * Time: 8:48 PM
 */

/**
 * Questions:
 * - Rewrite your application to remember the user when he/she back
 *  to the site before a week since the last visit.
 * - count how many time the user revisit the site from the same
 *  browser instant.
 * - remember the name of the user, and the time left on the site.
 */
if (isset($_COOKIE['visits'])) {
	// Get the time of stay in seconds
	$tm = $_COOKIE['time'];
	$tm = time() - $tm;

	// Get the number of visits to the page
	$v = $_COOKIE['visits'];
	$v += 1;
	setcookie("visits", $v);

	// Print the cookie information
	echo "Welcome ", $_COOKIE['name'],
	"<br> Stay = ", $tm, " seconds",
	"<br> Visits = ", $_COOKIE['visits'];
} else {
	// Set the cookie if it doesn't already exist
	setcookie("name", "Afnan", time() * 7 * 24 * 60 * 60);
	setcookie("time", time());
	setcookie("visits", 1);
	echo "You haven't visited before";
	echo "<br> Setting the cookie..";
}

?>
