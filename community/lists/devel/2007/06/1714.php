<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 06:43:00 2007" -->
<!-- isoreceived="20070614104300" -->
<!-- sent="Thu, 14 Jun 2007 13:42:53 +0300" -->
<!-- isosent="20070614104253" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="20070614104253.GJ482_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4670A170.1030302_at_myri.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-14 06:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1715.php">Jeff Squyres: "[OMPI devel] Committed jnysal stuff too soon"</a>
<li><strong>Previous message:</strong> <a href="1713.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1711.php">Patrick Geoffray: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1716.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 13, 2007 at 10:01:20PM -0400, Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Let's take a step back and see exactly what we *want*.  Then we can  
</span><br>
<span class="quotelev2">&gt; &gt; talk about how to have an interface for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I must be missing something but why is the bandwidth/latency passed by 
</span><br>
<span class="quotelev1">&gt; the user (by whatever means) ? Would it be easier to automagically get 
</span><br>
<span class="quotelev1">&gt; these values by probing the hardware or have the BTL do an educated 
</span><br>
<span class="quotelev1">&gt; guess ? You can figure out at runtime the link rate of an eth device for 
</span><br>
<span class="quotelev1">&gt; example. You would want have a complicated way to force any value, but 
</span><br>
<span class="quotelev1">&gt; the default should be invisible, no ?
</span><br>
That what happens for openib today. Configure bandwidth to 0 and BTL
<br>
automatically will figure out HW speed, but sometimes you want to
<br>
override it.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1715.php">Jeff Squyres: "[OMPI devel] Committed jnysal stuff too soon"</a>
<li><strong>Previous message:</strong> <a href="1713.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1711.php">Patrick Geoffray: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1716.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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
