<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 08:20:34 2007" -->
<!-- isoreceived="20070711122034" -->
<!-- sent="Wed, 11 Jul 2007 15:20:29 +0300" -->
<!-- isosent="20070711122029" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault" -->
<!-- id="20070711122028.GH14832_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200707111317.33871.christoph.niethammer_at_web.de" -->
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
<strong>Date:</strong> 2007-07-11 08:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1849.php">Tim Prins: "Re: [OMPI devel] [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="1847.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1844.php">Christoph Niethammer: "[OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 11, 2007 at 01:17:02PM +0200, Christoph Niethammer wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since some time I'm testing Open MPI at the HRLS. My main topic there is the 
</span><br>
<span class="quotelev1">&gt; thread support of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some time ago I found a segmentation fault when running the svn-trunk Version. 
</span><br>
<span class="quotelev1">&gt; Thanks to the help of Sven I could locate it now to be in the shared memory 
</span><br>
<span class="quotelev1">&gt; btl. (ompi/mca/btl/sm/btl_sm.c)
</span><br>
<span class="quotelev1">&gt; There the addresses of the fifos were modified because of the different memory 
</span><br>
<span class="quotelev1">&gt; mapping for the threads. Unfortunately this modification was not applied for 
</span><br>
<span class="quotelev1">&gt; the head_locks. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch should fix this problem.
</span><br>
<span class="quotelev1">&gt; Maybe someone could have a look on it?
</span><br>
<p>I see that Sven is already committed the fix to trunk r15291, but it
<br>
seems the better fix would be to allocate tail_lock and head_lock not
<br>
from shared memory at all but in a local memory of a process that is
<br>
going to use respective lock.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1849.php">Tim Prins: "Re: [OMPI devel] [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="1847.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1844.php">Christoph Niethammer: "[OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<!-- nextthread="start" -->
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
