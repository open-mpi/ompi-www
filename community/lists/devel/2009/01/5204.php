<?
$subject_val = "Re: [OMPI devel] This is why we test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 12:01:21 2009" -->
<!-- isoreceived="20090115170121" -->
<!-- sent="Thu, 15 Jan 2009 12:01:14 -0500" -->
<!-- isosent="20090115170114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] This is why we test" -->
<!-- id="63CE5E59-43B0-4333-9596-F1836D87634D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDB16843-AD64-415F-AE3C-52146AE78F4D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] This is why we test<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 12:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5205.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5203.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5202.php">Jeff Squyres: "[OMPI devel] This is why we test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5218.php">Jeff Squyres: "Re: [OMPI devel] This is why we test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha and I *think* we have a fix.  However, we're not quite clear on  
<br>
this part of the code, so we need some more testing and eyes on the  
<br>
code.
<br>
<p>I'll start the tests now -- given that this is a low-frequency bug,  
<br>
I'm going to run a slightly larger MTT run (several thousand tests)  
<br>
that'll take a few hours (not the ~12 hours that my MTT run took  
<br>
yesterday) and see if we can get reasonable confidence that we fixed it.
<br>
<p><p>On Jan 15, 2009, at 9:05 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, I have to throw the flag in the v1.3 release.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran ~16k tests via MTT yesterday on the rc5 and rc6 tarballs.  I  
</span><br>
<span class="quotelev1">&gt; found the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Found test runs: 15962
</span><br>
<span class="quotelev1">&gt; Passed: 15785 (98.89%)
</span><br>
<span class="quotelev1">&gt; Failed: 83 (0.52%)
</span><br>
<span class="quotelev1">&gt; --&gt; Openib failures: 80 (0.50%)
</span><br>
<span class="quotelev1">&gt; Skipped: 46 (0.29%)
</span><br>
<span class="quotelev1">&gt; Timedout: 48 (0.30%)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 80 openib failures are all seemingly random segv's.  I repeated  
</span><br>
<span class="quotelev1">&gt; a much smaller run this morning (about 700 runs) and still found a  
</span><br>
<span class="quotelev1">&gt; non-zero percentage of fails of the same flavor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The timeouts are a little worrysome as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This unfortunately requires investigation.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5205.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5203.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5202.php">Jeff Squyres: "[OMPI devel] This is why we test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5218.php">Jeff Squyres: "Re: [OMPI devel] This is why we test"</a>
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
