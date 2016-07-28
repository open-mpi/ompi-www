<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 11:56:37 2005" -->
<!-- isoreceived="20051206165637" -->
<!-- sent="Tue, 6 Dec 2005 11:07:44 -0500" -->
<!-- isosent="20051206160744" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="5A38B28E-55CE-41E5-8496-0AC577EA7FC2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051206155302.GD19290_at_minantech.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-06 11:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0593.php">George Bosilca: "ompi_info ..."</a>
<li><strong>Previous message:</strong> <a href="0591.php">George Bosilca: "Re:  [OMPI svn-full] svn:open-mpi r8379	- trunk/ompi/mca/btl/self"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0595.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0595.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 6, 2005, at 10:53 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Dec 06, 2005 at 08:33:32AM -0700, Tim S. Woodall wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also memfree hooks decrease cache efficiency, the better solution  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be to catch brk() system calls and remove memory from cache only  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but there is no way to do it for now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are look at other options, including catching brk/munmap system  
</span><br>
<span class="quotelev2">&gt;&gt; calls, and
</span><br>
<span class="quotelev2">&gt;&gt; will be experimenting w/ these on the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This will be really interesting. How are you going to catch brk/munmap
</span><br>
<span class="quotelev1">&gt; without kernel help? Last time I checked preload tricks don't work if
</span><br>
<span class="quotelev1">&gt; syscall is done from inside libc itself.
</span><br>
<p>All of the tricks we are looking at assume that nothing in libc calls  
<br>
munmap.  We can successfully catch free() calls from inside libc  
<br>
without any problems.  The LAM/MPI team and Myricom (with MPICH-gm)  
<br>
have been doing this for many years without any problems.  On the  
<br>
small percentage of MPI applications that require some linker tricks  
<br>
(some of the commercial apps are this way), we won't be able to  
<br>
intercept any free/munmap calls, so we're going to fall back to our  
<br>
RDMA pipeline algorithm.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0593.php">George Bosilca: "ompi_info ..."</a>
<li><strong>Previous message:</strong> <a href="0591.php">George Bosilca: "Re:  [OMPI svn-full] svn:open-mpi r8379	- trunk/ompi/mca/btl/self"</a>
<li><strong>In reply to:</strong> <a href="0590.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0595.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0595.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
