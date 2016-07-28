<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 10:20:59 2005" -->
<!-- isoreceived="20051206152059" -->
<!-- sent="Tue, 6 Dec 2005 17:20:04 +0200" -->
<!-- isosent="20051206152004" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="20051206152004.GC19290_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.62.0512051018450.9570_at_oberon.cs.unm.edu" -->
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
<strong>Date:</strong> 2005-12-06 10:20:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0587.php">Jeff Squyres: "Re:  [OMPI svn-full] svn:open-mpi r8379 -	trunk/ompi/mca/btl/self"</a>
<li><strong>In reply to:</strong> <a href="0584.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 05, 2005 at 10:23:14AM -0700, Galen M. Shipman wrote:
<br>
<span class="quotelev2">&gt; &gt; Also there is a code commented out that enables memory hooks if
</span><br>
<span class="quotelev2">&gt; &gt; leave_pinned is set. Why this code is disabled? Infiniband will
</span><br>
<span class="quotelev2">&gt; &gt; not work correctly in such setup.
</span><br>
<span class="quotelev1">&gt; There is still some debate about what will be the default behavior with 
</span><br>
<span class="quotelev1">&gt; the leave_pinned option but we should have something in the trunk soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Can you explain to me what is the concern? Infiniband will not function
<br>
properly otherwise (can be easely demonstrated). 
<br>
<p>Also memfree hooks decrease cache efficiency, the better solution would
<br>
be to catch brk() system calls and remove memory from cache only then,
<br>
but there is no way to do it for now.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0587.php">Jeff Squyres: "Re:  [OMPI svn-full] svn:open-mpi r8379 -	trunk/ompi/mca/btl/self"</a>
<li><strong>In reply to:</strong> <a href="0584.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
