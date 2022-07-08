# teamspeak_banner
Serves a random banner image for teamspeak clients

### Installation

* Upload teamspeak_banner.php into your web root
* Create a directory for the images. Make sure that the directory name matches the $bannerSubDirectory variable.
* Add images in to the directory you just created. Make sure that the extension of the images matches the $bannerExtension variable.
* Test if it works by opening up the php script in your browser. (For example: https://example.com/teamspeak_banner.php)

### Configuring for use in teamspeak

* Join your teamspeak3 server
* Right click the root channel > Edit virtual server
* Set "Banner Gfx URL" so it points to the php script. Include ?teamspeak at the end of the url. (For example: https://example.com/teamspeak_banner.php?teamspeak)

### How do I view all images in a browser?

* Open it up in your web browser while making sure you append ?web at the end of the URL. (For example: https://example.com/teamspeak_banner.php?web)
