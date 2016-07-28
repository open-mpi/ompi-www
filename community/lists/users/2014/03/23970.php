<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 06:27:38 2014" -->
<!-- isoreceived="20140326102738" -->
<!-- sent="Wed, 26 Mar 2014 10:27:37 +0000" -->
<!-- isosent="20140326102737" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="F2CBF75A-0559-437B-B52B-8C54D174E5EC_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140326053147.GA30291_at_neuromancer.fritz.box" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 06:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23971.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23969.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23969.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23971.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23971.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 26, 2014, at 1:31 AM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Even when &quot;idle&quot;, MPI processes use all the CPU.  I thought I remember
</span><br>
<span class="quotelev2">&gt;&gt; someone saying that they will be low priority, and so not pose much of
</span><br>
<span class="quotelev2">&gt;&gt; an obstacle to other uses of the CPU.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; well, if they're blocking in an MPI call, then they'll be doing a busy
</span><br>
<span class="quotelev1">&gt; wait, so each thread will easily churn up 100% CPU load.
</span><br>
<p>+1
<br>
<p><span class="quotelev2">&gt;&gt; At any rate, my question is whether, if I have processes that spend most
</span><br>
<span class="quotelev2">&gt;&gt; of their time waiting to receive a message, I can put more of them than
</span><br>
<span class="quotelev2">&gt;&gt; I have physical cores without much slowdown?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AFAICS there will always be a certain slowdown. Is there a reason why
</span><br>
<span class="quotelev1">&gt; you would want to oversubscribe your nodes?
</span><br>
<p>Agreed -- this is not a good idea.  It suggests that you should make your existing code more efficient -- perhaps by overlapping communication and computation.
<br>
<p><span class="quotelev2">&gt;&gt; Does it make any difference if there's hyperthreading with, e.g., 16
</span><br>
<span class="quotelev2">&gt;&gt; virtual CPUs based on 8 physical ones?  In general I try to limit to the
</span><br>
<span class="quotelev2">&gt;&gt; number of physical cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That depends much on the code. If the additional threads run a
</span><br>
<span class="quotelev1">&gt; different instruction mix, then you might be able to squeeze out some
</span><br>
<span class="quotelev1">&gt; additional performance by adding more than the original 8 threads. But
</span><br>
<span class="quotelev1">&gt; I've also seen codes which actually run slower with SMT
</span><br>
<span class="quotelev1">&gt; (&quot;hyperthreading&quot;).
</span><br>
<p><p>Also agreed.  Hyperthreading is a surprisingly complex issue.  Recent generation Intel chips have made hyperthreading more friendly to HPC types of codes, but in my experience, it's still not &quot;enough&quot; to run one MPI process per hyperthread (vs. one per core).  But YMMV -- try with your own code and see.
<br>
<p>Be aware of a few facts, though:
<br>
<p>1. There is a fundamental difference between disabling hyperthreading in the BIOS at power-on time and simply running one MPI process per core.  Disabling HT at power-on allocates more hardware resources to the remaining HT that is left is each core (e.g., deeper queues).
<br>
<p>2. If you have a single-threaded application, there is little/no benefit to running with hyperthreading enabled.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23971.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23969.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23969.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23971.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23971.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23974.php">Ross Boylan: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
