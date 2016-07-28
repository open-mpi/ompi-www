<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 15:39:21 2009" -->
<!-- isoreceived="20090407193921" -->
<!-- sent="Tue, 7 Apr 2009 12:39:18 -0700" -->
<!-- isosent="20090407193918" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090407193918.GB92304_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AC3096AC-5032-455F-8E73-129A2890CB05_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 15:39:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8828.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8826.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8825.php">Ethan Mallove: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 07, 2009 at 03:18:31PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Steve,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I spotted a strange value for the mpi_yield_when_idle MCA parameter. 1  
</span><br>
<span class="quotelev1">&gt; means your processor is oversubscribed, and this trigger a call to  
</span><br>
<span class="quotelev1">&gt; sched_yield after each check on the SM. Are you running the job  
</span><br>
<span class="quotelev1">&gt; oversubscribed? If not it looks like somehow we don't correctly  
</span><br>
<span class="quotelev1">&gt; identify that there are multiple cores ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The node is not oversubscribed.  Here's top(1) output
<br>
<p>last pid: 90265;  load averages:  0.79,  0.40,  0.28   up 89+18:30:27  12:33:36
<br>
31 processes:  3 running, 28 sleeping
<br>
CPU:  2.3% user,  0.0% nice, 25.8% system,  0.4% interrupt, 71.5% idle
<br>
Mem: 27M Active, 28G Inact, 748M Wired, 1304M Cache, 617M Buf, 840M Free
<br>
Swap: 4096M Total, 4096M Free
<br>
<p>&nbsp;&nbsp;PID USERNAME    THR PRI NICE   SIZE    RES STATE   C   TIME   WCPU COMMAND
<br>
90264 kargl         1 101    0   170M 12012K CPU1    1   0:32 98.46% z
<br>
90265 kargl         1 101    0   170M  4320K CPU2    2   0:32 97.01% z
<br>
&nbsp;&nbsp;756 root          1   4    0  4668K   928K -       7   8:36  0.00% nfsd
<br>
&nbsp;&nbsp;757 root          1   4    0  4668K   932K -       7   7:57  0.00% nfsd
<br>
<p><p>z is the netpipe executable.  This node has 2 quad-core opteron
<br>
processors.
<br>
<p>I also see the slowdown if I used node19 instead of node20.  19 and
<br>
20 are identical blades.
<br>
&nbsp;
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8828.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8826.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8825.php">Ethan Mallove: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
