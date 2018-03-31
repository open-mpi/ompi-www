<?php
$topdir = "../../..";
include_once("$topdir/software/ompi/v1.1/version.inc");

$title = "Open MPI: Version $ver_v1_1 Mac OS X Package Notes";
include_once("$topdir/software/ompi/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");

include_once("$topdir/includes/downloads.inc");
?>

<h2>Open MPI Mac OS X Package notes:</h2>

<p>
<ul>
<li>This package was built on a machine running OS X 10.4.7.  It
should work on any 10.4 machine.</li>

<li>The Open MPI tree is installed with a prefix of
<code>/usr/local</code>.</li>

<li>The Open MPI package is built as a <?php
print("<a href=\"http://www.apple.com/universal/\">"); ?>Universal
Binary</a>, including support for PPC, PPC64 and i386 platforms. It
does not include support for the 64-bit Xeon machines.  This package
requires a Universal-binary aware version of Mac OS X (10.3.9 or
later).</li>

<li>Both static and shared libraries are included.</li>

<li>Fortran support is not included.</li>

<li>ROMIO support is included.</li>

<li>C++ bindings are provided for all supported MPI functions.</li>

<li>Support for Myrinet/GM and InfiniBand will require rebuilding
    from source.</li>
</ul>
  
<?php
    include_once("$topdir/includes/footer.inc");
