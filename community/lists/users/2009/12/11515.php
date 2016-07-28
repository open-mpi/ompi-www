<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 18:29:25 2009" -->
<!-- isoreceived="20091210232925" -->
<!-- sent="Thu, 10 Dec 2009 15:30:54 -0800" -->
<!-- isosent="20091210233054" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="4B2184AE.30508_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 18:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11516.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>In reply to:</strong> <a href="11504.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11517.php">Terry Dontje: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Why wouldn't shared memory work right on Nehalem?
</span><br>
<p>We don't know exactly what is driving this problem, but the issue 
<br>
appears to be related to memory fences.  Messages have to be posted to a 
<br>
receiver's queue.  By default, each process (since OMPI 1.3.2) has only 
<br>
one queue.  A sender acquires a lock to the queue, writes a pointer to 
<br>
its message, advances the queue index, and releases the lock.  If there 
<br>
are problems with memory barriers (or our use of them), messages can get 
<br>
lost, overwritten, etc.  One manifestation could be hangs.  One 
<br>
workaround, as described on this mail list, is to increase the number of 
<br>
queues (FIFOs) so that each sender gets its own.
<br>
<p>I think that's what's happening, but we don't know the root cause.  The 
<br>
test case in 2043 on the node I used for testing works like a gem for 
<br>
GCC versions prior to 4.4.x, but with 4.4.x variants it falls hard on 
<br>
its face.  Is the problem with GCC 4.4.x?  Or, does that compiler expose 
<br>
a problem with OMPI?  Etc.
<br>
<p><span class="quotelev1">&gt; It is amazing to me that this issue hasn't surfaced on this list before.
</span><br>
<p>The trac ticket refers to a number of e-mail messages that might be 
<br>
related.  At this point, however, it's hard to know what's related and 
<br>
what isn't.
<br>
<p>Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; FYI, I do NOT see the problem reported by Matthew et al. on our AMD 
</span><br>
<span class="quotelev1">&gt; Opteron Shanghai dual-socket quad-core.  They run a quite outdated 
</span><br>
<span class="quotelev1">&gt; CentOS kernel 2.6.18-92.1.22.el5, with gcc 4.1.2. and OpenMPI 1.3.2.
</span><br>
<p>In my mind, GCC 4.1.2 may well be the ticket here.  I find strong 
<br>
correspondence with GCC rev (&lt; 4.4.x vs &gt;= 4.4.x).
<br>
<p><span class="quotelev1">&gt; Moreover, all works fine if I oversuscribe up to 256 processes on one 
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt; Beyond that I get segmentation fault (not hanging) sometimes, but not 
</span><br>
<span class="quotelev1">&gt; always.
</span><br>
<span class="quotelev1">&gt; I understand that extreme oversubscription is a no-no.
</span><br>
<p>Sounds like another set of problems.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11516.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>In reply to:</strong> <a href="11504.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11517.php">Terry Dontje: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
