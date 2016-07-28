<?
$subject_val = "[OMPI users]  100% CPU doing nothing!?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 10:26:47 2009" -->
<!-- isoreceived="20090422142647" -->
<!-- sent="Wed, 22 Apr 2009 11:26:25 -0300" -->
<!-- isosent="20090422142625" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="[OMPI users]  100% CPU doing nothing!?" -->
<!-- id="20090422142625.GA23086_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1240366793.9395.91.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> [OMPI users]  100% CPU doing nothing!?<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 10:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>Previous message:</strong> <a href="9023.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9016.php">Ross Boylan: "[OMPI users] 100% CPU doing nothing!?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ross:
<br>
<p>On Tue, Apr 21, 2009 at 07:19:53PM -0700, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; I'm using Rmpi (a pretty thin wrapper around MPI for R) on Debian Lenny
</span><br>
<span class="quotelev1">&gt; (amd64).  My set up has a central calculator and a bunch of slaves to
</span><br>
<span class="quotelev1">&gt; wich work is distributed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The slaves wait like this:
</span><br>
<span class="quotelev1">&gt;         mpi.send(as.double(0), doubleType, root, requestCode, comm=comm)
</span><br>
<span class="quotelev1">&gt;         request &lt;- request+1
</span><br>
<span class="quotelev1">&gt;         cases &lt;- mpi.recv(cases, integerType, root, mpi.any.tag(),
</span><br>
<span class="quotelev1">&gt; comm=comm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., they do a simple send and then a receive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's possible there's no one to talk to, so it could be stuck at
</span><br>
<span class="quotelev1">&gt; mpi.send or mpi.recv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are either of those operations that should chew up CPU?  At this point,
</span><br>
<span class="quotelev1">&gt; I'm just trying to figure out where to look for the source of the
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<p>Search the list archives
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/">http://www.open-mpi.org/community/lists/users/</a>
<br>
for &quot;100% CPU&quot; and you will get lots to look at.
<br>
<p>I had a similar problem with a FORTRAN program.  With the help of Jeff
<br>
Squyres and Eugene Loh I wrote a solution: user-written MPI_Recv.c and
<br>
MPI_Send.c which I load them with my application, and the MPI problem
<br>
&quot;100% CPU usage while doing nothing&quot; is cured.
<br>
<p>The code for MPI_Recv.c and MPI_Send.c is here:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2008/12/7563.php">http://www.open-mpi.org/community/lists/users/2008/12/7563.php</a>
<br>
<p>Cheers,
<br>
Douglas.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>Previous message:</strong> <a href="9023.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9016.php">Ross Boylan: "[OMPI users] 100% CPU doing nothing!?"</a>
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
