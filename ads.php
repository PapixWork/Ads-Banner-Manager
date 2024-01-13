<?php
/*
	Author: Papix Work </> Date: 13-01-2023 </> Website: https://papix.work/
*/

header("Access-Control-Allow-Origin: https://download.metin2.click");

function checkTime($time)
{
	return (new DateTime())->format('Y-m-d H:i:s') > (new DateTime($time))->format('Y-m-d H:i:s');
}

$banners = [
	'header1' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],
	'header2' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],

	'footer1' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],
	'footer2' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],

	'before_captcha' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],
	'after_captcha' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],
	'before_counter' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],
	'after_counter' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],
	'after_button' => [
		["Default", "2090-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example2", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"],
		["Example3", "2025-01-31 00:00:00", "https://metin2.click/buy-advertising/", "http://i.epvpimg.com/fjpIeab.png"]
	],
];

$bannerType = $_GET['banner'] ?? '';

if (array_key_exists($bannerType, $banners)) {
	$randomIndex = array_rand($banners[$bannerType]);
	$randomBanner = $banners[$bannerType][$randomIndex];
	$defaultBanner = $banners[$bannerType][0];

	echo checkTime($randomBanner[1]) ? "<a href='$defaultBanner[2]' target='_blank''><img src='$defaultBanner[3]' /></a>" : "<a href='$randomBanner[2]' target='_blank''><img src='$randomBanner[3]' /></a>";

} elseif ($bannerType === "status") {
	foreach ($banners as $type => $bannerList) {
		echo "=============================<br>";
		echo "== Banner ($type)<br>";
		echo "=============================<br>";

		foreach ($bannerList as $element) {
			echo "Title: $element[0]<br>";
			echo "Expiration Date: $element[1]<br>";
			echo "URL: $element[2]<br>";
			echo "Image URL: $element[3]<br>";
			echo "=============================<br>";
		}
		echo "<br>";
	}
} else {
	echo "Ads Banner Manager";
}

?>