<?php
// Copy this file to config.php on your Crazy Domains server and fill in the values.
// Never commit config.php to GitHub.
return [
  'db_host' => 'localhost',
  'db_name' => 'YOUR_DATABASE_NAME',
  'db_user' => 'YOUR_DATABASE_USER',
  'db_pass' => 'YOUR_DATABASE_PASSWORD',
  'admin_user' => 'admin',
  // Generate with: password_hash('YOUR-STRONG-PASSWORD', PASSWORD_DEFAULT)
  'admin_password_hash' => 'PASTE_PASSWORD_HASH_HERE',
  'contact_email' => 'adonaipch@gmail.com'
];
