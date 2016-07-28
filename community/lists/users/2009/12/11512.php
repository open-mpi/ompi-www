<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 17:53:12 2009" -->
<!-- isoreceived="20091210225312" -->
<!-- sent="Thu, 10 Dec 2009 17:53:03 -0500" -->
<!-- isosent="20091210225303" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="4B217BCF.9000601_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BA0998E5-86C4-411A-B424-59329EAE375E_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 17:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11513.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11511.php">Jonathan Dursi: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11508.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11513.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11513.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Thanks for jumping in!  :)
<br>
And for your clarifications too, of course.
<br>
<p>How does the efficiency of loopback
<br>
(let's say, over TCP and over IB) compare with &quot;sm&quot;?
<br>
<p>FYI, I do NOT see the problem reported by Matthew et al.
<br>
on our AMD Opteron Shanghai dual-socket quad-core.
<br>
They run a quite outdated
<br>
CentOS kernel 2.6.18-92.1.22.el5, with gcc 4.1.2.
<br>
and OpenMPI 1.3.2.
<br>
(I've been lazy to upgrade, it is a production machine.)
<br>
<p>I could run all three OpenMPI test programs (hello_c, ring_c, and 
<br>
connectivity_c) on all 8 cores on a single node WITH &quot;sm&quot; turned ON
<br>
with no problem whatsoever.
<br>
(I also had IB turned on, but I can run again
<br>
with sm only if you think this can make a difference.)
<br>
<p>Moreover, all works fine if I oversuscribe up to 256 processes on
<br>
one node.
<br>
Beyond that I get segmentation fault (not hanging) sometimes,
<br>
but not always.
<br>
I understand that extreme oversubscription is a no-no.
<br>
<p>Moreover, on the screenshots that Matthew posted, the cores
<br>
were at 100% CPU utilization on the simple connectivity_c
<br>
(although this was when he had &quot;sm&quot; turned on on Nehalem).
<br>
On my platform I don't get anything more than 3% or so.
<br>
<p>Matthew: Which levels of CPU utilization do you see now?
<br>
<p>My two speculative cents.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 10, 2009, at 5:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A couple of questions to the OpenMPI pros:
</span><br>
<span class="quotelev2">&gt;&gt; If shared memory (&quot;sm&quot;) is turned off on a standalone computer,
</span><br>
<span class="quotelev2">&gt;&gt; which mechanism is used for MPI communication?
</span><br>
<span class="quotelev2">&gt;&gt; TCP via loopback port?  Other?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whatever device supports node-local loopback.  TCP is one; some OpenFabrics devices do, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why wouldn't shared memory work right on Nehalem?
</span><br>
<span class="quotelev2">&gt;&gt; (That is probably distressing for Mark, Matthew, and other Nehalem owners.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear, we don't know that this is a Nehalem-specific problem.  We actually thought it was an AMD-specific problem, but these results are interesting.  We've had a notoriously difficult time reproducing the problem reliably, which is why it hasn't been fixed yet.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The best luck so far in reproducing the problem has been with GCC 4.4.x (at Sun).  I've been trying for a few days to install GCC 4.4 on my machines without much luck yet.  Still working on it...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11513.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11511.php">Jonathan Dursi: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11508.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11513.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11513.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
