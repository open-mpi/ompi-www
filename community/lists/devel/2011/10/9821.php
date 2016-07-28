<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 12 13:19:36 2011" -->
<!-- isoreceived="20111012171936" -->
<!-- sent="Wed, 12 Oct 2011 13:19:31 -0400" -->
<!-- isosent="20111012171931" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248" -->
<!-- id="03698B8D-D35C-4A09-9003-A6291513799F_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="645708CD-F62A-411A-A30B-291F45516A93_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-12 13:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9822.php">Bhargava Ramu Kavati: "[OMPI devel] running OpenMPI examples on two hosts"</a>
<li><strong>Previous message:</strong> <a href="9820.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<li><strong>In reply to:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2011, at 16:56 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We actually have a number of modules that are allowed to terminate daemons, so it really isn't that big a deal. However, I can agree that this code is unnecessary so long as any code that calls route_lost remembers to also check for daemon termination conditions. I -think- that's the case today, but will check and correct if necessary.
</span><br>
<p>There are __actually__ 3 modules that use orte_quit outside the error managers. 2 of the references are in the ess, and they are used in cases where everything is broken and the ess can't figure out how to move from there on. The last one is slurm in the termination, so this might also be acceptable.
<br>
<p><span class="quotelev1">&gt; I'll remove this when I revisit the termination issue in general.
</span><br>
<p>I don't think this issue has to be revisited again. Let's leave it the way it was, with was site consistent. In other words not adding extra calls to termination all over the code base. Moreover, in the current design the error managers are the one deciding how to handle error conditions (including losing connections to other daemons), which means nobody has to check anything related to daemon termination conditions after calling route_lost as the call will end in the error manager at one point.
<br>
<p>&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2011, at 11:25 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The second part of this patch is fascinating. Why would a routed be allowed to terminate a daemon? And why such discrimination (in the sense that they are not allowed to shortcut to orte_quit) against all our routed ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/mca/routed/binomial/routed_binomial.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/mca/routed/binomial/routed_binomial.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/mca/routed/binomial/routed_binomial.c	2011-10-10 17:41:49 EDT (Mon, 10 Oct 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -32,6 +32,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/util/nidmap.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/runtime/orte_globals.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/runtime/orte_wait.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &quot;orte/runtime/orte_quit.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/runtime/runtime.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/runtime/data_type_support/orte_dt_support.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -830,11 +831,22 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           child = (orte_routed_tree_t*)item;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           if (child-&gt;vpid == route-&gt;vpid) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                OPAL_OUTPUT_VERBOSE((4, orte_routed_base_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                     &quot;%s routed_binomial: removing route to child daemon %s&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                     ORTE_NAME_PRINT(route)));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               opal_list_remove_item(&amp;my_children, item);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               OBJ_RELEASE(item);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* if we are the HNP or daemon, AND we are terminating,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +         * then we want to finalize if all our child daemons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +         * have left
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +         */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (orte_terminating &amp;&amp; 0 == opal_list_get_size(&amp;my_children)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            orte_quit();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* we don't care about this one, so return success */
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
<li><strong>Next message:</strong> <a href="9822.php">Bhargava Ramu Kavati: "[OMPI devel] running OpenMPI examples on two hosts"</a>
<li><strong>Previous message:</strong> <a href="9820.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<li><strong>In reply to:</strong> <a href="9817.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r25248"</a>
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
