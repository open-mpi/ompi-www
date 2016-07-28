<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 15:40:29 2009" -->
<!-- isoreceived="20090407194029" -->
<!-- sent="Tue, 7 Apr 2009 13:40:13 -0600" -->
<!-- isosent="20090407194013" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="A2C9D72F-5955-43E9-BC0C-EEA78B4F8007_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090407193207.GA92304_at_troutmask.apl.washington.edu" -->
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
<strong>Date:</strong> 2009-04-07 15:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8827.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8826.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8831.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would really suggest looking at George's note first as I think you  
<br>
are chasing your tail here. It sounds like the most likely problem is  
<br>
that OMPI thinks you are oversubscribed and is setting sched_yield  
<br>
accordingly. which would fully account for these diffs.
<br>
<p>Note that the methods for setting sched yield are different between  
<br>
the various releases, so something could be catching you here. If you  
<br>
are sure you aren't oversubscribing, then set -mca mpi_yield_when_idle  
<br>
0 on your cmd line to override any internal settings.
<br>
<p>On Apr 7, 2009, at 1:32 PM, Steve Kargl wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 07, 2009 at 12:00:55PM -0700, Mostyn Lewis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Steve,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you rebuild 1.2.9? As I see you have static libraries, maybe  
</span><br>
<span class="quotelev2">&gt;&gt; there's
</span><br>
<span class="quotelev2">&gt;&gt; a lurking phthread or something else that may have changed over time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  I downloaded 1.2.9, 1.3, and 1.3.1, all within minutes of each
</span><br>
<span class="quotelev1">&gt; other.  All are configured with --enable-static --disable-shared.
</span><br>
<span class="quotelev1">&gt; Each is installed in its own directory under /usr/local and
</span><br>
<span class="quotelev1">&gt; I use full patch names to mpicc and mpiexec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just rebuilt 1.3.1 without --enable-static --disable-shared.
</span><br>
<span class="quotelev1">&gt; There is no change in performance.  1.3.1 is a factor of 10
</span><br>
<span class="quotelev1">&gt; slower than 1.2.9 with messages of ~10KB and smaller.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've used svn to grab trunk.  Once I determine how to build
</span><br>
<span class="quotelev1">&gt; the trunk, I'll do a binary search to see if I can identify
</span><br>
<span class="quotelev1">&gt; the revision where the problem first occurs.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8827.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8826.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8829.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8831.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
