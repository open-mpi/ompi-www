<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 11 16:56:41 2011" -->
<!-- isoreceived="20111011205641" -->
<!-- sent="Tue, 11 Oct 2011 14:56:33 -0600" -->
<!-- isosent="20111011205633" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248" -->
<!-- id="645708CD-F62A-411A-A30B-291F45516A93_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="88B616A5-C3BD-4B4F-BD0E-1BFAE29085E3_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-11 16:56:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9818.php">Rayson Ho: "[OMPI devel] IBM to acquire Platform Computing!"</a>
<li><strong>Previous message:</strong> <a href="9816.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9812.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9821.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248"</a>
<li><strong>Reply:</strong> <a href="9821.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We actually have a number of modules that are allowed to terminate daemons, so it really isn't that big a deal. However, I can agree that this code is unnecessary so long as any code that calls route_lost remembers to also check for daemon termination conditions. I -think- that's the case today, but will check and correct if necessary.
<br>
<p>I'll remove this when I revisit the termination issue in general.
<br>
<p>On Oct 11, 2011, at 11:25 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The second part of this patch is fascinating. Why would a routed be allowed to terminate a daemon? And why such discrimination (in the sense that they are not allowed to shortcut to orte_quit) against all our routed ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/routed/binomial/routed_binomial.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/routed/binomial/routed_binomial.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/routed/binomial/routed_binomial.c	2011-10-10 17:41:49 EDT (Mon, 10 Oct 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -32,6 +32,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/util/nidmap.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/orte_wait.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;orte/runtime/orte_quit.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -830,11 +831,22 @@
</span><br>
<span class="quotelev2">&gt;&gt;             item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev2">&gt;&gt;            child = (orte_routed_tree_t*)item;
</span><br>
<span class="quotelev2">&gt;&gt;            if (child-&gt;vpid == route-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; +                OPAL_OUTPUT_VERBOSE((4, orte_routed_base_output,
</span><br>
<span class="quotelev2">&gt;&gt; +                                     &quot;%s routed_binomial: removing route to child daemon %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; +                                     ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev2">&gt;&gt;                opal_list_remove_item(&amp;my_children, item);
</span><br>
<span class="quotelev2">&gt;&gt;                OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt;&gt;                return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; +        /* if we are the HNP or daemon, AND we are terminating,
</span><br>
<span class="quotelev2">&gt;&gt; +         * then we want to finalize if all our child daemons
</span><br>
<span class="quotelev2">&gt;&gt; +         * have left
</span><br>
<span class="quotelev2">&gt;&gt; +         */
</span><br>
<span class="quotelev2">&gt;&gt; +        if (orte_terminating &amp;&amp; 0 == opal_list_get_size(&amp;my_children)) {
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_quit();
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /* we don't care about this one, so return success */
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9818.php">Rayson Ho: "[OMPI devel] IBM to acquire Platform Computing!"</a>
<li><strong>Previous message:</strong> <a href="9816.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9812.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9821.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248"</a>
<li><strong>Reply:</strong> <a href="9821.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248"</a>
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
