<?php

$topdir = "..";
$title = "Performance";
$short_title = "Performance";
$search_name = "just performance";
$search_subdir = "/performance/";

include_once("$topdir/includes/functions.inc");
include_once("nav.inc");
include_once("categories.inc");
ompi_set_included("categories.inc");
include_once("$topdir/includes/header.inc");
?>

<p>Performance measurements are never easy to perform or analyze with precision as
they tend to vary greatly depending upon configuration and run-time controls. In most
cases, some degree of knowledge of the code base is required to achieve consistent and
accurate measurements. This is particularly true of Open MPI as the range of control is
very large and the code is shipped in a generic state to ensure operability out-of-the-box
across a wide range of platforms and environments.
</p>

<p>
Unfortunately, the various benchmark codes are actually rather easy to run, thus leading
to sometimes erroneous results if the user isn't familiar with and/or doesn't take the time
to determine the optimal configuration and control settings. This section is intended to:

<ul>
<li>Aid benchmarking efforts by providing
    results from knowledgeable users (often developers) along with the corresponding
    configuration and MCA parameters used to obtain those results. As one might expect,
    the various MPI implementations watch each other rather closely, and so their
    performance tends to track fairly close to each other, varying a bit now-and-then
    until updated when someone notices
    a gap beginning to appear. Thus, these numbers reflect a point-in-time behavior that
    is subject to change.</li>
<br>
<li>Help provide some clarity to the relative performance of various MPIs when
    compared to Open MPI. Care has been taken to optimize the configuration and
    run-time controls for all the code bases, thus hopefully providing more of an
    "apples-to-apples" comparison.</li>
</ul>
</p>

<p>As always, users are reminded that performance benchmarks rarely provide
an accurate predictor of actual application performance. They are simply a sometimes
useful way of measuring the relative behavior of a specific feature that may or
may not be relevant to your application. Accordingly, the OMPI developers don't
exert a lot of effort optimizing benchmark performance, preferring instead to focus
on providing features of interest to users and researchers, while maintaining good
application performance.
</p>

Please feel free to contact the community on the <a href="../community/lists/ompi.php">mailing lists</a>
with questions regarding tuning your cluster.
Performance benchmark contributions are welcome.
</p>

<p><strong>Developer Trunk (v1.9)</strong></p>

<ul>
<li><a href="v1.9/2013/"><strong>2013</strong></a></li>
</ul>

<?php 
  include_once("$topdir/includes/footer.inc"); 
