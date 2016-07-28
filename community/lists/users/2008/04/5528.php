<?
$subject_val = "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 16:11:08 2008" -->
<!-- isoreceived="20080425201108" -->
<!-- sent="Fri, 25 Apr 2008 14:10:57 -0600" -->
<!-- isosent="20080425201057" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!" -->
<!-- id="C9986452-B565-454D-8F79-E7C5E0571A19_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="60474719-1D46-4556-9FB5-6748ED6413A3_at_nrl.navy.mil" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 16:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5529.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries?"</a>
<li><strong>Previous message:</strong> <a href="5527.php">Gregory John Orris: "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>In reply to:</strong> <a href="5527.php">Gregory John Orris: "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5530.php">Michael: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Reply:</strong> <a href="5530.php">Michael: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Reply:</strong> <a href="5531.php">Audet, Martin: "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!"</a>
<li><strong>Reply:</strong> <a href="5532.php">Gregory John Orris: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2008, at 2:06 PM, Gregory John Orris wrote:
<br>
<p><span class="quotelev1">&gt; produces a core dump on a machine with 12Gb of RAM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the error message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 0 with PID 75545 on node mymachine.com
</span><br>
<span class="quotelev1">&gt; exited on signal 4 (Illegal instruction).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, substituting in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; float *X = new float[n];
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; float X[n];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Succeeds!
</span><br>
<p><p>You're running off the end of the stack, because of the large amount  
<br>
of data you're trying to put there.  OS X by default has a tiny stack  
<br>
size, so codes that run on Linux (which defaults to a much larger  
<br>
stack size) sometimes show this problem.  Your best bets are either to  
<br>
increase the max stack size or (more portably) just allocate  
<br>
everything on the heap with malloc/new.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5529.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries?"</a>
<li><strong>Previous message:</strong> <a href="5527.php">Gregory John Orris: "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>In reply to:</strong> <a href="5527.php">Gregory John Orris: "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5530.php">Michael: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Reply:</strong> <a href="5530.php">Michael: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Reply:</strong> <a href="5531.php">Audet, Martin: "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!"</a>
<li><strong>Reply:</strong> <a href="5532.php">Gregory John Orris: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
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
