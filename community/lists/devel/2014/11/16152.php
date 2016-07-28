<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-206-g87dffac";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 11:54:43 2014" -->
<!-- isoreceived="20141103165443" -->
<!-- sent="Mon, 3 Nov 2014 16:54:41 +0000" -->
<!-- isosent="20141103165441" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-206-g87dffac" -->
<!-- id="D779A048-7DA7-4013-89BC-957E54CE08BC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="255e4555a496427b9e6dae1f77a7bcaf_at_DBXPR05MB046.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-206-g87dffac<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 11:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
<li><strong>Previous message:</strong> <a href="16151.php">Ralph Castain: "[OMPI devel] OMPI 1.8.4rc1 issues"</a>
<li><strong>In reply to:</strong> <a href="16150.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please don't try to amend commits that you have pushed to a public tree.  That can really screw up people who have already pulled your previous commit.
<br>
<p>Rule of thumb: never, never, never change the history of a public tree.
<br>
<p>The *ONE* exception to that is that you can change the history of the branch for an unmerged github pull request, because, by definition, your commits are not in an authoritative upstream tree yet.  E.g., if you open a PR, get some feedback, then you make some changes to the commits (possibly including changing history, like squashing multiple commits down into one), and [force] push the changes back to your topic branch on that PR.
<br>
<p>Make sense?
<br>
<p><p><p>On Nov 3, 2014, at 11:50 AM, Alexander Mikheev &lt;alexm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is --amend of my previous commit.  When I tried to push my amended commit, the merge was required. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Dave Goodell (dgoodell) [mailto:dgoodell_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, November 03, 2014 6:47 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Alexander Mikheev
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI commits] Git: open-mpi/ompi branch master updated.
</span><br>
<span class="quotelev2">&gt;&gt; dev-206-g87dffac
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Alex,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why did you push this &quot;OSHMEM: spml ikrit...&quot; commit twice?  I see it here
</span><br>
<span class="quotelev2">&gt;&gt; (together with an undesirable merge-of-master commit) and also as
</span><br>
<span class="quotelev2">&gt;&gt; 065dc9b4.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2014, at 2:03 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is an automated email from the git hooks/post-receive script. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was generated because a ref change was pushed to the repository
</span><br>
<span class="quotelev3">&gt;&gt;&gt; containing the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      via  87dffacc56b4ebcecaa2e65e19c2f813d2a5d078 (commit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      via  e1cf6f37baf2b6240ab3aa3a219b8856cfa2caf4 (commit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     from  065dc9b4deec9cd9500f2fdc6bb53bbf58a9c2f6 (commit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Those revisions listed above that are new to this repository have not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appeared on any other notification email; so we list those revisions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in full, below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open">https://github.com/open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi/ompi/commit/87dffacc56b4ebcecaa2e65e19c2f8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 13d2a5d078
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit 87dffacc56b4ebcecaa2e65e19c2f813d2a5d078
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Merge: e1cf6f3 065dc9b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: Alex Mikheev &lt;alexm_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date:   Mon Nov 3 10:02:29 2014 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Merge branch 'master' of github.com:open-mpi/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Conflicts:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   	oshmem/mca/spml/ikrit/spml_ikrit_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open">https://github.com/open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi/ompi/commit/e1cf6f37baf2b6240ab3aa3a219b88
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 56cfa2caf4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit e1cf6f37baf2b6240ab3aa3a219b8856cfa2caf4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: Alex Mikheev &lt;alexm_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date:   Sun Nov 2 12:41:20 2014 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OSHMEM: spml ikrit: disable rdmap op DCI pool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Instead use single pool for both rdma and send receive ops.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/oshmem/mca/spml/ikrit/spml_ikrit_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b/oshmem/mca/spml/ikrit/spml_ikrit_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 2079640..e021666 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/oshmem/mca/spml/ikrit/spml_ikrit_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/oshmem/mca/spml/ikrit/spml_ikrit_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -92,6 +92,12 @@ static inline int set_mxm_tls() {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char *tls;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* disable dci pull for rdma ops. Use single pool.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +     * Pool size is controlled by MXM_DC_QP_LIMIT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +     * variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +     */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    setenv(&quot;MXM_OSHMEM_DC_RNDV_QP_LIMIT&quot;, &quot;0&quot;, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    tls = getenv(&quot;MXM_OSHMEM_TLS&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (NULL != tls) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        return check_mxm_tls(&quot;MXM_OSHMEM_TLS&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oshmem/mca/spml/ikrit/spml_ikrit_component.c | 2 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 file changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16150.php">http://www.open-mpi.org/community/lists/devel/2014/11/16150.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
<li><strong>Previous message:</strong> <a href="16151.php">Ralph Castain: "[OMPI devel] OMPI 1.8.4rc1 issues"</a>
<li><strong>In reply to:</strong> <a href="16150.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16153.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
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
