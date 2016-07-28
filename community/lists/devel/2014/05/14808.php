<?
$subject_val = "[OMPI devel] RFC: fix leak of bml endpoints";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 11:22:42 2014" -->
<!-- isoreceived="20140515152242" -->
<!-- sent="Thu, 15 May 2014 09:22:40 -0600" -->
<!-- isosent="20140515152240" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: fix leak of bml endpoints" -->
<!-- id="20140515152240.GA25411_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: fix leak of bml endpoints<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 11:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14809.php">Ralph Castain: "Re: [OMPI devel] r31765 causes crash in mpirun"</a>
<li><strong>Previous message:</strong> <a href="14807.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Reply:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: We never call del_procs in the procs in comm world. This leads us
<br>
to leak the bml endpoints created by r2.
<br>
<p>The proposed solution is not idea but it avoids adding a call to del
<br>
procs for comm world. Something I know would require more discussion
<br>
since there is likely a reason for that. I propose we delete any
<br>
remaining bml endpoints when we tear down the ompi_proc_t:
<br>
<p>diff --git a/ompi/proc/proc.c b/ompi/proc/proc.c
<br>
index f549335..9ea0311 100644
<br>
--- a/ompi/proc/proc.c
<br>
+++ b/ompi/proc/proc.c
<br>
@@ -89,6 +89,13 @@ void ompi_proc_destruct(ompi_proc_t* proc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;ompi_proc_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_remove_item(&amp;ompi_proc_list, (opal_list_item_t*)proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;ompi_proc_lock);
<br>
+
<br>
+#if defined(OMPI_PROC_ENDPOINT_TAG_BML)
<br>
+    /* release the bml endpoint if it still exists */
<br>
+    if (proc-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]) {
<br>
+        OBJ_RELEASE(proc-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
<br>
+    }
<br>
+#endif
<br>
&nbsp;}
<br>
&nbsp;
<br>
This fixes the leak and appears to have no negative side effects for
<br>
r2.
<br>
<p>Why: Trying to clean up the last remaining leaks in the Open MPI code
<br>
base. This is one of the larger ones as it grows with comm world.
<br>
<p>When: I want this to go into 1.8.2 if possible. Setting a short timeout
<br>
of 1 week.
<br>
<p>Keep in mind I do not know the full history of add_procs/del_procs so
<br>
there may be a better way to fix this. This RFC is meant to open the
<br>
discussion about how to address this leak. If the above fix looks ok I
<br>
will commit it.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14808/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14809.php">Ralph Castain: "Re: [OMPI devel] r31765 causes crash in mpirun"</a>
<li><strong>Previous message:</strong> <a href="14807.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Reply:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
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
