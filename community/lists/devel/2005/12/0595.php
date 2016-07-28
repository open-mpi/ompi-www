<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  7 09:45:55 2005" -->
<!-- isoreceived="20051207144555" -->
<!-- sent="Wed, 7 Dec 2005 16:44:58 +0200" -->
<!-- isosent="20051207144458" -->
<!-- name="Gleb Natapov" -->
<!-- email="gleb_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="20051207144458.GA25651_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5A38B28E-55CE-41E5-8496-0AC577EA7FC2_at_open-mpi.org" -->
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
<strong>From:</strong> Gleb Natapov (<em>gleb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-07 09:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0596.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0594.php">Jeff Squyres: "Re:  ompi_info ..."</a>
<li><strong>In reply to:</strong> <a href="0592.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0596.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0596.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 06, 2005 at 11:07:44AM -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Dec 6, 2005, at 10:53 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Dec 06, 2005 at 08:33:32AM -0700, Tim S. Woodall wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also memfree hooks decrease cache efficiency, the better solution  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; be to catch brk() system calls and remove memory from cache only  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; then,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; but there is no way to do it for now.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We are look at other options, including catching brk/munmap system  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calls, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will be experimenting w/ these on the trunk.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This will be really interesting. How are you going to catch brk/munmap
</span><br>
<span class="quotelev2">&gt; &gt; without kernel help? Last time I checked preload tricks don't work if
</span><br>
<span class="quotelev2">&gt; &gt; syscall is done from inside libc itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All of the tricks we are looking at assume that nothing in libc calls  
</span><br>
<span class="quotelev1">&gt; munmap.  
</span><br>
<p>glibc does call mmap/munmap internally for big allocations as strace of
<br>
this program shows:
<br>
<p>int main ()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *p = malloc (1024*1024);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free (p);
<br>
}
<br>
<p><span class="quotelev1">&gt;          We can successfully catch free() calls from inside libc  
</span><br>
<span class="quotelev1">&gt; without any problems.  The LAM/MPI team and Myricom (with MPICH-gm)  
</span><br>
<span class="quotelev1">&gt; have been doing this for many years without any problems.  On the  
</span><br>
<span class="quotelev1">&gt; small percentage of MPI applications that require some linker tricks  
</span><br>
<span class="quotelev1">&gt; (some of the commercial apps are this way), we won't be able to  
</span><br>
<span class="quotelev1">&gt; intercept any free/munmap calls, so we're going to fall back to our  
</span><br>
<span class="quotelev1">&gt; RDMA pipeline algorithm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yes, but catching free is not good enough. This way we sometimes evict
<br>
cache entries that may safely remains in the cache. Ideally we should be 
<br>
able to catch events that return memory to OS (munmap/brk) and remove the 
<br>
memory from cache only then.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0596.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0594.php">Jeff Squyres: "Re:  ompi_info ..."</a>
<li><strong>In reply to:</strong> <a href="0592.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0596.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0596.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
