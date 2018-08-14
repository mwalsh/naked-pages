naked-pages
===========

Default index listing (not only) for NGINX, and some custom error pages ;) This is good choice for
someone who want a beauty yet light responsive web listing page. Or maybe **h5ai alternative**.

# Features
- Uses the Naked CSS framework
- Responsive page
- Much lighter than h5ai

# Proof of Concept
![PoC](https://github.com/mwalsh/naked-pages/raw/master/poc/_nnn.png)

# Installation (Apache)
- Clone this repo into your www root directory
- From the command line, go into the `naked-pages` folder and run `composer install`
- Create and open the `.htaccess` in your www root directory and add this line

```
DirectoryIndex index.php index.html /naked-pages/index.php
```

- To enable error pages, add these lines too

```
ErrorDocument 404 /naked-pages/404.php
ErrorDocument 403 /naked-pages/403.php
```

# Configuration
All configuration is set in an array in `config/config.php`. You can ignore listing your `naked-pages` directory
by telling the config where you installed your `naked-pages`. You can also ignore other files and folders using shell wildcard
patterns. For example, if you want to ignore `.DS_Store‎`, just add `.DS_Store‎` to `fileExcludePatterns` entry. If you want
to show folder / file size you can change `showSize` to `true`.
