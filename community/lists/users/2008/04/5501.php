<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:56:33 2008" -->
<!-- isoreceived="20080424155633" -->
<!-- sent="Thu, 24 Apr 2008 17:56:25 +0200" -->
<!-- isosent="20080424155625" -->
<!-- name="Ingo Josopait" -->
<!-- email="ingo.josopait_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="4810ADA9.1010900_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080424134346.GB24741_at_eponymous" -->
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
<strong>From:</strong> Ingo Josopait (<em>ingo.josopait_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 11:56:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5502.php">Ralph H Castain: "Re: [OMPI users] Proper use of sigaction in Open MPI?"</a>
<li><strong>Previous message:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5476.php">Alberto Giannetti: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Barry Rountree schrieb:
<br>
<span class="quotelev1">&gt; On Thu, Apr 24, 2008 at 12:56:03PM +0200, Ingo Josopait wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am using one of the nodes as a desktop computer. Therefore it is most
</span><br>
<span class="quotelev2">&gt;&gt; important for me that the mpi program is not so greedily acquiring cpu
</span><br>
<span class="quotelev2">&gt;&gt; time. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a kernel scheduling issue, not an OpenMPI issue.  Busy waiting in
</span><br>
<span class="quotelev1">&gt; one process should not cause noticable loss of responsiveness in another
</span><br>
<span class="quotelev1">&gt; processes.  Have you experimented with the &quot;nice&quot; command?
</span><br>
<p>I don't think that is a kernel issue. In the current OpenMPI
<br>
implementation, when mpi is waiting for new messages, it simply waits in
<br>
a loop for new messages to arrive. The kernel has then no way to know
<br>
whether the program is actually doing some useful calculations or
<br>
whether it is simply busy waiting. If, on the other hand, mpi would tell
<br>
the kernel that it is waiting for new messages, the kernel could
<br>
schedule its cpu time more efficiently to background programs, or make
<br>
an idle call if no other program is running (which would lower the
<br>
energy consumption).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But I would imagine that the energy consumption is generally a big
</span><br>
<span class="quotelev2">&gt;&gt; issue, since energy is a major cost factor in a computer cluster. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yup.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When a
</span><br>
<span class="quotelev2">&gt;&gt; cpu is idle, it uses considerably less energy. Last time I checked my
</span><br>
<span class="quotelev2">&gt;&gt; computer used 180W when both cpu cores were working and 110W when both
</span><br>
<span class="quotelev2">&gt;&gt; cores were idle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What processor is this?
</span><br>
<p>Athlon X2 6000+ (3 Ghz)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just made a small hack to solve the problem. I inserted a simple sleep
</span><br>
<span class="quotelev2">&gt;&gt; call into the function 'opal_condition_wait':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- orig/openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ openmpi-1.2.6/opal/threads/condition.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -78,6 +78,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  #endif
</span><br>
<span class="quotelev2">&gt;&gt;      } else {
</span><br>
<span class="quotelev2">&gt;&gt;          while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev2">&gt;&gt; +           usleep(1000);
</span><br>
<span class="quotelev2">&gt;&gt;              opal_progress();
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I expect this would lead to increased execution time for all programs
</span><br>
<span class="quotelev1">&gt; and increased energy consumption for most programs.  Recall that energy
</span><br>
<span class="quotelev1">&gt; is power multiplied by time.  You're reducing the power on some nodes
</span><br>
<span class="quotelev1">&gt; and increasing time on all nodes.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The usleep call will let the program sleep for about 4 ms (it won't
</span><br>
<span class="quotelev2">&gt;&gt; sleep for a shorter time because of some timer granularity). But that is
</span><br>
<span class="quotelev2">&gt;&gt; good enough for me. The cpu usage is (almost) zero when the tasks are
</span><br>
<span class="quotelev2">&gt;&gt; waiting for one another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think your mistake here is considering CPU load to be a useful metric.
</span><br>
<span class="quotelev1">&gt; It isn't.  Responsiveness is a useful metric, energy is a useful metric,
</span><br>
<span class="quotelev1">&gt; but CPU load isn't a reliable guide to either of these.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For a proper implementation you would want to actively poll without a
</span><br>
<span class="quotelev2">&gt;&gt; sleep call for a few milliseconds, and then use some other method that
</span><br>
<span class="quotelev2">&gt;&gt; sleeps not for a fixed time, but until new messages arrive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, it sounds like you can get to this before I can.  Post your patch
</span><br>
<span class="quotelev1">&gt; here and I'll test it on the NAS suite, UMT2K, Paradis, and a few
</span><br>
<span class="quotelev1">&gt; synthetic benchmarks I've written.  The cluster I use has multimeters
</span><br>
<span class="quotelev1">&gt; hooked up so I can also let you know how much energy is being saved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barry Rountree
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev1">&gt; University of Georgia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Here is now a slightly more sophisticated patch:
<br>
<p>--- orig/openmpi-1.2.6/opal/threads/condition.h 2006-11-09
<br>
19:53:32.000000000 +0100
<br>
+++ openmpi-1.2.6/opal/threads/condition.h      2008-04-24
<br>
17:15:29.000000000 +0200
<br>
@@ -77,7 +77,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
+        int nosleep_counter = 300000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (c-&gt;c_signaled == 0) {
<br>
+            if (--nosleep_counter &lt; 0) {
<br>
+                usleep(1000);
<br>
+            }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>It will actively poll for a short time (0.1 seconds on my 2Ghz athlon64
<br>
laptop, this may adjusted by chosing a different number than 300000),
<br>
and after that it will sleep for about 4 ms in each loop cycle.
<br>
<p>You may test it. It should not increase the latency by much. The cpu
<br>
usage (as displayed by 'top') is nearly zero when waiting for new data,
<br>
and judging from the noise level of my laptop fan, the cpu uses far less
<br>
power.
<br>
<p>A better solution would certainly be to use some other blocking
<br>
mechanism, but as others have said in this thread, this seems to be a
<br>
bit less trivial.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5502.php">Ralph H Castain: "Re: [OMPI users] Proper use of sigaction in Open MPI?"</a>
<li><strong>Previous message:</strong> <a href="5500.php">Jeff Squyres: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5491.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5476.php">Alberto Giannetti: "Re: [OMPI users] (no subject)"</a>
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
