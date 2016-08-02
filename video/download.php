<?php
# Force a download rather than letting a browser plugin locally render it
$topdir = "..";

# Don't allow nasties -- only allow downloads in this dir (trivial check: 
# only allow alpha/numerics to be the first character)
$file = $_REQUEST["file"];
if (!ctype_alnum($file[0])) {
    header("Location: $topdir");
    exit(0);
}

# Convert %2F to /
preg_replace("/%2f/i", "/", $file);

# From http://php.net/manual/en/function.readfile.php
if (file_exists($file)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=' . basename($file));
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file));

  # Disable buffering so that readfile doesn't barf with a huge file
  ob_end_flush();
  flush();

  # Ensure readfile() doesn't run out of time
  set_time_limit(0);
  readfile("$file");
} else {
  # If we didn't find the file, give up
  header("Location: $topdir");
}
