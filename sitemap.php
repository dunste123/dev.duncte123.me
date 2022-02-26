<?php
  header('Content-type: application/xml');
  error_reporting('NONE');
  // configuration
  $dirs = array_filter(glob('*'), 'is_dir');
  $url_prefix = 'https://dev.duncte123.ml/';
  $blog_timezone = 'GMT';
  $timezone_offset = '+01:00';
  $W3C_datetime_format_php = 'Y-m-d h:i:s'; // See http://www.w3.org/TR/NOTE-datetime

  $output = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
  $output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
  echo $output;
?>
<url>
  <loc><?php print $url_prefix; ?></loc>
</url>
<?php foreach($dirs as $dir) { ?>
<url>
  <loc><?php print $url_prefix . $dir . "/"; ?></loc>
</url>
<?php } ?>
</urlset>
