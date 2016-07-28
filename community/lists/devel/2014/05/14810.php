<?
$subject_val = "Re: [OMPI devel] RFC: fix leak of bml endpoints";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 13:33:35 2014" -->
<!-- isoreceived="20140515173335" -->
<!-- sent="Thu, 15 May 2014 13:33:31 -0400" -->
<!-- isosent="20140515173331" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix leak of bml endpoints" -->
<!-- id="AFE887F0-5E46-4278-B856-6C7CC0E79A06_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20140515152240.GA25411_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: fix leak of bml endpoints<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 13:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14809.php">Ralph Castain: "Re: [OMPI devel] r31765 causes crash in mpirun"</a>
<li><strong>In reply to:</strong> <a href="14808.php">Nathan Hjelm: "[OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Reply:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The solution you propose here is definitively not OK. It is 1) ugly and 2) break the separation barrier that we hold dear.
<br>
<p>Regarding your other suggestion I don&#146;t see any reasons not to call the delete_proc on MPI_COMM_WORLD as the last action we do before tearing down everything else.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On May 15, 2014, at 11:22 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What: We never call del_procs in the procs in comm world. This leads us
</span><br>
<span class="quotelev1">&gt; to leak the bml endpoints created by r2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The proposed solution is not idea but it avoids adding a call to del
</span><br>
<span class="quotelev1">&gt; procs for comm world. Something I know would require more discussion
</span><br>
<span class="quotelev1">&gt; since there is likely a reason for that. I propose we delete any
</span><br>
<span class="quotelev1">&gt; remaining bml endpoints when we tear down the ompi_proc_t:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/proc/proc.c b/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; index f549335..9ea0311 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; @@ -89,6 +89,13 @@ void ompi_proc_destruct(ompi_proc_t* proc)
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_LOCK(&amp;ompi_proc_lock);
</span><br>
<span class="quotelev1">&gt;     opal_list_remove_item(&amp;ompi_proc_list, (opal_list_item_t*)proc);
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_UNLOCK(&amp;ompi_proc_lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if defined(OMPI_PROC_ENDPOINT_TAG_BML)
</span><br>
<span class="quotelev1">&gt; +    /* release the bml endpoint if it still exists */
</span><br>
<span class="quotelev1">&gt; +    if (proc-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]) {
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(proc-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_BML]);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This fixes the leak and appears to have no negative side effects for
</span><br>
<span class="quotelev1">&gt; r2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: Trying to clean up the last remaining leaks in the Open MPI code
</span><br>
<span class="quotelev1">&gt; base. This is one of the larger ones as it grows with comm world.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: I want this to go into 1.8.2 if possible. Setting a short timeout
</span><br>
<span class="quotelev1">&gt; of 1 week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep in mind I do not know the full history of add_procs/del_procs so
</span><br>
<span class="quotelev1">&gt; there may be a better way to fix this. This RFC is meant to open the
</span><br>
<span class="quotelev1">&gt; discussion about how to address this leak. If the above fix looks ok I
</span><br>
<span class="quotelev1">&gt; will commit it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14808.php">http://www.open-mpi.org/community/lists/devel/2014/05/14808.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14809.php">Ralph Castain: "Re: [OMPI devel] r31765 causes crash in mpirun"</a>
<li><strong>In reply to:</strong> <a href="14808.php">Nathan Hjelm: "[OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Reply:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
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
