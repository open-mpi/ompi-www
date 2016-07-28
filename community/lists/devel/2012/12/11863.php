<?
$subject_val = "Re: [OMPI devel] Duplicated modex issue.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 11:57:23 2012" -->
<!-- isoreceived="20121220165723" -->
<!-- sent="Thu, 20 Dec 2012 08:57:13 -0800" -->
<!-- isosent="20121220165713" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Duplicated modex issue." -->
<!-- id="32179022-18F1-4BE6-9312-9FB3870A0A93_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMv3Gsd_4ti39kwr8jJ65XWva3t193SVZbrvXKymL9N-Gyzj8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Duplicated modex issue.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 11:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11864.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11862.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>In reply to:</strong> <a href="11862.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11864.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11864.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 20, 2012, at 8:29 AM, Victor Kocheganov &lt;victor.kocheganov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for fast answer, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my example I use different collective objects. I mean in every mentioned block I call  coll = OBJ_NEW(orte_grpcomm_collective_t);  
</span><br>
<span class="quotelev1">&gt; and OBJ_RELEASE(coll); , so all the grpcomm operations use unique collective object. 
</span><br>
<p>How are the procs getting the collective id for those new calls? They all have to match
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 20, 2012 at 7:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Absolutely it will hang as the collective object passed into any grpcomm operation (modex or barrier) is only allowed to be used once - any attempt to reuse it will fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2012, at 6:57 AM, Victor Kocheganov &lt;victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have an issue with understanding  ompi_mpi_init() logic. Could you please tell me if you have any guesses about following behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if I understand ringh, there is a block in ompi_mpi_init() function for exchanging procs information between processes (denote this block 'modex'):
</span><br>
<span class="quotelev2">&gt;&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev2">&gt;&gt;     coll-&gt;id = orte_process_info.peer_modex;
</span><br>
<span class="quotelev2">&gt;&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(coll))) {
</span><br>
<span class="quotelev2">&gt;&gt;         error = &quot;orte_grpcomm_modex failed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         goto error;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     /* wait for modex to complete - this may be moved anywhere in mpi_init
</span><br>
<span class="quotelev2">&gt;&gt;      * so long as it occurs prior to calling a function that needs
</span><br>
<span class="quotelev2">&gt;&gt;      * the modex info!
</span><br>
<span class="quotelev2">&gt;&gt;      */
</span><br>
<span class="quotelev2">&gt;&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev2">&gt;&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev2">&gt;&gt; and several instructions after this there is a block for processes synchronization (denote this block 'barrier'):
</span><br>
<span class="quotelev2">&gt;&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev2">&gt;&gt;     coll-&gt;id = orte_process_info.peer_init_barrier;
</span><br>
<span class="quotelev2">&gt;&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(coll))) {
</span><br>
<span class="quotelev2">&gt;&gt;         error = &quot;orte_grpcomm_barrier failed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         goto error;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     /* wait for barrier to complete */
</span><br>
<span class="quotelev2">&gt;&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev2">&gt;&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev2">&gt;&gt; So, initially ompi_mpi_init() has following structure:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 'modex' block;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; I made several experiments with this code and the following one is of interest: if I add sequence of two additional blocks, 'barrier' and 'modex', right after 'modex' block, then ompi_mpi_init() hangs in opal_progress() of the last 'modex' block.
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 'modex' block;
</span><br>
<span class="quotelev2">&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev2">&gt;&gt; 'modex' block; &lt;- hangs
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Victor Kocheganov.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11864.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11862.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>In reply to:</strong> <a href="11862.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11864.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11864.php">Victor Kocheganov: "Re: [OMPI devel] Duplicated modex issue."</a>
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
