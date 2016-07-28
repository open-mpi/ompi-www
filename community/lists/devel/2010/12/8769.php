<?
$subject_val = "[OMPI devel] [PATCH] OSC/RDMA: Add a missing OBJ_DESTRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 08:40:57 2010" -->
<!-- isoreceived="20101213134057" -->
<!-- sent="Mon, 13 Dec 2010 14:40:53 +0100" -->
<!-- isosent="20101213134053" -->
<!-- name="Guillaume Thouvenin" -->
<!-- email="guillaume.thouvenin_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] OSC/RDMA: Add a missing OBJ_DESTRUCT" -->
<!-- id="20101213144053.2fe47f68_at_b006749" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] OSC/RDMA: Add a missing OBJ_DESTRUCT<br>
<strong>From:</strong> Guillaume Thouvenin (<em>guillaume.thouvenin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 08:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8770.php">Guillaume Thouvenin: "[OMPI devel] [PATCH] OSC/RDMA: Fix a potential deadlock"</a>
<li><strong>Previous message:</strong> <a href="8768.php">David Singleton: "[OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;In function ompi_osc_rdma_passive_unlock_complete(), an object
<br>
copy_unlock_acks was built but it is never destroyed. The following
<br>
patch adds its destruction.
<br>
<p>&nbsp;Tested on Open MPI v1.5
<br>
<p>Regards,
<br>
Guillaume
<br>
<pre>
---
diff --git a/ompi/mca/osc/rdma/osc_rdma_sync.c b/ompi/mca/osc/rdma/osc_rdma_sync.c
--- a/ompi/mca/osc/rdma/osc_rdma_sync.c
+++ b/ompi/mca/osc/rdma/osc_rdma_sync.c
@@ -745,6 +745,8 @@ ompi_osc_rdma_passive_unlock_complete(om
         OBJ_RELEASE(new_pending);
     }
 
+    OBJ_DESTRUCT(&amp;copy_unlock_acks);
+
     /* if we were really unlocked, see if we have another lock request
        we can satisfy */
     OPAL_THREAD_LOCK(&amp;(module-&gt;m_lock));
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8770.php">Guillaume Thouvenin: "[OMPI devel] [PATCH] OSC/RDMA: Fix a potential deadlock"</a>
<li><strong>Previous message:</strong> <a href="8768.php">David Singleton: "[OMPI devel] memory binding"</a>
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
