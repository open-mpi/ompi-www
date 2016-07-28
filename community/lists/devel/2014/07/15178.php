<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 13:15:43 2014" -->
<!-- isoreceived="20140716171543" -->
<!-- sent="Wed, 16 Jul 2014 20:15:40 +0300" -->
<!-- isosent="20140716171540" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="CAAO1KyYkkSwE1y72Q8ut1H9c-wzERUm1-VKb8Bas5uaj59dHFQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C9AD73AA-08EE-4EC1-90CE-DB6DDECE601C_at_open-mpi.org" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 13:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15179.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
we have a strong use-case for list of env variables passed as mca params.(it
<br>
was presented and discussed in the past).
<br>
<p>we can rename opal_base_envlist as &quot;-mca x var=val&quot; for consistency.
<br>
also, &quot;-x&quot; param now is just an alias for &quot;-mca opal_base_envlist var=val&quot;
<br>
- so, we can keep it (w/o deprecation warning) as it re-uses same infra.
<br>
<p><p><p>On Wed, Jul 16, 2014 at 8:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Don't look at me - I didn't care to begin with as I never use -x and won't
</span><br>
<span class="quotelev1">&gt; be using this param! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point was only that having both is clunky and leads to potential
</span><br>
<span class="quotelev1">&gt; conflict. No good solution, so &lt;shrug&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2014, at 9:57 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 16, 2014, at 11:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nobody was &quot;against&quot; retaining it. The issue is that &quot;-x&quot; isn't an MCA
</span><br>
<span class="quotelev1">&gt; parameter, nor does it get translated to one under the covers. So the
</span><br>
<span class="quotelev1">&gt; problem was one of how to insert it into the typical MCA param precedence
</span><br>
<span class="quotelev1">&gt; chain.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I understand the combination of the two features is clunky and could
</span><br>
<span class="quotelev1">&gt; lead to odd corner cases, but the &quot;-x&quot; argument is a feature I actually use
</span><br>
<span class="quotelev1">&gt; on a fairly regular basis, but I am unlikely to use mca_base_env_list
</span><br>
<span class="quotelev1">&gt; unless given no other choice.  It's just a worse, clunkier interface unless
</span><br>
<span class="quotelev1">&gt; one really needs to set that MCA parameter via environment variable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So can we just strike the deprecation warning that is currently issued
</span><br>
<span class="quotelev1">&gt; when &quot;-x&quot; is passed in the absence of &quot;mca_base_env_list&quot;?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Dave
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15176.php">http://www.open-mpi.org/community/lists/devel/2014/07/15176.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15177.php">http://www.open-mpi.org/community/lists/devel/2014/07/15177.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15179.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
