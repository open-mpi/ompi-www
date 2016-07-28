<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 13:37:27 2007" -->
<!-- isoreceived="20070613173727" -->
<!-- sent="Wed, 13 Jun 2007 20:37:22 +0300" -->
<!-- isosent="20070613173722" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with openib on demand connection bring up." -->
<!-- id="20070613173722.GC6519_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7B04569E-0147-40C4-BB2A-0166D57D948A_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-13 13:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1691.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1684.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 13, 2007 at 12:45:01PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 12:08 PM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am not committing this yet. I want people to review my logic and the
</span><br>
<span class="quotelev2">&gt; &gt; patch. If the change is OK with everyone how cares then I want this
</span><br>
<span class="quotelev2">&gt; &gt; change to go into 1.2 branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't care how this change will get to the trunk. I can use patched
</span><br>
<span class="quotelev2">&gt; &gt; version for a while. If you branch is in working state right now I can
</span><br>
<span class="quotelev2">&gt; &gt; merge this change into it tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was just bitten yesterday by a problem that I've known about for a  
</span><br>
<span class="quotelev1">&gt; while but had never gotten around to looking into (I could have sworn  
</span><br>
<span class="quotelev1">&gt; that there was an open trac ticket on this, but I can't find one  
</span><br>
<span class="quotelev1">&gt; anywhere).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have 2 hosts: one with 3 active ports and one with 2 active ports.   
</span><br>
<span class="quotelev1">&gt; If I run an MPI job between them, the openib BTL wireup got badly and  
</span><br>
<span class="quotelev1">&gt; it aborts.  So handling a heterogeneous number of ports is not  
</span><br>
<span class="quotelev1">&gt; currently handled properly in the code.
</span><br>
Are the all in the same subnet? If not I fixed some bug yesterday that
<br>
may help.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if Gleb's patch addresses this situation or not; I'll  
</span><br>
<span class="quotelev1">&gt; look at his patch this afternoon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
This patch address different problem.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1691.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1684.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Reply:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
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
