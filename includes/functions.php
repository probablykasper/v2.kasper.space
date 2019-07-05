<?

$site_address = "http://localhost";

function get_slug() {
	global $slug;
	$slug = $_SERVER["REQUEST_URI"];
	$slug = explode("?", $slug, 2);
	$slug = $slug[0];
	$slug = rtrim($slug, "/");
	$slug = ltrim($slug, "/");
	$slug = strtolower($slug);
	return $slug;
}

function redirect_from_to_slug($from_slug, $to_slug) {
	global $slug;
	global $site_address;
	if ($slug == $from_slug) {
		header("Location: $site_address$to_slug");
		die();
	}
}
function redirect_if() {
	redirect_from_to_slug("home", "");
}

?>
