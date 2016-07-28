<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 16:16:26 2009" -->
<!-- isoreceived="20090407201626" -->
<!-- sent="Tue, 7 Apr 2009 13:16:23 -0700" -->
<!-- isosent="20090407201623" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090407201623.GA93666_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A2C9D72F-5955-43E9-BC0C-EEA78B4F8007_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-04-07 16:16:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8828.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8828.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 07, 2009 at 01:40:13PM -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I would really suggest looking at George's note first as I think you  
</span><br>
<span class="quotelev1">&gt; are chasing your tail here. It sounds like the most likely problem is  
</span><br>
<span class="quotelev1">&gt; that OMPI thinks you are oversubscribed and is setting sched_yield  
</span><br>
<span class="quotelev1">&gt; accordingly. which would fully account for these diffs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the methods for setting sched yield are different between  
</span><br>
<span class="quotelev1">&gt; the various releases, so something could be catching you here. If you  
</span><br>
<span class="quotelev1">&gt; are sure you aren't oversubscribing, then set -mca mpi_yield_when_idle  
</span><br>
<span class="quotelev1">&gt; 0 on your cmd line to override any internal settings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>'-mca mpi_yield_when_idle 0' returns the performance of 1.3.1 to
<br>
that of 1.2.9.  In fact, 1.3.1 may be marginally better.  A comparison
<br>
can be see at
<br>
<p><a href="http://troutmask.apl.washington.edu/~kargl/ompi_cmp_yield.jpg">http://troutmask.apl.washington.edu/~kargl/ompi_cmp_yield.jpg</a>
<br>
<p>So, in what file is sched_yield set? 
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8828.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8828.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
