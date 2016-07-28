<?
$subject_val = "[OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 16:30:16 2009" -->
<!-- isoreceived="20090323203016" -->
<!-- sent="Mon, 23 Mar 2009 13:29:44 -0700" -->
<!-- isosent="20090323202944" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI users] Collective operations and synchronization" -->
<!-- id="49C7F138.8040208_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Collective operations and synchronization<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 16:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just read in the Open MPI documentation [1] that collective 
<br>
operations, such as MPI_Allreduce, may synchronize, but do not 
<br>
necessarily synchronize. My algorithm requires a collective operation 
<br>
and synchronization; is there a better (more efficient?) method than 
<br>
simply calling MPI_Allreduce followed by MPI_Barrier?
<br>
<p>Thanks,
<br>
Shaun
<br>
<p>[1] <a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm">http://www.mpi-forum.org/docs/mpi21-report-bw/node85.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8553.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
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
