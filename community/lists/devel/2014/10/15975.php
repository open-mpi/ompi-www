<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-9-g3263f72";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 12:17:19 2014" -->
<!-- isoreceived="20141002161719" -->
<!-- sent="Thu, 2 Oct 2014 09:17:16 -0700" -->
<!-- isosent="20141002161716" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-9-g3263f72" -->
<!-- id="2756E664-E09E-4ED5-93A4-DC488BA0D73F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="06BB5E94-CAEE-4328-8482-7C611B416E6B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-9-g3263f72<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 12:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15976.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-9-g3263f72"</a>
<li><strong>Previous message:</strong> <a href="15974.php">Ralph Castain: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15972.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-9-g3263f72"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15976.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-9-g3263f72"</a>
<li><strong>Reply:</strong> <a href="15976.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-9-g3263f72"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2014, at 9:13 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 2, 2014, at 10:38 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt;      via  3263f721b6a21966a1c1eea0fdac2a558a15db06 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;     from  f21c349bcb3f7c322805d505484951642d1c7965 (commit)
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
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/3263f721b6a21966a1c1eea0fdac2a558a15db06">https://github.com/open-mpi/ompi/commit/3263f721b6a21966a1c1eea0fdac2a558a15db06</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; commit 3263f721b6a21966a1c1eea0fdac2a558a15db06
</span><br>
<span class="quotelev2">&gt;&gt; Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Thu Oct 2 08:37:18 2014 -0700
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Strip crlf line endings
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/contrib/vt/vt/extlib/otf/otf_vc08.sln b/ompi/contrib/vt/vt/extlib/otf/otf_vc08.sln
</span><br>
<span class="quotelev2">&gt;&gt; index 38498d6..7e887fc 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/contrib/vt/vt/extlib/otf/otf_vc08.sln
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/contrib/vt/vt/extlib/otf/otf_vc08.sln
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Isn't this file a Windows-specific file that probably should still have CRLF line endings?
</span><br>
<p>No idea, but we don't support Windows any more, so who cares?
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15972.php">http://www.open-mpi.org/community/lists/devel/2014/10/15972.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15976.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-9-g3263f72"</a>
<li><strong>Previous message:</strong> <a href="15974.php">Ralph Castain: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15972.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-9-g3263f72"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15976.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-9-g3263f72"</a>
<li><strong>Reply:</strong> <a href="15976.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-9-g3263f72"</a>
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
