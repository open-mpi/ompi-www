<?
$subject_val = "[OMPI users] Terminating processes started by MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  1 00:50:58 2008" -->
<!-- isoreceived="20080701045058" -->
<!-- sent="Tue, 1 Jul 2008 14:50:52 +1000" -->
<!-- isosent="20080701045052" -->
<!-- name="Keith Chan" -->
<!-- email="keith_at_[hidden]" -->
<!-- subject="[OMPI users] Terminating processes started by MPI_Comm_spawn" -->
<!-- id="20080701045052.GA28242_at_ws008.zomojo.com" -->
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
<strong>From:</strong> Keith Chan (<em>keith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-01 00:50:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6004.php">Willem Vermin: "[OMPI users] stall with MPI_Scatter and shared memory"</a>
<li><strong>Previous message:</strong> <a href="../../2008/06/6002.php">Doug Roberts: "Re: [OMPI users] Code Seg Faults in Devel Series"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Say I've created a number of child processes using MPI_Comm_spawn:
<br>
<p>int num_workers = 5;
<br>
MPI_Comm workers;
<br>
MPI_Comm_spawn(&quot;./worker&quot;, MPI_ARGV_NULL, num_workers, MPI_INFO_NULL, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_SELF, &amp;workers, MPI_ERRCODES_IGNORE);
<br>
<p>If for some reason I needed to terminate the worker child processes prematurely,
<br>
how should I go about doing that?  I tried:
<br>
<p>MPI_Abort(workers, 1);
<br>
<p>... but the worker processes were still happily executing away, even though
<br>
theey should have been SIGTERM-ed.
<br>
<p>Can anyone share some insight into what I might be doing wrong?  I'm currently
<br>
using Open MPI version 1.2.5.
<br>
<p>Cheers,
<br>
Keith.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6004.php">Willem Vermin: "[OMPI users] stall with MPI_Scatter and shared memory"</a>
<li><strong>Previous message:</strong> <a href="../../2008/06/6002.php">Doug Roberts: "Re: [OMPI users] Code Seg Faults in Devel Series"</a>
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
