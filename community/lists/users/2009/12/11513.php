<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 17:57:33 2009" -->
<!-- isoreceived="20091210225733" -->
<!-- sent="Thu, 10 Dec 2009 17:57:27 -0500" -->
<!-- isosent="20091210225727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="B029F060-2098-4414-88B1-E9A3FFFCE2F1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B217BCF.9000601_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2009-12-10 17:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Previous message:</strong> <a href="11512.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11512.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11510.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2009, at 5:53 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; How does the efficiency of loopback
</span><br>
<span class="quotelev1">&gt; (let's say, over TCP and over IB) compare with &quot;sm&quot;?
</span><br>
<p>Definitely not as good; that's why we have sm.  :-)  I don't have any quantification of that assertion, though (i.e., no numbers to back that up).
<br>
<p><span class="quotelev1">&gt; FYI, I do NOT see the problem reported by Matthew et al.
</span><br>
<span class="quotelev1">&gt; on our AMD Opteron Shanghai dual-socket quad-core.
</span><br>
<span class="quotelev1">&gt; They run a quite outdated
</span><br>
<span class="quotelev1">&gt; CentOS kernel 2.6.18-92.1.22.el5, with gcc 4.1.2.
</span><br>
<span class="quotelev1">&gt; and OpenMPI 1.3.2.
</span><br>
<span class="quotelev1">&gt; (I've been lazy to upgrade, it is a production machine.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could run all three OpenMPI test programs (hello_c, ring_c, and
</span><br>
<span class="quotelev1">&gt; connectivity_c) on all 8 cores on a single node WITH &quot;sm&quot; turned ON
</span><br>
<span class="quotelev1">&gt; with no problem whatsoever.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; Moreover, all works fine if I oversuscribe up to 256 processes on
</span><br>
<span class="quotelev1">&gt; one node.
</span><br>
<span class="quotelev1">&gt; Beyond that I get segmentation fault (not hanging) sometimes,
</span><br>
<span class="quotelev1">&gt; but not always.
</span><br>
<span class="quotelev1">&gt; I understand that extreme oversubscription is a no-no.
</span><br>
<p>It's quite possible that extreme oversubscription and/or that many procs in sm have not been well-tested.
<br>
<p><span class="quotelev1">&gt; Moreover, on the screenshots that Matthew posted, the cores
</span><br>
<span class="quotelev1">&gt; were at 100% CPU utilization on the simple connectivity_c
</span><br>
<span class="quotelev1">&gt; (although this was when he had &quot;sm&quot; turned on on Nehalem).
</span><br>
<span class="quotelev1">&gt; On my platform I don't get anything more than 3% or so.
</span><br>
<p>100% CPU utilization usually means that some completion hasn't occurred that was expected and therefore everything is spinning waiting for that completion.  The &quot;hasn't occurred&quot; bit is probably the bug here -- it's likely that there should have been a completion that somehow got missed.  But this is speculative -- we're still investigating...
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
<li><strong>Next message:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Previous message:</strong> <a href="11512.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11512.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11510.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
