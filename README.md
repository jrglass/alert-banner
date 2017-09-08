# Alert Banner for WordPress
This is a WordPress plugin to publish custom alert messages that automatically expire on a specified date to the top of a website. 

*alert-banner.php is depended on the [Advanced Custom Fields](https://www.advancedcustomfields.com/) plugin to work.*

## Instructions
1. Put `alert-banner.php` in the same folder as `header.php`
2. Add CSS from `style.css` to your WP theme's css. You can customize this as you see fit.
3. Add the code from `functions.php` to your WP theme's `functions.php` file.
4. Include `alert-banner.php` just after the opening `<body>` tag in `header.php`
```
<body>
  <?php include("alert-banner.php"); ?>
  ...
</body>
```
5. Upload the `acf-export-alert-banner.json` file to WordPress using the Advanced Custom Fields plugin's import function. If you do not see this option in ACF, you may need to update the plugin.

## Screenshots
1. [The WP dashboard view creating a new alert banner](screenshots/alert-banner-dashboard.png)
2. [The alert banner displaying on a website](screenshots/alert-banner-display.png)
