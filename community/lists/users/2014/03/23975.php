<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 14:28:00 2014" -->
<!-- isoreceived="20140326182800" -->
<!-- sent="Wed, 26 Mar 2014 19:28:58 +0100" -->
<!-- isosent="20140326182858" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="20140326182858.GA24087_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1395850114.27857.161.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 14:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ross-
<br>
<p>On 09:08 Wed 26 Mar     , Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2014-03-26 at 10:27 +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 26, 2014, at 1:31 AM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Even when &quot;idle&quot;, MPI processes use all the CPU.  I thought I remember
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; someone saying that they will be low priority, and so not pose much of
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; an obstacle to other uses of the CPU.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; well, if they're blocking in an MPI call, then they'll be doing a busy
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wait, so each thread will easily churn up 100% CPU load.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +1
</span><br>
<span class="quotelev1">&gt; This seems to restate the premise of my question.  Is it meant to lead
</span><br>
<span class="quotelev1">&gt; to the answer &quot;A process in busy wait blocks other users of the CPU to
</span><br>
<span class="quotelev1">&gt; the same extent as any other process at 100%&quot;?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev4">&gt; &gt; &gt;&gt; At any rate, my question is whether, if I have processes that spend most
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; of their time waiting to receive a message, I can put more of them than
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I have physical cores without much slowdown?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; AFAICS there will always be a certain slowdown. Is there a reason why
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you would want to oversubscribe your nodes?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Agreed -- this is not a good idea.  It suggests that you should make your existing code more efficient -- perhaps by overlapping communication and computation.
</span><br>
<span class="quotelev1">&gt; My motivation was to get more work done with a given number of CPUs, and
</span><br>
<span class="quotelev1">&gt; also to find out how much of burden I was imposing on other users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My application consists of processes that have different roles.  Some of
</span><br>
<span class="quotelev1">&gt; the roles don't have much to do (they play important roles, but don't do
</span><br>
<span class="quotelev1">&gt; much computation).  My hope was that I could add them on without
</span><br>
<span class="quotelev1">&gt; imposing much of a burden.
</span><br>
<p>If you have a complex workflow with varying computational loads, then
<br>
you might want to take a look at runtime systems which allow you to
<br>
express this directly through their API, e.g. HPX[1]. HPX has proven to
<br>
run with high efficiency on a wide range of architectures, and with a
<br>
multitude of different workloads.
<br>
<p><span class="quotelev1">&gt; Second, we do not operate in a batch queuing environment
</span><br>
<p>Why not fix that?
<br>
<p><span class="quotelev1">&gt; Finally, overlapping communication and computation is a bit tricky.  The
</span><br>
<span class="quotelev1">&gt; recent thread I started about Isend indicates that communication
</span><br>
<span class="quotelev1">&gt; requires the involvement of both the sender and receiver processes and
</span><br>
<span class="quotelev1">&gt; if one of them is busy with computation it can really slow things down.
</span><br>
<span class="quotelev1">&gt; I seem to have gotten good results by using Isend generally, in
</span><br>
<span class="quotelev1">&gt; particular when sending messages to the heavy computing processes, and
</span><br>
<span class="quotelev1">&gt; Send when sending from those same processes.
</span><br>
<p>Yeah, this is hard to achieve in MPI. This is because MPI is meant as
<br>
a rather low-level, but highly efficient and portable message passing
<br>
interface. If you with to express task based parallelism and their
<br>
dependencies, then high-level runtimes like HPX are the way to go. HPX
<br>
can also hide network latencies by oversubscribing a node and
<br>
scheduling other threads while the current one is waiting for
<br>
communication.
<br>
<p>[1] <a href="http://stellar.cct.lsu.edu/downloads/">http://stellar.cct.lsu.edu/downloads/</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://stellar.cct.lsu.edu/docs/">http://stellar.cct.lsu.edu/docs/</a>
<br>
<p>Cheers
<br>
-Andreas
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23975/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23976.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
