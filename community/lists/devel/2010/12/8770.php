<?
$subject_val = "[OMPI devel] [PATCH] OSC/RDMA: Fix a potential deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 08:41:04 2010" -->
<!-- isoreceived="20101213134104" -->
<!-- sent="Mon, 13 Dec 2010 14:41:01 +0100" -->
<!-- isosent="20101213134101" -->
<!-- name="Guillaume Thouvenin" -->
<!-- email="guillaume.thouvenin_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] OSC/RDMA: Fix a potential deadlock" -->
<!-- id="20101213144101.69ee3a53_at_b006749" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] OSC/RDMA: Fix a potential deadlock<br>
<strong>From:</strong> Guillaume Thouvenin (<em>guillaume.thouvenin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 08:41:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8771.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8769.php">Guillaume Thouvenin: "[OMPI devel] [PATCH] OSC/RDMA: Add a missing OBJ_DESTRUCT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;This patch fixes a potential loss of a lock request in function
<br>
ompi_osc_rdma_passive_unlock_complete(). A new pending request is taken
<br>
from the m_locks_pending list. If m_lock_status is not equal to 0, this
<br>
new entry is then set to NULL and thus lost. This can lead to a deadlock
<br>
situation. So this patch moves the update of new_pending in its right
<br>
place.
<br>
<p>&nbsp;This patch was tested on v1.5.
<br>
<p>Regards
<br>
Guillaume
<br>
<pre>
---
diff --git a/ompi/mca/osc/rdma/osc_rdma_sync.c
b/ompi/mca/osc/rdma/osc_rdma_sync.c ---
a/ompi/mca/osc/rdma/osc_rdma_sync.c +++
b/ompi/mca/osc/rdma/osc_rdma_sync.c @@ -748,9 +748,9 @@
ompi_osc_rdma_passive_unlock_complete(om /* if we were really unlocked,
see if we have another lock request we can satisfy */
     OPAL_THREAD_LOCK(&amp;(module-&gt;m_lock));
-    new_pending = (ompi_osc_rdma_pending_lock_t*) 
-        opal_list_remove_first(&amp;(module-&gt;m_locks_pending));
     if (0 == module-&gt;m_lock_status) {
+        new_pending = (ompi_osc_rdma_pending_lock_t*)
+            opal_list_remove_first(&amp;(module-&gt;m_locks_pending));
         if (NULL != new_pending) {
             ompi_win_append_mode(module-&gt;m_win, OMPI_WIN_EXPOSE_EPOCH);
             /* set lock state and generate a lock request */
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8771.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8769.php">Guillaume Thouvenin: "[OMPI devel] [PATCH] OSC/RDMA: Add a missing OBJ_DESTRUCT"</a>
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
