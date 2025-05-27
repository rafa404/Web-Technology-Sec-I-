<?php
$cookie_name = "visited_policy_page";
$cookie_value = "yes";

// cookie expire in 30 days
$expiry_time = time() + (30 * 24 * 60 * 60);
setcookie($cookie_name, $cookie_value, $expiry_time, "/");

?>