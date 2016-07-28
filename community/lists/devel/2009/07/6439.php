<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 22:11:34 2009" -->
<!-- isoreceived="20090716021134" -->
<!-- sent="Thu, 16 Jul 2009 12:11:25 +1000 (EST)" -->
<!-- isosent="20090716021125" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="51951177.648161247710285939.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1515509783.648061247710151193.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Date:</strong> 2009-07-15 22:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6440.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6438.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6440.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6440.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could you check this? You can run a trivial job using the -npernode x 
</span><br>
<span class="quotelev1">&gt; option, where x matched the #cores you were allocated on the nodes.
</span><br>
<span class="quotelev1">&gt; If you do this, do we bind to the correct cores?
</span><br>
<p>Nope, I'm afraid it doesn't - submitted a job asking
<br>
for 4 cores on one node and was allocated cores 0-3 in
<br>
the cpuset.
<br>
<p>Grep'ing the strace output for anything mentioning affinity shows:
<br>
<p>[csamuel_at_tango027 CPI]$ fgrep affinity cpi-trace.txt
<br>
11412 execve(&quot;/usr/local/openmpi/1.3.3-gcc/bin/mpiexec&quot;, [&quot;mpiexec&quot;, &quot;--mca&quot;, &quot;paffinity&quot;, &quot;linux&quot;, &quot;-npernode&quot;, &quot;4&quot;, &quot;/home/csamuel/Sources/Tests/CPI/&quot;...], [/* 56 vars */]) = 0
<br>
11412 sched_getaffinity(0, 128,  { f }) = 8
<br>
11412 sched_setaffinity(0, 8,  { 0 })   = -1 EFAULT (Bad address)
<br>
11416 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
<br>
11416 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
<br>
11416 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
<br>
11416 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
<br>
11414 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
<br>
11414 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
<br>
11414 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
<br>
11414 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
<br>
11413 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
<br>
11413 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
<br>
11413 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
<br>
11413 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
<br>
11415 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
<br>
11415 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
<br>
11415 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
<br>
11415 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
<br>
11413 sched_getaffinity(11413, 8,  &lt;unfinished ...&gt;
<br>
11415 sched_getaffinity(11415, 8,  &lt;unfinished ...&gt;
<br>
11413 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
<br>
11415 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
<br>
11414 sched_getaffinity(11414, 8,  &lt;unfinished ...&gt;
<br>
11414 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
<br>
11416 sched_getaffinity(11416, 8,  &lt;unfinished ...&gt;
<br>
11416 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
<br>
<p>I can confirm that it's not worked by checking what
<br>
plpa-taskset says about a process (for example 11414):
<br>
<p>[root_at_tango027 plpa-taskset]# ./plpa-taskset -cp 11414
<br>
pid 11414's current affinity list: 0-3
<br>
<p>According to the manual page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EFAULT A supplied memory address was invalid.
<br>
<p>This is on a dual socket quad core AMD Shanghai system
<br>
running the 2.6.28.9 kernel (not had a chance to upgrade
<br>
recently).
<br>
<p>Will do some more poking around after lunch.
<br>
<p>cheers,
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
<li><strong>Next message:</strong> <a href="6440.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6438.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6440.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6440.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
