<?
$subject_val = "[OMPI devel] Deadlock with comm_create since cid allocator change";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 07:54:17 2009" -->
<!-- isoreceived="20090921115417" -->
<!-- sent="Mon, 21 Sep 2009 13:51:01 +0200 (CEST)" -->
<!-- isosent="20090921115101" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Deadlock with comm_create since cid allocator change" -->
<!-- id="alpine.DEB.2.00.0909211331460.557_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Deadlock with comm_create since cid allocator change<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 07:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Previous message:</strong> <a href="6849.php">Brice Goglin: "[OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Reply:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>We are currently experiencing deadlocks when using communicators other 
<br>
than MPI_COMM_WORLD. So we made a very simple reproducer (Comm_create then 
<br>
MPI_Barrier on the communicator - see end of e-mail).
<br>
<p>We can reproduce the deadlock only with openib and with at least 8 cores 
<br>
(no success with sm) and after ~20 runs average. Using larger number of 
<br>
cores greatly increases the occurence of the deadlock. When the deadlock 
<br>
occurs, every even process is stuck in MPI_Finalize and every odd process 
<br>
is in MPI_Barrier.
<br>
<p>So we tracked the bug in the changesets and found out that this patch seem 
<br>
to have introduced the bug :
<br>
<p>user:        brbarret
<br>
date:        Tue Aug 25 15:13:31 2009 +0000
<br>
summary:     Per discussion in ticket #2009, temporarily disable the block CID allocation
<br>
algorithms until they properly reuse CIDs.
<br>
<p>Reverting to the non multi-thread cid allocator makes the deadlock 
<br>
disappear.
<br>
<p>I tried to dig further and understand why this makes a difference, with no 
<br>
luck.
<br>
<p>If anyone can figure out what's happening, that would be great ...
<br>
<p>Thanks,
<br>
Sylvain
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, numTasks;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int range[3];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm testComm, dupComm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group orig_group, new_group;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numTasks);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_group(MPI_COMM_WORLD, &amp;orig_group);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;range[0] = 0; /* first rank */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;range[1] = numTasks - 1; /* last rank */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;range[2] = 1; /* stride */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_range_incl(orig_group, 1, &amp;range, &amp;new_group);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_create(MPI_COMM_WORLD, new_group, &amp;testComm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(testComm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Previous message:</strong> <a href="6849.php">Brice Goglin: "[OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Reply:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
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
