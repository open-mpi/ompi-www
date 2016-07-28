<?
$subject_val = "Re: [OMPI devel] Duplicated modex issue.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 00:28:36 2012" -->
<!-- isoreceived="20121221052836" -->
<!-- sent="Fri, 21 Dec 2012 09:28:32 +0400" -->
<!-- isosent="20121221052832" -->
<!-- name="Victor Kocheganov" -->
<!-- email="victor.kocheganov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Duplicated modex issue." -->
<!-- id="CAMv3GsfJh9VB_fadqo7=Q7-8Xvdo5aMeAv_NQc6qXreWtpnH8Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0637406-4A46-42D9-8A67-76255B67E297_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-12-21 00:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11867.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11865.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>In reply to:</strong> <a href="11865.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11867.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11867.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, if I reuse id's in equivalent calls like this:
<br>
<p>...
<br>
'modex' block;
<br>
'modex' block;
<br>
'modex' block;
<br>
...
<br>
<p>or
<br>
<p>...
<br>
'barrier' block;
<br>
'barrier' block;
<br>
'barrier' block;
<br>
...
<br>
<p>there is no hanging. The hang only occurs if this &quot;reusing&quot; follows after
<br>
using of another collective id, In the way I wrote in the first letter:
<br>
<p>...
<br>
'modex' block;
<br>
'barrier' block;
<br>
'modex' block; &lt;- hangs
<br>
...
<br>
<p>or in this way
<br>
<p>...
<br>
'barrier' block;
<br>
'modex' block;
<br>
'barrier' block; &lt;- hangs
<br>
...
<br>
<p><p>If I use different collective id while calling modex (1, 2 , ... , but not
<br>
&nbsp;0==orte_process_info.peer_modex), that also won't work, unfortunately..
<br>
<p><p><p>On Thu, Dec 20, 2012 at 10:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, that won't work. The id's cannot be reused, so you'd have to assign
</span><br>
<span class="quotelev1">&gt; a different one in each case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2012, at 9:12 AM, Victor Kocheganov &lt;
</span><br>
<span class="quotelev1">&gt; victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In every 'modex' block I use  coll-&gt;id = orte_process_info.peer_modex;
</span><br>
<span class="quotelev1">&gt; id and in every 'barrier' block I use  coll-&gt;id =
</span><br>
<span class="quotelev1">&gt; orte_process_info.peer_init_barrier;  id.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.s. In general (as I wrote in first letter), I use 'modex' term for
</span><br>
<span class="quotelev1">&gt; following code:
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
<span class="quotelev1">&gt; and 'barrier' for this:
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
<span class="quotelev1">&gt; On Thu, Dec 20, 2012 at 8:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2012, at 8:29 AM, Victor Kocheganov &lt;
</span><br>
<span class="quotelev2">&gt;&gt; victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for fast answer, Ralph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my example I use different collective objects. I mean in every
</span><br>
<span class="quotelev2">&gt;&gt; mentioned block I call  *coll = OBJ_NEW(orte_grpcomm_**collective_t);*
</span><br>
<span class="quotelev2">&gt;&gt; and *OBJ_RELEASE(coll);* , so all the grpcomm operations use unique
</span><br>
<span class="quotelev2">&gt;&gt; collective object.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How are the procs getting the collective id for those new calls? They all
</span><br>
<span class="quotelev2">&gt;&gt; have to match
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec 20, 2012 at 7:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Absolutely it will hang as the collective object passed into any grpcomm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operation (modex or barrier) is only allowed to be used once - any attempt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to reuse it will fail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 20, 2012, at 6:57 AM, Victor Kocheganov &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an issue with understanding  *ompi_mpi_init() *logic. Could you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please tell me if you have any guesses about following behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if I understand ringh, there is a block in *ompi_mpi_init() *function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for exchanging procs information between processes (denote this block
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'modex'):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     coll-&gt;id = orte_process_info.peer_modex;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(coll))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         error = &quot;orte_grpcomm_modex failed&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         goto error;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* wait for modex to complete - this may be moved anywhere in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      * so long as it occurs prior to calling a function that needs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      * the modex info!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and several instructions after this there is a block for processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; synchronization (denote this block 'barrier'):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     coll = OBJ_NEW(orte_grpcomm_collective_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     coll-&gt;id = orte_process_info.peer_init_barrier;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(coll))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         error = &quot;orte_grpcomm_barrier failed&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         goto error;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* wait for barrier to complete */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     while (coll-&gt;active) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         opal_progress();  /* block in progress pending events */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OBJ_RELEASE(coll);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So,* *initially* **ompi_mpi_init()* has following structure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'modex' block;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I made several experiments with this code and the following one is of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interest: if I add sequence of two additional blocks, 'barrier' and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'modex', right after 'modex' block, then* **ompi_mpi_init() *hangs in *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_progress()* of the last 'modex' block.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'modex' block;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'modex' block; &lt;- hangs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'barrier' block;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Victor Kocheganov.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11866/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11867.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11865.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>In reply to:</strong> <a href="11865.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11867.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11867.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
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
