<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 12:22:27 2014" -->
<!-- isoreceived="20140716162227" -->
<!-- sent="Wed, 16 Jul 2014 16:22:24 +0000" -->
<!-- isosent="20140716162224" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="CF883908-4898-4574-95BE-F654CD9F0E2C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyZFON2b-SFCcPaRGozKR_Or_CBcWmaW9=BRUdbF-FyH8g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 12:22:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15172.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15179.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15, 2014, at 2:03 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; these are two separate issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. -x var=val (or -mca opal_base_envlist var=val) will work in the same way
</span><br>
<span class="quotelev1">&gt; opal_base_envlist does the same as &quot;-x&quot; and can be used in the very same fashion as -x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. When list of vars is passed with help of opal_base_envlist, the escaping is possible but escaped char should differ from delimiter char.
</span><br>
<p>That would be my preference (use something like &quot;\&quot; as the escape char).  Though we could always go with a scheme where a doubled delimiter means &quot;literal delimiter&quot;, sort of like &quot;$$&quot; in a Makefile.
<br>
<p><span class="quotelev1">&gt; I think -x should stay as shotrt-form alias for -mca opal_base_envlist var=val and -mca opal_base_envlist var.
</span><br>
<span class="quotelev1">&gt; on dev meeting it was decided to deprecate it as some point.
</span><br>
<p>Can we revisit this decision?  Mike and I both seem to be in favor of retaining &quot;-x&quot;, at least for non-conflicting uses.  Would someone who is against retaining &quot;-x&quot; please speak up in favor of that position?
<br>
<p>Also, Mike, I just looked again at the code and I don't think it is robustly checking for conflict cases.  It's possible to do this and you won't get an error with the current code, right?
<br>
<p>----8&lt;----
<br>
$ mpirun -mca mca_base_env_list foo=bar -x foo=baz ...
<br>
----8&lt;----
<br>
<p>See this code, which only looks at the environment when looking for &quot;mca_base_env_list&quot;:
<br>
<p><span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/orterun.c	Tue Jul  8 20:10:04 2014	(r32162)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/orterun.c	2014-07-08 20:38:25 EDT (Tue, 08 Jul 2014)	(r32163)
</span><br>
<span class="quotelev1">&gt; @@ -1722,6 +1722,13 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* Did the user request to export any environment variables on the cmd line? */
</span><br>
<span class="quotelev1">&gt;      if (opal_cmd_line_is_taken(&amp;cmd_line, &quot;x&quot;)) {
</span><br>
<span class="quotelev1">&gt; +        char* env_set_flag = getenv(&quot;OMPI_MCA_mca_base_env_list&quot;);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != env_set_flag) {
</span><br>
<span class="quotelev1">&gt; +            orte_show_help(&quot;help-orterun.txt&quot;, &quot;orterun:conflict-env-set&quot;, false);
</span><br>
<span class="quotelev1">&gt; +            return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            orte_show_help(&quot;help-orterun.txt&quot;, &quot;orterun:deprecated-env-set&quot;, false);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;          j = opal_cmd_line_get_ninsts(&amp;cmd_line, &quot;x&quot;);
</span><br>
<span class="quotelev1">&gt;          for (i = 0; i &lt; j; ++i) {
</span><br>
<span class="quotelev1">&gt;              param = opal_cmd_line_get_param(&amp;cmd_line, &quot;x&quot;, i, 0);
</span><br>
<p><p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15172.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15179.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
