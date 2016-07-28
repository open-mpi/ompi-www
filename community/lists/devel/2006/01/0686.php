<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 10:55:15 2006" -->
<!-- isoreceived="20060118155515" -->
<!-- sent="Wed, 18 Jan 2006 10:55:08 -0500" -->
<!-- isosent="20060118155508" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  [PATCH] problem with ptmalloc and memory hooks" -->
<!-- id="2147F482-392A-40BB-BD98-ABC77B60BE8D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060118145408.GC30763_at_minantech.com" -->
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
<strong>Date:</strong> 2006-01-18 10:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0687.php">Ralf Wildenhues: "ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0685.php">Gleb Natapov: "[PATCH] problem with ptmalloc and memory hooks"</a>
<li><strong>In reply to:</strong> <a href="0685.php">Gleb Natapov: "[PATCH] problem with ptmalloc and memory hooks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for catching this.  I agree with you, the first option seems  
<br>
like it is closer to what we want to have happen in Open MPI.  I'm  
<br>
less concerned with dropping a couple of pages of memory as I am with  
<br>
searching our registration cache more often.  It shall be committed  
<br>
to SVN today.
<br>
<p><p>Brian
<br>
<p>On Jan 18, 2006, at 9:54 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I found one more problem with ptmalloc and registration cache.
</span><br>
<span class="quotelev1">&gt; In arena.c:grow_heap() when heap is shrinking ptmalloc tries to be  
</span><br>
<span class="quotelev1">&gt; smart
</span><br>
<span class="quotelev1">&gt; and is using mmap() to change pages protection instead of mprotect 
</span><br>
<span class="quotelev1">&gt; () because
</span><br>
<span class="quotelev1">&gt; as a side effect mmap() drops underlying pages. In the case the  
</span><br>
<span class="quotelev1">&gt; area is
</span><br>
<span class="quotelev1">&gt; registered we cannot drop pages without notifying registration cache.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see two solutions either change mmap() to mprotect() or call
</span><br>
<span class="quotelev1">&gt; opal_mem_hooks_release_hook() after mmap() to remove the area from
</span><br>
<span class="quotelev1">&gt; cache. I think first approach is better but both patch are included  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; your consideration :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/memory/ptmalloc2/arena.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/memory/ptmalloc2/arena.c	(revision 8727)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/memory/ptmalloc2/arena.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -614,10 +614,8 @@
</span><br>
<span class="quotelev1">&gt;      new_size = (long)h-&gt;size + diff;
</span><br>
<span class="quotelev1">&gt;      if(new_size &lt; (long)sizeof(*h))
</span><br>
<span class="quotelev1">&gt;        return -1;
</span><br>
<span class="quotelev1">&gt; -    /* Try to re-map the extra heap space freshly to save memory, and
</span><br>
<span class="quotelev1">&gt; -       make it inaccessible. */
</span><br>
<span class="quotelev1">&gt; -    if((char *)MMAP((char *)h + new_size, -diff, PROT_NONE,
</span><br>
<span class="quotelev1">&gt; -                    MAP_PRIVATE|MAP_FIXED) == (char *) MAP_FAILED)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if(mprotect((char *)h + new_size, -diff, PROT_NONE) != 0)
</span><br>
<span class="quotelev1">&gt;        return -2;
</span><br>
<span class="quotelev1">&gt;      /*fprintf(stderr, &quot;shrink %p %08lx\n&quot;, h, new_size);*/
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/memory/ptmalloc2/arena.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/memory/ptmalloc2/arena.c	(revision 8727)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/memory/ptmalloc2/arena.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -619,6 +619,8 @@
</span><br>
<span class="quotelev1">&gt;      if((char *)MMAP((char *)h + new_size, -diff, PROT_NONE,
</span><br>
<span class="quotelev1">&gt;                      MAP_PRIVATE|MAP_FIXED) == (char *) MAP_FAILED)
</span><br>
<span class="quotelev1">&gt;        return -2;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    opal_mem_hooks_release_hook ((char *)h + new_size, -diff, 1);
</span><br>
<span class="quotelev1">&gt;      /*fprintf(stderr, &quot;shrink %p %08lx\n&quot;, h, new_size);*/
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    h-&gt;size = new_size;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0687.php">Ralf Wildenhues: "ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0685.php">Gleb Natapov: "[PATCH] problem with ptmalloc and memory hooks"</a>
<li><strong>In reply to:</strong> <a href="0685.php">Gleb Natapov: "[PATCH] problem with ptmalloc and memory hooks"</a>
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
