
# Ads Banner Manager

Management and automation of advertising banners.

# Features
* Determine by what date the banner should be displayed.
* Choose randomly from the banners in the specified list.
* When the time has elapsed, the standard banner is displayed.
* Easy to use remotely from any site.

# Usage Example
```javascript
https://metin2.click/ads/ads.php?banner=before_captcha
```

# Status Example
```javascript
https://metin2.click/ads/ads.php?banner=before_captcha
```

# Using Banners Remotely

Replace in ads.php https://download.metin2.click with your remote url. 
```php
header("Access-Control-Allow-Origin: https://download.metin2.click");
```

Added this script on your remote page:
```html
<script>
	function LoadContent(url, elementoId) {
		fetch(url)
			.then(response => response.text())
			.then(data => {
				document.getElementById(elementoId).innerHTML = data;
			})
			.catch(error => console.error('Content search error:', error));
	}

	LoadContent('https://metin2.click/ads/ads.php?banner=before_captcha', 'before_captcha');
	LoadContent('https://metin2.click/ads/ads.php?banner=after_captcha', 'after_captcha');
</script>
```

Then you can load the banners in your remote page in this way:
```html
<div id="before_captcha"></div>
<div id="after_captcha"></div>
```
