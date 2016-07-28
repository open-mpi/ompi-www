<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 11 09:27:49 2005" -->
<!-- isoreceived="20050811142749" -->
<!-- sent="Thu, 11 Aug 2005 17:27:14 +0300" -->
<!-- isosent="20050811142714" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="couple of problems in openib mpool." -->
<!-- id="20050811142714.GV16361_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-11 09:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0129.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0132.php">Galen Shipman: "Re:  couple of problems in openib mpool."</a>
<li><strong>Reply:</strong> <a href="0132.php">Galen Shipman: "Re:  couple of problems in openib mpool."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;There are couple of bugs/typos in openib mpool. First one is fixed
<br>
by included patch. Second one is in function mca_mpool_openib_free().
<br>
This function assumes that registration is never NULL, but there are
<br>
callers that think different (ompi/class/ompi_fifo.h, 
<br>
ompi/class/ompi_circular_buffer_fifo.h)
<br>
<p><p>Index: ompi/mca/mpool/openib/mpool_openib_module.c
<br>
===================================================================
<br>
--- ompi/mca/mpool/openib/mpool_openib_module.c	(revision 6806)
<br>
+++ ompi/mca/mpool/openib/mpool_openib_module.c	(working copy)
<br>
@@ -127,7 +127,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mpool_base_registration_t* old_reg  = *registration; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* new_mem = mpool-&gt;mpool_alloc(mpool, size, 0, registration); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memcpy(new_mem, addr, old_reg-&gt;bound - old_reg-&gt;base); 
<br>
-    mpool-&gt;mpool_free(mpool, addr, &amp;old_reg); 
<br>
+    mpool-&gt;mpool_free(mpool, addr, old_reg); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return new_mem; 
<br>
&nbsp;
<br>
&nbsp;}
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0129.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0132.php">Galen Shipman: "Re:  couple of problems in openib mpool."</a>
<li><strong>Reply:</strong> <a href="0132.php">Galen Shipman: "Re:  couple of problems in openib mpool."</a>
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
