<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 09:55:11 2006" -->
<!-- isoreceived="20060118145511" -->
<!-- sent="Wed, 18 Jan 2006 16:54:08 +0200" -->
<!-- isosent="20060118145408" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[PATCH] problem with ptmalloc and memory hooks" -->
<!-- id="20060118145408.GC30763_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-01-18 09:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0686.php">Brian Barrett: "Re:  [PATCH] problem with ptmalloc and memory hooks"</a>
<li><strong>Previous message:</strong> <a href="0684.php">Leslie Watter: "Re:  Network Benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0686.php">Brian Barrett: "Re:  [PATCH] problem with ptmalloc and memory hooks"</a>
<li><strong>Reply:</strong> <a href="0686.php">Brian Barrett: "Re:  [PATCH] problem with ptmalloc and memory hooks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;I found one more problem with ptmalloc and registration cache.
<br>
In arena.c:grow_heap() when heap is shrinking ptmalloc tries to be smart
<br>
and is using mmap() to change pages protection instead of mprotect() because
<br>
as a side effect mmap() drops underlying pages. In the case the area is
<br>
registered we cannot drop pages without notifying registration cache.
<br>
<p>I see two solutions either change mmap() to mprotect() or call
<br>
opal_mem_hooks_release_hook() after mmap() to remove the area from
<br>
cache. I think first approach is better but both patch are included for
<br>
your consideration :)
<br>
<p><p>Index: opal/mca/memory/ptmalloc2/arena.c
<br>
===================================================================
<br>
--- opal/mca/memory/ptmalloc2/arena.c	(revision 8727)
<br>
+++ opal/mca/memory/ptmalloc2/arena.c	(working copy)
<br>
@@ -614,10 +614,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_size = (long)h-&gt;size + diff;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(new_size &lt; (long)sizeof(*h))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
-    /* Try to re-map the extra heap space freshly to save memory, and
<br>
-       make it inaccessible. */
<br>
-    if((char *)MMAP((char *)h + new_size, -diff, PROT_NONE,
<br>
-                    MAP_PRIVATE|MAP_FIXED) == (char *) MAP_FAILED)
<br>
+
<br>
+    if(mprotect((char *)h + new_size, -diff, PROT_NONE) != 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*fprintf(stderr, &quot;shrink %p %08lx\n&quot;, h, new_size);*/
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>Index: opal/mca/memory/ptmalloc2/arena.c
<br>
===================================================================
<br>
--- opal/mca/memory/ptmalloc2/arena.c	(revision 8727)
<br>
+++ opal/mca/memory/ptmalloc2/arena.c	(working copy)
<br>
@@ -619,6 +619,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((char *)MMAP((char *)h + new_size, -diff, PROT_NONE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAP_PRIVATE|MAP_FIXED) == (char *) MAP_FAILED)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -2;
<br>
+    
<br>
+    opal_mem_hooks_release_hook ((char *)h + new_size, -diff, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*fprintf(stderr, &quot;shrink %p %08lx\n&quot;, h, new_size);*/
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;h-&gt;size = new_size;
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0686.php">Brian Barrett: "Re:  [PATCH] problem with ptmalloc and memory hooks"</a>
<li><strong>Previous message:</strong> <a href="0684.php">Leslie Watter: "Re:  Network Benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0686.php">Brian Barrett: "Re:  [PATCH] problem with ptmalloc and memory hooks"</a>
<li><strong>Reply:</strong> <a href="0686.php">Brian Barrett: "Re:  [PATCH] problem with ptmalloc and memory hooks"</a>
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
