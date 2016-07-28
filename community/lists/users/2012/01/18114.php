<?
$subject_val = "[OMPI users] How do I run several mpi jobs in a single allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  9 10:24:55 2012" -->
<!-- isoreceived="20120109152455" -->
<!-- sent="Mon, 9 Jan 2012 15:24:50 +0000" -->
<!-- isosent="20120109152450" -->
<!-- name="Thompson, Kelly G" -->
<!-- email="kgt_at_[hidden]" -->
<!-- subject="[OMPI users] How do I run several mpi jobs in a single allocation?" -->
<!-- id="0458DF31F610EF42BFC78C497E806C7B039C7217_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] How do I run several mpi jobs in a single allocation?<br>
<strong>From:</strong> Thompson, Kelly G (<em>kgt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-09 10:24:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18115.php">Ralph Castain: "Re: [OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<li><strong>Previous message:</strong> <a href="18113.php">Ralph Castain: "Re: [OMPI users] OpenVMS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18115.php">Ralph Castain: "Re: [OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<li><strong>Reply:</strong> <a href="18115.php">Ralph Castain: "Re: [OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am interested in running a handful of mpirun jobs in a single allocation.  For example, my allocation is 2 nodes with 8 cores on each node (total of 16 cores).  I want to run 2 five-rank jobs and 3 two-rank jobs simultaneously (total of 16 cores) and w/o oversubscribing any single core.  I am currently using '--mca mpi_paffinity_alone 0' and that appears to work, but it looks like recent versions (1.4+) of OpenMPI have better controls for processor affinity.  Is there a better choice of flags for my situation?
<br>
<p>The bigger picture is that I am running 400-600 small unit tests in a single Torque allocation.  My testing framework is aware of total available cores and the cores required per test so that the total simultaneous core count never exceeds my allocation.  However, if I use any option other than '--mca mpi_paffinity_alone 0', mpirun will place multiple jobs on the same cores and leave many cores with nothing to do.  Is there a good description for how mpirun assigns jobs to cores - particularly in the situation where there are multiple mpirun jobs running on the same allocation?
<br>
<p>TIA
<br>
<p>-kt
<br>
<pre>
---
Kelly Thompson
kgt_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18114/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18115.php">Ralph Castain: "Re: [OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<li><strong>Previous message:</strong> <a href="18113.php">Ralph Castain: "Re: [OMPI users] OpenVMS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18115.php">Ralph Castain: "Re: [OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<li><strong>Reply:</strong> <a href="18115.php">Ralph Castain: "Re: [OMPI users] How do I run several mpi jobs in a single allocation?"</a>
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
