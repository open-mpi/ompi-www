<?
$subject_val = "[hwloc-devel] BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 22:37:05 2012" -->
<!-- isoreceived="20120321023705" -->
<!-- sent="Tue, 20 Mar 2012 22:37:01 -0400" -->
<!-- isosent="20120321023701" -->
<!-- name="Daniel Ibanez" -->
<!-- email="dan.a.ibanez_at_[hidden]" -->
<!-- subject="[hwloc-devel] BGQ empty topology with MPI" -->
<!-- id="CADcFuabVx_mBeyte3TFQ6tVEHV1_k8zXSB6tZPjm8oKRYiCiKA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADcFuabJpcXko7fAHrQepU2+xLDk0Fst2ieNqH2EK-oN1dYbGA_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [hwloc-devel] BGQ empty topology with MPI<br>
<strong>From:</strong> Daniel Ibanez (<em>dan.a.ibanez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 22:37:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2967.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2965.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4416)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2967.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2967.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="2968.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="2975.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="2977.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying out hwloc on a very early access Blue Gene /Q system.
<br>
I've built hwloc from source and am running test programs that use it.
<br>
The most serious issue I'm observing is that when MPI and hwloc
<br>
are used in the same program, hwloc aborts with &quot;Topology became empty,
<br>
aborting!&quot;.
<br>
This does not happen when only hwloc calls are made in the program:
<br>
then the topology can see all 64 PUs.
<br>
<p>Please let me know if theres a hint of what could be causing it,
<br>
where to post, and what info to provide.
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Dan Ibanez
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2967.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2965.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4416)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2967.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2967.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="2968.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="2975.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="2977.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
