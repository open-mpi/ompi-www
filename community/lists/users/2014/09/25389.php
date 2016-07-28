<?
$subject_val = "[OMPI users] Application hangs in 1.8.1 related to collective operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 05:35:00 2014" -->
<!-- isoreceived="20140925093500" -->
<!-- sent="Thu, 25 Sep 2014 09:34:54 +0000" -->
<!-- isosent="20140925093454" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Application hangs in 1.8.1 related to collective operations" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CBF1FB9_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Application hangs in 1.8.1 related to collective operations<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-25 05:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25390.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Previous message:</strong> <a href="25388.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25394.php">Howard Pritchard: "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<li><strong>Reply:</strong> <a href="25394.php">Howard Pritchard: "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had an application suddenly stop making progress.  By killing the last process out of 208 processes, then looking at the stack trace, I found 3 of 208 processes were in an MPI_REDUCE call.  The other 205 had progressed in their execution to another routine, where they were waiting in an unrelated MPI_ALLREDUCE call.
<br>
<p>The code structure is such that each processes calls MPI_REDUCE 5 times for different variables, then some work is done, then the MPI_ALLREDUCE call happens early in the next iteration of the solution procedure.  I thought it was also noteworthy that the 3 processes stuck at MPI_REDUCE, were actually stuck on the 4th of 5 MPI_REDUCE calls, not the 5th call.
<br>
<p>No issues with MVAPICH.  Problem easily solved by adding MPI_BARRIER after the section of MPI_REDUCE calls.
<br>
<p>It seems like MPI_REDUCE has some kind of non-blocking implementation, and it was not safe to enter the MPI_ALLREDUCE while those MPI_REDUCE calls had not yet completed for other processes.
<br>
<p>This was in OpenMPI 1.8.1.  Same problem seen on 3 slightly different systems, all QDR Infiniband, Mellanox HCAs, using a Mellanox OFED stack (slightly different versions on each cluster).  Intel compilers, again slightly different versions on each of the 3 systems.
<br>
<p>Has anyone encountered anything similar?  While I have a workaround, I want to make sure the root cause of the deadlock gets fixed.  Please let me know what I can do to help.
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25390.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Previous message:</strong> <a href="25388.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25394.php">Howard Pritchard: "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<li><strong>Reply:</strong> <a href="25394.php">Howard Pritchard: "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
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
