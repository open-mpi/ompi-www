<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  2 17:52:27 2005" -->
<!-- isoreceived="20051102225227" -->
<!-- sent="Wed, 2 Nov 2005 17:52:25 -0500" -->
<!-- isosent="20051102225225" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] TCP problems" -->
<!-- id="D0BE47EC-F14E-4724-B710-FDC143E2A88D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="436669C4.6010100_at_graphics.stanford.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-02 17:52:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0276.php">Sebastian Forsman: "[O-MPI users] Open MPI limitations?"</a>
<li><strong>Previous message:</strong> <a href="0274.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0261.php">Mike Houston: "[O-MPI users] TCP problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>We've been unable to reproduce this problem, but Tim just noticed  
<br>
that we had a patch on the trunk from several days ago that we forgot  
<br>
to apply to the v1.0 branch (Tim just applied it now).
<br>
<p>Could you give the nightly v1.0 tarball a whirl tomorrow morning?  It  
<br>
should contain the patch, and may fix your problem.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.0/">http://www.open-mpi.org/nightly/v1.0/</a>
<br>
<p>Thanks!
<br>
<p><p>On Oct 31, 2005, at 2:00 PM, Mike Houston wrote:
<br>
<p><span class="quotelev1">&gt; I have things working now.  I needed to limit OpenMPI to actual  
</span><br>
<span class="quotelev1">&gt; working
</span><br>
<span class="quotelev1">&gt; interfaces (thanks for the tip).  It still seems that should be  
</span><br>
<span class="quotelev1">&gt; figured
</span><br>
<span class="quotelev1">&gt; out correctly...  Now I've moved onto stress testing with the  
</span><br>
<span class="quotelev1">&gt; bandwidth
</span><br>
<span class="quotelev1">&gt; testing app I posted earlier in the Infiniband thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl_tcp_if_include eth0 -mca btl tcp -np 2 -hostfile
</span><br>
<span class="quotelev1">&gt; /u/mhouston/mpihosts mpi_bandwidth 3750 262144
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 262144  109.697279 (MillionBytes/sec)   104.615478(MegaBytes/sec)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl_tcp_if_include eth0 -mca btl tcp -np 2 -hostfile
</span><br>
<span class="quotelev1">&gt; /u/mhouston/mpihosts mpi_bandwidth 4000 262144
</span><br>
<span class="quotelev1">&gt; [spire-2.Stanford.EDU:06645] mca_btl_tcp_frag_send: writev failed with
</span><br>
<span class="quotelev1">&gt; errno=104mpirun noticed that job rank 1 with PID 21281 on node
</span><br>
<span class="quotelev1">&gt; &quot;spire-3.stanford.edu&quot; exited on signal 11.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cranking up the number of messages in flight makes things really
</span><br>
<span class="quotelev1">&gt; unhappy.  I haven't seen this behavior with LAM or MPICH so I thought
</span><br>
<span class="quotelev1">&gt; I'd mention it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mike
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0276.php">Sebastian Forsman: "[O-MPI users] Open MPI limitations?"</a>
<li><strong>Previous message:</strong> <a href="0274.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0261.php">Mike Houston: "[O-MPI users] TCP problems"</a>
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
