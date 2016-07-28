<?
$subject_val = "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 16:24:52 2008" -->
<!-- isoreceived="20080425202452" -->
<!-- sent="Fri, 25 Apr 2008 16:24:45 -0400" -->
<!-- isosent="20080425202445" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!" -->
<!-- id="E8F710FA-A62B-4EC9-9E3D-58D82A06D213_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C9986452-B565-454D-8F79-E7C5E0571A19_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!<br>
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 16:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5531.php">Audet, Martin: "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5529.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries?"</a>
<li><strong>In reply to:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5531.php">Audet, Martin: "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2008, at 4:10 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 25, 2008, at 2:06 PM, Gregory John Orris wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; produces a core dump on a machine with 12Gb of RAM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the error message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that job rank 0 with PID 75545 on node mymachine.com
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 4 (Illegal instruction).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, substituting in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; float *X = new float[n];
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; float X[n];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Succeeds!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're running off the end of the stack, because of the large amount
</span><br>
<span class="quotelev1">&gt; of data you're trying to put there.  OS X by default has a tiny stack
</span><br>
<span class="quotelev1">&gt; size, so codes that run on Linux (which defaults to a much larger
</span><br>
<span class="quotelev1">&gt; stack size) sometimes show this problem.  Your best bets are either to
</span><br>
<span class="quotelev1">&gt; increase the max stack size or (more portably) just allocate
</span><br>
<span class="quotelev1">&gt; everything on the heap with malloc/new.
</span><br>
<p>Where are Fortran 90 arrays allocated, stack or heap?  I can't see us  
<br>
using malloc in our Fortran 90 codes, I need to understand this before  
<br>
I start configuring a new clusters, I was planning for it to run OS X  
<br>
instead of Linux.  At the moment I don't have an OS X system with  
<br>
enough RAM to test this.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5531.php">Audet, Martin: "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5529.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries?"</a>
<li><strong>In reply to:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5531.php">Audet, Martin: "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!"</a>
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
