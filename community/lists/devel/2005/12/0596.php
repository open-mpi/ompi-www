<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  7 10:40:57 2005" -->
<!-- isoreceived="20051207154057" -->
<!-- sent="Wed, 7 Dec 2005 10:40:51 -0500" -->
<!-- isosent="20051207154051" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="17946AB1-6129-47E7-9EB8-031C76B71ED9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051207144458.GA25651_at_minantech.com" -->
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
<strong>Date:</strong> 2005-12-07 10:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0597.php">Craig Rasmussen: "Fwd: (j3.2005) Re: Derived types according to MPI2"</a>
<li><strong>Previous message:</strong> <a href="0595.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0595.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0600.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 7, 2005, at 9:44 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Dec 06, 2005 at 11:07:44AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2005, at 10:53 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Dec 06, 2005 at 08:33:32AM -0700, Tim S. Woodall wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also memfree hooks decrease cache efficiency, the better solution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be to catch brk() system calls and remove memory from cache only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but there is no way to do it for now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are look at other options, including catching brk/munmap system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calls, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be experimenting w/ these on the trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will be really interesting. How are you going to catch brk/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; munmap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without kernel help? Last time I checked preload tricks don't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; syscall is done from inside libc itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All of the tricks we are looking at assume that nothing in libc calls
</span><br>
<span class="quotelev2">&gt;&gt; munmap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; glibc does call mmap/munmap internally for big allocations as  
</span><br>
<span class="quotelev1">&gt; strace of
</span><br>
<span class="quotelev1">&gt; this program shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main ()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         void *p = malloc (1024*1024);
</span><br>
<span class="quotelev1">&gt;         free (p);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Ah, yes, I wasn't clear.  On Linux, we actually ship our own version  
<br>
of ptmalloc2 (the allocator used by glibc on Linux).  We use the  
<br>
standard linker search order tricks to have the linker choose our  
<br>
versions of malloc, calloc, realloc, valloc, and free, which are from  
<br>
ptmalloc2.  We've modified our version of ptmalloc2 such that any  
<br>
time it calls mmap or sbrk with a positive number, it then  
<br>
immediately allows the cache to know about the allocation.  Any time  
<br>
it's about to call munmap or sbrk with a negative number, it informs  
<br>
the cache code before giving the memory back to the OS.  We also  
<br>
catch mmap and munmap so that we can track when the user calls mmap /  
<br>
munmap.  Note that we play with ptmalloc2's code such that it calls  
<br>
our mmap (which either uses the syscall interface directly or calls  
<br>
__mmap depending on what the system supports), so we don't intercept  
<br>
that call to mmap twice or anything like that.
<br>
<p>This works pretty well (like I said - it's worked fine for LAM and  
<br>
MPICH-gm for years), but has the problem of requiring the user to  
<br>
either use the wrapper compilers or add the -lmpi -lorte -lopal to  
<br>
the link line (ie, can't use shared library dependencies to load in  
<br>
libopal.so) or our ptmalloc2 / mmap / munmap isn't used.  We can  
<br>
detect that this happened pretty easily and then we fall back to the  
<br>
pipelined RDMA code that doesn't offer the same performance but also  
<br>
doesn't have a pinning problem.
<br>
<p><span class="quotelev2">&gt;&gt;          We can successfully catch free() calls from inside libc
</span><br>
<span class="quotelev2">&gt;&gt; without any problems.  The LAM/MPI team and Myricom (with MPICH-gm)
</span><br>
<span class="quotelev2">&gt;&gt; have been doing this for many years without any problems.  On the
</span><br>
<span class="quotelev2">&gt;&gt; small percentage of MPI applications that require some linker tricks
</span><br>
<span class="quotelev2">&gt;&gt; (some of the commercial apps are this way), we won't be able to
</span><br>
<span class="quotelev2">&gt;&gt; intercept any free/munmap calls, so we're going to fall back to our
</span><br>
<span class="quotelev2">&gt;&gt; RDMA pipeline algorithm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, but catching free is not good enough. This way we sometimes evict
</span><br>
<span class="quotelev1">&gt; cache entries that may safely remains in the cache. Ideally we  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; able to catch events that return memory to OS (munmap/brk) and  
</span><br>
<span class="quotelev1">&gt; remove the
</span><br>
<span class="quotelev1">&gt; memory from cache only then.
</span><br>
<p>This is essentially what we do on Linux - we only tell the rcache  
<br>
code about allocations / deallocations when we are talking about  
<br>
getting memory from or giving memory back to the operating system.
<br>
<p>On Mac OS X / Darwin, due to their two level namespaces, we can't  
<br>
replace malloc / free with a customized version of the Darwin  
<br>
allocator like we could with ptmalloc2.  There are some things you  
<br>
can do to simulate such behavior, but it requires linking in a flat  
<br>
namespace and doing some other things that nearly the Darwin  
<br>
engineers to pass out when I was talking to them about said tricks.   
<br>
So instead, we use the Darwin hooks for catching malloc / free /  
<br>
etc.  It's not optimal, but it's the best we can do in the  
<br>
situation.  And it doesn't force us to link all OMPI applications in  
<br>
a flat namespace, which is always nice.  Of course, we still  
<br>
intercept mmap / munmap in the tradition linker tricks style.  But  
<br>
again, there are very few function calls in libSystem.dylib that call  
<br>
mmap that we care about (malloc / free are already taken care of by  
<br>
the standard hooks), so this doesn't cause a problem.
<br>
<p>Hopefully this made some sense.  If not, on to the next round of e- 
<br>
mails :).
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
<li><strong>Next message:</strong> <a href="0597.php">Craig Rasmussen: "Fwd: (j3.2005) Re: Derived types according to MPI2"</a>
<li><strong>Previous message:</strong> <a href="0595.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0595.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0600.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
