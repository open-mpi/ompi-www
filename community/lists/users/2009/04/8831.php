<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 16:25:21 2009" -->
<!-- isoreceived="20090407202521" -->
<!-- sent="Tue, 07 Apr 2009 13:25:09 -0700 (PDT)" -->
<!-- isosent="20090407202509" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="Pine.GSO.4.64.0904071324190.12311_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 16:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8832.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8828.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8868.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8868.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does OpenMPI know about the number of CPUS per node for FreeBSD?
<br>
<p>DM
<br>
<p>On Tue, 7 Apr 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I would really suggest looking at George's note first as I think you are 
</span><br>
<span class="quotelev1">&gt; chasing your tail here. It sounds like the most likely problem is that OMPI 
</span><br>
<span class="quotelev1">&gt; thinks you are oversubscribed and is setting sched_yield accordingly. which 
</span><br>
<span class="quotelev1">&gt; would fully account for these diffs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the methods for setting sched yield are different between the 
</span><br>
<span class="quotelev1">&gt; various releases, so something could be catching you here. If you are sure 
</span><br>
<span class="quotelev1">&gt; you aren't oversubscribing, then set -mca mpi_yield_when_idle 0 on your cmd 
</span><br>
<span class="quotelev1">&gt; line to override any internal settings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2009, at 1:32 PM, Steve Kargl wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 07, 2009 at 12:00:55PM -0700, Mostyn Lewis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you rebuild 1.2.9? As I see you have static libraries, maybe there's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a lurking phthread or something else that may have changed over time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes.  I downloaded 1.2.9, 1.3, and 1.3.1, all within minutes of each
</span><br>
<span class="quotelev2">&gt;&gt; other.  All are configured with --enable-static --disable-shared.
</span><br>
<span class="quotelev2">&gt;&gt; Each is installed in its own directory under /usr/local and
</span><br>
<span class="quotelev2">&gt;&gt; I use full patch names to mpicc and mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just rebuilt 1.3.1 without --enable-static --disable-shared.
</span><br>
<span class="quotelev2">&gt;&gt; There is no change in performance.  1.3.1 is a factor of 10
</span><br>
<span class="quotelev2">&gt;&gt; slower than 1.2.9 with messages of ~10KB and smaller.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've used svn to grab trunk.  Once I determine how to build
</span><br>
<span class="quotelev2">&gt;&gt; the trunk, I'll do a binary search to see if I can identify
</span><br>
<span class="quotelev2">&gt;&gt; the revision where the problem first occurs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Steve
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8832.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8828.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8868.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8868.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
