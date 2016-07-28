<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 10:54:00 2005" -->
<!-- isoreceived="20051206155400" -->
<!-- sent="Tue, 6 Dec 2005 17:53:02 +0200" -->
<!-- isosent="20051206155302" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="20051206155302.GD19290_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4395AF4C.9090209_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-12-06 10:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0591.php">George Bosilca: "Re:  [OMPI svn-full] svn:open-mpi r8379	- trunk/ompi/mca/btl/self"</a>
<li><strong>Previous message:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0592.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0592.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 06, 2005 at 08:33:32AM -0700, Tim S. Woodall wrote:
<br>
<span class="quotelev2">&gt; &gt; Also memfree hooks decrease cache efficiency, the better solution would
</span><br>
<span class="quotelev2">&gt; &gt; be to catch brk() system calls and remove memory from cache only then,
</span><br>
<span class="quotelev2">&gt; &gt; but there is no way to do it for now.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are look at other options, including catching brk/munmap system calls, and
</span><br>
<span class="quotelev1">&gt; will be experimenting w/ these on the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
This will be really interesting. How are you going to catch brk/munmap
<br>
without kernel help? Last time I checked preload tricks don't work if
<br>
syscall is done from inside libc itself.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0591.php">George Bosilca: "Re:  [OMPI svn-full] svn:open-mpi r8379	- trunk/ompi/mca/btl/self"</a>
<li><strong>Previous message:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0589.php">Tim S. Woodall: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0592.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0592.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
