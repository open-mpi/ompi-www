<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 13:27:27 2014" -->
<!-- isoreceived="20140716172727" -->
<!-- sent="Wed, 16 Jul 2014 13:27:27 -0400" -->
<!-- isosent="20140716172727" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="CAG4F6z_T5OFW+Ej_pQ4WH+LY1njQDNGdSeKKcVsUimv7pQor=w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 13:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15180.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15178.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15180.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15180.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>Your example will error out. If someone tries to set envars with both
<br>
mechanism, the job fails. The decision to do so was also made at the Dev
<br>
meeting and is so that we don't have to do this kind of checking.
<br>
<p>Josh
<br>
<p><p>On Wed, Jul 16, 2014 at 12:22 PM, Dave Goodell (dgoodell) &lt;
<br>
dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 15, 2014, at 2:03 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; these are two separate issues:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. -x var=val (or -mca opal_base_envlist var=val) will work in the same
</span><br>
<span class="quotelev1">&gt; way
</span><br>
<span class="quotelev2">&gt; &gt; opal_base_envlist does the same as &quot;-x&quot; and can be used in the very same
</span><br>
<span class="quotelev1">&gt; fashion as -x
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. When list of vars is passed with help of opal_base_envlist, the
</span><br>
<span class="quotelev1">&gt; escaping is possible but escaped char should differ from delimiter char.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would be my preference (use something like &quot;\&quot; as the escape char).
</span><br>
<span class="quotelev1">&gt;  Though we could always go with a scheme where a doubled delimiter means
</span><br>
<span class="quotelev1">&gt; &quot;literal delimiter&quot;, sort of like &quot;$$&quot; in a Makefile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think -x should stay as shotrt-form alias for -mca opal_base_envlist
</span><br>
<span class="quotelev1">&gt; var=val and -mca opal_base_envlist var.
</span><br>
<span class="quotelev2">&gt; &gt; on dev meeting it was decided to deprecate it as some point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we revisit this decision?  Mike and I both seem to be in favor of
</span><br>
<span class="quotelev1">&gt; retaining &quot;-x&quot;, at least for non-conflicting uses.  Would someone who is
</span><br>
<span class="quotelev1">&gt; against retaining &quot;-x&quot; please speak up in favor of that position?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, Mike, I just looked again at the code and I don't think it is
</span><br>
<span class="quotelev1">&gt; robustly checking for conflict cases.  It's possible to do this and you
</span><br>
<span class="quotelev1">&gt; won't get an error with the current code, right?
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
<span class="quotelev1">&gt; See this code, which only looks at the environment when looking for
</span><br>
<span class="quotelev1">&gt; &quot;mca_base_env_list&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/tools/orterun/orterun.c        Tue Jul  8 20:10:04 2014
</span><br>
<span class="quotelev1">&gt;      (r32162)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/tools/orterun/orterun.c        2014-07-08 20:38:25 EDT
</span><br>
<span class="quotelev1">&gt; (Tue, 08 Jul 2014)      (r32163)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1722,6 +1722,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      /* Did the user request to export any environment variables on the
</span><br>
<span class="quotelev1">&gt; cmd line? */
</span><br>
<span class="quotelev2">&gt; &gt;      if (opal_cmd_line_is_taken(&amp;cmd_line, &quot;x&quot;)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        char* env_set_flag = getenv(&quot;OMPI_MCA_mca_base_env_list&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        if (NULL != env_set_flag) {
</span><br>
<span class="quotelev2">&gt; &gt; +            orte_show_help(&quot;help-orterun.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;orterun:conflict-env-set&quot;, false);
</span><br>
<span class="quotelev2">&gt; &gt; +            return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev2">&gt; &gt; +        } else {
</span><br>
<span class="quotelev2">&gt; &gt; +            orte_show_help(&quot;help-orterun.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;orterun:deprecated-env-set&quot;, false);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt;          j = opal_cmd_line_get_ninsts(&amp;cmd_line, &quot;x&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;          for (i = 0; i &lt; j; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt;              param = opal_cmd_line_get_param(&amp;cmd_line, &quot;x&quot;, i, 0);
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15173.php">http://www.open-mpi.org/community/lists/devel/2014/07/15173.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15179/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15180.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15178.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15180.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15180.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
