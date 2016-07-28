<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 22:37:59 2007" -->
<!-- isoreceived="20070214033759" -->
<!-- sent="Tue, 13 Feb 2007 20:37:44 -0700" -->
<!-- isosent="20070214033744" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644" -->
<!-- id="0BDABFA3-5B27-4F6A-A58B-5719C45BDFAE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1A1E4E2B-6DAE-4382-A82D-5560E04EA768_at_lanl.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 22:37:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1299.php">Bert Wesarg: "[OMPI devel] installed wrappers"</a>
<li><strong>Previous message:</strong> <a href="1297.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>In reply to:</strong> <a href="1297.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2007, at 7:37 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 13, 2007, at 5:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 13, 2007, at 7:10 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's already in the 1.2 !!! I don't know much you care about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance, but I do. This patch increase by 10% the latency. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might be correct for the pathscale compiler, but it didn't look as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; huge requirement for all others compilers. A memory barrier for an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initialization and an unlock definitively looks like killing an ant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a nuclear strike.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can we roll this back and find some other way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, we can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not actually the memory barrier we need, it's the tell the
</span><br>
<span class="quotelev1">&gt; compiler to not do anything stupid because we expect memory to be
</span><br>
<span class="quotelev1">&gt; invalidated that we need.  I'll commit a new, different fix tonight.
</span><br>
<p>Upon further review, I'm wrong again.  The original patch was wrong  
<br>
(not sure what I was thinking this afternoon) and my statement above  
<br>
is wrong.  So the problem starts with the code:
<br>
<p>a = 1
<br>
mylock-&gt;lock = 0
<br>
b = 2
<br>
<p>Which is essentially what you have after inlining the atomic unlock  
<br>
as it occurred today.  It's not totally unreasonable for a compiler  
<br>
(and we have seen this in practice, including with GCC on LA-MPI and  
<br>
likely are having it happen now, just don't realize it) to reorder  
<br>
that to:
<br>
<p>a = 1
<br>
b = 2
<br>
mylock-&gt;lock = 0
<br>
<p>or
<br>
<p>mylock-&gt;lock = 0
<br>
a = 1
<br>
b = 2
<br>
<p>After all, there's no memory dependencies in the three lines of  
<br>
code.  When we had the compare and swap for unlock, there was a  
<br>
memory dependency, because the compare and swap inline assembly  
<br>
hinted to the compiler that memory was changed by the op and it  
<br>
shouldn't reorder memory accesses across that boundary or the compare  
<br>
and swap wasn't inlined.  Compilers are pretty much not going to  
<br>
reorder memory accesses across a function unless it's 100% clear that  
<br>
there is not a side effect that might be important, which is  
<br>
basically never in C.
<br>
<p>Ok, so we can tell the compiler not to reorder memory access with a  
<br>
little care (either compiler hints using inline assembly statements  
<br>
that include the &quot;memory&quot; invalidation hint) or by making  
<br>
atomic_unlock a function.
<br>
<p>But now we start running on hardware, and the memory controller is  
<br>
free to start reordering code.  We don't have any instructions  
<br>
telling the CPU / memory controller not to reorder our original  
<br>
instructions, so it can still do either one of the two bad cases.   
<br>
Still not good for us and definitely could lead to incorrect  
<br>
programs.  So we need a memory barrier or we have potentially invalid  
<br>
code.
<br>
<p>The full memory barrier is totally overkill for this situation, but  
<br>
some memory barrier is needed.  While not quite correct, I believe  
<br>
that something like;
<br>
<p>static inline void
<br>
opal_atomic_unlock(opal_atomic_lock_t *lock)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;opal_atomic_wmb();
<br>
&nbsp;&nbsp;&nbsp;lock-&gt;u.lock=OPAL_ATOMIC_UNLOCKED;
<br>
}
<br>
<p>would be more correct than having the barrier after the write and  
<br>
slightly better performance than the full atomic barrier.  On x86 and  
<br>
x86_64, memory barriers are &quot;free&quot;, in that all they do is limit the  
<br>
compiler's reordering of memory access.  But on PPC, Sparc, and  
<br>
Alpha, it would have a performance cost.  Don't know what that cost  
<br>
is, but I know that we need to pay it for correctness.
<br>
<p>Long term, we should probably try to implement spinlocks as inline  
<br>
assembly.  This wouldn't provide a whole lot of performance  
<br>
difference, but at least I could make sure the memory barrier is in  
<br>
the right place and help the compiler not be stupid.
<br>
<p>By the way, this is what the Linux kernel does, adding credence to my  
<br>
argument, I hope ;).
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1299.php">Bert Wesarg: "[OMPI devel] installed wrappers"</a>
<li><strong>Previous message:</strong> <a href="1297.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>In reply to:</strong> <a href="1297.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
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
