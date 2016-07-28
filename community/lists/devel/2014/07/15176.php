<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 12:57:54 2014" -->
<!-- isoreceived="20140716165754" -->
<!-- sent="Wed, 16 Jul 2014 16:57:38 +0000" -->
<!-- isosent="20140716165738" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun" -->
<!-- id="DF43C29A-B306-4646-882E-C6B7DC4ABC55_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3E49929B-46B1-4F81-B47A-5AF6C50935B3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 12:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15175.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal"</a>
<li><strong>In reply to:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2014, at 11:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nobody was &quot;against&quot; retaining it. The issue is that &quot;-x&quot; isn't an MCA parameter, nor does it get translated to one under the covers. So the problem was one of how to insert it into the typical MCA param precedence chain.
</span><br>
<p>I understand the combination of the two features is clunky and could lead to odd corner cases, but the &quot;-x&quot; argument is a feature I actually use on a fairly regular basis, but I am unlikely to use mca_base_env_list unless given no other choice.  It's just a worse, clunkier interface unless one really needs to set that MCA parameter via environment variable.
<br>
<p>So can we just strike the deprecation warning that is currently issued when &quot;-x&quot; is passed in the absence of &quot;mca_base_env_list&quot;?
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15175.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal"</a>
<li><strong>In reply to:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15177.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
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
