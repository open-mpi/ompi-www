<?
$subject_val = "[OMPI devel] 1.7.5 end-of-week status report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 22:49:15 2014" -->
<!-- isoreceived="20140315024915" -->
<!-- sent="Fri, 14 Mar 2014 19:48:18 -0700" -->
<!-- isosent="20140315024818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5 end-of-week status report" -->
<!-- id="10789AA6-4C4E-428A-9417-31B0F5969278_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.5 end-of-week status report<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 22:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14351.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Reply:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I have both good and bad news to report - first the good.
<br>
<p>OSHMEM now passes nearly all its tests on my Linux cluster (tcp). My hat is off to the Mellanox guys for getting this done, including getting our MTT repo tests complete.
<br>
<p>The MPI layer passes nearly all the IBM, Intel, and one-sided tests. Only a few failures.
<br>
<p>Now the bad. The coll/ml component continues to have problems, including segfaults, and I have discovered that the bcol and coll/ml code remains entangled (I thought it had been separated, but sadly not). I have therefore ompi_ignored coll/ml and bcol/ptpcoll.
<br>
<p>We also retain a hang in mpirun under some failure cases. I'm working on a solution to that one.
<br>
<p>So here is my proposal for release. We allow OSHMEM to build by default as it met our conditions for doing so. We add an --enable-coll-ml configure flag and disable coll/ml and friends unless specifically requested. We then release 1.7.5 following the Tues developer telecon.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14351.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Reply:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
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
