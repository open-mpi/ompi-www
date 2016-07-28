<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 12:04:04 2009" -->
<!-- isoreceived="20090622160404" -->
<!-- sent="Mon, 22 Jun 2009 10:03:58 -0600" -->
<!-- isosent="20090622160358" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480" -->
<!-- id="71d2d8cc0906220903t6aee3c94g2949deeabac5ea0f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A3FAA1E.2060809_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 12:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6301.php">N.M. Maclaren: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6299.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6299.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Reply:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, but look at orte/mca/plm/rsh/plm_rsh_module.c:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;/* ensure that only the ssh plm is selected on the remote daemon */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;var = mca_base_param_environ_variable(&quot;plm&quot;, NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_setenv(var, &quot;rsh&quot;, true, &amp;env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(var);
<br>
<p>This is done in &quot;ssh_child&quot;, right before we fork_exec the ssh command to
<br>
launch the remote daemon. This is why slave spawn works, for example.
<br>
<p>I agree that tree_spawn doesn't seem to work right now, but it is not due to
<br>
the plm not being selected. There are other factors involved.
<br>
<p>Ralph
<br>
<p><p><p>On Mon, Jun 22, 2009 at 9:58 AM, Iain Bason &lt;Iain.Bason_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry, but this change is incorrect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you look in orte/mca/ess/base/ess_base_std_orted.c, you will see that
</span><br>
<span class="quotelev2">&gt;&gt; -all- orteds, regardless of how they are launched, open and select the PLM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe you are mistaken.  Look in plm_base_launch_support.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           /* The daemon will attempt to open the PLM on the remote
</span><br>
<span class="quotelev1">&gt;            * end. Only a few environments allow this, so the daemon
</span><br>
<span class="quotelev1">&gt;            * only opens the PLM -if- it is specifically told to do
</span><br>
<span class="quotelev1">&gt;            * so by giving it a specific PLM module. To ensure we avoid
</span><br>
<span class="quotelev1">&gt;            * confusion, do not include any directives here
</span><br>
<span class="quotelev1">&gt;            */
</span><br>
<span class="quotelev1">&gt;           if (0 == strcmp(orted_cmd_line[i+1], &quot;plm&quot;)) {
</span><br>
<span class="quotelev1">&gt;               continue;
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That code strips out anything like &quot;-mca plm rsh&quot; from the command
</span><br>
<span class="quotelev1">&gt; line passed to a remote daemon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meanwhile, over in ess_base_std_orted.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /* some environments allow remote launches - e.g., ssh - so
</span><br>
<span class="quotelev1">&gt;    * open the PLM and select something -only- if we are given
</span><br>
<span class="quotelev1">&gt;    * a specific module to use
</span><br>
<span class="quotelev1">&gt;    */
</span><br>
<span class="quotelev1">&gt;   mca_base_param_reg_string_name(&quot;plm&quot;, NULL,
</span><br>
<span class="quotelev1">&gt;                                  &quot;Which plm component to use (empty =
</span><br>
<span class="quotelev1">&gt; none)&quot;,
</span><br>
<span class="quotelev1">&gt;                                  false, false,
</span><br>
<span class="quotelev1">&gt;                                  NULL, &amp;plm_to_use);
</span><br>
<span class="quotelev1">&gt;     if (NULL == plm_to_use) {
</span><br>
<span class="quotelev1">&gt;       plm_in_use = false;
</span><br>
<span class="quotelev1">&gt;   } else {
</span><br>
<span class="quotelev1">&gt;       plm_in_use = true;
</span><br>
<span class="quotelev1">&gt;             if (ORTE_SUCCESS != (ret = orte_plm_base_open())) {
</span><br>
<span class="quotelev1">&gt;           ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;           error = &quot;orte_plm_base_open&quot;;
</span><br>
<span class="quotelev1">&gt;           goto error;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;             if (ORTE_SUCCESS != (ret = orte_plm_base_select())) {
</span><br>
<span class="quotelev1">&gt;           ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;           error = &quot;orte_plm_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;           goto error;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So a PLM is loaded only if specified with &quot;-mca plm foo&quot;, but that -mca
</span><br>
<span class="quotelev1">&gt; flag is stripped out when launching the remote daemon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also ran into this issue with tree spawning.  (I didn't putback a fix
</span><br>
<span class="quotelev1">&gt; because
</span><br>
<span class="quotelev1">&gt; I couldn't get tree spawning actually to improve performance.  My fix was
</span><br>
<span class="quotelev1">&gt; not to strip out the &quot;-mca plm foo&quot; parameters if tree spawning had been
</span><br>
<span class="quotelev1">&gt; requested.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6301.php">N.M. Maclaren: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6299.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6299.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Reply:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
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
