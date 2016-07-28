<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 00:24:48 2009" -->
<!-- isoreceived="20090716042448" -->
<!-- sent="Thu, 16 Jul 2009 14:24:38 +1000 (EST)" -->
<!-- isosent="20090716042438" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="32165657.621247718277895.JavaMail.csamuel_at_sys26" -->
<!-- charset="utf-8" -->
<!-- inreplyto="24164534.601247718212389.JavaMail.csamuel_at_sys26" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 00:24:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6442.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6440.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6446.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6446.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looking at your command line, did you remember to set -mca  
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone 1?
</span><br>
<p>Ahh, no, sorry, still feeling my way with this..
<br>
<p><span class="quotelev1">&gt; If not, we won't set affinity on the processes.
</span><br>
<p>Now it fails immediately with:
<br>
<p>&nbsp;&nbsp;Setting processor affinity failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Invalid argument&quot; (-11) instead of &quot;Success&quot; (0)
<br>
<p>wrapped in a bunch of OpenMPI messages explaining that it
<br>
failed on start.
<br>
<p>The strace looks much the same as before.
<br>
<p>[csamuel_at_tango047 CPI]$ fgrep affinity cpi-trace.txt
<br>
10853 execve(&quot;/usr/local/openmpi/1.3.3-gcc/bin/mpiexec&quot;, [&quot;mpiexec&quot;, &quot;-mca&quot;, &quot;mpi_paffinity_alone&quot;, &quot;1&quot;, &quot;-npernode&quot;, &quot;4&quot;, &quot;/home/csamuel/Sources/Tests/CPI/&quot;...], [/* 56 vars */]) = 0
<br>
10853 sched_getaffinity(0, 128,  { 3c }) = 8
<br>
10853 sched_setaffinity(0, 8,  { 0 })   = -1 EFAULT (Bad address)
<br>
10854 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
<br>
10854 &lt;... sched_getaffinity resumed&gt;  { 3c }) = 8
<br>
10854 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
<br>
10854 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
<br>
10857 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
<br>
10857 &lt;... sched_getaffinity resumed&gt;  { 3c }) = 8
<br>
10857 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
<br>
10857 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
<br>
10856 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
<br>
10856 &lt;... sched_getaffinity resumed&gt;  { 3c }) = 8
<br>
10856 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
<br>
10856 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
<br>
10855 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
<br>
10855 &lt;... sched_getaffinity resumed&gt;  { 3c }) = 8
<br>
10855 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
<br>
10855 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
<br>
10857 sched_setaffinity(10857, 8,  { 8 } &lt;unfinished ...&gt;
<br>
10857 &lt;... sched_setaffinity resumed&gt; ) = 0
<br>
10856 sched_setaffinity(10856, 8,  { 4 } &lt;unfinished ...&gt;
<br>
10856 &lt;... sched_setaffinity resumed&gt; ) = 0
<br>
10854 sched_setaffinity(10854, 8,  { 1 } &lt;unfinished ...&gt;
<br>
10854 &lt;... sched_setaffinity resumed&gt; ) = -1 EINVAL (Invalid argument)
<br>
<p><p>cheers,
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6442.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6440.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6446.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6446.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
