<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 11 13:25:45 2011" -->
<!-- isoreceived="20111011172545" -->
<!-- sent="Tue, 11 Oct 2011 13:25:38 -0400" -->
<!-- isosent="20111011172538" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248" -->
<!-- id="88B616A5-C3BD-4B4F-BD0E-1BFAE29085E3_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201110102141.p9ALfogt009750_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-11 13:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9813.php">Bhargava Ramu Kavati: "[OMPI devel] Regarding OpenMPI example apps"</a>
<li><strong>Previous message:</strong> <a href="9811.php">George Bosilca: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
<li><strong>Reply:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The second part of this patch is fascinating. Why would a routed be allowed to terminate a daemon? And why such discrimination (in the sense that they are not allowed to shortcut to orte_quit) against all our routed ?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/binomial/routed_binomial.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/binomial/routed_binomial.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/binomial/routed_binomial.c	2011-10-10 17:41:49 EDT (Mon, 10 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -32,6 +32,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/nidmap.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/runtime/orte_wait.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/runtime/orte_quit.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -830,11 +831,22 @@
</span><br>
<span class="quotelev1">&gt;              item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt;             child = (orte_routed_tree_t*)item;
</span><br>
<span class="quotelev1">&gt;             if (child-&gt;vpid == route-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt; +                OPAL_OUTPUT_VERBOSE((4, orte_routed_base_output,
</span><br>
<span class="quotelev1">&gt; +                                     &quot;%s routed_binomial: removing route to child daemon %s&quot;,
</span><br>
<span class="quotelev1">&gt; +                                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; +                                     ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev1">&gt;                 opal_list_remove_item(&amp;my_children, item);
</span><br>
<span class="quotelev1">&gt;                 OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt;                 return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +        /* if we are the HNP or daemon, AND we are terminating,
</span><br>
<span class="quotelev1">&gt; +         * then we want to finalize if all our child daemons
</span><br>
<span class="quotelev1">&gt; +         * have left
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        if (orte_terminating &amp;&amp; 0 == opal_list_get_size(&amp;my_children)) {
</span><br>
<span class="quotelev1">&gt; +            orte_quit();
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* we don't care about this one, so return success */
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9813.php">Bhargava Ramu Kavati: "[OMPI devel] Regarding OpenMPI example apps"</a>
<li><strong>Previous message:</strong> <a href="9811.php">George Bosilca: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
<li><strong>Reply:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
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
