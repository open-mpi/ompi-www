<?
$subject_val = "Re: [OMPI devel] ORTE process name and nodeid";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 18 23:13:02 2007" -->
<!-- isoreceived="20071119041302" -->
<!-- sent="Sun, 18 Nov 2007 23:12:54 -0500" -->
<!-- isosent="20071119041254" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE process name and nodeid" -->
<!-- id="C3667776.10F8C%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="537C6C0940C6C143AA46A88946B854170A60DACC_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ORTE process name and nodeid<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-18 23:12:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2629.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IB/OpenFabrics pow wow"</a>
<li><strong>Previous message:</strong> <a href="2627.php">Richard Graham: "[OMPI devel] &lt;no subject&gt;"</a>
<li><strong>In reply to:</strong> <a href="2625.php">Shipman, Galen M.: "[OMPI devel] ORTE process name and nodeid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the exact purpose of the process name ?
<br>
<p>Rich
<br>
<p><p>On 11/17/07 5:27 PM, &quot;Shipman, Galen M.&quot; &lt;gshipman_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am doing some work on Cray's CNL to support shared memory. To support
</span><br>
<span class="quotelev1">&gt; shared memory I need to know if processes are local or remote. For other
</span><br>
<span class="quotelev1">&gt; systems we simply use the modex in ompi_proc_get_info to get the proc's
</span><br>
<span class="quotelev1">&gt; nodeid. When using CNOS I don't need the modex to get a remote processes
</span><br>
<span class="quotelev1">&gt; nodeid. In fact, I can obtain every processes pid and nodeid (nid/pid) via a
</span><br>
<span class="quotelev1">&gt; single CNOS call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have explored a couple of ways to populate the proc structures on the
</span><br>
<span class="quotelev1">&gt; CRAY. One involves using #if's to do special things in ompi_proc_get_info. I
</span><br>
<span class="quotelev1">&gt; don't like this. The second method involves adding a CNOS nameserver and
</span><br>
<span class="quotelev1">&gt; modifying the orte_process_name_t to include the orte_nodeid_t so that the
</span><br>
<span class="quotelev1">&gt; nameserver can populate all the info if it can. Prior to this change, the
</span><br>
<span class="quotelev1">&gt; orte_nodeid_t was in ompi_proc_t, which doesn't make any sense to me, it is
</span><br>
<span class="quotelev1">&gt; an orte level concept and it is only accessible in the ompi side. I also
</span><br>
<span class="quotelev1">&gt; don't like adding orte_nodeid_t to orte_process_name_t as it really doesn't
</span><br>
<span class="quotelev1">&gt; have anything to do with the a name.. I think it makes more sense to have an
</span><br>
<span class="quotelev1">&gt; orte_proc_t.. Something like the following structure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev1">&gt;     orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t vpid;       /**&lt; Process number */
</span><br>
<span class="quotelev1">&gt;     /** &quot;nodeid&quot; on which the proc resides */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Struct orte_proc_t {
</span><br>
<span class="quotelev1">&gt;     opal_list_item_t super;
</span><br>
<span class="quotelev1">&gt;     orte_process_name_t proc_name;
</span><br>
<span class="quotelev1">&gt;     orte_nodeid_t nid;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct ompi_proc_t {
</span><br>
<span class="quotelev1">&gt;     orte_proc_t base;
</span><br>
<span class="quotelev1">&gt;     ..... Etc .....
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know there is some talk about removing the process names,,, not sure how
</span><br>
<span class="quotelev1">&gt; that fits in here but this is what makes sense to me given the current
</span><br>
<span class="quotelev1">&gt; architecture. Any thoughts here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2629.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IB/OpenFabrics pow wow"</a>
<li><strong>Previous message:</strong> <a href="2627.php">Richard Graham: "[OMPI devel] &lt;no subject&gt;"</a>
<li><strong>In reply to:</strong> <a href="2625.php">Shipman, Galen M.: "[OMPI devel] ORTE process name and nodeid"</a>
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
