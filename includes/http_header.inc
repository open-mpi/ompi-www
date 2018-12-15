<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
  <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
if (isset($meta_desc)) {
    print("<META name=\"description\" content=\"$meta_desc\">\n");
}
if (isset($noindex)) {
    print("<META name=\"googlebot\" content=\"noindex\">\n");
}
print("<META name=\"keywords\" content=\"");
if (isset($meta_keywords)) {
    print($meta_keywords);
} else {
    print("MPI, Open MPI, Open-MPI, OpenMPI, parallel computing, HPC, high performance computing, beowulf, linux, cluster, parallel, distributed");
}
print("\">\n");
?>
  <LINK REL="shortcut icon" HREF="<?php print($topurl); ?>/favicon.ico" />
<?php
include_once("$topdir/includes/css.inc");

if (isset($ompi_section)) {
    print("  <META name=\"open-mpi\" content=\"$ompi_section\">\n");
}
if (isset($html_title)) {
    $new_title = strip_tags($html_title);
} else if (isset($title)) {
    $new_title = strip_tags($title);
} else {
    $new_title = "Open MPI Parallel Computing";
}
print("  <TITLE>$new_title</TITLE>\n");
print('<meta name="google-site-verification" content="Mo383nPcTIxtCpIPubkJdwBNmCY8iwPIrkxy4n9qBwY" />');
