# Alert Banner

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
5. Upload the `acf-export-alert-banner.json` file to WordPress using the Advanced Custom Fields plugin's import function.
