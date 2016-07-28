<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 09:44:00 2008" -->
<!-- isoreceived="20080424134400" -->
<!-- sent="Thu, 24 Apr 2008 09:43:46 -0400" -->
<!-- isosent="20080424134346" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="20080424134346.GB24741_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48106743.5030305_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Busy waiting [was Re:  (no subject)]<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 09:43:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PubSub and MPI"</a>
<li><strong>Previous message:</strong> <a href="5490.php">Keller, Jesse: "[OMPI users] Proper use of sigaction in Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="5481.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5501.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 24, 2008 at 12:56:03PM +0200, Ingo Josopait wrote:
<br>
<span class="quotelev1">&gt; I am using one of the nodes as a desktop computer. Therefore it is most
</span><br>
<span class="quotelev1">&gt; important for me that the mpi program is not so greedily acquiring cpu
</span><br>
<span class="quotelev1">&gt; time. 
</span><br>
<p>This is a kernel scheduling issue, not an OpenMPI issue.  Busy waiting in
<br>
one process should not cause noticable loss of responsiveness in another
<br>
processes.  Have you experimented with the &quot;nice&quot; command?
<br>
<p><span class="quotelev1">&gt; But I would imagine that the energy consumption is generally a big
</span><br>
<span class="quotelev1">&gt; issue, since energy is a major cost factor in a computer cluster. 
</span><br>
<p>Yup.  
<br>
<p><span class="quotelev1">&gt; When a
</span><br>
<span class="quotelev1">&gt; cpu is idle, it uses considerably less energy. Last time I checked my
</span><br>
<span class="quotelev1">&gt; computer used 180W when both cpu cores were working and 110W when both
</span><br>
<span class="quotelev1">&gt; cores were idle.
</span><br>
<p>What processor is this?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just made a small hack to solve the problem. I inserted a simple sleep
</span><br>
<span class="quotelev1">&gt; call into the function 'opal_condition_wait':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- orig/openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev1">&gt; @@ -78,6 +78,7 @@
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev1">&gt; +           usleep(1000);
</span><br>
<span class="quotelev1">&gt;              opal_progress();
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I expect this would lead to increased execution time for all programs
<br>
and increased energy consumption for most programs.  Recall that energy
<br>
is power multiplied by time.  You're reducing the power on some nodes
<br>
and increasing time on all nodes.  
<br>
<p><span class="quotelev1">&gt; The usleep call will let the program sleep for about 4 ms (it won't
</span><br>
<span class="quotelev1">&gt; sleep for a shorter time because of some timer granularity). But that is
</span><br>
<span class="quotelev1">&gt; good enough for me. The cpu usage is (almost) zero when the tasks are
</span><br>
<span class="quotelev1">&gt; waiting for one another.
</span><br>
<p>I think your mistake here is considering CPU load to be a useful metric.
<br>
It isn't.  Responsiveness is a useful metric, energy is a useful metric,
<br>
but CPU load isn't a reliable guide to either of these.  
<br>
<p><span class="quotelev1">&gt; For a proper implementation you would want to actively poll without a
</span><br>
<span class="quotelev1">&gt; sleep call for a few milliseconds, and then use some other method that
</span><br>
<span class="quotelev1">&gt; sleeps not for a fixed time, but until new messages arrive.
</span><br>
<p>Well, it sounds like you can get to this before I can.  Post your patch
<br>
here and I'll test it on the NAS suite, UMT2K, Paradis, and a few
<br>
synthetic benchmarks I've written.  The cluster I use has multimeters
<br>
hooked up so I can also let you know how much energy is being saved.
<br>
<p>Barry Rountree
<br>
Ph.D. Candidate, Computer Science
<br>
University of Georgia
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PubSub and MPI"</a>
<li><strong>Previous message:</strong> <a href="5490.php">Keller, Jesse: "[OMPI users] Proper use of sigaction in Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="5481.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5501.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
