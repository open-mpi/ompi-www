<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 20 09:02:35 2007" -->
<!-- isoreceived="20070520130235" -->
<!-- sent="Sun, 20 May 2007 16:02:27 +0300" -->
<!-- isosent="20070520130227" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="20070520130227.GA20691_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="464E22D7.6090504_at_myri.com" -->
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
<strong>Date:</strong> 2007-05-20 09:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1563.php">Jeff Squyres: "Re: [OMPI devel] ORTE local rank"</a>
<li><strong>Previous message:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1557.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, May 18, 2007 at 06:04:07PM -0400, Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Hi Gleb,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; new madvice flag was implemented that allows userspace to mark certain
</span><br>
<span class="quotelev2">&gt; &gt; memory to not be copied to a child process. This memory is not mapped in
</span><br>
<span class="quotelev2">&gt; &gt; a child at all, no even VMA created for it. In the parent this memory is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, that explain your previous mention of segfault. For static 
</span><br>
<span class="quotelev1">&gt; registrations, the ones that are the real problem with fork because of 
</span><br>
<span class="quotelev1">&gt; the infinite exposure, it's much simpler to use MAP_SHARED...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yes, for internal allocations MAP_SHARED should solve the problem. But the
<br>
real problem is silent data corruption after fork() with user allocations.
<br>
Segfault is preferable to data corruption.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1563.php">Jeff Squyres: "Re: [OMPI devel] ORTE local rank"</a>
<li><strong>Previous message:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1557.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
