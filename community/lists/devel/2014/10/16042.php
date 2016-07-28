<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 13:14:26 2014" -->
<!-- isoreceived="20141013171426" -->
<!-- sent="Mon, 13 Oct 2014 10:14:21 -0700" -->
<!-- isosent="20141013171421" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9" -->
<!-- id="3A6D178F-EF92-4A96-9A32-72CED3636F37_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="04E9D769-7DBD-474C-98C4-3FFA31D0EB83_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-13 13:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16043.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-78-g6372ac9"</a>
<li><strong>Previous message:</strong> <a href="16041.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<li><strong>In reply to:</strong> <a href="16041.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16043.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-78-g6372ac9"</a>
<li><strong>Reply:</strong> <a href="16043.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-78-g6372ac9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done
<br>
<p>On Oct 13, 2014, at 2:40 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good catch. Can you file a pr for the v1.8 branch?  You can say I reviewed. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 13, 2014, at 4:35 AM, &quot;gitdub_at_[hidden]&quot; &lt;gitdub_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt;&gt;      via  6372ac926c6a6622222915ac4f9301021f731c35 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;     from  a215a4831dfae9dd0a3fee7b31ee784d4e5394a4 (commit)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/6372ac926c6a6622222915ac4f9301021f731c35">https://github.com/open-mpi/ompi/commit/6372ac926c6a6622222915ac4f9301021f731c35</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; commit 6372ac926c6a6622222915ac4f9301021f731c35
</span><br>
<span class="quotelev2">&gt;&gt; Author: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Mon Oct 13 11:33:26 2014 +0300
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   tools: fix cli args parsing
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   No need to &quot;shift&quot; if argument does not expect parameter on the command line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/contrib/dist/make_dist_tarball b/contrib/dist/make_dist_tarball
</span><br>
<span class="quotelev2">&gt;&gt; index de09d26..783709d 100755
</span><br>
<span class="quotelev2">&gt;&gt; --- a/contrib/dist/make_dist_tarball
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/contrib/dist/make_dist_tarball
</span><br>
<span class="quotelev2">&gt;&gt; @@ -72,7 +72,7 @@ while test &quot;$1&quot; != &quot;&quot;; do
</span><br>
<span class="quotelev2">&gt;&gt;        --no-ompi) want_ompi=0 ;;
</span><br>
<span class="quotelev2">&gt;&gt;        --autogen-args) autogen_args=$2; shift ;;
</span><br>
<span class="quotelev2">&gt;&gt;        --distdir) distdir=$2; shift ;;
</span><br>
<span class="quotelev2">&gt;&gt; -        --dirtyok) dirty_ok=1; shift ;;
</span><br>
<span class="quotelev2">&gt;&gt; +        --dirtyok) dirty_ok=1 ;;
</span><br>
<span class="quotelev2">&gt;&gt;        --verok) gnu_version_ignore=1;;
</span><br>
<span class="quotelev2">&gt;&gt;        --no-git-update) git_update=0;;
</span><br>
<span class="quotelev2">&gt;&gt;        *)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt;&gt; contrib/dist/make_dist_tarball | 2 +-
</span><br>
<span class="quotelev2">&gt;&gt; 1 file changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16041.php">http://www.open-mpi.org/community/lists/devel/2014/10/16041.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16043.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-78-g6372ac9"</a>
<li><strong>Previous message:</strong> <a href="16041.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<li><strong>In reply to:</strong> <a href="16041.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16043.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-78-g6372ac9"</a>
<li><strong>Reply:</strong> <a href="16043.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-78-g6372ac9"</a>
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
