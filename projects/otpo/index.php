<?php
$topdir = "../..";

$title = "Open Tool for Parameter Optimization (OTPO)";
include_once("$topdir/software/otpo/current/version.inc");
include_once("$topdir/projects/otpo/nav.inc");
include_once("$topdir/includes/header.inc");
?>

<p> Parallel computing environments continue to grow in complexity, with a
myriad of hardware and software components influencing the performance of an
application. Open MPI exposes a large number of features of modern
architectures through its run-time parameters. These parameters can be passed
to the MPI library and influence the behavior of the MPI library without
having to recompile the communication library or the application. Popular
examples for MCA parameters include:

<ul>
<li> The cross-over point for point-to-point operations between the eager and
the rendezvous protocol </li>
<li> Network specific values such as internal buffer sizes (e.g. socket buffer
sizes) </li>
<li> Algorithms to be used for collective operations </li>
</ul>
</p>


<p> The Open Tool for Parameter Optimization (OTPO) is a new framework
designed to aid in the optimization of the MCA paremeters. OTPO systematically
tests a large numbers of combinations of Open MPI's run-time tunable parameters
based on a user input file to determine the
best set for a given platform.</p>

<p> Key features of OTPO include:
<ul>
 <li> Support for three different benchmarks for the tuning procedure
 (Netpipe, skaMPI, NAS Parallel Benchmarks).</li>
 <li> Easy interface to add support for other benchmarks </li>
 <li> Support for various tuning algorithms </li>
 <li> Ability to use the result of an optimization run as the input for a new
 optimization</li>
 <li> Ability to interrupt an optimization run and resume it later on</li>
</ul>
</p>


<?php
include_once("$topdir/includes/footer.inc");
