<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
if (isset($meta_desc)) {
    print("<meta name=\"description\" content=\"$meta_desc\">\n");
}
if (isset($noindex)) {
    print("<meta name=\"googlebot\" content=\"noindex\">\n");
}
print("<meta name=\"keywords\" content=\"");
if (isset($meta_keywords)) {
    print($meta_keywords);
} else {
    print("MPI, Open MPI, Open-MPI, OpenMPI, parallel computing, beowulf, linux, cluster, parallel, distributed");
}
print("\">\n");
?>
  <link rel="shortcut icon" href="<?php print($topurl); ?>/favicon.ico" />
<?php
include_once("$topdir/includes/css.inc");

if (isset($ompi_section)) {
    print("  <meta name=\"open-mpi\" content=\"$ompi_section\">\n");
}
if (isset($html_title)) {
    $new_title = strip_tags($html_title);
} else if (isset($title)) {
    $new_title = strip_tags($title);
} else {
    $new_title = "Open MPI Parallel Computing";
}
print("  <title>$new_title</title>\n");
print('<meta name="google-site-verification" content="Mo383nPcTIxtCpIPubkJdwBNmCY8iwPIrkxy4n9qBwY" />');
