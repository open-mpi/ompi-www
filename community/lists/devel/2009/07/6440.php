<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 22:19:23 2009" -->
<!-- isoreceived="20090716021923" -->
<!-- sent="Wed, 15 Jul 2009 20:19:07 -0600" -->
<!-- isosent="20090716021907" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="88CB0D24-5C02-4785-8DE1-FCFF5ABE3809_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="51951177.648161247710285939.JavaMail.root_at_mail.vpac.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 22:19:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6441.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6441.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at your command line, did you remember to set -mca  
<br>
mpi_paffinity_alone 1? If not, we won't set affinity on the processes.
<br>
<p><p>On Jul 15, 2009, at 8:11 PM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you check this? You can run a trivial job using the -npernode x
</span><br>
<span class="quotelev2">&gt;&gt; option, where x matched the #cores you were allocated on the nodes.
</span><br>
<span class="quotelev2">&gt;&gt; If you do this, do we bind to the correct cores?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope, I'm afraid it doesn't - submitted a job asking
</span><br>
<span class="quotelev1">&gt; for 4 cores on one node and was allocated cores 0-3 in
</span><br>
<span class="quotelev1">&gt; the cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Grep'ing the strace output for anything mentioning affinity shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [csamuel_at_tango027 CPI]$ fgrep affinity cpi-trace.txt
</span><br>
<span class="quotelev1">&gt; 11412 execve(&quot;/usr/local/openmpi/1.3.3-gcc/bin/mpiexec&quot;, [&quot;mpiexec&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;--mca&quot;, &quot;paffinity&quot;, &quot;linux&quot;, &quot;-npernode&quot;, &quot;4&quot;, &quot;/home/csamuel/ 
</span><br>
<span class="quotelev1">&gt; Sources/Tests/CPI/&quot;...], [/* 56 vars */]) = 0
</span><br>
<span class="quotelev1">&gt; 11412 sched_getaffinity(0, 128,  { f }) = 8
</span><br>
<span class="quotelev1">&gt; 11412 sched_setaffinity(0, 8,  { 0 })   = -1 EFAULT (Bad address)
</span><br>
<span class="quotelev1">&gt; 11416 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11416 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
</span><br>
<span class="quotelev1">&gt; 11416 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11416 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
</span><br>
<span class="quotelev1">&gt; 11414 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11414 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
</span><br>
<span class="quotelev1">&gt; 11414 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11414 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
</span><br>
<span class="quotelev1">&gt; 11413 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11413 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
</span><br>
<span class="quotelev1">&gt; 11413 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11413 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
</span><br>
<span class="quotelev1">&gt; 11415 sched_getaffinity(0, 128,  &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11415 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
</span><br>
<span class="quotelev1">&gt; 11415 sched_setaffinity(0, 8,  { 0 } &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11415 &lt;... sched_setaffinity resumed&gt; ) = -1 EFAULT (Bad address)
</span><br>
<span class="quotelev1">&gt; 11413 sched_getaffinity(11413, 8,  &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11415 sched_getaffinity(11415, 8,  &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11413 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
</span><br>
<span class="quotelev1">&gt; 11415 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
</span><br>
<span class="quotelev1">&gt; 11414 sched_getaffinity(11414, 8,  &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11414 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
</span><br>
<span class="quotelev1">&gt; 11416 sched_getaffinity(11416, 8,  &lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; 11416 &lt;... sched_getaffinity resumed&gt;  { f }) = 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can confirm that it's not worked by checking what
</span><br>
<span class="quotelev1">&gt; plpa-taskset says about a process (for example 11414):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_tango027 plpa-taskset]# ./plpa-taskset -cp 11414
</span><br>
<span class="quotelev1">&gt; pid 11414's current affinity list: 0-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to the manual page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       EFAULT A supplied memory address was invalid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on a dual socket quad core AMD Shanghai system
</span><br>
<span class="quotelev1">&gt; running the 2.6.28.9 kernel (not had a chance to upgrade
</span><br>
<span class="quotelev1">&gt; recently).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will do some more poking around after lunch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt; The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt; P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6441.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6441.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
