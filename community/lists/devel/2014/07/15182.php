<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 14:44:01 2014" -->
<!-- isoreceived="20140716184401" -->
<!-- sent="Wed, 16 Jul 2014 11:43:10 -0700" -->
<!-- isosent="20140716184310" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="BFCFF304-DDB2-459A-BCCD-A8270C18A95E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="18BD1690-F7B1-478A-855C-3B3343B7D6E5_at_cisco.com" -->
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
<strong>Date:</strong> 2014-07-16 14:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15183.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15184.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15184.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2014, at 11:34 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 16, 2014, at 12:15 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; we have a strong use-case for list of env variables passed as mca params.(it was presented and discussed in the past).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not disputing your use case for &quot;mca_base_env_list&quot;.  I'm only lamenting the crapification of our mpirun user interface.  We had an earlier change along these lines based on similar reasoning: the easy-to-use-and-remember &quot;--pernode N&quot; was replaced with &quot;--map-by ppr:N:node&quot;, which I cannot ever seem to remember.
</span><br>
<p>Same reason, I'm afraid - no way to do the mapping
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; we can rename opal_base_envlist as &quot;-mca x var=val&quot; for consistency.
</span><br>
<span class="quotelev2">&gt;&gt; also, &quot;-x&quot; param now is just an alias for &quot;-mca opal_base_envlist var=val&quot; - so, we can keep it (w/o deprecation warning) as it re-uses same infra.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mike, will you make this change?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15181.php">http://www.open-mpi.org/community/lists/devel/2014/07/15181.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15183.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15184.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15184.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
