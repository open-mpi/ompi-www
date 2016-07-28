<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 17:18:03 2009" -->
<!-- isoreceived="20091210221803" -->
<!-- sent="Thu, 10 Dec 2009 17:17:58 -0500" -->
<!-- isosent="20091210221758" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="BA0998E5-86C4-411A-B424-59329EAE375E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B216FA0.60505_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 17:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11509.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)	RESOLVED FOR NOW"</a>
<li><strong>Previous message:</strong> <a href="11507.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11504.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11511.php">Jonathan Dursi: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11511.php">Jonathan Dursi: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11512.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2009, at 5:01 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; A couple of questions to the OpenMPI pros:
</span><br>
<span class="quotelev1">&gt; If shared memory (&quot;sm&quot;) is turned off on a standalone computer,
</span><br>
<span class="quotelev1">&gt; which mechanism is used for MPI communication?
</span><br>
<span class="quotelev1">&gt; TCP via loopback port?  Other?
</span><br>
<p>Whatever device supports node-local loopback.  TCP is one; some OpenFabrics devices do, too.
<br>
<p><span class="quotelev1">&gt; Why wouldn't shared memory work right on Nehalem?
</span><br>
<span class="quotelev1">&gt; (That is probably distressing for Mark, Matthew, and other Nehalem owners.)
</span><br>
<p>To be clear, we don't know that this is a Nehalem-specific problem.  We actually thought it was an AMD-specific problem, but these results are interesting.  We've had a notoriously difficult time reproducing the problem reliably, which is why it hasn't been fixed yet.  :-(
<br>
<p>The best luck so far in reproducing the problem has been with GCC 4.4.x (at Sun).  I've been trying for a few days to install GCC 4.4 on my machines without much luck yet.  Still working on it...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11509.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)	RESOLVED FOR NOW"</a>
<li><strong>Previous message:</strong> <a href="11507.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11504.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11511.php">Jonathan Dursi: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11511.php">Jonathan Dursi: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11512.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
