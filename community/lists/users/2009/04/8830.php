<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 16:23:55 2009" -->
<!-- isoreceived="20090407202355" -->
<!-- sent="Tue, 7 Apr 2009 14:23:45 -0600" -->
<!-- isosent="20090407202345" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="0B2D8B8F-921F-411D-9E3B-09A2E6684D05_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090407201623.GA93666_at_troutmask.apl.washington.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 16:23:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8831.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8832.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8832.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It isn't in a file - unless you specify it, OMPI will set it  
<br>
automatically based on the number of procs on the node vs. what OMPI  
<br>
thinks are the number of available processors. The question is: why  
<br>
does OMPI not correctly know the number of processors on your machine?
<br>
<p>I don't remember now, but did you send us this info:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>If not, could you please do so? It would help us track down the problem.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Apr 7, 2009, at 2:16 PM, Steve Kargl wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 07, 2009 at 01:40:13PM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I would really suggest looking at George's note first as I think you
</span><br>
<span class="quotelev2">&gt;&gt; are chasing your tail here. It sounds like the most likely problem is
</span><br>
<span class="quotelev2">&gt;&gt; that OMPI thinks you are oversubscribed and is setting sched_yield
</span><br>
<span class="quotelev2">&gt;&gt; accordingly. which would fully account for these diffs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that the methods for setting sched yield are different between
</span><br>
<span class="quotelev2">&gt;&gt; the various releases, so something could be catching you here. If you
</span><br>
<span class="quotelev2">&gt;&gt; are sure you aren't oversubscribing, then set -mca  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_yield_when_idle
</span><br>
<span class="quotelev2">&gt;&gt; 0 on your cmd line to override any internal settings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; '-mca mpi_yield_when_idle 0' returns the performance of 1.3.1 to
</span><br>
<span class="quotelev1">&gt; that of 1.2.9.  In fact, 1.3.1 may be marginally better.  A comparison
</span><br>
<span class="quotelev1">&gt; can be see at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://troutmask.apl.washington.edu/~kargl/ompi_cmp_yield.jpg">http://troutmask.apl.washington.edu/~kargl/ompi_cmp_yield.jpg</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, in what file is sched_yield set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8831.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8832.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8832.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
