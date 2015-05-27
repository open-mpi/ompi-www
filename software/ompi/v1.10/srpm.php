<?php
  $topdir = "../../..";
  include_once("$topdir/software/ompi/v1.10/version.inc");

  $title = "Open MPI: Version $ver_v1_10 Source RPM Notes";
  include_once("$topdir/software/ompi/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/curl_get.inc");

  include_once("$topdir/includes/downloads.inc");

  $ver = "v1.10";
  $base_url = "https://github.com/open-mpi/ompi-release/tree";
  $rawbase_url = "https://raw.githubusercontent.com/open-mpi/ompi-release";
  $linux_dir = "$ver/contrib/dist/linux";

  $readme = "$base_url/$linux_dir/README";
  $raw_readme = "$rawbase_url/$linux_dir/README";
  $build_script = "$base_url/$linux_dir/buildrpm.sh";
  $specfile = "$base_url/$linux_dir/openmpi.spec";
?>

<p>Because every parallel computation environment is different, Open MPI
is a highly configurable piece of software.  As such, a single set of
build options is not sufficient to meet everyone's needs.  The source
RPM therefore accepts a wide variety of configuration options on the
"<code>rpmbuild --rebuild</code>" command line.  The following text
describes the options that are available.</p>

<p>A script to build an Open MPI RPM from a source tarball <a
href="<?php print($build_script); ?>">is available here</a>, and is
referred to as "<code>buildrpm.sh</code>" in the text below.
Additionally, you can build an Open MPI RPM from the SRPM (also
described below).</p>

<p>The text below is specific to the <?php print($ver); ?> series of
Open MPI and <a href="<?php print($readme); ?>">is available here in a
printer-friendly format</a>.

<p>Note that the spec file (that the text below refers to) has many
more comments and explanations of rpmbuild-time configuration options,
and <a href="<?php print($specfile); ?>">is available here</a>.

<?php
  $str = do_curl_get($raw_readme);
  print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

  include_once("$topdir/includes/footer.inc");
