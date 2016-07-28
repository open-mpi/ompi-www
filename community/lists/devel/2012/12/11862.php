<?
$subject_val = "Re: [OMPI devel] Duplicated modex issue.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 11:30:07 2012" -->
<!-- isoreceived="20121220163007" -->
<!-- sent="Thu, 20 Dec 2012 20:29:59 +0400" -->
<!-- isosent="20121220162959" -->
<!-- name="Victor Kocheganov" -->
<!-- email="victor.kocheganov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Duplicated modex issue." -->
<!-- id="CAMv3Gsd_4ti39kwr8jJ65XWva3t193SVZbrvXKymL9N-Gyzj8w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D18FD78F-D1D7-49DB-A330-08E5867857A1_at_open-mpi.org" -->
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
<strong>From:</strong> Victor Kocheganov (<em>victor.kocheganov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 11:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11863.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>In reply to:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11863.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11863.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for fast answer, Ralph.
<br>
<p>In my example I use different collective objects. I mean in every mentioned
<br>
block I call  *coll = OBJ_NEW(orte_grpcomm_**collective_t);*
<br>
and *OBJ_RELEASE(coll);* , so all the grpcomm operations use unique
<br>
collective object.
<br>
<p><p>On Thu, Dec 20, 2012 at 7:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Absolutely it will hang as the collective object passed into any grpcomm
</span><br>
<span class="quotelev1">&gt; operation (modex or barrier) is only allowed to be used once - any attempt
</span><br>
<span class="quotelev1">&gt; to reuse it will fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2012, at 6:57 AM, Victor Kocheganov &lt;
</span><br>
<span class="quotelev1">&gt; victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have an issue with understanding  *ompi_mpi_init() *logic. Could you
</span><br>
<span class="quotelev1">&gt; please tell me if you have any guesses about following behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if I understand ringh, there is a block in *ompi_mpi_init() *function
</span><br>
<span class="quotelev1">&gt; for exchanging procs information between processes (denote this block
</span><br>
<span class="quotelev1">&gt; 'modex'):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev1">&gt;     coll-&gt;id = orte_process_info.peer_modex;
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(coll))) {
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_grpcomm_modex failed&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* wait for modex to complete - this may be moved anywhere in mpi_init
</span><br>
<span class="quotelev1">&gt;      * so long as it occurs prior to calling a function that needs
</span><br>
<span class="quotelev1">&gt;      * the modex info!
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev1">&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and several instructions after this there is a block for processes
</span><br>
<span class="quotelev1">&gt; synchronization (denote this block 'barrier'):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev1">&gt;     coll-&gt;id = orte_process_info.peer_init_barrier;
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(coll))) {
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_grpcomm_barrier failed&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* wait for barrier to complete */
</span><br>
<span class="quotelev1">&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev1">&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So,* *initially* **ompi_mpi_init()* has following structure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 'modex' block;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 'barrier' block;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made several experiments with this code and the following one is of
</span><br>
<span class="quotelev1">&gt; interest: if I add sequence of two additional blocks, 'barrier' and
</span><br>
<span class="quotelev1">&gt; 'modex', right after 'modex' block, then* **ompi_mpi_init() *hangs in *
</span><br>
<span class="quotelev1">&gt; opal_progress()* of the last 'modex' block.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 'modex' block;
</span><br>
<span class="quotelev1">&gt; 'barrier' block;
</span><br>
<span class="quotelev1">&gt; 'modex' block; &lt;- hangs
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 'barrier' block;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Victor Kocheganov.
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11862/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11863.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>In reply to:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11863.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11863.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
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
