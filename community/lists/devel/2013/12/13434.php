<?
$subject_val = "[OMPI devel] Assigned cpu list";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 14 12:20:50 2013" -->
<!-- isoreceived="20131214172050" -->
<!-- sent="Sat, 14 Dec 2013 09:20:46 -0800" -->
<!-- isosent="20131214172046" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Assigned cpu list" -->
<!-- id="11BD0645-A894-48B2-944B-65443EF4E42B_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Assigned cpu list<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-14 12:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13435.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Previous message:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forget who asked about this at the OMPI developer's conference this week, but I misspoke the answer. The question was if the user could specify (via an MCA parameter) which cores were to be used by mpirun for an application, and then let the mapper assign the procs to those cores in a round-robin fashion. The answer is (of course) &quot;yes&quot;.
<br>
<p>All you have to do is specify &quot;mpirun --cpu-list 0,2,4&quot; to tell us to use the 0, 2, and 4 logical cpus for this application. In the absence of any other directives, we will map the procs round-robin (one per core) to the cores in that list on each node, binding as directed.
<br>
<p>This is different from --slot-list 0,2,4 as that would tell us to bind each process to the 0,2,4 logical cpus (i.e., bind the proc to all three of those cores)
<br>
<p>HTH - and sorry for the misspeak.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13435.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Previous message:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
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
