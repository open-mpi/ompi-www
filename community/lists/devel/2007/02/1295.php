<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 19:13:00 2007" -->
<!-- isoreceived="20070214001300" -->
<!-- sent="Tue, 13 Feb 2007 19:10:44 -0500" -->
<!-- isosent="20070214001044" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644" -->
<!-- id="C0603464-5CE2-4142-A48F-78F5F4294D46_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200702132120.l1DLKx2f024778_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 19:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>Previous message:</strong> <a href="1294.php">Terry D. Dontje: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #898: Move MPI exception man page fixes to v1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>Reply:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's already in the 1.2 !!! I don't know much you care about  
<br>
performance, but I do. This patch increase by 10% the latency. It  
<br>
might be correct for the pathscale compiler, but it didn't look as a  
<br>
huge requirement for all others compilers. A memory barrier for an  
<br>
initialization and an unlock definitively looks like killing an ant  
<br>
with a nuclear strike.
<br>
<p>How many memory barrier we have now on the critical path ? Are they  
<br>
all really necessary ? In fact I try to figure out what the problem  
<br>
is ? Why this doesn't happens with any other compiler ? Is this our  
<br>
bug or a PathScale compiler bug ? And the last one: What is the  
<br>
correct way to fix it in a generic way without affecting the  
<br>
performances by 10%. As a matter of fact, we're already slower than  
<br>
MPICH2 for shared memory operations, so something is flawed in our  
<br>
design ...
<br>
<p><p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 13, 2007, at 4:20 PM, gshipman_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: gshipman
</span><br>
<span class="quotelev1">&gt; Date: 2007-02-13 16:20:59 EST (Tue, 13 Feb 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 13644
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/include/opal/sys/atomic_impl.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; use memory barriers for lock init and unlock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/include/opal/sys/atomic_impl.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/include/opal/sys/atomic_impl.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/include/opal/sys/atomic_impl.h	2007-02-13 16:20:59  
</span><br>
<span class="quotelev1">&gt; EST (Tue, 13 Feb 2007)
</span><br>
<span class="quotelev1">&gt; @@ -337,6 +337,7 @@
</span><br>
<span class="quotelev1">&gt;  opal_atomic_init( opal_atomic_lock_t* lock, int value )
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;     lock-&gt;u.lock = value;
</span><br>
<span class="quotelev1">&gt; +   opal_atomic_mb();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -368,6 +369,7 @@
</span><br>
<span class="quotelev1">&gt;                             OPAL_ATOMIC_LOCKED, OPAL_ATOMIC_UNLOCKED);
</span><br>
<span class="quotelev1">&gt;                             */
</span><br>
<span class="quotelev1">&gt;     lock-&gt;u.lock=OPAL_ATOMIC_UNLOCKED;
</span><br>
<span class="quotelev1">&gt; +   opal_atomic_mb();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif /* OPAL_HAVE_ATOMIC_SPINLOCKS */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>Previous message:</strong> <a href="1294.php">Terry D. Dontje: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #898: Move MPI exception man page fixes to v1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>Reply:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
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
