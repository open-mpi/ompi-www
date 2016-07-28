<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 12:32:49 2014" -->
<!-- isoreceived="20140716163249" -->
<!-- sent="Wed, 16 Jul 2014 09:31:58 -0700" -->
<!-- isosent="20140716163158" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="3E49929B-46B1-4F81-B47A-5AF6C50935B3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CF883908-4898-4574-95BE-F654CD9F0E2C_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 12:31:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15175.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal"</a>
<li><strong>Previous message:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15176.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15176.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nobody was &quot;against&quot; retaining it. The issue is that &quot;-x&quot; isn't an MCA parameter, nor does it get translated to one under the covers. So the problem was one of how to insert it into the typical MCA param precedence chain.
<br>
<p>If we don't try to do that, but instead simply error out if both -x and the MCA param are present, then that resolves the problem. However, and this is a big &quot;but&quot;, remember that there is no way to &quot;unset&quot; an MCA param. So if someone puts the mca_base_env_list param into the default MCA param file, then there is no way a user can put -x on the cmd line because the conflict will be detected - and they can't turn &quot;off&quot; the MCA param to resolve it.
<br>
<p>The inconsistent behavior may prove highly annoying in the user community, but I don't know how widely used this feature will be.
<br>
<p><p>On Jul 16, 2014, at 9:22 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 15, 2014, at 2:03 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; these are two separate issues:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. -x var=val (or -mca opal_base_envlist var=val) will work in the same way
</span><br>
<span class="quotelev2">&gt;&gt; opal_base_envlist does the same as &quot;-x&quot; and can be used in the very same fashion as -x
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. When list of vars is passed with help of opal_base_envlist, the escaping is possible but escaped char should differ from delimiter char.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would be my preference (use something like &quot;\&quot; as the escape char).  Though we could always go with a scheme where a doubled delimiter means &quot;literal delimiter&quot;, sort of like &quot;$$&quot; in a Makefile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think -x should stay as shotrt-form alias for -mca opal_base_envlist var=val and -mca opal_base_envlist var.
</span><br>
<span class="quotelev2">&gt;&gt; on dev meeting it was decided to deprecate it as some point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we revisit this decision?  Mike and I both seem to be in favor of retaining &quot;-x&quot;, at least for non-conflicting uses.  Would someone who is against retaining &quot;-x&quot; please speak up in favor of that position?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, Mike, I just looked again at the code and I don't think it is robustly checking for conflict cases.  It's possible to do this and you won't get an error with the current code, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca mca_base_env_list foo=bar -x foo=baz ...
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this code, which only looks at the environment when looking for &quot;mca_base_env_list&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/tools/orterun/orterun.c	Tue Jul  8 20:10:04 2014	(r32162)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/tools/orterun/orterun.c	2014-07-08 20:38:25 EDT (Tue, 08 Jul 2014)	(r32163)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1722,6 +1722,13 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* Did the user request to export any environment variables on the cmd line? */
</span><br>
<span class="quotelev2">&gt;&gt;     if (opal_cmd_line_is_taken(&amp;cmd_line, &quot;x&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        char* env_set_flag = getenv(&quot;OMPI_MCA_mca_base_env_list&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +        if (NULL != env_set_flag) {
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_show_help(&quot;help-orterun.txt&quot;, &quot;orterun:conflict-env-set&quot;, false);
</span><br>
<span class="quotelev2">&gt;&gt; +            return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev2">&gt;&gt; +        } else {
</span><br>
<span class="quotelev2">&gt;&gt; +            orte_show_help(&quot;help-orterun.txt&quot;, &quot;orterun:deprecated-env-set&quot;, false);
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;         j = opal_cmd_line_get_ninsts(&amp;cmd_line, &quot;x&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         for (i = 0; i &lt; j; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt;             param = opal_cmd_line_get_param(&amp;cmd_line, &quot;x&quot;, i, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15173.php">http://www.open-mpi.org/community/lists/devel/2014/07/15173.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15175.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal"</a>
<li><strong>Previous message:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15176.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15176.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
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
